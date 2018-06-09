@extends('_shared.master')
@section('css')
  <!-- bootstrap-progressbar -->
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection
@section('title',$title)
@section('content')



        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Revenue</span>
                <h2>$ 231,809</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_three" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
            </div>
            <br />


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>Network Activities <small>Graph title sub-title</small></h3>
                    </div>
                    <div class="col-md-6">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div>
                    </div>
                  </div>
                  <div class="x_content">
                    <div class="demo-container" style="height:250px">
                      <div id="chart_plot_03" class="demo-placeholder"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>App Devices <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>App Versions</h4>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.2</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>123k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.3</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>53k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.4</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>23k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.5</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>3k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>0.1.5.6</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>1k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Daily users <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Profile Settings <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a></li>
                        <li><i class="fa fa-thumbs-up"></i><a href="#">Favorites</a></li>
                        <li><i class="fa fa-calendar-o"></i><a href="#">Activities</a></li>
                        <li><i class="fa fa-cog"></i><a href="#">Settings</a></li>
                        <li><i class="fa fa-area-chart"></i><a href="#">Logout</a></li>
                      </ul>

                      <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value gauge-chart pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12 widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Uptake</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="graph_bar" style="width:100%; height:200px;"></div>

                    <div class="col-xs-12 bg-white progress_summary">

                      <div class="row">
                        <div class="progress_title">
                          <span class="left">Escudor Wireless 1.0</span>
                          <span class="right">This sis</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-xs-2">
                          <span>SSD</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>89%</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="progress_title">
                          <span class="left">Mobile Access</span>
                          <span class="right">Smart Phone</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-xs-2">
                          <span>App</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>79%</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="progress_title">
                          <span class="left">WAN access users</span>
                          <span class="right">Total 69%</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-xs-2">
                          <span>Usr</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="69"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>69%</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- start of weather widget -->
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Today's Weather <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Monday</b>, 07:30 AM
                          <span>F</span>
                          <span><b>C</b>
                                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <span>
                                              <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                          </span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Texas
                                              <br><i>Partly Cloudy Day</i>
                                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">23</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mon</h2>
                          <h3 class="degrees">25</h3>
                          <span>
                                                  <canvas id="clear-day" width="32" height="32">
                                                  </canvas>

                                          </span>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Tue</h2>
                          <h3 class="degrees">25</h3>
                          <canvas height="32" width="32" id="rain"></canvas>
                          <h5>12
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Wed</h2>
                          <h3 class="degrees">27</h3>
                          <canvas height="32" width="32" id="snow"></canvas>
                          <h5>14
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Thu</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="sleet"></canvas>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Fri</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="wind"></canvas>
                          <h5>11
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sat</h2>
                          <h3 class="degrees">26</h3>
                          <canvas height="32" width="32" id="cloudy"></canvas>
                          <h5>10
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Incomes <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-bars"></i><a href="#">Subscription</a></li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-support"></i><a href="#">Help Desk</a> </li>
                        <li><i class="fa fa-heart"></i><a href="#">Donations</a> </li>
                      </ul>

                      <div class="sidebar-widget">
                        <h4>Goal</h4>
                        <canvas width="150" height="80" id="chart_gauge_02" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span class="gauge-value pull-left">$</span>
                          <span id="gauge-text2" class="gauge-value pull-left">3,200</span>
                          <span id="goal-text2" class="goal-value pull-right">$5,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <input type="button" onclick="refresh()" value="refresh" />
        <script>


          var datachart1=[]; //[0,0],[1,0]];
          var datachart2=[]; //[0,0],[1,0]];
          for(var i=0;i<20;i++) {
              datachart1[i]=[i,0]; //   array.splice(index, 1);
              datachart2[i]=[i,5]; //   array.splice(index, 1);
          }
          /*
          var datachart=[  {
              label: "Sales1",
              data: datachart1
              },
              {
              label: "Sales2",
              data: datachart2
              }]; //[0,0],[1,0]];
            */
          var datachart = [
              {
                  label: "Sell out",
                  data: datachart1,
                  color: "#FF0000",
                  points: { fillColor: "#FF0000", show: true },
                  lines: { show: true }
              },
              {
                  label: "Buy in",
                  data: datachart2,
                  xaxis:2,
                  color: "#0062E3",
                  points: { fillColor: "#0062E3", show: true },
                  lines: { show: true }
              }
          ];


          var contadorchart=1;

            function refresh() {
                contadorchart++;
                //datachart.splice(0, 1);
                /*
                for(var i=0;i<20-1;i++) {
                    datachart[i] = datachart[i + 1];
                    datachart[i][0]=i;
                }

                datachart[19]=([19,contadorchart]);
                console.log(datachart.length);//=[contadorchart,contadorchart];
                */

                //datachart[contadorchart]=[contadorchart,contadorchart];


                console.log('Plot1');



                $.plot($("#chart_plot_03"), [{
                    data: datachart1,
                    lines: { show: true, fill: true }
                }, {
                    data: datachart2,
                    lines: { show: true },
                    points: { show: true }
                }]);


            }
        </script>

@endsection
@section('js')
  <!-- Chart.js -->
  <script src="vendors/chart.js/dist/Chart.min.js"></script>
  <!-- jQuery Sparklines -->
  <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- morris.js -->
  <script src="vendors/raphael/raphael.min.js"></script>
  <script src="vendors/morris.js/morris.min.js"></script>
  <!-- gauge.js -->
  <script src="vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Skycons -->
  <script src="vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="vendors/flot/jquery.flot.js"></script>
  <script src="vendors/flot/jquery.flot.pie.js"></script>
  <script src="vendors/flot/jquery.flot.time.js"></script>
  <script src="vendors/flot/jquery.flot.stack.js"></script>
  <script src="vendors/flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="vendors/datejs/build/date.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="vendors/moment/min/moment.min.js"></script>
  <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

@endsection
