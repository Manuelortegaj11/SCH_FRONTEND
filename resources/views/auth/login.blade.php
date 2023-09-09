<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('libs/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="{{asset('libs/sch/css/sb-admin-2.min.css')}}" rel="stylesheet">

        @stack('styles')
        <link rel="stylesheet" href="{{asset('/css/main.css')}}"></link>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="{{route('home')}}" novalidate>
                                    @csrf
                                        <div class="form-group">
                                        <input class="form-control form-control-user"
                                                id="email"
                                                name="email"
                                                type="email"
                                                placeholder="Tu email de registro"
                                                class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                                                value="{{old('email')}}"                    

                                            />
                                        @error('email')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message  }}</p>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                        <input class="form-control form-control-user"
                                                id="password"
                                                name="password"
                                                type="password"
                                                placeholder="Password de Registro"
                                                class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                                                value="{{old('password')}}"                    


                                            />
                                        @error('password')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message  }}</p>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input
                                            type="submit"
                                            value="Login"
                                            class="btn btn-primary btn-user btn-block"
                                        />
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="{{asset('libs/sch/js/sb-admin-2.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/69e7cbc764.js" crossorigin="anonymous"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js" integrity="sha512-..."></script> -->

    <!-- @stack('scripts')
    <script src="{{asset('/js/main.js')}}"></script> -->


</form>
</body>

</html>
