@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Booking
                                <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/booking/')}}">
                                    @csrf
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>locataire name <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control" name="locataire_name">
                                                    <option >--- Select ---</option>
                                                    @foreach($locataires as $Lt)
                                                    <option value="{{$Lt->full_name}}">{{$Lt->full_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>CheckIn Date <span class="text-danger">*</span></th>
                                            <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                                        </tr>
                                        <tr>
                                            <th>CheckOut Date <span class="text-danger">*</span></th>
                                            <td><input name="checkout_date" type="date" class="form-control checkout-date" /></td>
                                        </tr>
                                        <tr>
                                            <th>Avaiable Villas <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control villa-list" name="villa_id" >
                                                    <option >--- Select ---</option>


                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total Adults <span class="text-danger">*</span></th>
                                            <td><input name="total_adults" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Total Children  <span class="text-danger">*</span></th>
                                            <td><input name="total_children" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                @section('scripts')

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

                @endsection




@endsection
