  <div class="right_cSol" role="main"  style="margin-left: 230px;   padding: 10px 20px 0;background: #f7f7f7 none repeat scroll 0 0;  min-height: 1000px;">
          <div class="">
          <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Employee List <small>Salary Details</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Employee ID </th>
                            <th class="column-title">Employee Name</th>
                            <th class="column-title">Slab </th>
                            <th class="column-title">Salary </th>
                            <th class="column-title">Level </th>
                            <th class="column-title">Salary Status </th>
                            <th class="column-title no-link last"><span class="nobr">Comments</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         <?php $count=0; ?>
                        <?php foreach($employees as $employee){?>
                           <?php if($count % 2 == 0){?>
                                <tr class="even pointer">
                                <td class="a-center ">
                                  <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" ">UR_<?=$employee->uid?></td>
                                <td class=" "><?=$employee->uname?></td>
                                <td class=" "><?=$employee->slab?></td>
                                <td class=" ">$ <?=$employee->totalsal?></td>
                                <td class=" "><?=$employee->urep?></td>
                                <td class="a-right a-right ">
                                <?php
                                if($employee->status==0){
                                    echo "<span class=\"label label-primary\">REQUESTED</span>";
                                } else {
                                    if($employee->status==1){
                                        echo "<span class=\"label label-warning\">UNDER REVIEW</span>";
                                    } else {
                                        if($employee->status==2){
                                            echo "<span class=\"label label-danger\">DENIED</span>";
                                        } else {
                                            echo "<span class=\"label label-success\">APPROVED</span>";
                                        }
                                    }
                                }
                                ?>
                                </td>
                                <td class=" last"><?=$employee->comments?></td>
                              </tr>
                            <?php } else {?>
                                 <tr class="odd pointer">
                                 <td class="a-center ">
                                  <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" ">UR_<?=$employee->uid?></td>
                                <td class=" "><?=$employee->uname?></td>
                                <td class=" "><?=$employee->slab?></td>
                                <td class=" ">$ <?=$employee->totalsal?></td>
                                <td class=" "><?=$employee->urep?></td>
                                <td class="a-right a-right ">
                                <?php
                                if($employee->status==0){
                                    echo "<span class=\"label label-primary\">REQUESTED</span>";
                                } else {
                                    if($employee->status==1){
                                        echo "<span class=\"label label-warning\">UNDER REVIEW</span>";
                                    } else {
                                        if($employee->status==2){
                                            echo "<span class=\"label label-danger\">DENIED</span>";
                                        } else {
                                            echo "<span class=\"label label-success\">APPROVED</span>";
                                        }
                                    }
                                }
                                ?>
                                </td>
                                <td class=" last"><?=$employee->comments?></td>
                              </tr>
                              
                            <?php } ?>
                            <?php $count = $count + 1; ?>
                        <?php }?> 
                          
                         
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>