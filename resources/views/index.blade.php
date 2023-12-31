<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .center-rounded-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .header-continder {
            display: flex;
            justify-content: center;
        }

        .h1class {
            text-align: left;
        }

        .greenclass {
            color: green;
        }

        .table-caption-top {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .table-caption-top table {
            caption-side: top;
        }


        .centered-list {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .centered-list li {
            margin: 10px 0;
        }
    </style>

    @livewireStyles
</head>

<body>

    <div class="container-fluid">
        <div class="header">

            <div class="row">
                <div class="col-md-2" class="image-container">
                    <img src="{{ asset('images/loans4wishImage.jpeg') }}" alt="A beautiful landscape"
                        class="center-rounded-image">
                </div>
                <div class="col-md-10" class="header-continder">
                    <h1 class="h1class greenclass">LOANS4WISH FINANCIAL SERVICES</h1>
                    <h3 class="h1class greenclass">Registerd Office A-47,1st Floor,Sector-2,Noida,Gautam Buddha
                        Nagar(U.P)-201301</h3>
                    <h2 class="h1class greenclass">Employee Joining Form</h2>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid border">
        <div class="row">
            <div class="col-md-2">

                <ul class="list-group centered-list">
                    <li class="list-group-item" wire:class = "blue">Personal Detail</li>
                    <li class="list-group-item">Education Detail</li>
                    <li class="list-group-item">Document Detail</li>
                    <!-- Add more list items as needed -->
                </ul>

            </div>
            <div class="col-md-10">
                <livewire:user-perfoma />
            </div>
        </div>
    </div>


    @livewireScripts


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
