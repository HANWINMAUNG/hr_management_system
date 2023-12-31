<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.min.css') }}">
    @yield('header')
</head>
<body>
    <div class="page-wrapper chiller-theme ">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Hr Management</a>
                    <div id="close-sidebar">
                      <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                        alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Meun</span>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employee.index')}}">
                            <i class="fas fa-users"></i>
                            <span>Employees</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                            <ul>
                                <li>
                                <a href="#">Google maps</a>
                                </li>
                                <li>
                                <a href="#">Open street map</a>
                                </li>
                            </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
        </nav>
        <!-- sidebar-wrapper  -->
        <div class="main">
            <div class="app-bar">
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <a href="#" id="show-sidebar"><i class="fas fa-bars"></i></a>
                            <h5 class="mb-0">@yield('title')</h5>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 content" >
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <p class="mb-0">Home</p>
                            </a>
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <p class="mb-0">Home</p>
                            </a>
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <p class="mb-0">Home</p>
                            </a>
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <p class="mb-0">Home</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatable.min.js')}}"></script>
    <script src="{{asset('js/datatable_material.min.js')}}"></script>
    <!-- datapicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script>
        jQuery(function ($) {

                $(".sidebar-dropdown > a").click(function() {
                        $(".sidebar-submenu").slideUp(200); 
                if ($(this).parent().hasClass("active")){
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
                });

                $("#close-sidebar").click(function(e) {
                    e.preventDefault();
                   $(".page-wrapper").removeClass("toggled");
                });
                $("#show-sidebar").click(function(e) {
                    e.preventDefault();
                   $(".page-wrapper").addClass("toggled");
                });
                document.addEventListener('click',function(event){
                    if(document.getElementById('show-sidebar').contains(event.target)){
                        $(".page-wrapper").addClass("toggled");
                    }else if(!document.getElementById('sidebar').contains(event.target)){
                        $(".page-wrapper").removeClass("toggled");
                    }
                });
                @if(session('create'))
                Swal.fire({
                    title: 'Succefully Created!',
                    text: "{{ session('create') }}",
                    icon: 'success',
                    confirmButtonText: 'Continue'
                });
                @endif
        });
    </script>
    @yield('script')
</body>
</html>
