<div class="row">
																<div class="col-xs-12 col-sm-4">

                                <h4 class="header blue bolder smaller">Contact</h4>
                                

                              

                              <div class="space"></div>
                              <h4 class="header blue bolder smaller">Social</h4>

                           

																	
																

                        <div class="space-4"></div>




															

                    </div>

																<div class="vspace-12-sm"></div>


																<div class="col-xs-12 col-sm-8">
                                  <h4 class="header blue bolder smaller"> PERSONNAL INFORMATION </h4>
</div>
																	<hr>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">DESCRIPTION</h4>

															<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                search by profession
              </button>

              <hr>

              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-table">
                search by age
              </button>



              <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DESCRIPTION ABOUT YOURSELF:</h4>
              </div>
              <div class="modal-body">
                <span class="green"><?php 
                                  $select="SELECT * FROM users WHERE user_id='$id'";
                                  $result = mysql_fetch_array(mysql_query($select));
                                  $qry=mysql_query($select);
                                      if($qry)
                                      {
                                      while($rec = mysql_fetch_array($qry)){
                                          
                                $textarea = "$rec[textarea]";
                                    
                                 } 
                                 ?>
                               <?php echo $textarea;
                                } ?>
                                   
                                 </span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">edit me</button>
              </div>
            </div>
            <!-- /.modal-content -->
         
          <!-- /.modal-dialog -->
</div>
</div>

<div id="modal-table" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header no-padding">
                        <div class="table-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="white">&times;</span>
                          </button>
                          Results for "Latest Registered Domains
                        </div>
                      </div>

                      <div class="modal-body no-padding">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                          <thead>
                            <tr>
                              <th>Domain</th>
                              <th>Price</th>
                              <th>Clicks</th>

                              <th>
                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                Update
                              </th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>
                                <a href="#">ace.com</a>
                              </td>
                              <td>$45</td>
                              <td>3,330</td>
                              <td>Feb 12</td>
                            </tr>

                            <tr>
                              <td>
                                <a href="#">base.com</a>
                              </td>
                              <td>$35</td>
                              <td>2,595</td>
                              <td>Feb 18</td>
                            </tr>

                            <tr>
                              <td>
                                <a href="#">max.com</a>
                              </td>
                              <td>$60</td>
                              <td>4,400</td>
                              <td>Mar 11</td>
                            </tr>

                            <tr>
                              <td>
                                <a href="#">best.com</a>
                              </td>
                              <td>$75</td>
                              <td>6,500</td>
                              <td>Apr 03</td>
                            </tr>

                            <tr>
                              <td>
                                <a href="#">pro.com</a>
                              </td>
                              <td>$55</td>
                              <td>4,250</td>
                              <td>Jan 21</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                      <div class="modal-footer no-margin-top">
                        <div><button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>
                      </div>
<div>
                        <ul class="pagination pull-right no-margin">
                          <li class="prev disabled">
                            <a href="#">
                              <i class="ace-icon fa fa-angle-double-left"></i>
                            </a>
                          </li>

                          <li class="active">
                            <a href="#">1</a>
                          </li>

                          <li>
                            <a href="#">2</a>
                          </li>

                          <li>
                            <a href="#">3</a>
                          </li>

                          <li class="next">
                            <a href="#">
                              <i class="ace-icon fa fa-angle-double-right"></i>
                            </a>
                          </li>
                        </ul>
                      </div></div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->