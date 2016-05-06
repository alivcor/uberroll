  <div class="right_cSol" role="main"  style="margin-left: 230px;   padding: 10px 20px 0;background: #f7f7f7 none repeat scroll 0 0;  min-height: 1000px;">
          <div class="">
          <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                
              <div class="x_panel">
                <div class="x_title">
                  <h2>Salary Requests <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                  
                  <?php foreach($requests as $request){?>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a class="tag" href="">
                            <span>UR-0<?=$request->uid?></span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                               <?=$request->uname?>
                          </h2>
                          <div class="byline">
                            <span>Salary Request</span>
                             <?php
                                if($request->status==0){
                                    echo "<span class=\"label label-primary\">REQUESTED</span>";
                                } else {
                                    if($request->status==1){
                                        echo "<span class=\"label label-warning\">UNDER REVIEW</span>";
                                    } else {
                                        if($request->status==2){
                                            echo "<span class=\"label label-danger\">DENIED</span>";
                                        } else {
                                            echo "<span class=\"label label-success\">APPROVED</span>";
                                        }
                                    }
                                }
                                ?>
                          </div>
                          <p class="excerpt"><?=$request->comments?></a>
                          </p>
                          <a href="http://localhost/uberroll/approve_request?reqid=<?=$request->reqid?>&uid=<?=$uid?>" target="_blank"><button class="btn btn-success btn-xs" type="button">APPROVE</button></a>
                          <a href="http://localhost/uberroll/review_request?reqid=<?=$request->reqid?>&uid=<?=$uid?>" target="_blank"><button class="btn btn-info btn-xs" type="button">REVIEW</button></a>
                          <a href="http://localhost/uberroll/deny_request?reqid=<?=$request->reqid?>&uid=<?=$uid?>" target="_blank"><button class="btn btn-danger btn-xs" type="button">DENY</button></a>
                        </div>
                      </div>
                    </li>
                  <?php } ?>
                    
                  </ul>

                </div>
              </div>
        
              </div>
              </div>
              </div>
              </div>