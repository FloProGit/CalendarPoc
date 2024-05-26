<?php

namespace App\Livewire;

use DateInterval;
use DatePeriod;
use DateTime;
use Livewire\Component;
//https://www.geeksforgeeks.org/return-all-dates-between-two-dates-in-an-array-in-php/

class CalendarYear extends Component
{
    public $calendarYear;
    public $test;


    public function mount($arrayDate){
        $this->calendarYear = $this->getDatesForYear($this->yearSelected =$arrayDate[2]);
    }
    function getDatesForYear($currentAskedYear) {
        $lastMonday = date('j',strtotime('last monday of this year' ,mktime(12, 0, 0, 12, 31, ($currentAskedYear-1))));
        $start = ($currentAskedYear).'-1-1';
        if ($lastMonday > 25){
            $start = ($currentAskedYear-1).'-12-'.$lastMonday;
        }
        $end = ($currentAskedYear+1).'-01-7';
        // Declare an empty array
        $array = array();

        // Variable that store the date interval
        // of period 1 day
        $interval = new DateInterval('P1D');



        $realEnd = new DateTime($end);
        $realEnd->add($interval);

        $startWeek = new DateTime($start);

        $CurrentWeek = 1;
        $currentMonth = 1;
        $lastMondayWeek = clone $startWeek;

        for($i=0;$i<12;$i++){
            $first = true;
            $count = 0;
            for($j=0;$j<6;$j++){
                if ($j===0) {
                    $startWeek = clone $lastMondayWeek;
                }
                $endWeek = clone $startWeek;
                $endWeek->modify('+7 day');
                $period = new DatePeriod($startWeek, $interval, $endWeek);

                foreach($period as $date) {
                    $currentMonth = $date->format('n');
                    $currentYear = $date->format('Y');
                    $currentDayWeek =$date->format('w');
                    $array[$i+1][] = [$date->format('N'),$date->format('j'),$currentMonth,$currentYear ];





                    if (intval($currentMonth) > $i+1  ) {
                        if ($j === 5 &&  $date->format('N') === '1')
                        {
                            $lastMondayWeek = clone $startWeek;
                            //valeur test
                            //$array[$i+1][$count][] = true;

                            if(intval($date->format('j') ) > 1)
                            {
                                $lastMondayWeek->modify('-7 day');
                            }
                        }
                        elseif ($j === 5 &&  intval($date->format('N')) < 4 &&  intval($date->format('j'))===1)
                        {
                            $lastMondayWeek = clone $startWeek;
                        }

                    }
                }
                    $startWeek->modify('+7 day');
            }
        }

        // Return the array elements
        return $array;
    }

    public function render()
    {
        return view('livewire.calendar-year');
    }
}
