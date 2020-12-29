<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | Earsip</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- DATERANGE -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
    <style type="text/css">
        .divider{
            width: 100%;
            height: 1px;
            background-color: #bbbbbb;
            margin: 1rem 0;
        }
        #logo{
            width: 30px;
            height: 30px;
            margin-bottom: 0;
            margin-top: 0;

        }

        .panel-heading{
            height: 1px;
        }

        .thead{
            background-color:  #bbbbbb;
        }
        .main-title{
            margin: 1rem 0;
            margin-left: 25px;
            height: 1px;
        }
        #blue{
            margin: 1rem 0;
            margin-top: 1px;
            margin-left: 15px;
        }

        .b{
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="/"><img src="{{asset('admin/assets/img/Lambang_Kabupaten_Hulu_Sungai_Selatan.png')}}" alt="Logo" class="img-responsive logo" id="logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                             <!-- Authentication Links -->
                             @guest
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                             <li class="dropdown open">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> 
                                    <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i> <span>{{ __('Logout') }}</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                             </li>
                              @endguest   
                      </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="about" class=""><i class="lnr lnr-code"></i> <span>About</span></a></li>
						<li><a href="/outgoingmails" class=""><i class="fa fa-paper-plane"></i> <span>Surat Keluar</span></a></li>
                        <li><a href="/departments" class=""><i class="fa fa-building"></i> <span>Departemen</span></a></li>
                        <li><a href="contact" class=""><i class="fa fa-phone-square"></i> <span>Contact</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 528px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('content')
        <!-- END MAIN -->
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin//assets/vendor/jquery/main.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    @include('sweetalert::alert')

</body>

</html>
<script>
    $(document).ready(function(){
     $('.input-daterange').datepicker({
      todayBtn:'linked',
      format:'yyyy-mm-dd',
      autoclose:true
     });
    
     load_data();
    
     function load_data(from_date = '', to_date = '')
     {
      $('#order_table').DataTable({
       processing: true,
       serverSide: true,
       ajax: {
        url:'{{ route("outgoingmails.index") }}',
        data:{from_date:from_date, to_date:to_date}
       },
       columns: [
        {
         data:'id',
         name:'id'
        },
        {
         data:'nomor_surat',
         name:'nomor_surat'
        },
        {
         data:'alamat_penerima',
         name:'alamat_penerima'
        },
        {
         data:'tanggal',
         name:'tanggal'
        },
        {
         data:'perihal',
         name:'perihal'
        }
       ]
      });
     }
    
     $('#filter').click(function(){
      var from_date = $('#from_date').val();
      var to_date = $('#to_date').val();
      if(from_date != '' &&  to_date != '')
      {
       $('#order_table').DataTable().destroy();
       load_data(from_date, to_date);
      }
      else
      {
       alert('Both Date is required');
      }
     });
    
     $('#refresh').click(function(){
      $('#from_date').val('');
      $('#to_date').val('');
      $('#order_table').DataTable().destroy();
      load_data();
     });
    
    });
    </script>