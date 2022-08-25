@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">add locataire
            <a href="{{url('admin/locataire')}}" class="float-right btn btn-success btn-sm">view All</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form method="post" enctype="multipart/form-data" action="{{url('admin/locataire')}}">
                @csrf
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Name <span class="text-danger">*</span></th>
                    <td><input name="full_name" type="text" class="form-control"/></td>
                </tr>
                <tr>
                    <th>Email <span class="text-danger">*</span></th>
                    <td><input name="email" type="email" class="form-control"/></td>
                </tr>
                <tr>
                    <th>password <span class="text-danger">*</span></th>
                    <td><input name="password" type="password" class="form-control"/></td>
                </tr>
                <tr>
                    <th>mobile <span class="text-danger">*</span></th>
                    <td><input name="mobile" type="text" class="form-control"/></td>
                </tr>
                <tr>
                    <th>adresse <span class="text-danger">*</span></th>
                    <td><input name="address" type="text" class="form-control"/></td>
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

</div>
<!-- /.container-fluid -->
@endsection
