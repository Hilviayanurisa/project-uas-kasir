@extends('master')

@section('content')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Edit Menu
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
								@foreach($allmenu as $p)
								<form action="{{url('/allmenu/update')}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" required="required" value="{{ $p->name }}">
        </div>
        <div class="form-group">
            <label>Type</label>
                <div class="radio" name="type" required="required">
            <label>
                <input type="radio" name="type" value="Makanan"
                <?php if($p->type=='Makanan') : echo 'checked'; ?><?php endif; ?>> Makanan <br/> 
            </label>
            </div>
            <div class="radio">
            <label>
                <input type="radio" name="type" value="Minuman"
                <?php if($p->type=='Minuman') : echo 'checked'; ?><?php endif; ?>> Minuman <br/> 
            </label>
            </div>
        </div>
        <div class="form-group">
            <label>Price</label>
                <input class="form-control" name="price" required="required" value="{{ $p->price }}">
        </div>    
        <button type="submit"  class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
	</form>
	@endforeach
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

