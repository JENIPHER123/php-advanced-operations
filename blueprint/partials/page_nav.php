<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../main-landing/main-landing.php" class="site_title"><!-- <i class="fa fa-paw"></i> --> <span class="font-weight-bold">Coding With Jenny!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix ">
              <div class="d-flex justify-content-center align-content-center">
                <img src="../assets/images/city1.jpg" alt="..." class="mt-1"style="width:100px;border-radius:60%;height:100px;">
              </div>
              <div class="profile_info pl-5">
                <span class="">Welcome,</span>
                <h2 class=""><?php echo $_SESSION['first_name'] ?></h2>
                <span class=""><?php echo $_SESSION['email'] ?></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> APIs Operations<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="../api-intergration/api-landing.php">Integration</a></li>
                      <li><a href="../tokens/tokens.php">Tokens</a></li>
                      <li><a href="../api-endpoint/api-endpoint.php">Endpoints</a></li>
                      <li><a href="../pull-json/pull-json.php">Pulling Json data</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Authentication <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../authentication/email-auth-sql.php">Email Auth(QSL)</a></li>
                      <li><a href="../authentication/sms-auth-sql.php">Sms Auth (SQL)</a></li>
                      <li><a href="../authentication/email-auth-firebase.php">Email Auth (Firebase)</a></li>
                      <li><a href="../authentication/sms-auth.firebase.php">Sms Auth (Firebase)</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Bulk-sms Operations<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Celcom</a></li>
                      <li><a href="media_gallery.html">Africas Talking</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Call APIs<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="../call-api/call-celcom-landing.php">Celcom</a></li>
                      <li><a href="../call-api/call-afritalk-landing.php">Africas Talking</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Dynamic Chatbot <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../chatbot/chatbot-landing.php">Landing</a></li>
                      <li><a href="../chatbot/chatbot-admin.php">Admin</a></li>
                      <li><a href="../chatbot/chat-box.php">Chat Now</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Crud Operations<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../crud/sql-crud.php">sql crud</a></li>
                      <li><a href="../crud/firebase-crud.php">firebase crud</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Safaricom Mpesa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../mpesa/b-b.php">B-B</a></li>
                      <li><a href="../mpesa/b-c.php">B-C</a></li>
                      <li><a href="../mpesa/c-b.php">C-B</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>data-mining <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../data-mining/target.php">Target</a></li>
                      <li><a href="../data-mining/display.php">Display</a></li>                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Form Uploads<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../uploads/file_uploads.php">Files Upload</a></li>
                      <li><a href="../uploads/files_display.php">Display files</a></li>
                      <li><a href="../uploads/img_upload.php">Image Upload</a></li>
                      <li><a href="../uploads/img_display.php">Display image</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/books1.jpg" alt=""><?php  echo $_SESSION['first_name'] .' '. $_SESSION['last_name'];?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                  <form action="../php/logout.php" method="post">
                  <button class="dropdown-item" type="submit" name="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</button>
                  </form>
                  
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->