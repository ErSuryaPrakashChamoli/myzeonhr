<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EducationDetails extends Component
{


    public $wrInsitute10;
    public $wrUniversityOne;
    public $wrFromOne;
    public $wrToOne;
    public $wrPersantageGradeOne;
    public $wrSpecilationOne;

    public $wrInsitute12;
    public $wrUniversityTwo;
    public $wrFromTwo;
    public $wrToTwo;
    public $wrPersantageGradeTwo;
    public $wrSpecilationTwo;

    public $wrInsituteGra;
    public $wrUniversitythree;
    public $wrFromThree;
    public $wrToThree;
    public $wrPersantageGradeThree;
    public $wrSpecilationThree;

    public $wrInsitutePg;
    public $wrUniversityFour;
    public $wrFromFour;
    public $wrToFour;
    public $wrPersantageGradeFour;
    public $wrSpecilationFour;

    public function mount(){
           
    }
    
    public function render()
    {
        return view('livewire.education-details');
    }
}
