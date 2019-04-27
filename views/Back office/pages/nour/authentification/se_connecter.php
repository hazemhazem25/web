<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
<title>Ouerghemmi Optique | gérer  clients</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="../css/ajouter_admin.css" rel="stylesheet" type="text/css" />
        <link href="../css/connexion.css" rel="stylesheet" type="text/css" />
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
<section class="sp">
<div class="form-popup" id="myForm">
  <form id="form1" name="form1" method="POST" action="http://localhost/git/web/views/back office/pages/nour/authentification/connexion.php" class="form-container" >
    <!--action="/action_page.php" -->
    <h1 class="login">Se connecter</h1>
                              <br><table>
                                  <tr>
                                          <td><label style="width: 20px; height: 5px" for="email">Email</label></td>
                                          <td><input style="width: 200px; height: 50px; border-style: ridge;" class="inp" type="email"  name="email" id="email" value=""  placeholder="exemple@example.com" required placeholder="" ></td>
                                 </tr>
                                          <tr>
                                          <td><label for="fname">Mot de passe</label></td>
                                          <td><input style="width: 200px; height: 50px; background-color: white; border-style: ridge;" class="inp" type="password" name="pwd" id="pwd" value="" required placeholder=""></td>
                                          </tr>
                                 </table>
                                   <div class="bottom-container">
                                <div class="row">
                                  <div class="col">
                                    <input class="btn" type="submit" name="button" id="button" value="Se connecter" />
                                  </div>
                               <!--   <div class="col">
                                    <a href="http://localhost/git/web/views/back office/pages/nour/creer_compte.php" style="color:white" class="btn">Créer un compte</a>
                                  </div>
                                  -->
                                </div>
                              </div>
</form>
</div>      
</section>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    
                </section>
                <!-- /.sidebar -->
            </aside>
        </div>
            <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="js/connexion.js">
</script>



            <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="js/connexion.js">
</script>




   <!--  <button type="button" class="btn" onclick="test();" >Connexion</button><br> -->


    <script src="js/ajouter_client.js">
</script>
    
   

  <span onclick="document.getElementById('id01').style.display='none'" class="lab" title="Close Modal">&times;</span>






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
        <script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- T TABES SCRIPT -->
        <script src="../../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../../js/AdminLTE/app.js" type="text/javascript"></script>

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