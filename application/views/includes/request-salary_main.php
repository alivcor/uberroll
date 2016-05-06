
<div class="rights_col" role="main" style="margin-left: 230px;    padding: 10px 20px 0;background: #f7f7f7 none repeat scroll 0 0; min-height: 1000px;">

          <br />
          <div class="">
           
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Get Paid ! <small>Party Hard !</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php if(isset($salreq[0])){?>
                    
                    <?php if($salreq[0]->status=="0"){?>
                    <div role="alert" class="alert alert-info alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hola !</strong> You have already requested salary for last slab. An administrator will sonn review and approve it ! Rest Assured, we'll keep you posted !
                  </div>
                    
                    
                    <?php } else {?>
                    
                    <?php if($salreq[0]->status=="1"){?>
                    <div role="alert" class="alert alert-warning alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Great work !</strong> Your request is currently being reviewed !
                  </div>
                    <?php } else {?>
                    
                     
                    <?php if($salreq[0]->status=="2"){?>
                  <div role="alert" class="alert alert-warning alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Sorry !</strong> We regret to inform you that your last salary request has been denied. You cannot request salary until next month.
                  </div>
                    <?php } else {?>
                       <?php if($salreq[0]->status=="3"){?>
                <div role="alert" class="alert alert-success alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Congratulations !</strong> An administrator reviewed your salary requested and approved it. Please click on Salary tab to claim the invoice. It's party time !
                  </div>
                    <?php } else {?>
                    <form method="post" action="requestsal/post_request" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Comments <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="5" cols="225" required="required" id="comments" name="comments" class="col-md-12"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="submit">Cancel</button>
                          <button class="btn btn-success" type="submit">Submit Request</button>
                        </div>
                      </div>

                    </form>
                    <?php } ?>
                    <?php } ?>
                      <?php } ?>
                          <?php } ?>
                          <?php } else {?>
                          <form method="post" action="requestsal/post_request" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Comments <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="5" cols="225" required="required" id="comments" name="comments" class="col-md-12"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="submit">Cancel</button>
                          <button class="btn btn-success" type="submit">Submit Request</button>
                        </div>
                      </div>

                    </form>
                          
                          
                          
                          <?php } ?>
                  </div>
                </div>
              </div>
            </div>




            
          </div>
        </div>





