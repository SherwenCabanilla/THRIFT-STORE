<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>
<style>
    /* * {
        outline: 2px solid
    } */
</style>

<body class="">
    @include('layouts.navigation')
    <div class="side">
        <div class="d-flex justify-content-center align-items-center h2 pt-3">
            DashBoard
        </div>
        <div class="d-flex justify-content-around">
            <div class="bg-primary max p-2">
                <div class="m-2" id="count">0</div>
                <div class="d-flex justify-content-between ">
                    <div class="h6 m-2 mb-4">Total Products:</div>
                    <div class="position-relative"><img class="position-absolute likod"
                            src="https://www.kasandbox.org/programming-images/avatars/leaf-blue.png" height="50px"
                            width="px" alt=""></div>
                </div>
                <div class="d-flex justify-content-center bg-dark text-light">more info</div>
            </div>
            <div class="bg-success max p-2">
                <div class="m-2" id="count">0</div>
                <div class="d-flex justify-content-between ">
                    <div class="h6 m-2 mb-4 ">Total categories:</div>
                    <div class="position-relative"><img class="position-absolute likod"
                            src="https://www.kasandbox.org/programming-images/avatars/leaf-blue.png" height="50px"
                            width="px" alt=""></div>
                </div>
                <div class="d-flex justify-content-center bg-dark text-light">more info</div>
            </div>
            <div class="bg-warning max p-2">
                <div class="m-2" id="count">0</div>
                <div class="d-flex justify-content-between ">

                    <div class="h6 m-2 mb-4 fw-bold">Total Members: {{ $home['totalMember'] }}</div>

                    <div class="position-relative"><img class="position-absolute likod"
                            src="https://www.kasandbox.org/programming-images/avatars/leaf-blue.png" height="50px"
                            width="px" alt=""></div>
                </div>
                <div class="d-flex justify-content-center bg-dark text-light">more info</div>
            </div>
            <div class="bg-danger max p-2">
                <div class="m-2" id="count">0</div>
                <div class="d-flex justify-content-between ">
                    <div class="h6 m-2 mb-4">Av. Monthly Sales:</div>
                    <div class="position-relative"><img class="position-absolute likod"
                            src="https://www.kasandbox.org/programming-images/avatars/leaf-blue.png" height="50px"
                            width="px" alt=""></div>
                </div>
                <div class="d-flex justify-content-center bg-dark text-light">more info</div>
            </div>
        </div>
    </div>


</body>

</html>
