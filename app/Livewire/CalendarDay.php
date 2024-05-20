<?php

namespace App\Livewire;

use DateTime;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class CalendarDay extends Component
{

    public int $daySelected ;
    public int $monthSelected ;
    public int $yearSelected;

    public int $currentDate;

    public function mount($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
    }

    #[On('change-day')]
    public function ChangeDay($arrayDate)
    {
        $this->daySelected =$arrayDate[0];
        $this->monthSelected =$arrayDate[1];
        $this->yearSelected =$arrayDate[2];
        $this->currentDate = mktime(12, 0, 0, $this->monthSelected, $this->daySelected, $this->yearSelected);
    }


    public function render()
    {

        return view('livewire.calendar-day');
    }
}
