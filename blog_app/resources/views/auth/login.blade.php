<!DOCTYPE html>
<html >

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.png') }}">
    <title>
        Turana`s admin panel
    </title>

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="{{asset('admin/js/42d5adcbca.js')}}" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.min1bb8.css?v='.rand(0,423905487638395)) }}" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

</head>

<body class="bg-gray-200">




<main class="main-content  mt-0">
    <div class="page-header align-items-start min-height-300 m-3 border-radius-xl"
         style="background-image: url('https://images.unsplash.com/photo-1491466424936-e304919aada7?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1949&amp;q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
    </div>
    <div class="container mb-4">
        <div class="row mt-lg-n12 mt-md-n12 mt-n12 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card mt-8">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1">Sign In</h4>
                            <p class="mb-1 text-sm text-white">Enter your email and password to Sign In</p>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="text-start">
                            @csrf
                            <div class="input-group input-group-static mb-4">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="john@email.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="•••••••••••••">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 mt-3 mb-0">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js')}}"></script>

<script src="{{ asset('admin/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/jkanban/jkanban.js')}}"></script>
<script src="{{ asset('admin/js/plugins/chartjs.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/world.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="../../buttons.github.io/buttons.js"></script>

<script src="{{ asset('admin/js/material-dashboard.min1bb8.js?v='.rand(0,345654345))}}"></script>
</body>
</html>
