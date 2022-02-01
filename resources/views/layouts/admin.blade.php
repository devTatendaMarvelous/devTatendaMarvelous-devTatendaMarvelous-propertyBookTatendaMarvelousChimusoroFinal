<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

     <!-- page specific plugin styles -->
     <link rel="stylesheet" href="{{asset('css/jquery-ui.custom.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/chosen.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker3.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/bootstrap-timepicker.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/daterangepicker.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/bootstrap-colorpicker.min.css')}}" />

     <!-- text fonts -->
     <link rel="stylesheet" href="{{asset('css/fonts.googleapis.com.css')}}" />

     <!-- ace styles -->
     <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

     <link rel="stylesheet" href="{{asset('css/ace-skins.min.css')}}" />
     <link rel="stylesheet" href="{{asset('css/ace-rtl.min.css')}}" />

     <script src="{{asset('ckeditor-dev-major/ckeditor.js')}}"></script>
     <script src="{{asset('ckeditor-dev-major/samples/js/sample.js')}}"></script>

     <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
     
</head>
<body class="no-skin">

     <div id="navbar" class="navbar navbar-default ace-save-state">
          <div class="navbar-container ace-save-state" id="navbar-container">
	
	<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
		<span class="sr-only">Toggle sidebar</span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>
	</button>

	<div class="navbar-header pull-left">
		<a href="/home" class="navbar-brand">
			<small>
				<i class="fa fa-home"></i>
				{{config('app.name')}}
			</small>
		</a>
	</div>

	<div class="navbar-buttons navbar-header pull-right" role="navigation">
		<ul class="nav ace-nav">

			<li class="light-blue dropdown-modal">
			
				<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					<span class="user-info">
						<small>Welcome,</small>
						 {{ Auth::user()->name }}
					</span>

					<i class="ace-icon fa fa-caret-down"></i>
				</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
				
					<li class="divider"></li>

					<li>
						
						<a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="ace-icon fa fa-power-off"></i> {{ __('Logout') }}
                              </a>
						  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div><!-- /.navbar-container -->
     </div>

     <div class="main-container ace-save-state" id="main-container">
          <script type="text/javascript">
               try {
                    ace.settings.loadState('main-container')
               } catch (e) {}
          </script>
          <!------------ Side bar ------------------->
          <div id="sidebar" class="sidebar   responsive ace-save-state">
	<script type="text/javascript">
		try {
			ace.settings.loadState('sidebar')
		} catch (e) {}
	</script>




	<ul class="nav nav-list">
		<li class="active">
			<a href="#">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="{{route('about')}}">
				<i class="menu-icon fa fa-care t-right"></i>
				 About Us
			</a>
		</li>

		<li class="">
			<a href="{{ route('service') }}">
				<i class="menu-icon fa fa-care t-right"></i>
				 Services
			</a>
		</li>

		<li class="">
			<a href="#">
				<i class="menu-icon fa fa-care t-right"></i>
				Why Choose Us 
			</a>
		</li>
		<li class="">
			<a href="#">
				<i class="menu-icon fa fa-care t-right"></i>
				 About Us
			</a>
		</li>
		<li class="">
			<a href="#">
				<i class="menu-icon fa fa-care t-right"></i>
				 About Us
			</a>
		</li>
		<li class="">
			<a href="#">
				<i class="menu-icon fa fa-care t-right"></i>
				 About Us
			</a>
		</li>
		








	</ul><!-- /.nav-list -->


	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
          <!------------ end side bar ----------------->

         
			<div class="main-content">



				<div class="main-content-inner">
					

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">


								<div class="row">


									<div class="vspace-12-sm"></div>

									<div class="row">
										<div class="col-xs-12">
											<!-- PAGE CONTENT BEGINS -->


                                                  @yield('content')


											<!-- PAGE CONTENT ENDS -->
										</div><!-- /.col -->
									</div><!-- /.row -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>








			</div><!-- /.main-content -->


          
          {{-- footer --}}
          <div class="footer">
     <div class="footer-inner">
          <div class="footer-content">
               <span class="bigger-120">
                    <span class="blue bolder">Designed by</span>
                    Tatenda Marvelous Chimusoro &copy; 2022
               </span>

               &nbsp; &nbsp;
               
          </div>
     </div>
</div>
		<!-- basic scripts -->

	</div>
		<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement) document.write("<script src='{{asset('js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
		</script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		
		<script src="{{asset('js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('js/jquery.sparkline.index.min.js')}}"></script>
		<script src="{{asset('js/jquery.flot.min.js')}}"></script>
		<script src="{{asset('js/jquery.flot.pie.min.js')}}"></script>
		<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{asset('js/ace-elements.min.js')}}"></script>
		<script src="{{asset('js/ace.min.js')}}"></script>


	</body>

	</html>