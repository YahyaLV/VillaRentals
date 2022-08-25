@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">add villatypes
            <a href="{{url('admin/villatype')}}" class="float-right btn btn-success btn-sm">view All</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form method="post" action="{{url('admin/villatype/')}} ">
                @csrf
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Type <span class="text-danger">*</span></th>
                    <td><input name="title" type="text" class="form-control" placeholder="type" /></td>
                </tr>

                    <th>Detail <span class="text-danger">*</span></th>
                    <td><textarea name="detail" class="form-control"></textarea></td>
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
