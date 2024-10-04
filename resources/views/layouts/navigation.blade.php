@extends('layouts.app')

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="position-absolute">
            <div>
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action">DashBoard</a>
                <a href="{{ route('products') }}" class="list-group-item list-group-item-action">Products</a>
                <a href="{{ route('monthlySales') }}" class="list-group-item list-group-item-action">Monthly Sales</a>
            </div>
        </div>
    </div>
@endsection --}}

@section('content')
    <!--Main Navigation-->
    <header class="a ">
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-md-block  navbar-collapse sidebar bg-white ">
            <div class="position-sticky ">
                <div class="list-group list-group-flush mx-3 mt-4 ">
                    <a href="{{ route('home') }}"
                        class=" list-group-item py-2 ripple m {{ Request::routeIs('home') ? 'bg-dark text-light' : '' }}"
                        aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span class="">Main dashboard</span>
                    </a>
                    <a href="{{ route('members.index') }}"
                        class="list-group-item  py-2 ripple m {{ Request::routeIs('members.index') ? 'bg-dark text-light' : '' }}">
                        <i class="fas fa-chart-area fa-fw me-3 m"></i><span>Member</span>
                    </a>
                    <a href="{{ route('setDate.index') }}"
                        class="list-group-item py-2 ripple m  {{ Request::routeIs('setDate.index') ? 'bg-dark text-light' : '' }}"><i
                            class="fas fa-lock fa-fw me-3 "></i><span>Set butang date</span></a>
                    <a href="{{ route('butang.index') }}"
                        class="list-group-item list-group-item-action py-2 ripple m {{ Request::routeIs('butang.index') ? 'bg-dark text-light' : '' }}"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Butang</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
                </div>
            </div>
        </nav>
    </header>
@endsection

<!--Main Navigation-->

<!--Main layout-->

<!--Main layout-->
