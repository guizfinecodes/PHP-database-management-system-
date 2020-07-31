<!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th class="center"></th>
                            <th>name</th>
                            <th>profession</th>
                            <th>age</th>
                            <th>education<br>level</th>
                            <th>Status</th>
                            <th>county</th>
                            <th>View</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            

                        
                         
                              <?php 
                                $sql ="SELECT  * from users where role = 'professional'";
                                $user_query=mysqli_query($db,$sql) or die("error getting data");
                                while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                $id = $row['user_id'];
                  
                                 ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="radio" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['firstname']; ?></center></td>
                                                <td><center><?php echo $row['profession']; ?></center></td>
                                                
                                                <!--<td><center><?php echo $row['age']; ?></center></td>-->
                                                <td><center><?php echo $row['education']; ?></center></td>
                                                <td><center><?php echo $row['status']; ?></center></td>
                                                
                                                <td><center><?php echo $row['county']; ?></center></td>

                                               
                                                
                                                <td><center><a href="employer_view_profile.php <?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-info" name="view_profile"></i>view</a></center></td>
                                                
                                                
                                                </tr>
                                                 <?php } ?>
                        
                    
                    

                            <td>
                              

                              <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                  <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                  </button>

                                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                      <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                        <span class="blue">
                                          <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                        </span>
                                      </a>
                                    </li>

                                    <li>
                                      <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                        <span class="green">
                                          <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                        </span>
                                      </a>
                                    </li>

                                    <li>
                                      <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                        <span class="red">
                                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </td>
                          </tr>

                          
                        </tbody>
                      </table>
                    </div>