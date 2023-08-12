<!DOCTYPE html>
<html>

<head>
    <!-- Include the jQuery CDN before your script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    <meta name="csrf-token" content="1Sb0pzjL2giGj9wqCi9X8G3BpDkE3fHZoEThUu8v">


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
                    <input type="tel" placeholder="Enter Number" class="form-control" name="mobile_number"
                        id="mobile_number" tabindex="3" autocomplete="Off">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div id="contract-view">
                        By submitting this form, you have read and agree to the<a href=""
                            class="clr-blue4 TdecorN"> </a><a href="" class=""> Terms of Use </a> &amp;
                        <a href="" target="">Privacy Policy </a>
                    </div>

        </form>

    </div>


    <!-- Your script using jQuery -->
    <script>
        // Your jQuery code goes here
        $(document).ready(function() {
            // Your code using jQuery functions

            $("#btnSumbit").on('click', function() {
                console.log("enter click");

                var firstName = $('#firstName').val();
                var middleName = $('#middleName').val();
                var lastName = $('#lastName').val();
                var panCard = $("#panCard").val();
                var dob = $('#dob').val();
                var email = $('#email').val();
                var mobile = $('#mobile').val();
                var consent = $('#consent').val();

                console.log("mobilenu" + mobile);

                if (firstName == "") {
                    $("#firstNameError").text('*Please Enter  First Name');
                    $("#firstNameError").css('color', 'red');
                    return false;
                } else {
                    $("#firstNameError").remove();
                }


                if (middleName == "") {
                    $("#middleNameError").text('*Please Enter middle name');
                    $("#middleNameError").css('color', 'red');
                    return false;
                } else {
                    $("#middleNameError").remove();
                }


                if (lastName == "") {
                    $("#lastNameError").text('*Please Enter last Name');
                    $("#lastNameError").css('color', 'red');
                    return false;
                } else {
                    $("#lastNameError").remove();
                }

                if (panCard == "") {
                    $("#panCardError").text('*Please Enter Pancard');
                    $("#panCardError").css('color', 'red');
                    return false;
                } else {
                    //const panNumber = $("#panCard").val().trim().toUpperCase();

                    // Define a regular expression pattern for PAN card validation
                    const panNumberPattern = /^[A-Z]{5}[0-9]{4}[A-Z]$/;

                    // Check if the PAN card number matches the pattern
                    if (panNumberPattern.test(panCard)) {
                        $("#panCardError").remove();

                    } else {
                        $("#panCardError").text('*Please Valid Pancard');
                        $("#panCardError").css('color', 'red');
                        return false;

                    }

                }

                if (dob == "") {
                    $("#dobError").text('*Please Enter DOB');
                    $("#dobError").css('color', 'red');
                    return false;
                } else {
                    $("#dobError").remove();
                }


                if (email == "") {
                    $("#emailError").text('*Please Enter Email');
                    $("#emailError").css('color', 'red');
                    return false;
                } else {
                    $("#emailError").remove();
                }

                if (mobile == "") {
                    $("#mobileError").text('*Please Enter Mobile');
                    $("#mobileError").css('color', 'red');
                    return false;
                } else {

                    const mobileNumberPattern = /^[789]\d{9}$/;
                    if (mobileNumberPattern.test(mobile)) {
                        $("#mobileError").remove();

                    } else {
                        console.log("not true");
                        $("#mobileError").show();
                        $("#mobileError").text('*Please Valid Mobie number');
                        $("#mobileError").css('color', 'red');
                        return false;
                    }
                    //$("#mobileError").remove();

                }


                if (consent == "") {
                    $("#consentError").text('*Please Enter Message');
                    $("#consentError").css('color', 'red');
                    return false;
                } else {
                    $("#consentError").remove();
                }




                $.ajax({
                    url: "https://crm.myzeon.com/loancrm/api/cibil-insert-reg",
                    type: "Get",
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),

                    },
                    //dataType   : "json",
                    contentType: "application/json; charset=utf-8",
                    data: {
                        'client_order_id': '123456',
                        'first_name': firstName,
                        'middle_name': middleName,
                        'last_name': lastName,
                        'pancard': panCard,
                        'date_of_birth': dob,
                        'email': email,
                        'mobile_number': mobile

                    },
                    success: function(response) {
                        alert("submitted successfully");
                    }
                });



            });


        });
    </script>
</body>

</html>
