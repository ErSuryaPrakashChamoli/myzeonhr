<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #257F9947;
        }

        .myprofile {
            background: #7d8386;
            padding: 7px;
            margin: 0px;
            width: 100%;
            font-weight: bold;
            color: #fff;
            border-radius: 6px 5px 0px 0px;
        }

        .col-md-8 {

            top: 12px;
            right: 350px;
            font-size: 8px;
        }

        .container2 {
            margin-left: 120px;
            margin-top: 25px;
            margin-bottom: 20px;
        }

        .row {
            margin-bottom: 30px;
        }

        form {
            margin-top: 25px;
            margin-bottom: 30px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1); */
            box-shadow: 0px 0px 10px rgba(17, 62, 194, 0.91);
        }

        label {
            font-weight: bold;
            color: #333;
        }

        .container-fluid {
            background-color: #f0f0f0;
            padding: 6px;
            margin: 0 auto;
            top: 10px;
            margin-left: 0;
            height: 140px;

            max-width: 100vw;

        }



        .container-fluid h1 {
            color: #333;
        }

        .container-fluid p {
            color: #333;
            line-height: 1.6;
        }

        .container-fluid img {
            height: 90px;
            margin-top: 18px;
        }

        .col-md-4,
        .col-md-8,
        .col-md-6 {
            font-family: montserrat, sans-serif !important;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;


        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <div class="myprofile">
        <h1>My Profile</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1691648540~exp=1691649140~hmac=688ef76584e433445a83f537cd6a20cc2e095bc3f9e7ad7a988954963dfcee72" class="img-fluid rounded-circle profile-image" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <h3 id="profileName">Name</h3>
                <p >Email: <span id="profileEmail"></span></p>
                <p >Phone: <span id="prfilePhone"></span></p>
            </div>
        </div>
    </div>

    <form class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="name" class="form-label">First Name</label><span id="error_name"></span>
                    <input type="text" class="form-control" id="inpName" placeholder="Enter First Name">
                </div>

                <div class="col-md-4">
                    <label for="name" class="form-label">Middle Name</label><span id="error_middle"></span>
                    <input type="text" class="form-control" id="inpMiddleName" placeholder="Enter Middle Name ">
                </div>
                <div class="col-md-4">
                    <label for="name" class="form-label">Last Name</label><span id="error_last_name"></span>
                    <input type="text" class="form-control" id="inpLastName" placeholder="Enter Last Name">
                </div>
            </div>
            <!-- row closed -->
            <div class="row">
                <div class="col-md-4">
                    <label for="pancard">Pancard</label><span id="error_pancard"></span>
                    <input type="text" class="form-control" id="inpPancard" placeholder="Enter Pancard Number">
                </div>
                <div class="col-md-4">
                    <label for="mobile">Mobile Number</label><span id="error_mobile_no"></span>
                    <input type="tel" class="form-control" id="inpmobilenumber" placeholder=" Enter Mobile Number">
                </div>

                <div class="col-md-4">
                    <label for="dob">Date of Birth</label><span id="error_dob"></span>
                    <input type="date" class="form-control" id="inpDob" placeholder="Enter your dob">
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <label for="pancard">Pincode</label><span id="error_pincode"></span>
                    <input type="text" class="form-control" id="inpPincode" placeholder="Enter Pin">
                </div>
                <div class="col-md-4">
                    <label for="city">City</label><span id="error_city"></span>
                    <input type="text" class="form-control" id="inpCity" placeholder="Enter City">
                    <!-- <select class="form-control" id="city">
                        <option value="">Noida</option>
                        <option value="">jaipur</option>
                        <option value="">Mumbai</option>
                        <option value="">Kolkata</option>
                    </select> -->
                </div>
                <div class="col-md-4">
                    <label for="state">State</label><span id="error_state"></span>
                    <input type="text" class="form-control" id="inpState" placeholder="State">
                    <!-- <select class="form-control" id="state">
                        <option value="">Andhra Pradesh</option>
                        <option value="">Jharkhand</option>
                        <option value="">Madhya Pradesh</option>
                        <option value="">Uttar Pradesh</option>
                   </select> -->
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">Email</label><span id="error_email"></span>
                    <input type="email" class="form-control" id="Inpemail" placeholder="Enter your email">
                </div>
                <div class="col-md-6">
                    <label for="address">Address</label><span id="error_address"></span>
                    <textarea class="form-control" id="inpAddress" placeholder=" Enter Address" rows="1"></textarea>
                </div>

            </div>
            <!-- <button type="submit" class="btn btn-primary">Save</button>
                    <button type="Edit" class="btn btn-primary">Edit</button> -->
        </div>
        <div class="row">
            <div class="employement">
                <h3 style="margin-top: 18px;"> <img src="	https://creditreport.paisabazaar.com/images/employer_details.png" alt="">Employer Details</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="employement">Employement Type</label><span id="error_emp_type"></span>
                <input type="employement" class="form-control" id="inpEmployement" placeholder="Enter Employement Type">
            </div>
            <div class="col-md-6">
                <label for="employer">Employer Name</label><span id="error_employer_name"></span>
                <input type="employer" class="form-control" id="inpEmployer" placeholder=" Enter Employer Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="employer">Monthly Income</label><span id="error_monthly_income"></span>
                <input type="employer" class="form-control" id="Employer" placeholder=" Enter Income">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="btnUpdate">Update</button>


    </form>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            console.log("enter here");
            // Your jQuery code here
            // This code will run when the DOM is fully loaded

            var mobile_number = "7258052205";

            $.ajax({
                url: "https://crm.myzeon.com/loancrm/api/cibil-profile/" + mobile_number,
                type: "Get",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),

                },
                //dataType   : "json",
                contentType: "application/json; charset=utf-8",

                success: function(response) {

        
                    var first_name = response[0].first_name;
                    var last_name = response[0].last_name;
                    var middle_name = response[0].middle_name;
                    var dob = response[0].date_of_birth;
                    var email = response[0].email;
                    var mobile_no = response[0].mobile_number;
                    var pancard = response[0].pancard;

                    var full_name = first_name + last_name + middle_name;

                    $('#inpName').val(first_name);
                    $('#inpMiddleName').val(middle_name);
                    $('#inpLastName').val(last_name);
                    $('#inpPancard').val(pancard);
                    $('#inpmobilenumber').val(mobile_no);
                    $('#inpDob').val(dob);

                    $('#profileName').text(full_name);
                    $('#profileEmail').text(email);
                    $('#prfilePhone').text(mobile_no); 


                 
                }
            });


        });
    </script>

</body>

</html>