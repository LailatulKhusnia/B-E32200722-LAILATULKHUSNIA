@extends('frontend/layouts.template')

@section('content')

<!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <!-- Begin News Ticker -->
        <div class="row margin-bottom-20">
        <div class="col-lg-12">
          <marquee>
            "Selamat Datang Di Perpustakaan"
            
          </marquee>
    </div>
    </div> 
    <!-- end begin news ticker-->
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-facebook grow"></i>
              <div class="count">12</div>
              <div class="title">BUKU</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-"></i>
              <div class="count">5</div>
              <div class="title">Admin</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Order</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Stock</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-9 col-md-12">

    

            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li>
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text">11,500 visitors/day</div>
              </li>
              <li>
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text">15,000 Pageviews</div>
              </li>
              <li>
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text">30.55% Bounce Rate</div>
              </li>
              <li>
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text">$16,00 Revenue/Day</div>
              </li>
              <li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">12,000000 visitors every Month</div>
              </li>
            </ul>
          </div>


        </div>


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Country</th>
                      <th>Users</th>
                      <th>Online</th>
                      <th>Performance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Germany</td>
                      <td>2563</td>
                      <td>1025</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                          </div>
                        </div>
                        <span class="sr-only">73%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                      <td>India</td>
                      <td>3652</td>
                      <td>2563</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                          </div>
                        </div>
                        <span class="sr-only">57%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Spain</td>
                      <td>562</td>
                      <td>452</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                          </div>
                        </div>
                        <span class="sr-only">93%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Russia</td>
                      <td>1258</td>
                      <td>958</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                      <td>USA</td>
                      <td>4856</td>
                      <td>3621</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Brazil</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Coloumbia</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>France</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>256k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>359</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <ul>
                <li>
                  <strong>962</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>circles</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
          <div class="col-md-4 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Message</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="{{ asset('frontend/img/user.jpg')}}" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="{{ asset('frontend/img/user22.png')}}" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-me">
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                  </ul>

                </div>
                <!-- Widget footer -->
                <div class="widget-foot">

                  <form class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type your message here...">
                    </div>
                    <button type="submit" class="btn btn-info">Send</button>
                  </form>


                </div>
              </div>


            </div>
          </div>

          <div class="col-lg-8">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>To Do Everyday</h1>
                  </div>
                  <div class="col-lg-4">
                    <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Jenifer smith
                                </span>
                  </div>
                </div>
              </div>
              <table class="table table-hover personal-task">
                <tbody>
                  <tr>
                    <td>Today</td>
                    <td>
                      web design
                    </td>
                    <td>
                      <span class="badge bg-important">Upload</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="{{ asset('frontend/img/avatar1_small.jpg')}}">
                                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Yesterday</td>
                    <td>
                      Project Design Task
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress2"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>21-10-14</td>
                    <td>
                      Generate Invoice
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress3"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>22-10-14</td>
                    <td>
                      Project Testing
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>24-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-info">Milestone</span>
                    </td>
                    <td>
                      <div id="work-progress4"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>28-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress5"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>Last week</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress1"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>last month</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-success">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="pre-footer">
        <div class="footer dark-bg">
          <div class="container">
            <div class="row margin-bottom-40" style="font-size:13px">
            <div class="col-sm-2 text-left">
              <h4>
                <b>Admin</b>
              </h4>
              <p>
                <br>
                <a href="https://www.instagram.com/wrahmat105/" target="_blank" class="text-white">Wahyu Rahmatullah</a>
                </br>
                <a href="https://www.instagram.com/ghovi_trihandika/" target="_blank" class="text-white">Ghovi Tri Y</a>
                </br>
                <a href="https://www.instagram.com/ravi_juu/" target="_blank" class="text-white">Ravi Tri J</a>
              </p>        
            </div>
            <div class="col-sm-3 text-left">
              <h4> 
                <b>Kontak Kami </b>
              </h4>
              <p>
                <br>
                JL.Tadika Mesra no.103
                <br>
                JL.Syuu Jii no.301
                <br>
                Email :
                <a href="https://www.instagram.com/ravi_juu/" > info@perpustakaan </a>
                <br>
                <br>
                </p>
                </div>
                <div class="col-sm-3 text-left">
                <div class="widget-header">
                  <h2 class="widget-title">Follow Juga</h2>
                </div>
                <div class="textwidget custom-html-widget">
                  <div style="width:200px;">
                  <div style="float:left; width:58px; margin-right:8px;">
                  <a href="https://web.facebook.com/Gyzee-Gaming-107453587966018/">
                  <img src="frontend/img/fb_logo.png" alt="logo facebook">
</a>
</div>
              <div style="float:left; width:58px; margin-right:8px;">
                <a href="https://twitter.com/humaspolije">
                <img src="frontend/img/twitter_logo.png" alt="logo twitter">
</a>
</div>
                <div style="float:left; width:58px; margin-right:8px;">
                <a href="https://www.instagram.com/wrahmat105/">
                <img src="frontend/img/ig_logo.jpg" alt="logo instagram">
</a>
</div>
 </div>
          </div>
        </div>
        <div class="col-sm-4 text-left">
  <div class="widget-header">
    <h2 class="widget-tittle">TIME</h2>
</div>
<div id="clock"></div>
 <script type="text/javascript">
 <!--
 function showTime() {
     var a_p = "";
     var today = new Date();
     var curr_hour = today.getHours();
     var curr_minute = today.getMinutes();
     var curr_second = today.getSeconds();
     if (curr_hour < 12) {
         a_p = "AM";
     } else {
         a_p = "PM";
     }
     if (curr_hour == 0) {
         curr_hour = 12;
     }
     if (curr_hour > 12) {
         curr_hour = curr_hour - 12;
     }
     curr_hour = checkTime(curr_hour);
     curr_minute = checkTime(curr_minute);
     curr_second = checkTime(curr_second);
 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
     }
 
 function checkTime(i) {
     if (i < 10) {
         i = "0" + i;
     }
     return i;
 }
 setInterval(showTime, 500);
 //-->
 </script>
 
 <!-- Menampilkan Hari, Bulan dan Tahun -->
 <br>
 <script type='text/javascript'>
 <!--
 var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
 var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
 var date = new Date();
 var day = date.getDate();
 var month = date.getMonth();
 var thisDay = date.getDay(),
     thisDay = myDays[thisDay];
 var yy = date.getYear();
 var year = (yy < 1000) ? yy + 1900 : yy;
 document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
 //-->
 </script>
 </div>
</div>
           
      </div>
      
    </section>
    <!--main content end-->
@endsection
