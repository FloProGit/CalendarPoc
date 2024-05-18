<?php

namespace App\Livewire;

use Livewire\Component;

class CalendarWeek extends Component
{

    public $varTest;

    public $weekSelected = 1;
    public $monthSelected = 1;
    public $yearSelected = 2024;


    public $MonthTitle = '';


    public array $CalendarMonthDays = [];

    private array $arrayDays = ['', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

    public function mount()
    {
        $this->setThisMonth();
    }

    public function ChangeMonth($index)
    {
        $this->monthSelected += $index;
        if ($this->monthSelected > 12) {
            $this->yearSelected += 1;
            $this->monthSelected = 1;
        } else if ($this->monthSelected < 1) {
            $this->yearSelected -= 1;
            $this->monthSelected = 12;
        }
        $this->GenerateMonth();
    }

    public function setThisMonth()
    {
        $this->monthSelected = intval(date('n'));
        $this->yearSelected = intval(date('Y'));
        $this->GenerateMonth();
    }
    public function setThisWeek()
    {
        $this->monthSelected = intval(date('n'));
        $this->yearSelected = intval(date('Y'));
        $this->GenerateMonth();
    }

    public function GenerateMonth()
    {
        $this->CalendarMonthDays = [];
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
        $this->MonthTitle = date('F Y', $firstDayOfMonth);

        //LAST
        $lastDayOfLastMonth = strtotime('last day of Last month');
        $numberOfLastMonth = date('m', $lastDayOfLastMonth);
        $numberYearOfLastMonth = date('Y', $lastDayOfMonth);
        $numberOfDayBefore = intval(date('N', $firstDayOfMonth)) - 1;
        $numberOfLastDay = intval(date('N', $lastDayOfMonth));

        $startCalendarDay = intval($numberOfDayInCurrentMonth) - $numberOfDayBefore;

        $CurrentDayCompare = date('j/m/Y');
//        $this->varTest = json_encode($list);


        for ($i = 1; $i <= $numberOfDayBefore; $i++) {
            $this->CalendarMonthDays[] = ['day' => $this->arrayDays[$i], 'date' => $startCalendarDay + $i . '/' . $numberOfLastMonth . '/' . $numberYearOfLastMonth, 'currentDay' => $startCalendarDay + $i, 'activated' => false];
        }
        for ($i = 1; $i <= $numberOfDayInCurrentMonth; $i++) {
            $iterationDate = $i . '/' . $numberOfCurrentMonth . '/' . $numberYearOfCurrentMonth;
            $this->CalendarMonthDays[] = ['day' => $this->arrayDays[($i % 7) + 1], 'date' => $iterationDate, 'currentDay' => $i, 'activated' => true, 'today' => ($CurrentDayCompare === $iterationDate)];
        }
        for ($i = 1; $i <= 7 - $numberOfLastDay; $i++) {
            $this->CalendarMonthDays[] = ['day' => $this->arrayDays[$i], 'date' => $i . '/' . $numberOfLastMonth . '/' . $numberYearOfLastMonth, 'currentDay' => $i, 'activated' => false];
        }

    }

    public function render()
    {
        return view('livewire.calendar-week');
    }
}
