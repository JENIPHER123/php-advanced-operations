<?php
 include_once '../partials/header2.php'; 
 include_once '../partials/page_nav.php';
 ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
         <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                 
                        <button type="submit" class="btn btn-success font-weight-bold px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              create new project
                         </button>
                          <!-- create modal form -->
                                            
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title py-3 text-dark font-weight-bold text-center" id="exampleModalLabel">Create New Project</h5>
                                                        <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                                      
                                        </div>
                                        <div class="modal-body">
                                        <form action="php/create.php" method="post">
                                        
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                            <input type="text"name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Project ID</label>
                                            <input type="text"name="project_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Project Duration</label>
                                            <input type="text"name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Project Amount</label></label>
                                            <input type="text" name="amount"class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Start Date</label></label>
                                            <input type="text"name="date" class="form-control" id="exampleInputPassword1">
                                          </div>   
                                        <div class="modal-footer">
                                        
                                        <button type="submit"name="submit" class="btn btn-success">Submit details</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                                                
                      <!-- end create modal form -->
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Project Name</th>
                          <th>Project ID</th>
                          <th>Duration</th>
                          <th>Amount</th>
                          <th>Start date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>

                       <?php 
                      
                      /* looping database items on html table using mysqli (you can use either mysqli_fetch_array or mysqli_fetch_assoc) */
                      $query = "SELECT * FROM crud_projects";
                      $query1 = mysqli_query($conn, $query); 
                      while ($item = mysqli_fetch_array($query1)) {
                        
                       ?>
                        <tr>
                          <td><?php echo $item['project_name']?></td>
                          <td><?php echo $item['project_id']?></td>
                          <td><?php echo $item['duration']?></td>
                          <td><?php echo $item['amount']?></td>
                          <td><?php echo $item['start_date']?></td>
                          <td class="d-flex justify-content-center align-items-center">
                          <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $item['project_id']?>">
                             Delete
                         </button>
                          <!-- delete modal form -->
                         
                          <div class="modal fade" id="exampleModal<?php echo $item['project_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Item NO: <?php echo $item['project_id']?></h5>
                                                        <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                                      
                                        </div>
                                        <div class="modal-body h6 text-center font-weight-bold">
                                             Are you sure you want to delete this item?
                                      </div>
                                    <div class="modal-footer">
                                    <form action="php/delete.php" method="post">
                                      <div class="mb-3">
                                              <input type="hidden"readonly name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $item['id']?>">
                                        </div>
                                       <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                    </form>
                                   
                                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>

                                  </div>
                                </div>
                              </div>
                              </div>
                                                
                      <!-- end delete modal form -->
                        
                         <button type="submit" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $item['project_name']?>">
                                    Update
                         </button>
                                          
                          <!-- update modal form -->
                                            
                          <div class="modal fade" id="exampleModal1<?php echo $item['project_name']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Item NO: <?php echo $item['project_id']?></h5>
                                                        <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                                      
                                        </div>
                                        <div class="modal-body">
                                        <form action="php/update.php" method="post">
                                        <div class="mb-3">
                                            <input type="hidden"readonly name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $item['id']?>">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                            <input type="text"name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $item['project_name']?>">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Project ID</label>
                                            <input type="text"readonly name="project_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $item['project_id']?>">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Duration</label>
                                            <input type="text"name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $item['duration']?>">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Amount</label></label>
                                            <input type="text" name="amount"class="form-control" id="exampleInputPassword1"value="<?php echo $item['amount']?>">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Date</label></label>
                                            <input type="text"name="date" class="form-control"value="<?php echo $item['start_date']?>" id="exampleInputPassword1">
                                          </div>   
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update details</button>
                                        </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                                                
                      <!-- end update modal form -->
                          </td>
                         

                 

                        </tr>
                         
                      <?php   }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>

   

            </div>
          </div>
        </div>
        <!-- /page content -->



        
        <!-- modal links -->

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
        <!-- end modal links -->
  
<?php include_once 'custom-footer.php'?>