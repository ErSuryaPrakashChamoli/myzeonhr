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
        <form id="NewForm">
            <!-- ... (your existing form fields) ... -->
            <input type="hidden" value="12345678" name="client_order_id">
            <input type="hidden" name="post_id" value="5630">

            <!-- Add other hidden input fields here -->

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="firstNameInput">First Name</label>
                    <input type="text" name="first_name" id="firstName" class="form-control"
                        placeholder="First Name">
                    <span id="firstNameError" class="error-message"></span>

                </div>

                <div class="form-group col-md-4">
                    <label for="middleNameInput">Middle Name</label>
                    <input type="text" name="middle_name" id="middleName" class="form-control"
                        placeholder="Middle Name">
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
                    <input type="text" class="form-control" id="panCard" name="pancard"
                        placeholder="Enter PAN Card Number" onfocus="this.placeholder=''"
                        onblur="if(this.value==''){this.placeholder='Enter PAN Card Number'}">
                    <span id="panCardError" class="error-message"></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="dobInput">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="date_of_birth" required
                        placeholder=" ">
                    <span id="dobError" class="error-message"></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="emailInput">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Email Address">
                    <span id="emailError" class="error-message"></span>
                </div>


                <div class="form-group col-md-6">
                    <label for="mobileInput">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile_number"
                        placeholder="Mobile Number">
                    <span id="mobileError" class="error-message"></span>
                </div>

                <!-- Add other form fields here -->

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="consent" id="consentCheckbox" class="form-check-input">
                        <label class="form-check-label" for="consentCheckbox">By submitting, I provide my consent to
                            retrieve my Credit Information including CIBIL, to check eligibility for this application, I
                            understand that this may impact my credit score</label>
                        <span id="consentError" class="error-message"></span>
                    </div>
                </div>

                <!-- <button type="submit" onsubmit="submitForm()" class="btn btn-primary">Submit</button> -->
                <button type="button" class="btn btn-primary" id="btnSumbit">Submit</button>

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
