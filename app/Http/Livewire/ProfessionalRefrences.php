<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfessionalRefrences extends Component
{

    public $divCount = 1;

    public function addDiv()
    {
        $this->divCount++;
    }

    public function removeDiv()
    {
        if ($this->divCount > 1) {
            $this->divCount--;
        }
    }



    public function render()
    {
        return view('livewire.professional-refrences');
    }
}
