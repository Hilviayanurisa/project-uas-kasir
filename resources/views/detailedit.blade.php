@extends('master')

@section('content')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Edit Pesanan
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								@foreach($detail as $p)
								<form action="{{url('detail/update', $p->id_detail)}}" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label>Id Order</label>
            <select class="form-control" name="id_orders_fk" required="required" >
                <option value="{{ $p->id_orders_fk }}">{{ $p->orders->table_number }}</option>
                @foreach ($order as $order)
                <option value="{{$order->id}}">{{$order->table_number}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Id Menu</label>
                <select class="form-control" name="id_allmenu_fk" required="required">
                    <option value="{{ $p->id_allmenu_fk }}"> {{ $p->allmenus->name }} </option>
                    @foreach ($allmenu as $allmenu)
                    <option value="{{$allmenu->id}}">{{$allmenu->name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label>Quantity</label>
                <input class="form-control" name="quantity" required="required" value="{{ $p->quantity }}">
        </div>
        <div class="form-group">
            <label>note</label>
                <input class="form-control" name="note"  value="{{ $p->note }}">
        </div> 
        <button type="submit"  class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
	</form>
	@endforeach
                                
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

@endsection

