@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add villa
                                <a href="{{url('admin/villa')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" action="{{url('admin/villa/')}}">
                                    @csrf
                                    <table class="table table-bordered">

                                        <tr>
                                            <th>Villa Name <span class="text-danger">*</span></th>
                                            <td><input name="title" type="text" class="form-control" placeholder="name" /></td>
                                        </tr>
                                        <tr>
                                            <th>Adresse <span class="text-danger">*</span></th>
                                            <td><input name="adresse" type="address" class="form-control" placeholder="adresse" /></td>
                                        </tr>
                                        <tr>
                                            <th>Surface <span class="text-danger">*</span></th>
                                            <td><input name="surface" type="number" class="form-control" placeholder="surface" /></td>
                                        </tr>
                                        <tr>
                                            <th>Nombre de couchage <span class="text-danger">*</span></th>
                                            <td>
                                                <input type="number" name="nbrcouchage" class="form-control" placeholder="nbrcouchage"></td>
                                        </tr>
                                        <tr>
                                            <th>Parking <span class="text-danger">*</span></th>
                                            <td>
                                                <select name="Parking" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    <option value="oui">oui</option>
                                                    <option value="non">non</option>
                                                </select>
                                           </td>
                                        </tr>
                                        <tr>
                                            <tr>
                                                <th>Douche_extérieure <span class="text-danger">*</span></th>
                                                <td>
                                                    <select name="Douche_extérieure" class="form-control">
                                                        <option value="0">--- Select ---</option>
                                                        <option value="oui">oui</option>
                                                        <option value="non">non</option>
                                                    </select>
                                               </td>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <th>Chauffage <span class="text-danger">*</span></th>
                                                    <td>
                                                        <select name="Chauffage" class="form-control">
                                                            <option value="0">--- Select ---</option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option>
                                                        </select>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <tr>
                                                        <tr>
                                                            <th>Piscine <span class="text-danger">*</span></th>
                                                            <td>
                                                                <select name="Piscine" class="form-control">
                                                                    <option value="0">--- Select ---</option>
                                                                    <option value="oui">oui</option>
                                                                    <option value="non">non</option>
                                                                </select>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                            <tr>
                                                                <tr>
                                                                    <th>Barbecue <span class="text-danger">*</span></th>
                                                                    <td>
                                                                        <select name="Barbecue" class="form-control">
                                                                            <option value="0">--- Select ---</option>
                                                                            <option value="oui">oui</option>
                                                                            <option value="non">non</option>
                                                                        </select>
                                                                   </td>
                                                                </tr>
                                                                <tr>
                                                                    <tr>
                                                                        <tr>
                                                                            <th>Jardin_privatif <span class="text-danger">*</span></th>
                                                                            <td>
                                                                                <select name="Jardin_privatif" class="form-control">
                                                                                    <option value="0">--- Select ---</option>
                                                                                    <option value="oui">oui</option>
                                                                                    <option value="non">non</option>
                                                                                </select>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <tr>
                                                                                <tr>
                                                                                    <th>Accès_internet <span class="text-danger">*</span></th>
                                                                                    <td>
                                                                                        <select name="Accès_internet" class="form-control">
                                                                                            <option value="0">--- Select ---</option>
                                                                                            <option value="oui">oui</option>
                                                                                            <option value="non">non</option>
                                                                                        </select>
                                                                                   </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="color:red;">Select villa Type <span class="text-danger">*</span></th>
                                                                                    <td>
                                                                                        <select name="villa_type_id" class="form-control">
                                                                                            <option value="0">--- Select ---</option>
                                                                                            @foreach($villatypes as $vt)
                                                                                            <option value="{{$vt->id}}">{{$vt->title}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
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

@endsection
