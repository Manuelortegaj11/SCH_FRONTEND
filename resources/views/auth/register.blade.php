<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="{{asset('libs/sch/css/sb-admin-2.min.css')}}" rel="stylesheet">

        @stack('styles')
        <link rel="stylesheet" href="{{asset('/css/main.css')}}"></link>

</head>

<body class="bg-gradient-primary">

    <div class="container">
    
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                                <form class="user" action="{{  route('register')   }}" method="POST" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                    <input class="form-control form-control-user"
                                        id="name"
                                        name="name"
                                        type="text"
                                        placeholder="Tu Nombre"
                                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                                        value="{{old('name')}}"
                                        />
                                        @error('name')
                                        <p class="text-center alert alert-danger" role="alert">{{ $message  }}</p>
                                        @enderror
                                        
                                            
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-6">
                                    <input class="form-control form-control-user"
                                            id="username"
                                            name="username"
                                            type="text"
                                            placeholder="Tu Nombre de Usuario"
                                            class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                                            value="{{old('username')}}"
                                            />                    
                    
                                    @error('username')
                                    <p class="text-center alert alert-danger" role="alert">{{ $message  }}</p>   
                                    @enderror
                                    </div>


                    
                                </div>

                                
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
                                <p class="text-center alert alert-danger" role="alert">{{ $message  }}</p>
                                @enderror
                                </div>



                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                    <input class="form-control form-control-user"
                                        id="password"
                                        name="password"
                                        type="password"
                                        placeholder="Password de Registro"
                                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                                        value="{{old('password')}}"                    


                                            />
                                        @error('password')
                                        <p class="text-center alert alert-danger" role="alert">{{ $message  }}</p>
                                        @enderror

                                    </div>


                                    <div class="col-sm-6">

                                    <input class="form-control form-control-user"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        type="password"
                                        placeholder="Repite tu Password"
                                        class="border p-3 w-full rounded-lg"
                                    />

                                    </div>
                                </div>
                                <input
                                    type="submit"
                                    value="Crear Cuenta"
                                    class="btn btn-primary btn-user btn-block"
                                />
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
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
    <script src="{{asset('libs/sch/js/sb-admin-2.min.js')}}"></script> -->
    <script src="https://kit.fontawesome.com/69e7cbc764.js" crossorigin="anonymous"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js" integrity="sha512-..."></script>-->

    @stack('scripts')
    <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>