<!doctype html>

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Sipoma</title>
    <!-- <link rel="shortcut icon" href="image/logo6.png" /> -->
    <!-- <meta name="description" content="Sipoma"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('style/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('style/favicon.ico')}}">  -->
    <!-- {{asset('style/')}} -->
    <link rel="stylesheet" href="{{asset('style/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('style/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/main"><img src="{{asset('style/images/telkom.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="/main"><img src="{{asset('style/images/logo6.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <li class="active">
                        <a href=""> <i class="menu-icon fa fa-table"></i>Daily Ticket </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                        <!-- <div>
                                    <b-form-datepicker
                                    id="datepicker-buttons"
                                    today-button
                                    reset-button
                                    close-button
                                    locale="en">
                            </b-form-datepicker>
                            </div> -->



                        <!-- <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('style/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('style/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('style/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('style/images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="/" class = "btn btn-outline-secondary rounded" role="button" aria-pressed="true"" aria-expanded="false" >
                            Exit
                            <img src="{{asset('style/images/log-out.svg')}}">
                        </a>
                        <!-- 
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div> -->
                    </div>



                    <!-- <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-5">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 class="menu-icon fa fa-dashboard"> Dashboard</h1>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="menu-icon fa fa-dashboard"></li>
                            <!-- <li class="active">Dashboard</li> -->
            <!---  </ol>
                    </div>
                </div>
            </div>  -->

            <div class="col-sm-7">
                <div class="page-header dropdown float-right">
                    <div class="form-group">
                        <div class="input-group input-medium date-picker input-daterange" data-date="20180408" data-date-format="yyyymmdd">
                            <input type="date" class="form-control" id="periode" name="periode" value="20220601" onchange="getTable();">
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="dayname">
            <h3>
                <center>LAPORAN HARIAN PENCAPAIAN TIKET (SELASA/ 31 MEI 2022)</center>
            </h3>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="10">
                        <thead>
                            <tr style="top: 0px" class="bg-primary">
                                <th rowspan="2"><center>NO</center>
                                </th>
                                <th rowspan="2">
                                    <center>TANGGAL</center>
                                </th>
                                <th rowspan="2">
                                    <center>PERNER</center>
                                </th>
                                <th rowspan="2">
                                    <center>L/P</center>
                                </th>
                                <th rowspan="2">
                                    <center>NAMA</center>
                                </th>
                                <th rowspan="2">
                                    <center>JOB</center>
                                </th>
                                <th rowspan="2">
                                    <center>DINAS</center>
                                </th>
                                <th rowspan="2">
                                    <center>STATUS</center>
                                </th>
                                <th colspan="4" class="bg-info">
                                    <center> TICKET </center>
                                </th>
                                <th colspan="3" class="bg-success">
                                    <center> CLOSE </center>
                                </th>
                                <th rowspan="2">
                                    <center>CASE > 30 MENIT</center>
                                </th>
                                <th rowspan="2">
                                    <center>CASE BY HD/TEKNISI</center>
                                </th>
                                <th colspan="3" class="bg-warning">
                                    <center> UNBIND </center>
                                </th>
                                <th colspan="3" class="bg-secondary">
                                    <center>TOTAL</center>
                                </th>
                                <th rowspan="2">
                                    <center>PERFORMANCE</center>
                                </th>

                            </tr>
                            <tr style="top: 0px">
                                <td class="bg-info"> INBOX NOSSA</td>
                                <td class="bg-info"> CARING /TIAL</td>
                                <td class="bg-info"> DRAFT TICKET</td>
                                <td class="bg-info"> PLASA</td>
                                <td class="bg-success"> LOGIC</td>
                                <td class="bg-success"> CARING</td>
                                <td class="bg-success"> GAMAS</td>
                                <!-- <th> </th>
                                <th> </th> -->
                                <td class="bg-warning"> INTERNET</td>
                                <td class="bg-warning"> IPTV</td>
                                <td class="bg-warning"> PASSWORD</td>
                                <td class="bg-secondary"> TICKET</td>
                                <td class="bg-secondary"> CLOSE</td>
                                <td class="bg-secondary"> UNBIND</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td colspan="8">
                                    <center>Total</center>
                                </td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                        </tbody>


                        <thead>
                            <tr style="top: 0px" class="bg-primary">
                                <th rowspan="2">NO</center>
                                </th>
                                <th rowspan="2">
                                    <center>TANGGAL</center>
                                </th>
                                <th rowspan="2">
                                    <center>PERNER</center>
                                </th>
                                <th rowspan="2">
                                    <center>L/P</center>
                                </th>
                                <th rowspan="2">
                                    <center>NAMA</center>
                                </th>
                                <th rowspan="2">
                                    <center>JOB</center>
                                </th>
                                <th rowspan="2">
                                    <center>DINAS</center>
                                </th>
                                <th rowspan="2">
                                    <center>STATUS</center>
                                </th>
                                <th colspan="4" class="bg-info">
                                    <center> TICKET </center>
                                </th>
                                <th colspan="3" class="bg-success">
                                    <center> CLOSE </center>
                                </th>
                                <th rowspan="2">
                                    <center>CASE > 30 MENIT</center>
                                </th>
                                <th rowspan="2">
                                    <center>CASE BY HD/TEKNISI</center>
                                </th>
                                <th colspan="3" class="bg-warning">
                                    <center> UNBIND </center>
                                </th>
                                <th colspan="3" class="bg-secondary">
                                    <center>TOTAL</center>
                                </th>
                                <th rowspan="2">
                                    <center>PERFORMANCE</center>
                                </th>
                            </tr>
                            <tr style="top: 0px">
                                <td class="bg-info"> INBOX NOSSA</td>
                                <td class="bg-info"> CARING /TIAL</td>
                                <td class="bg-info"> DRAFT TICKET</td>
                                <td class="bg-info"> PLASA</td>
                                <td class="bg-success"> LOGIC</td>
                                <td class="bg-success"> CARING</td>
                                <td class="bg-success"> GAMAS</td>
                                <!-- <th> </th>
                                <th> </th> -->
                                <td class="bg-warning"> INTERNET</td>
                                <td class="bg-warning"> IPTV</td>
                                <td class="bg-warning"> PASSWORD</td>
                                <td class="bg-secondary"> TICKET</td>
                                <td class="bg-secondary"> CLOSE</td>
                                <td class="bg-secondary"> UNBIND</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>17/05/2022</td>
                                <td>97144</td>
                                <td>L</td>
                                <td>ENDRAT FUJIYANTO</td>
                                <td>CONSUMER</td>
                                <td>P8</td>
                                <td>WFO</td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                            <tr>
                                <td colspan="8">
                                    <center>Total</center>
                                </td>
                                <td>1</td>
                                <td>3</td>
                                <td>53</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>55</td>
                                <td>40</td>
                                <td>0</td>
                                <td>223</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /#right-panel -->



    <!-- Right Panel -->

    <script src="{{asset('style/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('style/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('style/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


    <!-- <script src="{{asset('style/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('style/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('style/assets/js/widgets.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script> -->

</body>

</html>