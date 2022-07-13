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
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />--}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
<form action="{{ route('main.store') }}" method="get" enctype="multipart/form-data">
@csrf


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
                        <a href="/" class="btn btn-outline-secondary rounded" role="button" aria-pressed="true"" aria-expanded=" false">
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
                        <div class="input-group input-medium date-picker input-daterange">
                            <input type="date" class="form-control" id="datePicker" name="datePickerRequest" value="{{ $request -> datePickerRequest }}" onchange="changeTitleDate()">
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="dayname">
            <h3>
                <center>LAPORAN HARIAN PENCAPAIAN TIKET <span id="titleDate"></span></center>
            </h3>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="10">
                        <thead>
                        <tr style="top: 0px" class="bg-primary">
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>NO</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>TANGGAL</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>PERNER</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>L/P</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>NAMA</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>JOB</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>DINAS</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>STATUS</center>
                            </th>
                            <th colspan="4" class="bg-info">
                                <center> TICKET </center>
                            </th>
                            <th colspan="3" class="bg-success">
                                <center> CLOSE </center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>CASE > 30 MENIT</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>CASE BY HD/TEKNISI</center>
                            </th>
                            <th colspan="3" class="bg-warning">
                                <center> UNBIND </center>
                            </th>
                            <th colspan="3" class="bg-secondary">
                                <center>TOTAL</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>PERFORMANCE</center>
                            </th>

                        </tr>
                        <tr style="top: 0px">
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> INBOX NOSSA</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> CARING /TIAL</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> DRAFT TICKET</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> PLASA</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> LOGIC</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> CARING</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> GAMAS</td>
                            <!-- <th> </th>
                        <th> </th> -->
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> INTERNET</td>
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> IPTV</td>
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> PASSWORD</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> TICKET</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> CLOSE</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> UNBIND</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $nomor_jobs_consumer = 1;
                            $nomor_jobs_hd_service_node = 1;
                            $total_tiket_inbox_nossa_jobs_consumer = 0;
                            $total_caring_tial_jobs_consumer = 0;
                            $total_draft_ticket_jobs_consumer = 0;
                            $total_plasa_jobs_consumer = 0;

                            $total_logic_resolved_jobs_consumer = 0;
                            $total_caring_resolved_jobs_consumer = 0;
                            $total_gamas_resolved_jobs_consumer = 0;

                            $total_case_menit_jobs_consumer = 0;
                            $total_case_by_teknisi_jobs_consumer = 0;

                            $total_unbind_internet_jobs_consumer = 0;
                            $total_unbind_iptv_jobs_consumer = 0;
                            $total_unbind_password_jobs_consumer = 0;

                            $total_semua_tiket_jobs_consumer = 0;
                            $total_semua_close_jobs_consumer = 0;
                            $total_semua_unbind_jobs_consumer = 0;

                            $total_performance_jobs_consumer = 0;

                            $total_tiket_inbox_nossa_jobs_hd_service_node = 0;
                            $total_caring_tial_jobs_hd_service_node = 0;
                            $total_draft_ticket_jobs_hd_service_node = 0;
                            $total_plasa_jobs_hd_service_node = 0;

                            $total_logic_resolved_jobs_hd_service_node = 0;
                            $total_caring_resolved_jobs_hd_service_node = 0;
                            $total_gamas_resolved_jobs_hd_service_node = 0;

                            $total_case_menit_jobs_hd_service_node = 0;
                            $total_case_by_teknisi_jobs_hd_service_node = 0;

                            $total_semua_tiket_jobs_hd_service_node = 0;
                            $total_semua_close_jobs_hd_service_node = 0;

                            $total_performance_jobs_hd_service_node = 0;


                        @endphp

                        @foreach($crew as $index => $c)
                            @if($c -> jobs == 'CONSUMER' || $c->jobs == 'CONSUMER EXPERT')
                                <tr>
                                    <td style="display: none">{{$total_tiket_inbox_nossa_jobs_consumer += $c->ticket_inbox_nossa}}</td>
                                    <td style="display: none">{{$total_caring_tial_jobs_consumer += $c->caring_tial}}</td>
                                    <td style="display: none">{{$total_draft_ticket_jobs_consumer += $c->draft_ticket}}</td>
                                    <td style="display: none">{{$total_plasa_jobs_consumer += $c->plasa}}</td>

                                    <td style="display: none">{{$total_logic_resolved_jobs_consumer += $c->logic_resolved}}</td>
                                    <td style="display: none">{{$total_caring_resolved_jobs_consumer += $c->caring_resolved}}</td>
                                    <td style="display: none">{{$total_gamas_resolved_jobs_consumer += $c->gamas_resolved}}</td>

                                    <td style="display: none">{{$total_case_menit_jobs_consumer += $c->case_menit}}</td>
                                    <td style="display: none">{{$total_case_by_teknisi_jobs_consumer += $c->case_by_teknisi}}</td>
                                    <td style="display: none">{{$total_unbind_internet_jobs_consumer += $c->internet}}</td>
                                    <td style="display: none">{{$total_unbind_iptv_jobs_consumer += $c->iptv}}</td>
                                    <td style="display: none">{{$total_unbind_password_jobs_consumer += $c->password}}</td>

                                    <td style="display: none">{{$total_semua_tiket_jobs_consumer += ((int)$c ->  ticket_inbox_nossa) + ((int)$c ->  caring_tial) + ((int)$c ->  draft_ticket) +
                                    ((int)$c ->  plasa)}}</td>
                                    <td style="display: none">{{$total_semua_close_jobs_consumer += ((int)$c ->  logic_resolved) + ((int)$c ->  caring_resolved) + ((int)$c ->  gamas_resolved)}}</td>
                                    <td style="display: none">{{$total_semua_unbind_jobs_consumer += $c ->  internet + $c ->  iptv + $c ->  password }}</td>

                                    <td style="display: none">{{ $total_performance_jobs_consumer += ((int)$c -> ticket_inbox_nossa * 1) + ((int)$c -> caring_tial * 1) + ((int)$c -> draft_ticket * 1) +
                                    ((int)$c -> plasa * 2) + ((int)$c -> logic_resolved * 4) + ((int)$c -> caring_resolved * 2) + ((int)$c -> gamas_resolved * 1) + ((int)$c -> case_menit * 2) +
                                    ((int)$c -> case_by_teknisi * 2)}}</td>

                                    <td style="vertical-align : middle;text-align:center;">{{ $nomor_jobs_consumer++  }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ date('d/m/Y', strtotime($c->tanggal)) }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> perner }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> jenis_kelamin }}</td>
                                    <td>{{ $c -> nama }}</td>
                                    <td>{{ $c -> jobs }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> dinas }}</td>
                                    @if($c -> status == '0')
                                        <td style="vertical-align : middle;text-align:center;">WFO</td>
                                    @else
                                        <td style="vertical-align : middle;text-align:center;">{{ $c -> status }}</td>
                                    @endif
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> ticket_inbox_nossa }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> caring_tial }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> draft_ticket }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> plasa }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> logic_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> caring_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> gamas_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> case_menit }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> case_by_teknisi }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> internet }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> iptv }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> password }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ ((int)$c ->  ticket_inbox_nossa) + ((int)$c ->  caring_tial) + ((int)$c ->  draft_ticket) +
                                    ((int)$c ->  plasa)}}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{((int)$c ->  logic_resolved) + ((int)$c ->  caring_resolved) + ((int)$c ->  gamas_resolved)}}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> internet + $c -> iptv + $c -> password }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{((int)$c -> ticket_inbox_nossa * 1) + ((int)$c -> caring_tial * 1) + ((int)$c -> draft_ticket * 1) +
                                    ((int)$c -> plasa * 2) + ((int)$c -> logic_resolved * 4) + ((int)$c -> caring_resolved * 2) + ((int)$c -> gamas_resolved * 1) + ((int)$c -> case_menit * 2) +
                                    ((int)$c -> case_by_teknisi * 2)}}</td>

                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td colspan="8" style="vertical-align : middle;text-align:center;">Total</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_tiket_inbox_nossa_jobs_consumer }}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_caring_tial_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_draft_ticket_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_plasa_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_logic_resolved_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_caring_resolved_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_gamas_resolved_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_case_menit_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_case_by_teknisi_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_unbind_internet_jobs_consumer }}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_unbind_iptv_jobs_consumer }}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_unbind_password_jobs_consumer }}</td>
                            <td style="vertical-align : middle;text-align:center;">{{$total_semua_tiket_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{$total_semua_close_jobs_consumer}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_semua_unbind_jobs_consumer }}</td>
                            <td style="vertical-align : middle;text-align:center;">{{$total_performance_jobs_consumer + $total_semua_unbind_jobs_consumer}}</td>

                        </tr>
                        </tbody>
                    </table>
                    <table id="bootstrap-data-table-export" class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="10">
                        <thead>
                        <tr style="top: 0px" class="bg-primary">
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">NO</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>TANGGAL</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>PERNER</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>L/P</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>NAMA</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>JOB</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>DINAS</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>STATUS</center>
                            </th>
                            <th colspan="4" class="bg-info" style="vertical-align : middle;text-align:center;">
                                <center> TICKET </center>
                            </th>
                            <th colspan="3" class="bg-success" style="vertical-align : middle;text-align:center;">
                                <center> CLOSE </center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>CASE > 30 MENIT</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>CASE BY HD/TEKNISI</center>
                            </th>
                            <th colspan="3" class="bg-warning" style="vertical-align : middle;text-align:center;">
                                <center> UNBIND </center>
                            </th>
                            <th colspan="3" class="bg-secondary" style="vertical-align : middle;text-align:center;">
                                <center>TOTAL</center>
                            </th>
                            <th rowspan="2" style="vertical-align : middle;text-align:center;">
                                <center>PERFORMANCE</center>
                            </th>
                        </tr>
                        <tr style="top: 0px">
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> INBOX NOSSA</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> CARING /TIAL</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> DRAFT TICKET</td>
                            <td class="bg-info" style="vertical-align : middle;text-align:center;"> PLASA</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> LOGIC</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> CARING</td>
                            <td class="bg-success" style="vertical-align : middle;text-align:center;"> GAMAS</td>
                            <!-- <th> </th>
                        <th> </th> -->
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> INTERNET</td>
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> IPTV</td>
                            <td class="bg-warning" style="vertical-align : middle;text-align:center;"> PASSWORD</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> TICKET</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> CLOSE</td>
                            <td class="bg-secondary" style="vertical-align : middle;text-align:center;"> UNBIND</td>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($crew as $index => $c)
                            @if($c -> jobs == 'HD SERVICE NODE')
                                <tr>
                                    <td style="display: none">{{$total_tiket_inbox_nossa_jobs_hd_service_node += $c->ticket_inbox_nossa}}</td>
                                    <td style="display: none">{{$total_caring_tial_jobs_hd_service_node += $c->caring_tial}}</td>
                                    <td style="display: none">{{$total_draft_ticket_jobs_hd_service_node += $c->draft_ticket}}</td>
                                    <td style="display: none">{{$total_plasa_jobs_hd_service_node += $c->plasa}}</td>

                                    <td style="display: none">{{$total_logic_resolved_jobs_hd_service_node += $c->logic_resolved}}</td>
                                    <td style="display: none">{{$total_plasa_jobs_hd_service_node += $c->caring_resolved}}</td>
                                    <td style="display: none">{{$total_plasa_jobs_hd_service_node += $c->gamas_resolved}}</td>

                                    <td style="display: none">{{$total_case_menit_jobs_hd_service_node += $c->case_menit}}</td>
                                    <td style="display: none">{{$total_case_by_teknisi_jobs_hd_service_node += $c->case_by_teknisi}}</td>

                                    <td style="display: none">{{$total_semua_tiket_jobs_hd_service_node += ((int)$c ->  ticket_inbox_nossa) + ((int)$c ->  caring_tial) + ((int)$c ->  draft_ticket) +
                                    ((int)$c ->  plasa)}}</td>
                                    <td style="display: none">{{$total_semua_close_jobs_hd_service_node += ((int)$c ->  logic_resolved) + ((int)$c ->  caring_resolved) + ((int)$c ->  gamas_resolved)}}</td>

                                    <td style="display: none">{{ $total_performance_jobs_hd_service_node += ((int)$c -> ticket_inbox_nossa * 1) + ((int)$c -> caring_tial * 1) + ((int)$c -> draft_ticket * 1) +
                                    ((int)$c -> plasa * 2) + ((int)$c -> logic_resolved * 4) + ((int)$c -> caring_resolved * 2) + ((int)$c -> gamas_resolved * 1) + ((int)$c -> case_menit * 2) +
                                    ((int)$c -> case_by_teknisi * 2)}}</td>

                                    <td style="vertical-align : middle;text-align:center;">{{ $nomor_jobs_hd_service_node++ }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ date('d/m/Y', strtotime($c->tanggal)) }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> perner }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> jenis_kelamin }}</td>
                                    <td>{{ $c -> nama }}</td>
                                    <td>{{ $c -> jobs }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> dinas }}</td>
                                    @if($c -> status == '0')
                                        <td style="vertical-align : middle;text-align:center;">WFO</td>
                                    @else
                                        <td style="vertical-align : middle;text-align:center;">{{ $c -> status }}</td>
                                    @endif
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> ticket_inbox_nossa }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> caring_tial }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> draft_ticket }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> plasa }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> logic_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> caring_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> gamas_resolved }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> case_menit }}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ $c -> case_by_teknisi }}</td>
                                    <td style="vertical-align : middle;text-align:center;">0</td>
                                    <td style="vertical-align : middle;text-align:center;">0</td>
                                    <td style="vertical-align : middle;text-align:center;">0</td>
                                    <td style="vertical-align : middle;text-align:center;">{{ ((int)$c ->  ticket_inbox_nossa) + ((int)$c ->  caring_tial) + ((int)$c ->  draft_ticket) +
                                    ((int)$c ->  plasa)}}</td>
                                    <td style="vertical-align : middle;text-align:center;">{{((int)$c ->  logic_resolved) + ((int)$c ->  caring_resolved) + ((int)$c ->  gamas_resolved)}}</td>
                                    <td style="vertical-align : middle;text-align:center;">0</td>
                                    <td style="vertical-align : middle;text-align:center;">{{((int)$c -> ticket_inbox_nossa * 1) + ((int)$c -> caring_tial * 1) + ((int)$c -> draft_ticket * 1) +
                                    ((int)$c -> plasa * 2) + ((int)$c -> logic_resolved * 4) + ((int)$c -> caring_resolved * 2) + ((int)$c -> gamas_resolved * 1) + ((int)$c -> case_menit * 2) +
                                    ((int)$c -> case_by_teknisi * 2)}}</td>

                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td colspan="8" style="vertical-align : middle;text-align:center;">Total</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_tiket_inbox_nossa_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_caring_tial_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_draft_ticket_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_plasa_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_logic_resolved_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_caring_resolved_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_gamas_resolved_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_case_menit_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_case_by_teknisi_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">0</td>
                            <td style="vertical-align : middle;text-align:center;">0</td>
                            <td style="vertical-align : middle;text-align:center;">0</td>
                            <td style="vertical-align : middle;text-align:center;">{{$total_semua_tiket_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">{{$total_semua_close_jobs_hd_service_node}}</td>
                            <td style="vertical-align : middle;text-align:center;">0</td>
                            <td style="vertical-align : middle;text-align:center;">{{ $total_performance_jobs_hd_service_node}}</td>

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
{{-- <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>--}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>--}}

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
</form>
</body>
<script>
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    let yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById('datePicker').setAttribute('max', today);
    changeTitleDate();

    let select = document.getElementById('datePicker')
    select.onchange = function() {
        this.form.submit();
    };

    function changeTitleDate() {
        let datePicker = document.getElementById('datePicker').value;
        let date = new Date(datePicker);
        let dayName = date.toLocaleString("in-ID", {
            weekday: 'long'
        })
        let dd = String(date.getDate()).padStart(2, '0');
        let monthName = date.toLocaleString("in-ID", {
            month: 'long'
        })
        let yyyy = date.getFullYear();
        let titleDate = dayName.toLocaleUpperCase() + ' / ' + dd + ' ' + monthName.toLocaleUpperCase() + ' ' + yyyy;
        document.getElementById('titleDate').innerHTML = '(' + titleDate + ')';

    }
</script>

</html>
