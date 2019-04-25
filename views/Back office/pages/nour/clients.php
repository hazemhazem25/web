<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ouerghemmi Optique | gérer  clients</title>
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
        <link href="css/ajouter_admin.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php include ("entete_complete.php"); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
<?php include("gauche.php"); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        tableau des clients
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil</a></li>
                        <li><a href="#">Tableaux:</a></li>
                        <li class="active">Tableau :</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Liste des clients</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th> nom </th>
                                                <th> prénom </th>
                                                <th>email</th>
                                                <th>numéro téléphone</th>
                                                <th>adresse </th>
                                                <th>nombre d'achats</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                          
                                            <tr>
                                                <td></td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>
                                                    <img src="src/icon.png" class="consult">
                                                   <img src="src/sup.png" class="consult">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="src/plus.png" class="consult"></button>  
                                                   <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form name="ajouter_client" class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Ajouter un admin</h1>
      <hr>
      <label for="email"><b>Email</b></label></br>
      <input type="text" placeholder="Email" name="email" required></br>

            <label for="adr"> Addresse</label><br>
            <input type="text" id="adr" name="addresse" placeholder="Ariana"><br>
            <label for="cité"> Cité</label><br>
            <input type="text" id="cité" name="cité" placeholder="Tunis"><br>
      <label for="city"> Numéro de téléphone</label><br>
            <input type="text" id="num" name="num" placeholder="+216 94215764"><br>
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn" onclick="client.html">Ajouter</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> 

                                                </td>

                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th> nom </th>
                                                <th> prénom </th>
                                                <th>email</th>
                                                <th>numéro téléphone</th>
                                                <th>adresse </th>
                                                <th>nombre d'achats</th>
                                                <th>action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Chercher un client</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>nom & prenom</th>
                                                <th>adresse mail</th>
                                                <th>numéro téléphone</th>
                                                <th>nombre d'achats</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID produit</th>
                                                <th>prix sans remise</th>
                                                <th>prix avec remise</th>
                                                <th>remise</th>
                                                <th>action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


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
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>