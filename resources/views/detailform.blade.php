@extends('master')

@section('content')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tambah Pesanan Baru
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
                                    <form role="form" method="post" action="{{url('/detail/store')}}" entype="multipart/form-data">
                                        {{ csrf_field ()}}
            
                                        <div class="form-group">
                                            <label>Id Order</label>
                                            <select class="form-control" name="id_orders_fk" required="required">
                                                <option value=""> Pilih Nomor Meja </option>
                                                @foreach ($order as $p)
                                                    <option value="{{$p->id}}">{{$p->table_number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Id Allmenu</label>
                                            <select class="form-control" name="id_allmenu_fk" required="required">
                                                <option value=""> Pilih Menu </option>
                                                @foreach ($allmenu as $p)
                                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" name="quantity" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Note</label>
                                            <input class="form-control" name="note" >
                                        </div>                                     
                                        <button type="submit"  class="btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
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
