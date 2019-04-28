<?php
ob_start();



?>
<?PHP
include "../../../../entities/produitt.php";
include "../../../../core/produitC.php"; 
if (isset($_GET['id_produit'])){
    $produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['id_produit']);
    foreach($result as $row){
        $id_produit=$row['id_produit'];
        $type_produit=$row['type_produit'];
        $quantite=$row['quantite'];
        $disponibilite=$row['disponibilite'];
        $id_categorie=$row['id_categorie'];
        $marque=$row['marque'];
        $prix=$row['prix'];
        $pour=$row['pour'];
        $description=$row['description'];
        $image=$row['image'];
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ouerghemmi Optique | Gérer  catégories et produits</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="../../pages/wifek/style.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               Ouerghemmi Optique
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Islem Ouerghemmi <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/islem.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        Ouerghemmi - Opticienne
                                        <small>depuis 2017</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Abonnés</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Ventes</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Amis</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">déconnecter</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/islem.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bienvenue, Islem</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> en ligne</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="chercher..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
            
                         <li>
                            <a href="../nour/clients.html">
                                <i ></i> <span>Gérer clients</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="pages/wifek/categorie.php">
                                <i ></i> <span>Gérer catégories </span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         
                         <li>
                            <a href="pages/wifek/produits.php">
                                <i ></i> <span>Gérer Produits </span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         
                         
                        <li>
                            <a href="../houria/commande.html">
                                <i ></i> <span>Gérer commandes</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../houria/wishlist.html">
                                <i ></i> <span>Gérer wish-list</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../ahmed/livraison.html">
                                <i ></i> <span>Gérer livraisons</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>>
                       
                          <li>
                            <a href="../imen/promotion.html">
                                <i ></i> <span>Gérer promotions</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                  <li>
                            <a href="../imen/abonne.html">
                                <i ></i> <span>Gérer abonnés</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                          <li>
                            <a href="../pub.html">
                                <i></i> <span>Gérer publicités</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../event.html">
                                <i></i> <span>Gérer événements</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                         Produits
                    </h1>
    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Liste des produits</h3>                                    
                                </div><!-- /.box-header -->
                                
                                <form method="POST">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Produits</th>
                                                <th>Type Produits</th>
                                                <th>Quantités</th>
                                                <th>Disponibilité</th>
                                                <th>ID Catégories</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"> </td>
                                                <td>
                                                    <input type="text"  disabled value="<?PHP echo $type_produit ?>">
                                                    <select type="text" name="type_produit">
                                                        <option value="solaire"> solaire </option>
                                                        <option value="optic"> optic </option>
                                                        <option value="lentilles"> lentilles  </option>
                                                        <option value="montre"> Montre</option>
                                                    </select>
                                                 </td>

                                                <td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"> </td>
                                                <td>
                                                    <input type="text" disabled  value="<?PHP echo $disponibilite ?>" >
                                                    <select type="text" name="disponibilite">
                                                        <option value="En stock"> En stock </option>
                                                        <option value="Hors stock"> Hors stock </option>
                                                    </select> 

                                                </td>
                                                <td><input type="number" name="id_categorie" value="<?PHP echo $id_categorie ?>"></td>
                                            </tr>
                                            
                                        </tbody>

                                    </table>
                                    <table id="example2" class="table table-bordered table-hover">

                                        <thead>
                                            <tr>
                                                <th>Marques</th>
                                                <th>Pour</th>
                                                <th>Prix</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <td><input type="text" name="marque" value="<?PHP echo $marque ?>" ></td>
                                                <td><input type="text"  disabled value="<?PHP echo $pour ?>" >
                                                    <select type="text" name="pour">
                                                        <option value="homme"> Homme</option>
                                                        <option value="femme"> Femme</option>
                                                        <option value="enfant"> Enfant</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
                                                <td><input type="textarea" name="description" value="<?PHP echo $description ?>"></textarea></td>
                                                <td><input type="text" name="image" value="<?php echo $image ?>"></td>
                                        </tbody>
                                        
                                    </table>
                            <input type="submit" value="Modifier" name="modifier">
                            <input type="hidden" name="idp" value="<?PHP echo $_GET['id_produit'];?>">

                                </form>
                               <?PHP
                                }
                                }
                                if (isset($_POST['modifier'])){
                                    $produit=new produit($_POST['id_produit'],$_POST['type_produit'],$_POST['quantite'],$_POST['disponibilite'],$_POST['id_categorie'],$_POST['marque'],$_POST['pour'],$_POST['prix'],$_POST['description'],$_POST['image']);
                                    $produitC->modifierProduit($produit,$_POST['idp']);
                                    echo $_POST['idp'];
                                    header('Location: produits.php');
                                     ob_enf_flush();
                                }
                                ?>
                           
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script type="text/javascript" src="../../pages/wifek/produits.js"></script>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- T TABES SCRIPT -->
        <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": false,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>
