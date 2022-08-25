@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">edit villatypes
            <a href="{{url('admin/villatype')}}" class="float-right btn btn-success btn-sm">view All</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form method="post" enctype="multipart/form-data" action="{{url('admin/villatype/'.$data->id)}}">
                @csrf
                @method('put')
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Name <span class="text-danger">*</span></th>
                    <td><input value="{{$data->title}}" name="title" type="text" class="form-control" placeholder="name" /></td>
                </tr>

            <tr>
                    <th>Detail <span class="text-danger">*</span></th>
                    <td><textarea name="detail" class="form-control">{{$data->detail}}</textarea></td>
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
