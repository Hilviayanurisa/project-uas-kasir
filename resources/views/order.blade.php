@extends('master')

@section('content')

<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Order
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="{{url('order/tambah')}}"> + Tambah Pesanan Baru</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Table Number</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($order as $p)
		                                <tr>
                                            <td>{{ $p->id }}</td>
			                                <td>{{ $p->table_number }}</td>
			                                <td>{{ $p->total }}</td>
                                            <td>
				                            <a href="order/edit/{{ $p->id }}">Edit</a>
				                            <a href="order/hapus/{{ $p->id }}">Hapus</a>
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