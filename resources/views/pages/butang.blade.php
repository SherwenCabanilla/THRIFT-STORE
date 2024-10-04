<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('assets/js/butang.js') }}"></script>
    <title>Document</title>
</head>

<body>
    @include('layouts.navigation')
    <div class="side">
        <div class="h1 d-flex justify-content-center align-items-center">das</div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="bg-dark text-light fw-bold ls">Name</th>
                        <th scope="col" class="bg-dark text-light fw-bold ls">Date</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($getDate as $key) --}}
                    <tr id="to-check" onclick="toggleCheckbox(this)">
                        <th scope="row" id="checkys">sad</th>
                        <th scope="row" id="checky">
                            <form method="post" action=""
                                onsubmit="return confirm('Are you sure you want to delete this date?')">
                                @csrf
                                @method('DELETE')
                                <input type="checkbox" name="check" id="check">
                            </form>
                        </th>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
