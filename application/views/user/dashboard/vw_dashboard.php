<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - TELOS | Politeknik Caltex Riau</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">TELOS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
          


            <li class="menu-item">
              <a href="dataproject" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Data Project</div>
              </a>
             
            </li>

            

            <!-- Technological -->
         
            <!-- Technological -->
            <li class="menu-item">
              <a href="technologi" class="menu-link">
                <i class="menu-icon tf-icons bx bx-card"></i>
                <div data-i18n="Tables"> Technological</div>
              </a>
            </li>

             <!-- Economic -->
             <li class="menu-item">
              <a href="economic" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dollar-circle"></i>
                <div data-i18n="Tables"> Economic</div>
              </a>
            </li>

             <!-- Legal -->
             <li class="menu-item">
              <a href="legal" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Tables"> Legal</div>
              </a>
            </li>

             <!-- Operational -->
             <li class="menu-item">
              <a href="operational" class="menu-link">
                <i class="menu-icon tf-icons bx bx-customize"></i>
                <div data-i18n="Tables"> Operational</div>
              </a>
            </li>

             <!-- Schedule -->
             <li class="menu-item">
              <a href="schedule" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div data-i18n="Tables"> Schedule</div>
              </a>
            </li>

             <!-- Summary-->
             <li class="menu-item">
              <a href="summary" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Tables"> Summary</div>
              </a>
            </li>
            <!-- Misc -->
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
             

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            
            <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
      
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations BrandQu! 😃</h5>
                        <p class="mb-4">You have done <span class="fw-bold">100%</span> of the feasibility test. Your business is worth implementing.</p>
            
    
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Schedule</span>
                        <h3 class="card-title mb-2">00:00</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> 100%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Legal</span>
                        <h3 class="card-title text-nowrap mb-1">00:00</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> 100%</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-8">
                      <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                      <div id="totalRevenueChart" class="px-2" style="min-height: 315px;"><div id="apexchartsjgz34mol" class="apexcharts-canvas apexchartsjgz34mol apexcharts-theme-light" style="width: 409px; height: 300px;"><svg id="SvgjsSvg2873" width="409" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="409" height="300"><div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;"><div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div><div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div></div><style type="text/css">
                  
                  .apexcharts-legend {
                    display: flex;
                    overflow: auto;
                    padding: 0 10px;
                  }
                  .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                    flex-wrap: wrap
                  }
                  .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                    flex-direction: column;
                    bottom: 0;
                  }
                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                    justify-content: flex-start;
                  }
                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                    justify-content: center;
                  }
                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                    justify-content: flex-end;
                  }
                  .apexcharts-legend-series {
                    cursor: pointer;
                    line-height: normal;
                  }
                  .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
                    display: flex;
                    align-items: center;
                  }
                  .apexcharts-legend-text {
                    position: relative;
                    font-size: 14px;
                  }
                  .apexcharts-legend-text *, .apexcharts-legend-marker * {
                    pointer-events: none;
                  }
                  .apexcharts-legend-marker {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    margin-right: 3px;
                    border-style: solid;
                  }
                    
                  .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                    display: inline-block;
                  }
                  .apexcharts-legend-series.apexcharts-no-click {
                    cursor: auto;
                  }
                  .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                    display: none !important;
                  }
                  .apexcharts-inactive-legend {
                    opacity: 0.45;
                  }
                </style>
              </foreignObject> <g id="SvgjsG2875" class="apexcharts-inner apexcharts-graphical" transform="translate(53.796875, 51)"><defs id="SvgjsDefs2874"><linearGradient id="SvgjsLinearGradient2879" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2880" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2881" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2882" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskjgz34mol"><rect id="SvgjsRect2884" width="345.203125" height="223.73" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskjgz34mol"></clipPath><clipPath id="nonForecastMaskjgz34mol"></clipPath><clipPath id="gridRectMarkerMaskjgz34mol"><rect id="SvgjsRect2885" width="339.203125" height="221.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2883" width="22.985357142857143" height="217.73" x="149.1138364955357" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2879)" class="apexcharts-xcrosshairs" y2="217.73" filter="none" fill-opacity="0.9" x1="149.1138364955357" x2="149.1138364955357"></rect><g id="SvgjsG2905" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2906" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2908" font-family="Helvetica, Arial, sans-serif" x="23.943080357142858" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2909">Jan</tspan><title>Jan</title></text><text id="SvgjsText2911" font-family="Helvetica, Arial, sans-serif" x="71.82924107142857" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2912">Feb</tspan><title>Feb</title></text><text id="SvgjsText2914" font-family="Helvetica, Arial, sans-serif" x="119.71540178571428" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2915">Mar</tspan><title>Mar</title></text><text id="SvgjsText2917" font-family="Helvetica, Arial, sans-serif" x="167.6015625" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2918">Apr</tspan><title>Apr</title></text><text id="SvgjsText2920" font-family="Helvetica, Arial, sans-serif" x="215.48772321428572" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2921">May</tspan><title>May</title></text><text id="SvgjsText2923" font-family="Helvetica, Arial, sans-serif" x="263.37388392857144" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2924">Jun</tspan><title>Jun</title></text><text id="SvgjsText2926" font-family="Helvetica, Arial, sans-serif" x="311.26004464285717" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2927">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG2942" class="apexcharts-grid"><g id="SvgjsG2943" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2945" x1="0" y1="0" x2="335.203125" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2946" x1="0" y1="43.546" x2="335.203125" y2="43.546" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2947" x1="0" y1="87.092" x2="335.203125" y2="87.092" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2948" x1="0" y1="130.638" x2="335.203125" y2="130.638" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2949" x1="0" y1="174.184" x2="335.203125" y2="174.184" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2950" x1="0" y1="217.73" x2="335.203125" y2="217.73" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2944" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2952" x1="0" y1="217.73" x2="335.203125" y2="217.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2951" x1="0" y1="1" x2="0" y2="217.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2886" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2887" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0"><path id="SvgjsPath2889" d="M 12.450401785714286 119.638L 12.450401785714286 63.255200000000016Q 12.450401785714286 52.255200000000016 23.450401785714284 52.255200000000016L 18.43575892857143 52.255200000000016Q 29.43575892857143 52.255200000000016 29.43575892857143 63.255200000000016L 29.43575892857143 63.255200000000016L 29.43575892857143 119.638Q 29.43575892857143 130.638 18.43575892857143 130.638L 23.450401785714284 130.638Q 12.450401785714286 130.638 12.450401785714286 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 12.450401785714286 119.638L 12.450401785714286 63.255200000000016Q 12.450401785714286 52.255200000000016 23.450401785714284 52.255200000000016L 18.43575892857143 52.255200000000016Q 29.43575892857143 52.255200000000016 29.43575892857143 63.255200000000016L 29.43575892857143 63.255200000000016L 29.43575892857143 119.638Q 29.43575892857143 130.638 18.43575892857143 130.638L 23.450401785714284 130.638Q 12.450401785714286 130.638 12.450401785714286 119.638z" pathFrom="M 12.450401785714286 119.638L 12.450401785714286 119.638L 29.43575892857143 119.638L 29.43575892857143 119.638L 29.43575892857143 119.638L 29.43575892857143 119.638L 29.43575892857143 119.638L 12.450401785714286 119.638" cy="52.255200000000016" cx="57.3365625" j="0" val="18" barHeight="78.38279999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2890" d="M 60.3365625 119.638L 60.3365625 111.15580000000001Q 60.3365625 100.15580000000001 71.3365625 100.15580000000001L 66.32191964285714 100.15580000000001Q 77.32191964285714 100.15580000000001 77.32191964285714 111.15580000000001L 77.32191964285714 111.15580000000001L 77.32191964285714 119.638Q 77.32191964285714 130.638 66.32191964285714 130.638L 71.3365625 130.638Q 60.3365625 130.638 60.3365625 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 60.3365625 119.638L 60.3365625 111.15580000000001Q 60.3365625 100.15580000000001 71.3365625 100.15580000000001L 66.32191964285714 100.15580000000001Q 77.32191964285714 100.15580000000001 77.32191964285714 111.15580000000001L 77.32191964285714 111.15580000000001L 77.32191964285714 119.638Q 77.32191964285714 130.638 66.32191964285714 130.638L 71.3365625 130.638Q 60.3365625 130.638 60.3365625 119.638z" pathFrom="M 60.3365625 119.638L 60.3365625 119.638L 77.32191964285714 119.638L 77.32191964285714 119.638L 77.32191964285714 119.638L 77.32191964285714 119.638L 77.32191964285714 119.638L 60.3365625 119.638" cy="100.15580000000001" cx="105.22272321428571" j="1" val="7" barHeight="30.482199999999995" barWidth="22.985357142857143"></path><path id="SvgjsPath2891" d="M 108.22272321428571 119.638L 108.22272321428571 76.31900000000002Q 108.22272321428571 65.31900000000002 119.22272321428571 65.31900000000002L 114.20808035714285 65.31900000000002Q 125.20808035714285 65.31900000000002 125.20808035714285 76.31900000000002L 125.20808035714285 76.31900000000002L 125.20808035714285 119.638Q 125.20808035714285 130.638 114.20808035714285 130.638L 119.22272321428571 130.638Q 108.22272321428571 130.638 108.22272321428571 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 108.22272321428571 119.638L 108.22272321428571 76.31900000000002Q 108.22272321428571 65.31900000000002 119.22272321428571 65.31900000000002L 114.20808035714285 65.31900000000002Q 125.20808035714285 65.31900000000002 125.20808035714285 76.31900000000002L 125.20808035714285 76.31900000000002L 125.20808035714285 119.638Q 125.20808035714285 130.638 114.20808035714285 130.638L 119.22272321428571 130.638Q 108.22272321428571 130.638 108.22272321428571 119.638z" pathFrom="M 108.22272321428571 119.638L 108.22272321428571 119.638L 125.20808035714285 119.638L 125.20808035714285 119.638L 125.20808035714285 119.638L 125.20808035714285 119.638L 125.20808035714285 119.638L 108.22272321428571 119.638" cy="65.31900000000002" cx="153.10888392857143" j="2" val="15" barHeight="65.31899999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2892" d="M 156.10888392857143 119.638L 156.10888392857143 15.35460000000002Q 156.10888392857143 4.354600000000019 167.10888392857143 4.354600000000019L 162.09424107142857 4.354600000000019Q 173.09424107142857 4.354600000000019 173.09424107142857 15.35460000000002L 173.09424107142857 15.35460000000002L 173.09424107142857 119.638Q 173.09424107142857 130.638 162.09424107142857 130.638L 167.10888392857143 130.638Q 156.10888392857143 130.638 156.10888392857143 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 156.10888392857143 119.638L 156.10888392857143 15.35460000000002Q 156.10888392857143 4.354600000000019 167.10888392857143 4.354600000000019L 162.09424107142857 4.354600000000019Q 173.09424107142857 4.354600000000019 173.09424107142857 15.35460000000002L 173.09424107142857 15.35460000000002L 173.09424107142857 119.638Q 173.09424107142857 130.638 162.09424107142857 130.638L 167.10888392857143 130.638Q 156.10888392857143 130.638 156.10888392857143 119.638z" pathFrom="M 156.10888392857143 119.638L 156.10888392857143 119.638L 173.09424107142857 119.638L 173.09424107142857 119.638L 173.09424107142857 119.638L 173.09424107142857 119.638L 173.09424107142857 119.638L 156.10888392857143 119.638" cy="4.354600000000019" cx="200.99504464285715" j="3" val="29" barHeight="126.28339999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2893" d="M 203.99504464285715 119.638L 203.99504464285715 63.255200000000016Q 203.99504464285715 52.255200000000016 214.99504464285715 52.255200000000016L 209.9804017857143 52.255200000000016Q 220.9804017857143 52.255200000000016 220.9804017857143 63.255200000000016L 220.9804017857143 63.255200000000016L 220.9804017857143 119.638Q 220.9804017857143 130.638 209.9804017857143 130.638L 214.99504464285715 130.638Q 203.99504464285715 130.638 203.99504464285715 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 203.99504464285715 119.638L 203.99504464285715 63.255200000000016Q 203.99504464285715 52.255200000000016 214.99504464285715 52.255200000000016L 209.9804017857143 52.255200000000016Q 220.9804017857143 52.255200000000016 220.9804017857143 63.255200000000016L 220.9804017857143 63.255200000000016L 220.9804017857143 119.638Q 220.9804017857143 130.638 209.9804017857143 130.638L 214.99504464285715 130.638Q 203.99504464285715 130.638 203.99504464285715 119.638z" pathFrom="M 203.99504464285715 119.638L 203.99504464285715 119.638L 220.9804017857143 119.638L 220.9804017857143 119.638L 220.9804017857143 119.638L 220.9804017857143 119.638L 220.9804017857143 119.638L 203.99504464285715 119.638" cy="52.255200000000016" cx="248.88120535714287" j="4" val="18" barHeight="78.38279999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2894" d="M 251.88120535714287 119.638L 251.88120535714287 89.3828Q 251.88120535714287 78.3828 262.8812053571429 78.3828L 257.86656250000004 78.3828Q 268.86656250000004 78.3828 268.86656250000004 89.3828L 268.86656250000004 89.3828L 268.86656250000004 119.638Q 268.86656250000004 130.638 257.86656250000004 130.638L 262.8812053571429 130.638Q 251.88120535714287 130.638 251.88120535714287 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 251.88120535714287 119.638L 251.88120535714287 89.3828Q 251.88120535714287 78.3828 262.8812053571429 78.3828L 257.86656250000004 78.3828Q 268.86656250000004 78.3828 268.86656250000004 89.3828L 268.86656250000004 89.3828L 268.86656250000004 119.638Q 268.86656250000004 130.638 257.86656250000004 130.638L 262.8812053571429 130.638Q 251.88120535714287 130.638 251.88120535714287 119.638z" pathFrom="M 251.88120535714287 119.638L 251.88120535714287 119.638L 268.86656250000004 119.638L 268.86656250000004 119.638L 268.86656250000004 119.638L 268.86656250000004 119.638L 268.86656250000004 119.638L 251.88120535714287 119.638" cy="78.3828" cx="296.76736607142857" j="5" val="12" barHeight="52.255199999999995" barWidth="22.985357142857143"></path><path id="SvgjsPath2895" d="M 299.76736607142857 119.638L 299.76736607142857 102.44660000000002Q 299.76736607142857 91.44660000000002 310.76736607142857 91.44660000000002L 305.7527232142857 91.44660000000002Q 316.7527232142857 91.44660000000002 316.7527232142857 102.44660000000002L 316.7527232142857 102.44660000000002L 316.7527232142857 119.638Q 316.7527232142857 130.638 305.7527232142857 130.638L 310.76736607142857 130.638Q 299.76736607142857 130.638 299.76736607142857 119.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 299.76736607142857 119.638L 299.76736607142857 102.44660000000002Q 299.76736607142857 91.44660000000002 310.76736607142857 91.44660000000002L 305.7527232142857 91.44660000000002Q 316.7527232142857 91.44660000000002 316.7527232142857 102.44660000000002L 316.7527232142857 102.44660000000002L 316.7527232142857 119.638Q 316.7527232142857 130.638 305.7527232142857 130.638L 310.76736607142857 130.638Q 299.76736607142857 130.638 299.76736607142857 119.638z" pathFrom="M 299.76736607142857 119.638L 299.76736607142857 119.638L 316.7527232142857 119.638L 316.7527232142857 119.638L 316.7527232142857 119.638L 316.7527232142857 119.638L 316.7527232142857 119.638L 299.76736607142857 119.638" cy="91.44660000000002" cx="344.6535267857143" j="6" val="9" barHeight="39.191399999999994" barWidth="22.985357142857143"></path></g><g id="SvgjsG2896" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1"><path id="SvgjsPath2898" d="M 12.450401785714286 152.638L 12.450401785714286 187.24779999999998Q 12.450401785714286 198.24779999999998 23.450401785714284 198.24779999999998L 18.43575892857143 198.24779999999998Q 29.43575892857143 198.24779999999998 29.43575892857143 187.24779999999998L 29.43575892857143 187.24779999999998L 29.43575892857143 152.638Q 29.43575892857143 141.638 18.43575892857143 141.638L 23.450401785714284 141.638Q 12.450401785714286 141.638 12.450401785714286 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 12.450401785714286 152.638L 12.450401785714286 187.24779999999998Q 12.450401785714286 198.24779999999998 23.450401785714284 198.24779999999998L 18.43575892857143 198.24779999999998Q 29.43575892857143 198.24779999999998 29.43575892857143 187.24779999999998L 29.43575892857143 187.24779999999998L 29.43575892857143 152.638Q 29.43575892857143 141.638 18.43575892857143 141.638L 23.450401785714284 141.638Q 12.450401785714286 141.638 12.450401785714286 152.638z" pathFrom="M 12.450401785714286 152.638L 12.450401785714286 152.638L 29.43575892857143 152.638L 29.43575892857143 152.638L 29.43575892857143 152.638L 29.43575892857143 152.638L 29.43575892857143 152.638L 12.450401785714286 152.638" cy="176.24779999999998" cx="57.3365625" j="0" val="-13" barHeight="-56.60979999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2899" d="M 60.3365625 152.638L 60.3365625 209.0208Q 60.3365625 220.0208 71.3365625 220.0208L 66.32191964285714 220.0208Q 77.32191964285714 220.0208 77.32191964285714 209.0208L 77.32191964285714 209.0208L 77.32191964285714 152.638Q 77.32191964285714 141.638 66.32191964285714 141.638L 71.3365625 141.638Q 60.3365625 141.638 60.3365625 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 60.3365625 152.638L 60.3365625 209.0208Q 60.3365625 220.0208 71.3365625 220.0208L 66.32191964285714 220.0208Q 77.32191964285714 220.0208 77.32191964285714 209.0208L 77.32191964285714 209.0208L 77.32191964285714 152.638Q 77.32191964285714 141.638 66.32191964285714 141.638L 71.3365625 141.638Q 60.3365625 141.638 60.3365625 152.638z" pathFrom="M 60.3365625 152.638L 60.3365625 152.638L 77.32191964285714 152.638L 77.32191964285714 152.638L 77.32191964285714 152.638L 77.32191964285714 152.638L 77.32191964285714 152.638L 60.3365625 152.638" cy="198.0208" cx="105.22272321428571" j="1" val="-18" barHeight="-78.38279999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2900" d="M 108.22272321428571 152.638L 108.22272321428571 169.8294Q 108.22272321428571 180.8294 119.22272321428571 180.8294L 114.20808035714285 180.8294Q 125.20808035714285 180.8294 125.20808035714285 169.8294L 125.20808035714285 169.8294L 125.20808035714285 152.638Q 125.20808035714285 141.638 114.20808035714285 141.638L 119.22272321428571 141.638Q 108.22272321428571 141.638 108.22272321428571 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 108.22272321428571 152.638L 108.22272321428571 169.8294Q 108.22272321428571 180.8294 119.22272321428571 180.8294L 114.20808035714285 180.8294Q 125.20808035714285 180.8294 125.20808035714285 169.8294L 125.20808035714285 169.8294L 125.20808035714285 152.638Q 125.20808035714285 141.638 114.20808035714285 141.638L 119.22272321428571 141.638Q 108.22272321428571 141.638 108.22272321428571 152.638z" pathFrom="M 108.22272321428571 152.638L 108.22272321428571 152.638L 125.20808035714285 152.638L 125.20808035714285 152.638L 125.20808035714285 152.638L 125.20808035714285 152.638L 125.20808035714285 152.638L 108.22272321428571 152.638" cy="158.8294" cx="153.10888392857143" j="2" val="-9" barHeight="-39.191399999999994" barWidth="22.985357142857143"></path><path id="SvgjsPath2901" d="M 156.10888392857143 152.638L 156.10888392857143 191.6024Q 156.10888392857143 202.6024 167.10888392857143 202.6024L 162.09424107142857 202.6024Q 173.09424107142857 202.6024 173.09424107142857 191.6024L 173.09424107142857 191.6024L 173.09424107142857 152.638Q 173.09424107142857 141.638 162.09424107142857 141.638L 167.10888392857143 141.638Q 156.10888392857143 141.638 156.10888392857143 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 156.10888392857143 152.638L 156.10888392857143 191.6024Q 156.10888392857143 202.6024 167.10888392857143 202.6024L 162.09424107142857 202.6024Q 173.09424107142857 202.6024 173.09424107142857 191.6024L 173.09424107142857 191.6024L 173.09424107142857 152.638Q 173.09424107142857 141.638 162.09424107142857 141.638L 167.10888392857143 141.638Q 156.10888392857143 141.638 156.10888392857143 152.638z" pathFrom="M 156.10888392857143 152.638L 156.10888392857143 152.638L 173.09424107142857 152.638L 173.09424107142857 152.638L 173.09424107142857 152.638L 173.09424107142857 152.638L 173.09424107142857 152.638L 156.10888392857143 152.638" cy="180.6024" cx="200.99504464285715" j="3" val="-14" barHeight="-60.96439999999999" barWidth="22.985357142857143"></path><path id="SvgjsPath2902" d="M 203.99504464285715 152.638L 203.99504464285715 152.411Q 203.99504464285715 163.411 214.99504464285715 163.411L 209.9804017857143 163.411Q 220.9804017857143 163.411 220.9804017857143 152.411L 220.9804017857143 152.411L 220.9804017857143 152.638Q 220.9804017857143 141.638 209.9804017857143 141.638L 214.99504464285715 141.638Q 203.99504464285715 141.638 203.99504464285715 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 203.99504464285715 152.638L 203.99504464285715 152.411Q 203.99504464285715 163.411 214.99504464285715 163.411L 209.9804017857143 163.411Q 220.9804017857143 163.411 220.9804017857143 152.411L 220.9804017857143 152.411L 220.9804017857143 152.638Q 220.9804017857143 141.638 209.9804017857143 141.638L 214.99504464285715 141.638Q 203.99504464285715 141.638 203.99504464285715 152.638z" pathFrom="M 203.99504464285715 152.638L 203.99504464285715 152.638L 220.9804017857143 152.638L 220.9804017857143 152.638L 220.9804017857143 152.638L 220.9804017857143 152.638L 220.9804017857143 152.638L 203.99504464285715 152.638" cy="141.411" cx="248.88120535714287" j="4" val="-5" barHeight="-21.772999999999996" barWidth="22.985357142857143"></path><path id="SvgjsPath2903" d="M 251.88120535714287 152.638L 251.88120535714287 204.6662Q 251.88120535714287 215.6662 262.8812053571429 215.6662L 257.86656250000004 215.6662Q 268.86656250000004 215.6662 268.86656250000004 204.6662L 268.86656250000004 204.6662L 268.86656250000004 152.638Q 268.86656250000004 141.638 257.86656250000004 141.638L 262.8812053571429 141.638Q 251.88120535714287 141.638 251.88120535714287 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 251.88120535714287 152.638L 251.88120535714287 204.6662Q 251.88120535714287 215.6662 262.8812053571429 215.6662L 257.86656250000004 215.6662Q 268.86656250000004 215.6662 268.86656250000004 204.6662L 268.86656250000004 204.6662L 268.86656250000004 152.638Q 268.86656250000004 141.638 257.86656250000004 141.638L 262.8812053571429 141.638Q 251.88120535714287 141.638 251.88120535714287 152.638z" pathFrom="M 251.88120535714287 152.638L 251.88120535714287 152.638L 268.86656250000004 152.638L 268.86656250000004 152.638L 268.86656250000004 152.638L 268.86656250000004 152.638L 268.86656250000004 152.638L 251.88120535714287 152.638" cy="193.6662" cx="296.76736607142857" j="5" val="-17" barHeight="-74.0282" barWidth="22.985357142857143"></path><path id="SvgjsPath2904" d="M 299.76736607142857 152.638L 299.76736607142857 195.957Q 299.76736607142857 206.957 310.76736607142857 206.957L 305.7527232142857 206.957Q 316.7527232142857 206.957 316.7527232142857 195.957L 316.7527232142857 195.957L 316.7527232142857 152.638Q 316.7527232142857 141.638 305.7527232142857 141.638L 310.76736607142857 141.638Q 299.76736607142857 141.638 299.76736607142857 152.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjgz34mol)" pathTo="M 299.76736607142857 152.638L 299.76736607142857 195.957Q 299.76736607142857 206.957 310.76736607142857 206.957L 305.7527232142857 206.957Q 316.7527232142857 206.957 316.7527232142857 195.957L 316.7527232142857 195.957L 316.7527232142857 152.638Q 316.7527232142857 141.638 305.7527232142857 141.638L 310.76736607142857 141.638Q 299.76736607142857 141.638 299.76736607142857 152.638z" pathFrom="M 299.76736607142857 152.638L 299.76736607142857 152.638L 316.7527232142857 152.638L 316.7527232142857 152.638L 316.7527232142857 152.638L 316.7527232142857 152.638L 316.7527232142857 152.638L 299.76736607142857 152.638" cy="184.957" cx="344.6535267857143" j="6" val="-15" barHeight="-65.31899999999999" barWidth="22.985357142857143"></path></g><g id="SvgjsG2888" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2897" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2953" x1="0" y1="0" x2="335.203125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2954" x1="0" y1="0" x2="335.203125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2955" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2956" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2957" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2928" class="apexcharts-yaxis" rel="0" transform="translate(15.796875, 0)"><g id="SvgjsG2929" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2930" font-family="Helvetica, Arial, sans-serif" x="20" y="52.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2931">30</tspan><title>30</title></text><text id="SvgjsText2932" font-family="Helvetica, Arial, sans-serif" x="20" y="96.04599999999999" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2933">20</tspan><title>20</title></text><text id="SvgjsText2934" font-family="Helvetica, Arial, sans-serif" x="20" y="139.59199999999998" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2935">10</tspan><title>10</title></text><text id="SvgjsText2936" font-family="Helvetica, Arial, sans-serif" x="20" y="183.13799999999998" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2937">0</tspan><title>0</title></text><text id="SvgjsText2938" font-family="Helvetica, Arial, sans-serif" x="20" y="226.68399999999997" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2939">-10</tspan><title>-10</title></text><text id="SvgjsText2940" font-family="Helvetica, Arial, sans-serif" x="20" y="270.22999999999996" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2941">-20</tspan><title>-20</title></text></g></g><g id="SvgjsG2876" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 214.403px; top: 198.011px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Apr</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(3, 195, 236, 0.85);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2020: </span><span class="apexcharts-tooltip-text-y-value">-14</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(3, 195, 236, 0.85);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2020: </span><span class="apexcharts-tooltip-text-y-value">-14</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 426px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="col-md-4">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              2022
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId" style="">
                              <a class="dropdown-item" href="javascript:void(0);">2023</a>
                              <a class="dropdown-item" href="javascript:void(0);">2022</a>
                              <a class="dropdown-item" href="javascript:void(0);">2021</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="growthChart" style="min-height: 154.875px;"><div id="apexchartsbwhydhyo" class="apexcharts-canvas apexchartsbwhydhyo apexcharts-theme-light" style="width: 213px; height: 154.875px;"><svg id="SvgjsSvg2958" width="213" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2960" class="apexcharts-inner apexcharts-graphical" transform="translate(-0.5, -25)"><defs id="SvgjsDefs2959"><clipPath id="gridRectMaskbwhydhyo"><rect id="SvgjsRect2962" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbwhydhyo"></clipPath><clipPath id="nonForecastMaskbwhydhyo"></clipPath><clipPath id="gridRectMarkerMaskbwhydhyo"><rect id="SvgjsRect2963" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2968" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop2969" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop><stop id="SvgjsStop2970" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop2971" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2979" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop2980" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop><stop id="SvgjsStop2981" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop2982" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2964" class="apexcharts-radialbar"><g id="SvgjsG2965"><g id="SvgjsG2966" class="apexcharts-tracks"><g id="SvgjsG2967" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path></g></g><g id="SvgjsG2973"><g id="SvgjsG2978" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0"><path id="SvgjsPath2983" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2979)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path></g><circle id="SvgjsCircle2974" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2975" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2976" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText2977" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g></g></g></g><line id="SvgjsLine2984" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2985" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2961" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                      <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>
            
                      <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2022</small>
                            <h6 class="mb-0">$32.5k</h6>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2021</small>
                            <h6 class="mb-0">$41.2k</h6>
                          </div>
                        </div>
                      </div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 214px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Economic</span>
                        <h3 class="card-title text-nowrap mb-2">IDR500</h3>
                        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> 82%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Technological</span>
                        <h3 class="card-title mb-2">$14,857</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                      </div>
                    </div>
                  </div>
                  <!-- </div>
                <div class="row"> -->
                  <div class="col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-2">Operational</h5>
                              <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                            </div>
                            <div class="mt-sm-auto">
                              <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                              <h3 class="mb-0">$84,686k</h3>
                            </div>
                          </div>
                          <div id="profileReportChart" style="min-height: 80px;"><div id="apexchartsue23o8vx" class="apexcharts-canvas apexchartsue23o8vx apexcharts-theme-light" style="width: 124px; height: 80px;"><svg id="SvgjsSvg2987" width="124" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2989" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2988"><clipPath id="gridRectMaskue23o8vx"><rect id="SvgjsRect2994" width="125" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskue23o8vx"></clipPath><clipPath id="nonForecastMaskue23o8vx"></clipPath><clipPath id="gridRectMarkerMaskue23o8vx"><rect id="SvgjsRect2995" width="120" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter3001" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood3002" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood3002Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite3003" in="SvgjsFeFlood3002Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3003Out"></feComposite><feOffset id="SvgjsFeOffset3004" dx="5" dy="10" result="SvgjsFeOffset3004Out" in="SvgjsFeComposite3003Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur3005" stdDeviation="3 " result="SvgjsFeGaussianBlur3005Out" in="SvgjsFeOffset3004Out"></feGaussianBlur><feMerge id="SvgjsFeMerge3006" result="SvgjsFeMerge3006Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode3007" in="SvgjsFeGaussianBlur3005Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode3008" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend3009" in="SourceGraphic" in2="SvgjsFeMerge3006Out" mode="normal" result="SvgjsFeBlend3009Out"></feBlend></filter></defs><line id="SvgjsLine2993" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG3010" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3011" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3019" class="apexcharts-grid"><g id="SvgjsG3020" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3022" x1="0" y1="0" x2="116" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3023" x1="0" y1="20" x2="116" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3024" x1="0" y1="40" x2="116" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3025" x1="0" y1="60" x2="116" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3026" x1="0" y1="80" x2="116" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3021" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3028" x1="0" y1="80" x2="116" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3027" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2996" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2997" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3000" d="M 0 76C 8.12 76 15.08 12 23.2 12C 31.32 12 38.28 62 46.4 62C 54.519999999999996 62 61.48 22 69.6 22C 77.72 22 84.67999999999999 38 92.8 38C 100.91999999999999 38 107.88 6 115.99999999999999 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskue23o8vx)" filter="url(#SvgjsFilter3001)" pathTo="M 0 76C 8.12 76 15.08 12 23.2 12C 31.32 12 38.28 62 46.4 62C 54.519999999999996 62 61.48 22 69.6 22C 77.72 22 84.67999999999999 38 92.8 38C 100.91999999999999 38 107.88 6 115.99999999999999 6" pathFrom="M -1 120L -1 120L 23.2 120L 46.4 120L 69.6 120L 92.8 120L 115.99999999999999 120"></path><g id="SvgjsG2998" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3034" r="0" cx="0" cy="0" class="apexcharts-marker whmvl1hjg no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2999" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3029" x1="0" y1="0" x2="116" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3030" x1="0" y1="0" x2="116" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3031" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3032" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3033" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2992" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3018" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2990" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 259px; height: 116px;"></div></div><div class="contract-trigger"></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                      document.write(new Date().getFullYear());
                  </script>
                  , TELOS | Politeknik Caltex Riau
                  
                </div>
                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
