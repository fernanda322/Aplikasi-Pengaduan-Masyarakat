<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="币码国际">
    <meta name="keywords" content="币码国际">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Pengaduan Masyarakat</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!-- Apex css -->
    <link href="{{asset('assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{asset('assets/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}"  rel='stylesheet' type="text/css">
    <link href="{{asset('assets/css/icons.css'  )}}" rel="stylesheet" type='text/css">
    <link href="{{asset('assets/css/flag-icon.min.css')}}" rel='stylesheet' type="text/css">
    <link href="{{asset('assets/css/style.css')}}"  rel='stylesheet'type="text/css">
    <link href="{{asset('assets/css/my.css')}}" rel='stylesheet' type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">    
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar" >
                <!-- Start Logobar -->
                <div class="logobar">
                
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                        </li>
                        <li class="active">
                            <a href="javaScript:void();">
                              <img src="{{asset('assets/images/svg-icon/dashboard.svg')}}" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                            </a>
                        </li>
                

                    <!-- bottom menu -->
                    <ul class="vertical-menu myposition">
                        <li>
                            <div class="userminiinfo2">
                                <p>IMPORTANT LINKS</p>
                            </div>
                        </li>
                        <li>
                            <a href="/home" class="myalink">
                              <img src="{{asset('assets/images/svg-icon/userinfo.svg')}}" class="img-fluid" alt="userinfo"><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/datapetugas" class="myalink">
                              <img src="{{asset('assets/images/svg-icon/userinfo.svg')}}" class="img-fluid" alt="userinfo"><span>Data Petugas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/datapenduduk" class="myalink">
                              <img src="{{asset('assets/images/svg-icon/userinfo.svg')}}" class="img-fluid" alt="userinfo"><span>Data Penduduk</span>
                            </a>
                        </li>
                        <li>
                            <a href="datakategori" class="myalink">
                              <img src="{{asset('assets/images/svg-icon/userinfo.svg')}}" class="img-fluid" alt="userinfo"><span>Data Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="aspirasimasyarakat" class="myalink">
                              <img src="{{asset('assets/images/svg-icon/userinfo.svg')}}" class="img-fluid" alt="userinfo"><span>laporan Pengaduan</span>
                            </a>
                        </li>                                      
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{asset('assets/images/logoicon.png')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('assets/images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{asset('assets/images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{asset('assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="mywelcome  ">
                            <i class="feather icon-home mydefultclr"></i>
                            <p>
                                Hello, {{Auth::user()->username}}
                            </p>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">                            
                                <li class="list-inline-item mr-3">                                 
                                </li>
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{asset('assets/images/users/profile.svg')}}" class="img-fluid" alt="profile">{{Auth::user()->username}}<span class="feather icon-chevron-down live-icon"></span>
                                            <i class="feather icon-chevron-down pull-right m-t-5"></i>
                                          </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5>{{Auth::user()->username}}</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">                                                      
                                                        <li class="media dropdown-item">
                                                            <a href="{{route('logout.logout')}}" class="profile-icon"><img src="{{asset('assets/images/svg-icon/logout.svg')}}" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">   
                <!-- Start info -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30 boxshadow">
                            <div class="card-body">
                                <div class="media mymedia">
                                    <span class="align-self-center mr-3 action-icon badge mybadge"><i class="feather icon-star mydefultclr"></i></span>
                                    <div class="media-body">
                                        <p class="mb-0">Featured Expert Advisor</p>
                                        <h5 class="mb-0 m-t-10">Choose our best performance Expert Advisor</h5>                      
                                    </div>
                                </div>           
                                    @yield('content')
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="row">
                            

                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="row">

                        </div>
                    </div>
                </div>  
                <!-- end info -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2021 Orbiter</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/vertical-menu.js')}}"></script>
    <!-- Switchery js -->
    <script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
    <!-- Apex js -->
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>    
    <!-- Slick js -->
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <!-- Custom Dashboard js -->   
    <script src="{{asset('assets/js/custom/custom-dashboard.js')}}"></script>
    <!-- Core js -->
    <script src="{{asset('assets/js/core.js')}}"></script>
    <!-- End js -->
    <script>
        function myFunction() {
          var copyText = document.getElementById("myInput");
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          document.execCommand("copy");
          
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copied: " + copyText.value;
        }
        
        function outFunc() {
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copy to clipboard";
        }
        </script>
</body>
</html>