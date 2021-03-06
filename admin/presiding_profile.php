<?php
include 'check_login_presiding.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AMVS | Presiding User Profile</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="icon" href="../dist/img/icon.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</B>MVS</span>
      <span class="logo-lg"><b>Automated Voting</b> System</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								  <?php
			  include '../db_config/connection.php';

			  $sql = "SELECT * FROM presiding where  email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                 $avatar = $row['photo'];
				 $gender = $row['gender'];
				 $regid = $row['nid'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }

				 }else{
					   echo '<img src="data:image;base64,'.$row["photo"].'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {

                  }
                   $conn->close();

			  ?>

              <span class="hidden-xs"><?php echo"$current_user"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
			  <?php
			  include '../db_config/connection.php';

			  $sql = "SELECT * FROM presiding where email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                 $avatar = $row['photo'];
				 $gender = $row['gender'];
				 $regid = $row['nid'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }

				 }else{
					  echo '<img src="data:image;base64,'.$row["photo"].'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {

                  }
                   $conn->close();

			  ?>


                <p>
                  <?php echo"$current_user"; ?>
                  <small><?php echo"$regid"; ?> , PRESIDING</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="ict_profile.php" class="btn btn-default btn-flat bg-green">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
            <?php
        include '../db_config/connection.php';

        $sql = "SELECT * FROM presiding where  email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                 $avatar = $row['photo'];
         $gender = $row['gender'];
         $regid = $row['nid'];
         if ($avatar == null) {
           if ($gender == "Male") {
             print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
           }else {
             print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
           }

         }else {
            echo '<img style="height:40px;" src="data:image;base64,'.$row["photo"].'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
         }
                     }
                   } else {

                  }
                   $conn->close();

        ?>

        </div>
        <div class="pull-left info">
          <p><?php echo"$current_user"; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i><h style="color:cyan;"> Logged In (Presiding)</h></a>
        </div>
      </div>

      <ul class="sidebar-menu">
      <li class="header glyphicon glyphicon-menu-hamburger"style="color:red;margin-left:4%;margin-right:1%;"><b> NAVIGATION PANEL</b></li>
        <hr style="border:1px solid black;">
        <li class="treeview alert alert-info" style="margin-left:4%;margin-right:4%;font-size:15px;">
          <a href="" style="text-decoration:none;">
            <i class="fa fa-database"></i>
              <span class="glyphicon glyphicon-refresh" style="color:yellow;"></span><strong style="color:black;"> Presiding Page Refresh</strong>
          </a>
        </li>


<br>
<hr style="border:1px solid black;margin-top:-1.5%;">

<?php
include '../db_config/connection.php';

$sql = "SELECT * FROM presiding where email='$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
$avatar = $row['photo'];
$gender = $row['gender'];
$regid = $row['nid'];
if ($avatar == null) {
if ($gender == "Male") {
print '<img src="../dist/img/avatar.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
}else {
print '<img src="../dist/img/avatar3.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
}

}else{
echo '<img style="height:150px;width:90%;margin-left:4%;"src="data:image;base64,'.$row["photo"].'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
}
   }
 } else {

}
 $conn->close();

?>
<hr style="border:1px solid black;">

      </ul>
    </section>

  </aside>

  <div class="content-wrapper" style="background-color:#ffff99;">
    <section class="content-header">
      <h1>
        <p class="glyphicon glyphicon-cog" style="font-size:20px;"></p><b style="font-size:18px;"><i> Presiding Profile</b></i>

      </h1>
      <ol class="breadcrumb pull-right bg-green"style="margin-top:-0.8%;">
        <li><a href="presiding.php"><i class="fa fa-dashboard btn btn-primary disabled glyphicon glyphicon-home"> Home</i> </a></li>
        <li><a href=""><i class=" btn btn-primary active" >Presiding User Profile</i> </a></li>
      </ol>
    </section>
