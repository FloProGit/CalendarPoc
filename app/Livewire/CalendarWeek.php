<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class CalendarWeek extends Component
{
    public $calendarThisWeek =[];
    public int $daySelected ;
    public int $monthSelected ;
    public int $yearSelected;

    public int $currentDate;
    public $testValue ;
    private array $arrayDays = ['', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    public function mount($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
        $this->generateWeek();
    }

    #[On('change-week')]
    public function ChangeWeek($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
        $this->generateWeek();
    }

    public function generateWeek(){
        $this->calendarThisWeek=[];
        $currentTimeStampMonday =  strtotime('monday this week',$this->currentDate);
        $today = date("d/m/Y");
        $this->testValue = intval(date("N",$currentTimeStampMonday));
        $currentDay = $currentTimeStampMonday;
        for ($d = 1; $d <= 7; $d++) {

            $this->calendarThisWeek[] =[
                'day' => $this->arrayDays[intval(date("N",$currentDay))],
                'date' => date("d/m/Y",$currentDay),
                'currentDay' => date("j",$currentDay),
                'today' => ($today === date("d/m/Y",$currentDay))
            ];
            $currentDay = strtotime('+1 day',$currentDay);
        }
    }
    public function render()
    {
        return view('livewire.calendar-week');
    }
}
