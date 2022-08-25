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
                                        <h1 class="h4 text-gray-900 mb-4">booking</h1>
                                        @if(Session::has('success'))
                                        <p class="text-success">{{session('success')}}</p>
                                        @endif
                                    </div>
                                    <form class="user" method="post" action="{{url('admin/booking/')}}">
                                        @csrf
                                        <tr>
                                            <th><span class="text-warning">* </span>Name : </th>
                                            <td><input name="locataire_name"  type="text" class="form-control" /></td>
                                        </tr>

                                        <tr>
                                            <th><span class="text-warning">* </span>CheckIn Date : </th>
                                            <td><input name="checkin_date" type="date" class="form-control checkin-date"/></td>
                                        </tr>
                                        <tr>
                                            <th><span class="text-warning">* </span>CheckOut Date : </th>
                                            <td><input name="checkout_date" type="date" class="form-control checkout-date" /></td>
                                        </tr>
                                        <tr>
                                            <th><span class="text-warning">* </span>Avaiable Villas : </th>
                                            <td>
                                                <select class="form-control villa-list" name="villa_id" >
                                                    <option >--- Select ---</option>


                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span class="text-warning">* </span>Total Adults : </th>
                                            <td><input name="total_adults" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th><span class="text-warning">* </span>Total Children :</th>
                                            <td><input name="total_children" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">

                                                <input type="hidden" name="ref" value="front" />
                                                <input type="submit" class="btn btn-warning" />
                                            </td>
                                        </tr>
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
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
var _checkindate=$(this).val();
$.ajax({
                url:"{{url('admin/booking')}}/dispo_in/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".villa-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option value="'+row.id+'">'+row.title+'</option>';
                    });
                    $(".villa-list").html(_html);
                }
            });
        });
   });
   $(document).ready(function(){
        $(".checkout-date").on('blur',function(){
var _checkoutdate=$(this).val();
$.ajax({
                url:"{{url('admin/booking')}}/dispo_out/"+_checkoutdate,
                dataType:'json',
                beforeSend:function(){
                    $(".villa-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option value="'+row.id+'">'+row.title+'</option>';
                    });
                    $(".villa-list").html(_html);
                }

            });
        });
   });



                </script>

</html>
