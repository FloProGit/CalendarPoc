<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\Attributes\On;

class CalendarMonth extends Component
{

    public array $calendarMonthDays;

    public $monthSelected = 1;
    public $yearSelected = 2024;

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];
    public function mount($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
//        $this->setThisDay();
//        $time = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
//        $this->currentDate = new DateTime('2009-09-30 20:24:00');
//        $this->GenerateDay();

        $this->GenerateMonth();
    }






    private array $arrayDays = ['', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];


    #[On('change-month')]
    public function ChangeMonth($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
//        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
//
        $this->GenerateMonth();
    }
    #[On('today-month')]
    public function setThisMonth()
    {
        $this->monthSelected = intval(date('n'));
        $this->yearSelected = intval(date('Y'));
        $this->GenerateMonth();
    }


    public function GenerateMonth()
    {
        $this->calendarMonthDays = [];
        $list = array();
        $month = $this->monthSelected;
        $year = $this->yearSelected;

        for ($d = 1; $d <= 31; $d++) {
            $time = mktime(12, 0, 0, $month, $d, $year);
            if (date('m', $time) == $month)
                $list[] = $time;
        }

        //CURRENT
        $firstDayOfMonth = $list[0];
        $lastDayOfMonth = $list[count($list) - 1];
        $numberOfDayInCurrentMonth = date('j', $lastDayOfMonth);
        $numberOfCurrentMonth = date('m', $lastDayOfMonth);
        $numberYearOfCurrentMonth = date('Y', $lastDayOfMonth);
        //LAST
        $lastDayOfLastMonth = strtotime('last day of Last month');
        $numberOfDayInLastMonth = date('j', $lastDayOfLastMonth);
        $numberOfLastMonth = date('m', $lastDayOfLastMonth);
        $numberYearOfLastMonth = date('Y', $lastDayOfMonth);
        $numberOfDayBefore = intval(date('N', $firstDayOfMonth)) - 1;
        $numberOfLastDay = intval(date('N', $lastDayOfMonth));

        $startCalendarDay = intval($numberOfDayInLastMonth) - $numberOfDayBefore;

        $CurrentDayCompare = date('j/m/Y');
//        $this->varTest = json_encode($list);


        for ($i = 1; $i <= $numberOfDayBefore; $i++) {
            $this->calendarMonthDays[] = ['day' => $this->arrayDays[$i], 'date' => $startCalendarDay + $i . '/' . $numberOfLastMonth . '/' . $numberYearOfLastMonth, 'currentDay' => $startCalendarDay + $i, 'activated' => false];
        }
        for ($i = 1; $i <= $numberOfDayInCurrentMonth; $i++) {
            $iterationDate = $i . '/' . $numberOfCurrentMonth . '/' . $numberYearOfCurrentMonth;
            $this->calendarMonthDays[] = ['day' => $this->arrayDays[($i % 7) ], 'date' => $iterationDate, 'currentDay' => $i, 'activated' => true, 'today' => ($CurrentDayCompare === $iterationDate)];
        }
        for ($i = 1; $i <= 7 - $numberOfLastDay; $i++) {
            $this->calendarMonthDays[] = ['day' => $this->arrayDays[$i], 'date' => $i . '/' . $numberOfLastMonth . '/' . $numberYearOfLastMonth, 'currentDay' => $i, 'activated' => false];
        }

    }

    public function render()
    {
        return view('livewire.calendar-month');
    }
}
