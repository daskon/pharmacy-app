<!doctype html>
<html lang="en">

<head>
    <title>Patient Dashbaord</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">

    <script src="https://use.fontawesome.com/7789e18bf6.js"></script>

    <link rel="stylesheet" href="../css/user-home.css">
</head>

<body>

    <!-- Header-->
    <header class="sticky-top">
        <nav class="navbar navbar-expand navbar-light " style="background-color: #0aa536;">
            <div class="container-fluid font-weight-bold">
                <a href="#" class="navbar-brand d-lg-block ml-5 text-white">
                    Pharmacy System
                </a>
                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->logo)
                                <img src="{{asset(Auth::user()->logo)}}" alt=""
                                    width="30" height="30" loading="lazy" class="d-inine-block rounded-circle">

                                @else
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt=""
                                width="30" height="30" loading="lazy" class="d-inine-block">
                                @endif
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <div class="container-fluid">
        <div class="row">
            <!-- Left Site -->
            <div class="col-12 col-lg-2 bg-light border-right " style="height: 100vh;">
                <div class="row border-bottom mb-2 mt-4 bg-white">
                    <div class="col-12">
                        <div class="text-center mt-2 mb-3">
                            <span class="text-danger">Patient Dashboard</span></span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row bg-white mt-4">
                        <a href="{{ url('user-dashboard') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-plus-square mr-2"
                                aria-hidden="true"></i>Dashboard</a>

                        <a href="{{ url('upload') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-cloud-upload mr-2"
                                aria-hidden="true"></i>Upload</a>

                        <a href="{{ url('history') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-clock-o mr-2"
                                aria-hidden="true"></i>History</a>
                        <a href="{{url('quotation')}}" class="btn border-bottom col-12 text-left font-weight-bold"><i
                            class="fa fa-calendar-check-o mr-2" aria-hidden="true"></i>
                        Quotations</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center mt-5 ">
                        <a href="{{ url('logout') }}" class="btn btn-success w-100 mt-5 font-weight-bold">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Left -->
            <!-- Right Site -->
            <div class="col-10">
                <div class="row mt-3 px-3 mb-3">
                    <div class="col-12 shadow-sm p-3 bg-body rounded">
                        @yield('bar')
                    </div>
                </div>
                @yield('connect')
            </div>
            <!-- End Right -->
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
