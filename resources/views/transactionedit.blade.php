@extends('master')

@section('content')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Edit Transaksi
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
                                @foreach($transaction as $p)
                                    <form role="form" method="post" action="{{url('/transaction/store')}}" entype="multipart/form-data">
                                        {{ csrf_field ()}}
                                        <div class="form-group">
                                            <label>Table Number</label>
                                            <select class="form-control"  name="table_number" required="required">
                                                <option value="{{ $p->id_orders_fk }}">{{ $p->orders->table_number }}</option>
                                                @foreach ($order as $order)
                                                <option value="{{$order->id}}">{{$order->table_number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                                <div class="radio" name="status" required="required">
                                            <label>
                                                <input type="radio" name="status" value="Makanan"
                                                <?php if($p->status=='0') : echo 'checked'; ?><?php endif; ?>> Belum Lunas <br/> 
                                            </label>
                                                </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" value="Minuman"
                                                        <?php if($p->status=='1') : echo 'checked'; ?><?php endif; ?>> Lunas <br/> 
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                 @endforeach   
                                        </div>
                                    </form>
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