<hr class="main-footer bg-aqua" style="border-radius:4px 4px 4px 4px;margin-top:1%;margin-left:1%;margin-right:1%;">
    <section class="content"style="margin-top:-3.1%;">
      <div class="row">
        <section class="col-lg-4 "style="margin-top:0.2%;">
<div class="box box-primary">
            <div class="box-body box-profile bg-gray">
      <?php
        include '../db_config/connection.php';

        $sql = "SELECT * FROM presiding where email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                 $avatar = $row['photo'];
         $gender = $row['gender'];
         $regid = $row['nid'];
         $user_email = $row['email'];
         $member_sinc = $row['date'];
         if ($avatar == null) {
           if ($gender == "Male") {
             print '<img src="../dist/img/avatar.png" class="profile-user-img img-responsive img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
           }else {
             print '<img src="../dist/img/avatar3.png" class="profile-user-img img-responsive img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
           }

         }else {
            echo '<img style="height:100px;" src="data:image;base64,'.$row["photo"].'" class="profile-user-img img-responsive img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
         }
                     }
                   } else {

                  }
                   $conn->close();

        ?>


              <h3 class="profile-username text-center"><?php echo"$current_user"; ?></h3>

              <p class="text-muted text-center"><?php echo"$user_email"; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right"><?php echo"$gender"; ?></a>
                </li>

                <li class="list-group-item">
                  <b>Member Since</b> <a class="pull-right"><?php echo"$member_sinc"; ?></a>
                </li>
              </ul>
             <form action="update_profile_presiding.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="f1" accept="image/*" required><br>

           <button type="submit" class="pull-right btn btn-danger glyphicon glyphicon-send" name="uplogo" id="sendEmail"> Update profile picture
                <i class="fa fa-arrow-circle-up"></i></button>
      </form>

            </div>
            <!-- /.box-body -->
          </div>
        </section>
        <section class="col-lg-8 bg-aqua"style="margin-top:0.3%;">

      <div class="box box-info">
        <div class="box-header bg-blue">
          <i class="fa fa-user"></i>

              <h3 class="box-title glyphicon glyphicon-user"></h3>Presiding Information</h3>

            </div>
            <div class="box-body ">



              <form action="update_user.php" method="post">
                <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-pencil form-control-feedback" style="color:gray;"></span>
                  <input type="text" class="form-control" name="name" value="<?php echo"$current_user"; ?>" placeholder="Enter your fullname" required>
                </div>

         <div class="form-group">

          <?php
          if ($gender == "Male") {
            print '<select name="gender" class="form-control">
                    <option>Female</option>
                    <option selected>Male</option>

                  </select>';
          }else{
            print '
            <select name="gender" class="form-control">
                    <option selected>Female</option>
                    <option>Male</option>

                  </select>
            ';
          }
          ?>
                </div>

                <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="color:gray;"></span>
                  <input type="password" class="form-control" id="password" name="password1"  placeholder="New Password" required>
                </div>
         <div class="form-group has-feedback">
           <span class="glyphicon glyphicon-lock form-control-feedback" style="color:gray;"></span>
                  <input type="password" class="form-control" id="confirm_password" name="password2"  placeholder="Confirm New Password" required>
                </div>
                                        <script>
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

            </div>
            <div class="box-footer clearfix bg-gray">
              <button type="submit" class="pull-right btn btn-danger glyphicon glyphicon-send" name="upschool" id="sendEmail"> Update Information
                <i class="fa fa-arrow-circle-up"></i></button>
            </div>
      </form>
          </div>

    </div>

    </section>
  </div>
  <footer class="main-footer bg-aqua">
    <div class="pull-right hidden-xs">
      <b>AMVS@2018</b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> Developed By <a target="_blank" href="http://facebook.com/joshua_ariga">AMVS Election System</a>.</strong> All rights
    reserved.
  </footer>



  <div class="control-sidebar-bg"></div>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>
