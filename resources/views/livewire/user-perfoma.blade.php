<div>

    <form wire:submit.prevent="register">
        @if ($currentSteps == 1)
            <div class="step-one">
                <div class="card">
                    <div class="card-header bg-secondary text-white bold">
                        Setp 1/4 -Personal Detail
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mobile Number</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="mobile_number">
                                    <span class="text-danger">
                                        @error('mobile_number')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Whats App No</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="whats_up_no">
                                    <span class="text-danger">
                                        @error('whats_up_no')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="first_name">
                                    <span class="text-danger">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="last_name">
                                    <span class="text-danger">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Aadhar No:</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="date_birth">
                                    <span class="text-danger">
                                        @error('date_birth')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">PAN No:</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="pan_no">
                                    <span class="text-danger">
                                        @error('father_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Data Of Birth</label>
                                    <input id="" class="form-control" type="date" name=""
                                        placeholder="Enter first name" wire:model="date_birth">
                                    <span class="text-danger">
                                        @error('date_birth')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Father's Name</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="father_name">
                                    <span class="text-danger">
                                        @error('father_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Genger</label>
                                    <select name="" id="" class="form-control" wire:model="gender">
                                        <option value="" selected>Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input id="my-input" class="form-control" type="text" name=""
                                        placeholder="enter age" wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Current Address</label>
                            <textarea class="form-control" name="" id="" cols="2" rows="2"
                                wire:model="current_address"></textarea>
                            <span class="text-danger">
                                @error('current_address')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group">
                            <label>Permanent Address (As per Adhar)</label>
                            <textarea class="form-control" name="" id="" cols="2" rows="2"
                                wire:model="permanent_address"></textarea>
                            <span class="text-danger">
                                @error('current_address')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Number 1</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="emergency_name_1">
                                    <span class="text-danger">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Name</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="emergency_nambe_1">
                                    <span class="text-danger">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Relation</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="emergency_realtion_1">
                                    <span class="text-danger">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Number 2</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="emergency_number_2">
                                    <span class="text-danger">
                                        @error('emergency_number_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Name</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="emergency_name_2">
                                    <span class="text-danger">
                                        @error('emergency_name_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Emergency Relation</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="emergency_realtion_2">
                                    <span class="text-danger">
                                        @error('emergency_realtion_2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email ID</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter first name" wire:model="email_id">
                                    <span class="text-danger">
                                        @error('email_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Whats App No</label>
                                    <input id="" class="form-control" type="text" name=""
                                        placeholder="Enter Last name" wire:model="whtast_up_number">
                                    <span class="text-danger">
                                        @error('whtast_up_number')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif

        <!-- step 2 -->

        @if ($currentSteps == 2)
            <div class="step-2">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 2/4 - Education Details</div>
                    <div class="card-body">

                        <div id="educationDetails">
                            <livewire:education-details />
                        </div>

                        <div id="emplyement detail">
                            <livewire:employement-details />
                        </div>
                        <div id="FamilyDetail">
                            <livewire:family-details />
                        </div>
                        <div id="Professional Refrences">
                             <livewire:professional-refrences />
                        </div>

                    </div>
                </div>
            </div>
        @endif



        @if ($currentSteps == 5)
            <div class="step-2">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 2/4 - Education Details</div>
                    <div class="card-body">

                        <div id="educationDetails">
                            <livewire:education-details />
                        </div>

                        <div id="emplyement detail">
                            <livewire:employement-details />
                        </div>
                        <div id="FamilyDetail">
                            <livewire:family-details />
                        </div>
                        <div id="Professional Refrences">
                             <livewire:professional-refrences />
                        </div>

                    </div>
                </div>
            </div>
        @endif

        <!-- step 3 -->

        @if ($currentSteps == 3)
            <div class="step-three">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 3/4 -framworks experience</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores earum, et fuga laboriosam
                        officiis velit enim nihil magnam similique ratione inventore eligendi cupiditate iure voluptates
                        ex blanditiis vel. Labore, enim?

                        <div class="framworks d-flex flex-column align-items-left mt-2">
                            <label for="laravel">
                                <input type="checkbox" name="frameworks[]" id="laravel"
                                    wire:model="frameworks">Laravel
                            </label>

                            <label for="cogniter"><input type="checkbox" name="frameworks[]" id="Cogniter"
                                    wire:model="frameworks">Cogniter</label>

                            <label for="vuejs">
                                <input type="checkbox" name="frameworks[]" id="vuejs"
                                    wire:model="frameworks">vuejs
                            </label>

                            <label for="cakephp">
                                <input type="checkbox" name="frameworks[]" id="CakePhp"
                                    wire:model="frameworks">Cake Php
                            </label>

                        </div>
                        <span class="text-danger">
                            @error('frameworks')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>
            </div>
        @endif


        <!-- step 4 -->
        @if ($currentSteps == 4)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 4/4 - Attachemente</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consectetur sapiente
                        doloremque, neque quo fugit eius accusamus blanditiis quae, dolore excepturi eum quam esse
                        eveniet illo voluptatibus voluptatum. Tempore, quos?
                        <div class="form-group">
                            <label for="CV">CV</label>
                            <input id="my-input" class="form-control" type="file" name=""
                                wire:model="cv">
                            <span class="text-danger">
                                @error('file')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="terms" class="d-block">
                                <input type="checkbox" name="" id="terms" wire:model="terms">You Must
                                agree with our <a href="#">Terms and Conditions</a>
                                <span class="text-danger">
                                    @error('terms')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($currentSteps == 1)
            <div>

            </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentSteps == 2 || $currentSteps == 3 || $currentSteps == 4)
                <buttton type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</buttton>
            @endif

            @if ($currentSteps == 1 || $currentSteps == 2 || $currentSteps == 3)
                <buttton type="button" class="btn btn-sm btn-success" wire:click="increaseValue()">Next</buttton>
            @endif

            @if ($currentSteps == 4)
                <buttton type="submit" class="btn btn-sm btn-primary">Submit</buttton>
            @endif


        </div>



    </form>

</div>
