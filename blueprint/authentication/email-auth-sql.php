<?php
 include_once '../partials/header2.php'; 
 include_once '../partials/page_nav.php';
 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Email Authentication</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
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

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Email Authentication <small>SQL</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Email authentication and setting code using sql and php.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Get Confirmation Code</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Enter code and confirm</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Set new auth key</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Confirm and Submit</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1" class="pt-5 mt-5 pb-5">
                        <form class="form-horizontal form-label-left" action="#"method="post">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Enter your Email</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Confirm Email</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                            <div class="col-md-6 col-sm-6 ">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="gender" value="female" class="join-btn"> Female
                                </label>
                              </div>
                            </div>
                          </div>
                          
                           <div class="form-group row pt-5">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col font-weight-bold btn btn-success" type="submit"value="submit" name="middle-name">
                            </div>
                          </div>
                        </form>

                      </div>
                      <div id="step-2" class="pt-5 ">
                     
                        <form class="form-horizontal form-label-left">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Enter Code <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Confirm Your Code <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                            </div>
                          </div>
                        
                         
                       

                          </form>
                      </div>
                      <div id="step-3" class="pt-5">
                      <form class="form-horizontal form-label-left">

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Set My Authentication Code<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required" class="form-control  ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Confirm Code <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Set Personalized Message</label>
                          <div class="col-md-6 col-sm-6 ">
                            <textarea id="middle-name" class="form-control col p-3" type="text" name="middle-name"></textarea >
                          </div>
                        </div>
                    

                        </form>
                      </div>
                      <div id="step-4" class="pt-5">
                      <form class="form-horizontal form-label-left">

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Confirmation code <!-- <span class="required">*</span> -->
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required"readonly class="form-control  ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Authentication code <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="last-name" name="last-name"readonly required="required" class="form-control ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Message</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" class="form-control col"readonly type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">My Email</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" class="form-control col"readonly type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Date<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control"readonly required="required" type="text">
                          </div>
                        </div>

                    </form>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <?php include_once 'custom_footer.php'?>