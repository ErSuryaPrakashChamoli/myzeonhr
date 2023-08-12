<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            background-color: #333;
            max-width: 1000px;
            /* Adjust container width as needed */
            margin-top: 50px;
            color: #fff;
            font-family: montserrat, Sans-Serif;
            font-weight: 800px;
            line-height: 30px;
        }

        .form-control {
            color: #333;
            /* Set input text color to white */
            height: calc(2.3em + 0.75rem + 0px);
        }

        .invalid-feedback {
            color: red;
            /* Set error message color to red */
        }

        /* Hide date of birth placeholder text */
        input[type="date"]::before {
            color: transparent !important;
            content: attr(placeholder);
        }

        input[type="date"]:focus::before {
            content: "" !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <form id="NewForm" >
            <!-- ... (your existing form fields) ... -->
            <input type="hidden" value="12345678" name="client_order_id">
            <input type="hidden" name="post_id" value="5630">

            <!-- Add other hidden input fields here -->

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="firstNameInput">First Name</label>
                    <input type="text" name="first_name" id="firstName" class="form-control" placeholder="First Name">
                    <span id="firstNameError" class="error-message"></span>

                </div>

                <div class="form-group col-md-4">
                    <label for="middleNameInput">Middle Name</label>
                    <input type="text" name="middle_name" id="middleName" class="form-control" placeholder="Middle Name">
                    <span id="middleNameError" class="error-message"></span>
                </div>

                <div class="form-group col-md-4">
                    <label for="lastNameInput">Last Name</label>
                    <input type="text" name="last_name" id="lastName" class="form-control" placeholder="Last Name">
                    <span id="lastNameError" class="error-message"></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="panCardInput">PAN Card Number</label>
                    <input type="text" class="form-control" id="panCard" name="pancard" placeholder="Enter PAN Card Number" onfocus="this.placeholder=''" onblur="if(this.value==''){this.placeholder='Enter PAN Card Number'}">
                    <span id="panCardError" class="error-message"></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="dobInput">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="date_of_birth" required placeholder=" ">
                    <span id="dobError" class="error-message"></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="emailInput">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    <span id="emailError" class="error-message"></span>
                </div>


                <div class="form-group col-md-6">
                    <label for="mobileInput">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile_number" placeholder="Mobile Number">
                    <span id="mobileError" class="error-message"></span>
                </div>

                <!-- Add other form fields here -->

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="consent" id="consentCheckbox" class="form-check-input">
                        <label class="form-check-label" for="consentCheckbox">By submitting, I provide my consent to retrieve my Credit Information including CIBIL, to check eligibility for this application, I understand that this may impact my credit score</label>
                        <span id="consentError" class="error-message"></span>
                    </div>
                </div>

                <!-- <button type="submit" onsubmit="submitForm()" class="btn btn-primary">Submit</button> -->
                <button type="button" class="btn btn-primary" id="btnSumbit">Submit</button>

        </form>



        <div id="successMessage" style="display: none; color: #F8981C;"></div>



        <script>

            $(document).ready(function() {
                $("#btnSumbit").click(function() {
                   console.log("clik herreee"); 
                });
            });
            
        </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>