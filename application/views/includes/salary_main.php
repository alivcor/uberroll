
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
                    
                    <?php if(isset($salreq[0])){
                    
                    if($salreq[0]->status=="3"){?>
                    <div role="alert" class="alert alert-success alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Congratulations !</strong> An administrator reviewed your salary requested and approved it. Please click on accept button to accept the salary and claim the invoice. It's party time !
                  </div>
                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> Invoice.
                                          <small class="pull-right">Date: <?=date('M d, Y')?></small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>UberRoll, Inc.</strong>
                                          <br>A-7, Stoneridge West
                                          <br>University of Florida
                                          <br>Gainesville, FL 94107
                                          <br>Phone: +1(804) 123-9876
                                          <br>Email: <b>abhinandandubey@ufl.edu</b>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong><?=$fullname?></strong>
                                          <br>Phone: +1 (617) 219 -7281
                                          <br>Email: <?=$username?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice #00<?=rand(1000,9999)?></b>
                          <br>
                          <br>
                          <b>Issue ID:</b> <?=uniqid()?>
                          <br>
                          <b>Payment Due:</b> <?php echo date('M d, Y', strtotime(' + 5 days')); ?>
                          <br>
                          <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>SLAB</th>
                                <th>Serial #</th>
                                <th style="width: 59%">Description</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><?=$prevslab?></td>
                                <td><?=rand(100,999)?>-<?=rand(100,999)?>-<?=rand(100,999)?></td>
                                <td>SALARY APPROVED
                                </td>
                                <td>$<?=$salreq[0]->totalsal?></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          <img alt="Visa" src="http://localhost/uberroll/img/visa.png">
                          <img alt="Mastercard" src="http://localhost/uberroll/img/mastercard.png">
                          <img alt="American Express" src="http://localhost/uberroll/img/american-express.png">
                          <img alt="Paypal" src="http://localhost/uberroll/img/paypal2.png">
                          <p style="margin-top: 10px;" class="text-muted well well-sm no-shadow">
                            Your salary will be credited to your account once you accept the invoice. Please contact the accounts department IMMEDIATELY if you find any error in the invoice.
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$<?=$salreq[0]->totalsal?></td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$<?=intval($salreq[0]->totalsal)*0.093?></td>
                                </tr>
                                <tr>
                                  <th>EP:</th>
                                  <td>$<?=intval($salreq[0]->totalsal)*0.02?></td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$<?=(intval($salreq[0]->totalsal)*0.907 + intval($salreq[0]->totalsal)*0.02)?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button onclick="window.print();" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button style="margin-right: 5px;" class="btn btn-primary pull-right"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>
                    
                    <?php } else {?>
                    <div role="alert" class="alert alert-info alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hola !</strong> Our records do not hold of any salaries that have been approved for you at the moment. Please check back in some time. If you have recently requested salary, please visit 'Request Salary' tab to know the current status of your application. 
                  </div>
                    
                    <?php }
                    } else { ?>
                    
                    
                      <div role="alert" class="alert alert-info alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hola !</strong> Our records do not hold of any salaries that have been approved for you at the moment. Please check back in some time. If you have recently requested salary, please visit 'Request Salary' tab to know the current status of your application. 
                  </div>
                    
                    
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>




            
          </div>
        </div>





