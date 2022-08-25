@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">villas
                                <a href="{{url('admin/villa')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>adresse</th>
                                        <td>{{$data->adresse}}</td>
                                    </tr>
                                    <tr>
                                        <th>surface</th>
                                        <td>{{$data->surface}}</td>
                                    </tr>
                                    <tr>
                                        <th>nbrcouchage</th>
                                        <td>{{$data->nbrcouchage}}</td>
                                    </tr>
                                    <tr>
                                        <th>Parking</th>
                                        <td>{{$data->Parking}}</td>
                                    </tr>
                                    <tr>
                                        <th>Douche_extérieure</th>
                                        <td>{{$data->Douche_extérieure}}</td>
                                    </tr>
                                    <tr>
                                        <th>Chauffage</th>
                                        <td>{{$data->Chauffage}}</td>
                                    </tr>

                                    <tr>
                                        <th>Piscine</th>
                                        <td>{{$data->Piscine}}</td>
                                    </tr>
                                    <tr>
                                        <th>Barbecue</th>
                                        <td>{{$data->Barbecue}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jardin_privatif</th>
                                        <td>{{$data->Jardin_privatif}}</td>
                                    </tr>
                                    <tr>
                                        <th>Accès_internet</th>
                                        <td>{{$data->Accès_internet}}</td>
                                    </tr>
                                    <tr>
                                        <th>Villatype</th>
                                        <td>{{$data->Villatype->title}}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
