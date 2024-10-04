<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/Css/hover.css') }}">
    <script src="{{ asset('assets/js/member.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

</head>

<body>
    @include('layouts.navigation')

    {{-- modal for update --}}
    @include('layouts.update')


    <div class="side">
        <div>
            <div class="d-flex justify-content-center align-items-center h2 pt-3">Add member</div>
            @if (session('success'))
                @include('layouts.success', ['message' => session('success')])
            @endif
            <form action="{{ route('members.store') }}" method="post">
                @csrf
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="m-3 d-flex flex-column">
                            <label for="name">First name</label>
                            <input type="text" name="firstname" required>
                        </div>
                        <div class="m-3 d-flex flex-column ">
                            <label class="" for="lastname">Last name</label>
                            <input type="text" name="lastname" style="height: 30px"required>
                        </div>
                        <div class="m-3 d-flex flex-column">
                            <label for="dependent">Dependent</label>
                            <input type="number" name="dependent" required>
                        </div>
                        <input type="hidden" value="0" name="warning">
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
        </div>


        <div>
            <div class="container m-3">
                <input type="text" id="search" oninput="filterTable()" placeholder="Search">
            </div>
        </div>


        <div class="container">
            <div class="container mt-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-dark text-light ls">id</th>
                            <th scope="col" class="bg-dark text-light ls">Last name</th>
                            <th scope="col" class="bg-dark text-light ls">First Name</th>
                            <th scope="col" class="bg-dark text-light ls">Dependent</th>
                            <th scope="col" class="bg-dark text-light ls">Warning</th>
                            <th scope="col" class="bg-dark text-light ls">Action</th>
                        </tr>
                    </thead>
                    <tbody id='tableBody'>
                        @foreach ($data as $key)
                            <tr>
                                <th scope="row" id="member_id">{{ $key->member_id }}</th>
                                <td class="fw-bold">{{ ucfirst($key->lastname) }}</td>
                                <td class="fw-bold">{{ ucfirst($key->firstname) }}</td>
                                <td class="fw-bold">{{ $key->dependent }}</td>
                                <td
                                    class="{{ $key->warning === 1 ? 'bg-success' : ($key->warning === 2 ? 'bg-warning' : ($key->warning === 3 ? 'bg-danger' : '')) }} fw-bold">
                                    {{ $key->warning }}
                                </td>
                                <td>
                                    <form method="post"
                                        action="{{ route('members.destroy', ['id' => $key->member_id]) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this member?')">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-flex">
                                            <div>
                                                <button type="submit" style="border: none; " class="me-3 hov"><i
                                                        class="fa fa-trash "></i></button>
                                            </div>
                                            <div>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                                    onclick="edit(...['{{ $key->member_id }}', '{{ $key->firstname }}', '{{ $key->lastname }}', '{{ $key->dependent }}', '{{ $key->warning }}'])"
                                                    style="border: none;" class="hov">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
