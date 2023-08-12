<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles.css">
    <style>
        .form-control {
            height: calc(2.3em + 0.75rem + 0px);
        }

        .container {
            max-width: 1200px;
            /* Adjust container width as needed */
            margin-top: 50px;
            color: #333;
            font-family: montserrat, Sans-Serif;
            font-weight: bolder;
            ;
            line-height: 30px;
            font-size: 17px;

        }

        .form-error {
            color: red;
        }

        /* Custom styling for mobile responsiveness */
        @media (max-width: 576px) {

            /* Small devices (phones) */
            .form-group.col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            /* Adjust margins and paddings for better mobile layout */
            .form-row {
                margin-left: -5px;
                margin-right: -5px;
            }

            .form-group {
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">

        <form id="loanApplicationForm" class="row mt-3" method="post"
            action="http://192.168.0.231/loancrm/api/cutomer-data-wp-bl-post">

            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="full_name">Enter Full Name</label>
                    <input type="text" name="first_name" id="name" class="form-control" placeholder="Enter Name"
                        required>
                    <div class="error-message" id="name-error">Please enter a valid name.</div>
                </div>
                <div class="col-md-4 form-group">

                    <label>Phone Number</label>
                    <input type="tel" placeholder="Enter Number" class="form-control mobile required error"
                        data-validation="required length custom" data-validation-length="10"
                        data-validation-regexp="^\d{10}$"
                        data-validation-error-msg="Please enter a valid 10-digit phone number" maxlength="10"
                        name="mobile_number" id="mobile_number" tabindex="3" autocomplete="Off"
                        oninput="formatPhoneNumber(this)">

                    <span class="phone_number_error_indicator help-block form-error">Please enter a valid 10-digit phone
                        number</span>
                </div>
                <div class="col-md-4 form-group">
                    <label>Your desired loan amount</label>
                    <div class="input-group">
                        <span class="input-group-addon">Rs</span>
                        <input type="text" placeholder="XXXXXXXXX" class="form-control amount required"
                            name="loan_amount" data-validation="required number"
                            data-validation-error-msg="Please enter a valid loan amount" id="loan_amount" tabindex="1"
                            value="">
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <label for="pincode">Enter Pincode</label>
                        <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Pincode"
                            onchange="getCityStateFromPincode(this.value)" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="city">Enter City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City"
                            required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="message">State</label>
                        <select id="stateName" class="form-control">
                            <option value="">Select state</option>
                        </select>
                    </div>


                    <!-- Employment type field -->
                    <div class="form-group col-sm-4">
                        <label>How are you currently employed?</label>
                        <select title="Select your employment" class="" id="employment_type_id"
                            name="employment_type_id" data-validation="required" data-validation-error-msg=""
                            tabindex="4" autocomplete="Off" onchange="toggleEmploymentFields()">
                            <option>Select--</option>
                            <option value="3">Self Employed Business</option>
                            <option value="2">Self Employed Professional</option>
                        </select>

                    </div>

                    <!-- Fields for Self Employed Business -->
                    <div class="form-group col-sm-4" id="selfEmployedBusinessFields" style="display: ;">
                        <label>Business Name</label>
                        <input type="text" class="form-control" name="business_name" tabindex="5"
                            autocomplete="Off" placeholder="Business Name">
                    </div>

                    <!-- Fields for Self Employed Professional -->
                    <div class="form-group col-sm-4" id="selfEmployedProfessionalFields" style="display: ;">
                        <label>Profession</label>
                        <input type="text" class="form-control" name="profession" tabindex="6" autocomplete="Off"
                            placeholder="Enter Profession">
                    </div>

                    <!-- Annual turnover field -->
                    <div class="form-group col-sm-4 has-error" id="annual-turnover" style="display: block;">
                        <label>
                            <span class="turnover_title">Your gross annual sales / turnover?</span>
                            <a href="javascript:void(0)" data-toggle="tooltip" name="annual_turnover"
                                data-placement="top" title=""
                                data-original-title="Your last financial year turnover, as filed with ITR"
                                class="">
                                <span class="badge badge-warning">?</span>
                            </a>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon">Rs</span>
                            <select title="Select Turnover" class="" name="annual_turnover"
                                id="annual_turnover" data-validation="required"
                                data-validation-error-msg="Please enter the annual turnover" tabindex="7"
                                autocomplete="Off" aria-hidden="true" onchange="toggleBasicInformationFields()">
                                <option value="">Please Select Turnover</option>
                                <option value="500000">Upto 5 Lacs</option>
                                <option value="1000000">5 Lacs - 10 Lacs</option>
                                <option value="2500000">10 Lacs - 25 Lacs</option>
                                <option value="5000000">25 Lacs - 50 Lacs</option>
                                <option value="7500000">50 Lacs - 75 Lacs</option>
                                <option value="10000000">75 Lacs - 1 Cr</option>
                                <option value="30000000">1 Cr - 3 Cr</option>
                                <option value="50000000">3 Cr - 5 Cr</option>
                                <option value="100000000">5 Cr+</option>
                            </select>
                        </div>
                        <span class="annual_turnover_error_indicator help-block form-error">Please enter the annual
                            turnover</span>
                    </div>

                    <!-- Years In Current Business field -->
                    <div class="form-group col-sm-4" id="years-in-business" style="display: ;">
                        <label>Years In Current Business/Profession</label>
                        <input type="number" class="form-control" name="years_in_business" tabindex="9"
                            autocomplete="Off" placeholder="Years In Current Business/Profession">
                    </div>

                    <!-- Residence Type field -->
                    <div class="form-group col-sm-4" id="residence-type" style="display: ;">
                        <label>Residence Type</label>
                        <select class="form-control" name="residence_type" required>
                            <option value="">Select Residence Type</option>
                            <option value="Owned by Self / Spouse">Owned by Self / Spouse</option>
                            <option value="Owned by Parents / Siblings">Owned by Parents / Siblings</option>
                            <option value="Rented with Family ">Rented with Family</option>
                            <option value="Rented with Friends ">Rented with Friends</option>
                            <option value="Other ">Other</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">

                        <button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>
                    </div>
                    <div id="contract-view">

                        By submitting this form, you have read and agree to the<a href=""
                            class="clr-blue4 TdecorN"> </a><a href="" class=""> Terms of Use </a> &amp;
                        <a href="" target="">Privacy Policy </a>
                    </div>

        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>


    <script>
        $(document).ready(function() {
                    $("#btnSubmit").on('click', function() {
                            console.log("enter click");

                            var firstName = $('#name').val();
                            var middleName = $('#mobile_number').val();
                            var lastName = $('#lastName').val();
                            var panCard = $("#panCard").val();
                            var dob = $('#dob').val();
                            var email = $('#email').val();
                            var mobile = $('#mobile').val();
                            var consent = $('#consent').val();
                        }
          });
    </script>

    <script>
        function getCityStateFromPincode(pincode) {
            const url = `https://api.postalpincode.in/pincode/${pincode}`;

            // Make an HTTP GET request to the API
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Check if the API response is successful
                    if (data && data[0].Status === "Success") {
                        const city = data[0].PostOffice[0].District;
                        const state = data[0].PostOffice[0].State;
                        document.getElementById("city").value = city;
                        document.getElementById("stateName").innerHTML = `<option value="${state}">${state}</option>`;
                        console.log(`City: ${city}`);
                        console.log(`State: ${state}`);
                    } else {
                        console.log("Invalid pincode");
                    }
                })
                .catch(error => {
                    console.log("An error occurred:", error);
                });
        }
        $.validate({
            lang: 'en', // Set the language for error messages
            modules: 'security, date',
            onError: function($form) {
                // Called when there's an error in the form submission
                // You can customize the behavior here if needed
            }

        });

        // Set validation rules for the loan amount input
        $(document).ready(function() {
            $('#loan_amount').attr('data-validation', 'required number');
            $('#loan_amount').attr('data-validation-error-msg', 'Please enter a valid loan amount');
        });

        // Function to format the loan amount with commas
        function formatAmount(input) {
            const amountInput = input;
            let amountValue = amountInput.value.replace(/,/g, '');

            // Remove any non-digit characters
            amountValue = amountValue.replace(/\D/g, '');

            // Convert to a number and format with commas for thousands and lakhs
            amountValue = Number(amountValue).toLocaleString('en-IN');

            // Update the input value with the formatted loan amount
            amountInput.value = amountValue;
        }

        // Function to handle input for the phone number field
        function formatPhoneNumber(input) {
            const phoneNumberInput = input;
            let phoneNumberValue = phoneNumberInput.value.replace(/\D/g, ''); // Remove any non-digit characters
            phoneNumberValue = phoneNumberValue.slice(0, 10); // Limit to 10 digits

            // Update the input value with the formatted phone number
            phoneNumberInput.value = phoneNumberValue;
        }

        function formatNumberWithCommas(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Function to sanitize input and enforce numbers only
        function sanitizeInput(input) {
            return input.replace(/[^0-9]/g, "");
        }

        // Listen for changes in the input field and format the value accordingly
        document.querySelector('input[name="years_in_business"]').addEventListener("input", function() {
            let sanitizedValue = sanitizeInput(this.value);
            let formattedValue = formatNumberWithCommas(sanitizedValue);
            this.value = formattedValue;
        });


        // Function to toggle visibility of fields based on employment type
        function toggleEmploymentFields() {
            const employmentType = $('#employment_type_id').val();
            if (employmentType === "3") {
                // Show fields for Self Employed Business
                $('#selfEmployedBusinessFields').show();
                $('#selfEmployedProfessionalFields').hide();
            } else if (employmentType === "2") {
                // Show fields for Self Employed Professional
                $('#selfEmployedProfessionalFields').show();
                $('#selfEmployedBusinessFields').hide();
            } else {
                // Hide both fields when no employment type is selected
                $('#selfEmployedBusinessFields').hide();
                $('#selfEmployedProfessionalFields').hide();
            }
        }

        // Function to toggle Years In Current Business and Residence Type fields based on annual turnover
        function toggleBasicInformationFields() {
            const annualTurnover = $('#annual_turnover').val();

            if (annualTurnover !== "") {
                // Show the basic information fields
                $('#years-in-business').show();
                $('#residence-type').show();
            } else {
                // Hide the basic information fields
                $('#years-in-business').hide();
                $('#residence-type').hide();
            }
        }

        // Call the toggleEmploymentFields and toggleBasicInformationFields functions on page load
        $(document).ready(function() {
            toggleEmploymentFields();
            toggleBasicInformationFields();
        });
        // Shortcode callback function to display the loan application form
        function display_loan_application_form() {
            ob_start(); // Start output buffering

            // Display your loan application form HTML here


            //     return ob_get_clean(); // Return the output

            // add_shortcode('loan_application_form', 'display_loan_application_form');
        }

        function formatLoanAmount(input) {
            if (!input) return ""; // If input is empty, return empty string
            let number = parseFloat(input.replace(/,/g, ""));
            if (isNaN(number)) return input; // If input is not a valid number, return the input as is
            return number.toLocaleString("en-IN");
        }

        // Listen for changes in the input field and format the value accordingly
        document.getElementById("loan_amount").addEventListener("input", function() {
            let formattedValue = formatLoanAmount(this.value);
            this.value = formattedValue;
        });




        // Form submission handling
        function handle_loan_application_form_submission() {
            if (isset($_POST['loan_application_form_submit'])) {
                // Sanitize and process form data here
                // Replace this with your form data processing logic
                $name = sanitize_text_field($_POST['name']);
                $phone_no = sanitize_text_field($_POST['phone_no']);
                $employment_type_id = sanitize_text_field($_POST['employment_type_id']);
                $yearly_income = sanitize_text_field($_POST['yearly_income']);
                $pincode = sanitize_text_field($_POST['pincode']);
                $city = sanitize_text_field($_POST['city']);
                $state = sanitize_text_field($_POST['state']);

                // Further processing or sending data to an external API can be done here

                // Redirect after form submission
                wp_redirect('https://www.myzeon.com/');
                exit;
            }
        }
    </script>




</body>

</html>
