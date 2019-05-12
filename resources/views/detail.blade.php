@extends('master')

@section('content')

<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Detail Order
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="{{url('detail/tambah')}}"> + Tambah </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Order</th>
                                            <th>Id Allmenu</th>
                                            <th>Quantity</th>
                                            <th>Note</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($order_detail as $p)
		                                <tr>
                                            <td>{{ $p->id_orders_fk }}</td>
			                                <td>{{ $p->id_allmenu_fk}}</td>
			                                <td>{{ $p->quantity }}</td>
                                            <td>{{ $p->note }}</td>
                                            <td>{{ $p->subtotal }}</td>
			                                <td>
				                            <a href="detail/edit/{{ $p->id_detail }}">Edit</a>
                                            <a href="detail/hapus/{{ $p->id_detail }}">Hapus</a>
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