<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UserPerfoma extends Component
{
    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $gender;
    public $age;
    public $description;
    public $email;
    public $phone;
    public $registance;
    public $city;
    public $frameworks = [];
    public $cv;
    public $terms;
    public $date_birth;
    public $father_name;
    public $current_address;
    public $mobile_number;
    public $whats_up_no;
    public $pan_no;
    public $permanent_address;
    public $emergency_number_1;
    public $emergency_name_1;
    public $emergency_nambe_1;
    public $emergency_realtion_1;
    public $emergency_number_2;
    public $emergency_name_2;
    public $emergency_realtion_2;
    public $email_id;
    public $whtast_up_number;
    public $adhar_no;

    public $color_name = "blue";
   
    //************************
    public $wrInsitute10;
    public $wrUniversityOne;
    public $wrFromOne;
    public $wrToOne;
    public $wrPersantageGradeOne;
    public $wrSpecilationOne;

    public $totalSteps     = 4;
    // public $currentSteps   = 1;
    public $currentSteps   = 4;

    public function mount(){
        $this->currentSteps = 4;
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteps--;
        if($this->currentSteps < 1){ 
               $this->currentSteps = $this->totalSteps;
        }

    }

    public function increaseValue(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentSteps++;
         if($this->currentSteps > $this->totalSteps){
            $this->currentSteps = $this->totalSteps;
            $this->currentSteps = 1;

         }

    }

   public function validateData(){
     if($this->currentSteps == 1){ 

        $this->validate([
            'first_name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'last_name'  => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'gender'     =>  'required',
            'age'        => 'required|digits:2',
            'mobile_number' => 'required|numeric|regex:/^[6789]\d{9}$/',
            'whats_up_no' => 'required|numeric|regex:/^[6789]\d{9}$/',
            'emergency_number_1' => 'required|numeric|regex:/^[6789]\d{9}$/',
            'emergency_number_2' =>'nullable|numeric|regex:/^[6789]\d{9}$/',
            'adhar_no' => 'required|regex:/^\d{12}$/',
            'pan_no' =>'required|regex:/^[A-Z]{5}\d{4}[A-Z]$/'
        ]);

     }
     elseif($this->currentSteps == 2){
        $this->validate([
            'email'      => 'required|email',
            'phone'      => 'required',
            'registance' => 'required',
            'city'       => 'required'

        ]);

     }
     elseif($this->currentSteps == 5){
        $this->validate([
            'wrInsitute10'     => 'required|email',
            'wrFromOne'        => 'required',
            'wrToOne'          => 'required',
            'wrPersantageGradeOne' => 'required',
            'wrSpecilationOne'     => 'required'

        ]);

     }
     elseif($this->currentSteps == 3){
        $this->validate([
            // 'frameworks' => 'required|array|min:2|max:4'
            'frameworks' => 'required'
        ]);

     }


   }

    public function register(){
        dd("call");
 
    }

    public function render()
    {
        return view('livewire.user-perfoma');
    }
}
