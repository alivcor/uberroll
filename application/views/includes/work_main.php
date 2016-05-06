<div class="rights_col" role="main" style="margin-left: 230px;    padding: 10px 20px 0;background: #f7f7f7 none repeat scroll 0 0; min-height: 1000px;">

          <br />
          <div class="">
            <script>
            function in_func_off(){
                document.getElementById("enddiv").style="background-color: #E0F0F9";
                 
            }
            function in_func_on(){
                document.getElementById("startdiv").style="background-color: #E0F0F9";
                
            }
            function out_func_off(){
                document.getElementById("enddiv").style="background-color: #eee";
               
            }
            function out_func_on(){
                document.getElementById("startdiv").style="background-color: #eee";
                
            }
            function func_on(){
                document.getElementById("startdiv").style="display:none;";
                 $.ajax({
                    url: 'http://localhost/uberroll/api/mod_work.php?changestate=ON&uid=<?=$uid?>',
                    success: function(data) {
                        $("#sub1").html(data);
                    }
                });
            }
            function func_off(){
                var logid = document.getElementById("logid").value;
                 document.getElementById("enddiv").style="display:none;";
                 $.ajax({
                    url: 'http://localhost/uberroll/api/mod_work.php?changestate=OFF&uid=<?=$uid?>&logid='+logid,
                    success: function(data) {
                        $("#sub2").html(data);
                    }
                });
            }
            
            </script>
            

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Get, Set, Work ! <small>Weekly progress</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-6" onmouseover="in_func_on()" onmouseout="out_func_on()" style=" cursor: hand; cursor:pointer;">
                      <div data-example-id="simple-jumbotron" class="bs-example">
                        <div class="jumbotron" id="startdiv" onclick="func_on()">
                          <center><h1><i class="fa fa-bolt"></i> START</h1></center>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6" onmouseover="in_func_off()" onmouseout="out_func_off()" style=" cursor: hand; cursor:pointer;">
                      <div data-example-id="simple-jumbotron" class="bs-example">
                        <div class="jumbotron" id="enddiv" onclick="func_off()">
                          <center> <h1><i class="fa fa-power-off"></i> STOP</h1></center>
                          </div>
                      </div>
                    </div>
                    <div id="sub1"></div>
                    <div id="sub2"></div>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daily Summary <small>Hours</small></h2>
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

                    <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                      <div class="col-md-7" style="overflow:hidden;">
                        <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                        <h4 style="margin:18px">No of Hours</h4>
                      </div>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>



            
          </div>
        </div>