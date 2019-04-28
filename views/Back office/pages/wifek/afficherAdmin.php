<?PHP
include "../../../../core/adminC.php";
$admin1C=new AdminC();
$listeAdmins=$admin1C->afficherAdmins();


?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Offres</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">



  </head>

  <body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.html"><!-- <img src="../assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
          <ul>
            


            <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
            <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
            <li><a href="ajouterAdmin.php"><i class="ti-announcement"></i> Ajout admin</a></li>
            <li><a href="afficherUtilisateur.php"><i class="ti-announcement"></i> Clients</a></li>
            <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
      
            <li class="label">Features</li>
            



            <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
            <li class="label">Extra</li>


           
            <li><a><i class="ti-close"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <div class="float-right">
              <ul>

                <li class="header-icon dib"><i class="ti-bell"></i>
                  <div class="drop-down">
                    <div class="dropdown-content-heading">
                      <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="text-center">
                          <a href="#" class="more-link">See All</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                  <div class="drop-down">
                    <div class="dropdown-content-heading">
                      <span class="text-left">2 New Messages</span>
                      <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li class="notification-unread">
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="notification-unread">
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="text-center">
                          <a href="#" class="more-link">See All</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span>
                  <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                      <span class="text-left">Upgrade Now</span>
                      <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                        <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                        <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

                        <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                        <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Bonjour, <span>Vous desirez consulter les admin ?</span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->

            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
						<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>admin_id</th>
									<th>admin_pseudo</th>
									<th>admin_nom</th>
									<th>admin_prenom</th>
									<th>admin_mdp</th>
									<th></th>
									<th></th>
								</tr>

								<?PHP
								foreach($listeAdmins as $row){
								  ?>
							</thead>
						  <tr>
						  <td><?PHP echo $row['admin_id']; ?></td>
						  <td><?PHP echo $row['admin_pseudo']; ?></td>
						  <td><?PHP echo $row['admin_nom']; ?></td>
						  <td><?PHP echo $row['admin_prenom']; ?></td>
						  <td><?PHP echo $row['admin_mdp']; ?></td>
						  <td><form method="POST" action="supprimerAdmin.php">
						  <input type="submit" name="supprimer" value="supprimer">
						  <input type="hidden" value="<?PHP echo $row['admin_id']; ?>" name="id">
						  </form>
						  </td>
						  <td><a href="modifierAdmin.php?id=<?PHP echo $row['admin_id']; ?>">
						  Modifier</a></td>
						  </tr>
						  <?PHP
						}
						?>
						</table>
						</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>


    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../assets/js/lib/jquery.nicescroll.min.js"></script>
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    


    <script src="../assets/js/scripts.js"></script>
  </body>

</html>
