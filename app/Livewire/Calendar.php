<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\Attributes\On;
class Calendar extends Component
{
    public string $view = 'month';

    public array $arrayDate = [1,1,2024];
    public $calendarTitle = '';


    public function updateTimeData($number)
    {
        $currentDate = mktime(12, 0, 0, $this->arrayDate[1], $this->arrayDate[0], $this->arrayDate[2]);
        $timeStampCurrentDate = strtotime(($number>0?'+':'-').'1 '.$this->view,$currentDate);
        $this->arrayDate[0] = intval(date('j',$timeStampCurrentDate));
        $this->arrayDate[1] = intval(date('n',$timeStampCurrentDate));
        $this->arrayDate[2] = intval(date('Y',$timeStampCurrentDate));
        $this->dispatch('change-'.$this->view,$this->arrayDate);
    }
    public function selectionNext()
    {
        $this->updateTimeData(1);
    }
    public function selectionPrevious()
    {
        $this->updateTimeData(-1);
    }
    public function selectionToday()
    {
        //updateTimeData for today
        $this->day = intval(date('j'));
        $this->month = intval(date('n'));
        $this->year = intval(date('Y'));
    }
    public function switchView(string $view)
    {
        $this->view = $view;
    }


    public function render()
    {
        return view('livewire.calendar' );
    }
}
