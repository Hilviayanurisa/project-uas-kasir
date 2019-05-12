@extends('master')

@section('content')

 <!-- /. ROW  -->
 <div id="page-wrapper">
            <div id="page-inner">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

 <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green green">
                            <div class="panel-left pull-left green">
                                <i class="fa fa-cutlery fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
								<h3>Eat</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-camera fa-5x"></i>
								</div>
                                
                            <div class="panel-right">
							<h3>Selfie</h3>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-left pull-left red">
                                <i class="fa fa-heart fa-5x"></i>
                               
                            </div>
                            <div class="panel-right">
							 <h3>Love </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-left pull-left brown">
                                <i class="fa fa-repeat fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
							<h3>Reapet</h3>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
				
@endsection

