@extends('master')

@section('content')

<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Transaksi
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="{{url('transaction/tambah')}}"> + Tambah </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Order</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($transaction as $p)
		                                <tr>
                                            <td>{{ $p->id }}</td>
			                                <td>{{ $p->id_orders_fk }}</td>
			                                <td>{{ $p->status }}</td>
			                                <td>
				                            <a href="transaction/edit/{{ $p->id }}">Edit</a>
                                            <a href="transaction/hapus/{{ $p->id }}">Hapus</a>
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