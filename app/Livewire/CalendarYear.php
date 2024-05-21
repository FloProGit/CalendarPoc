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


    public function mount(){
        $this->calendarYear = $this->getDatesForYear(2023);


//        $this->test = date('j',strtotime('last monday of this year' ,mktime(12, 0, 0, 12, 31, 2023)));

    }
    function getDatesForYear($currentAskedYear) {
        $lastMonday = date('j',strtotime('last monday of this year' ,mktime(12, 0, 0, 12, 31, ($currentAskedYear-1))));
        $start = ($currentAskedYear-1).'-1-1';
        if ($lastMonday > 25){
            $start = ($currentAskedYear-1).'-12-'.$lastMonday;
        }
        $this->test = $start;
        $end = ($currentAskedYear+1).'-01-7';
        // Declare an empty array
        $array = array();

        // Variable that store the date interval
        // of period 1 day
        $interval = new DateInterval('P1D');



        $realEnd = new DateTime($end);
        $realEnd->add($interval);

        $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

        // Use loop to store date into array
        $currentLastMonday = $start;

        foreach($period as $date) {
            $currentMonth = $date->format('n');
            $currentYear = $date->format('Y');
            $array[$currentYear][$currentMonth][] = [$date->format('N'),$date->format('j'),$currentMonth,$currentYear];
        }



        // Return the array elements
        return $array;
    }

    public function render()
    {
        return view('livewire.calendar-year');
    }
}
