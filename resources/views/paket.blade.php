@extends('master')

@section('content')

<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tables Page <small>Responsive tables</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="paketform"> + Tambah Paket Baru</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Detail</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($paket as $p)
		                                <tr>
                                            <td>{{ $p->id }}</td>
			                                <td>{{ $p->name }}</td>
			                                <td>{{ $p->detail }}</td>
			                                <td>{{ $p->price }}</td>
                                            <td>{{ $p->type }}</td>
			                                <td>
				                            <a href="/allmenu/edit/{{ $p->id }}">Edit</a>
				                            <a href="/allmenu/hapus/{{ $p->id }}">Hapus</a>
			                                </td>
		                                </tr>
		                            @endforeach
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
@endsection