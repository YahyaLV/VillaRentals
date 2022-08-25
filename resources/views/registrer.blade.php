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
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

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
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                        @if(Session::has('success'))
                                        <p class="text-success">{{session('success')}}</p>
                                        @endif
                                    </div>
                                    <form class="user" method="post" action="{{url('admin/locataire')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="full_name"  class="form-control form-control-user"
                                                id="full_name" aria-describedby="emailHelp"
                                                placeholder="full_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email"  class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword"  name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile"  class="form-control form-control-user"
                                                id="number" aria-describedby="emailHelp"
                                                placeholder="mobile">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address"  class="form-control form-control-user"
                                                id="address" aria-describedby="emailHelp"
                                                placeholder="address">
                                        </div>
                                        <input type="hidden" name="ref" value="front"/>
                                        <input type="submit" class="btn btn-warning btn-user btn-block" value="registrer" />
                                    </form>
                                    @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <p class="text-danger">{{$error}}</p>
                                    @endforeach
                                @endif

                                @if(Session::has('msg'))
                                    <p class="text-danger">{{session('msg')}}</p>
                                @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
