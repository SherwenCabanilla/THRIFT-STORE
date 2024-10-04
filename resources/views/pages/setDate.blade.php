<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/Css/hover.css') }}">
    <script src="{{ asset('assets/js/setDate.js') }}"></script>
</head>

<body>
    <div>
        <div> @include('layouts.navigation')</div>
        <div class="side">
            <div class="d-flex justify-content-center align-items-center h3">Set Date</div>
            <div class="container">
                <form id="setDateForm" action="{{ route('setDate.index') }}" method="post">
                    @csrf
                    <input type="date" name="date" id="date" class="g">
                    <button type="button" onclick="checkDate()" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="container">
                <div>{{ $getDate->count() ?? 'nodata' }}</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-dark text-light fw-bold ls">Butang</th>
                            <th scope="col" class="bg-dark text-light fw-bold ls">Day</th>
                            <th scope="col" class="bg-dark text-light fw-bold ls">Days to go</th>
                            <th scope="col" class="bg-dark text-light fw-bold ls">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getDate as $key)
                            <tr>
                                <th scope="row">
                                    <script>
                                        document.write(butangDate('{{ $key->date }}').date);
                                    </script>
                                </th>
                                <th scope="row">
                                    <script>
                                        document.write(butangDate('{{ $key->date }}').dayOfWeek);
                                    </script>
                                </th>
                                <th scope="row">sad</th>
                                <th scope="row">
                                    <form method="post" action="{{ route('setDate.delete', ['id' => $key->id]) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this date?')">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-flex">
                                            <div>
                                                <button type="submit" style="border: none; " class="me-3 hov"><i
                                                        class="fa fa-trash "></i></button>
                                            </div>
                                            <div>
                                                <button type="button" onclick="" style="border: none;"
                                                    class="hov">
                                                    <a href="{{ route('butang.index') }}"> <i
                                                            class="fa fa-pencil"></i></a>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
