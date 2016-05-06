<div class="righst_col" role="main" style="margin-left: 230px;    padding: 10px 20px 0;background: #f7f7f7 none repeat scroll 0 0;">

          <br />
          <div class="">

            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="margin-top: 12px;"><i class="fa fa-star"></i>
                  </div>
                  <div class="count"><?=$th?></div>

                  <h3>Total Hours Worked</h3>
                  <p>This Slab</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="margin-top: 12px;"><i class="fa fa-rocket"></i>
                  </div>
                  <div class="count"><?=$ath?></div>

                  <h3>All Hours</h3>
                  <p>Total working hours of all employees.</p>
                </div>
              </div>
              
              
            </div>

            <div class="row">
            
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Your Work<small>Sessions</small></h2>
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
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
              
            </div>



            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Work Done Per Session - Summary <small>Activity</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                        <h4 style="margin:18px">Weekly sales progress</h4>
                      </div>

                      <div class="col-md-5">
                        <div class="row" style="text-align: center;">
                          <div class="col-md-4">
                            <canvas id="canvas1i" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                            <h4 style="margin:0">How You Compete</h4>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            
          </div>
        </div>