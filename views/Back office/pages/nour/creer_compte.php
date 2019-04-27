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
        <link href="css/seConnecter.css" rel="stylesheet" type="text/css" />
        <link href="css/connexion.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
 <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
<?php include("entete.php"); ?>
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
</div>
</section>
</aside>
            <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="js/connexion.js">
</script>


  <section>




<div class="row">
  <div class="col-75">
    <div class="container">
        <div class="row">
          <div class="form-popup" id="myForm">
<!--
            <label for="fname"><i class="fa fa-user"></i>Nom & Prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Nom Prénom">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="exemple@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Ariana">
            <label for="cité"><i class="fa fa-institution"></i> Cité</label>
            <input type="text" id="city" name="city" placeholder="Tunis">
        -->



    <form method="POST" action="http://localhost/git/web/views/Back office/pages/nour/ajout_admin.php" class="form-container">
        <table>
        <h2 class="login">Créer un  nouveau compte admin</h2>
            <tr>
            <td><label for="fname"><i class="fa fa-user"></i>Nom</label></td>
            <td><input type="text" id="fname" name="nom" value="" required placeholder=""></td>
            </tr>
            <tr>
            <td><label for="fname"><i class="fa fa-user"></i>Prénom</label></td>
            <td><input type="text" id="fname" name="prenom" value="" required placeholder=""></td>
            </tr>
            <tr>
            <td><label for="email"><i class="fa fa-envelope"></i>Email</label></td>
            <td><input type="email"  name="email" value=""  placeholder="exemple@example.com" required placeholder="" ></td>
            </tr>
            <tr>
            <td><label for="fname">Mot de passe</label></td>
            <td><input type="password" name="pwd" value="" required placeholder=""></td>
            </tr>
            <tr>
            <td><label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label></td>
            <td><input type="text" name="adresse" required placeholder=""></td>
            </tr>
            <tr>
            <td><label for="fname">Téléphone</label></td>
            <td><input type="number" name="numero" value="" required placeholder=""></td>
            </tr>
            <tr>

            <td></td>


                   <td> <input type="submit" value="créer" class="btn"></td>
            </tr>
        </table>
    </form>
    </div>

          
    </div>
  </div>
</div>
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

</section>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="js/ajouter_client.js">
</script>
    
   <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><input type="button" value="Creer un compte" class="lab"/></button>  
                                                   <div id="id01" class="modal">

  <span onclick="document.getElementById('id01').style.display='none'" class="lab" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Créer un compte</h1>
      <p>Veuiller remplir ce formulaire pour créer un compte</p>
      <hr>
      <label for="email"><b>Email</b></label></br>
      <input type="text" placeholder="Email" name="email" required></br>

      <label for="psw"><b>Mot de passe</b></label></br>
      <input type="password" placeholder="Mot de passe " name="psw" required></br>

      <label for="psw-repeat"><b>Confirmer mot de passe</b></label></br>
      <input type="password" placeholder="Confirmer mot de passe" name="psw-repeat" required></br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>En créant un compte, vous acceptez nos  <a href="#" style="color:dodgerblue">conditions d'utilisation & confidentialité.</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="button" class="btn" onclick="test();" >Créer un compte</button>
     </div>
   </div>
</form>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "block";
  }
}



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
            
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








