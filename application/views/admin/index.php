<?php 
if (empty($_SESSION['username'])){
  $this->load->view('login');
} else {
  
?>





<html>
<head>
    <meta charset="UTF-8">
    <title>Undian</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='<?php echo config_item('base_url') ?>/assets/css/font-lato.css' rel='stylesheet' type='text/css'>
    <!-- Theme style -->

    <link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='<?php echo config_item('base_url') ?>/assets/css/buttons.dataTables.min.css' rel='stylesheet'>

    <link href="<?php echo config_item('base_url') ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('base_url') ?>/assets/datatable/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.dataTables.min.js"></script>

<script src="<?php echo config_item('base_url') ?>/assets/js/jquery-1.12.4.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo config_item('base_url') ?>/assets/js/buttons.colVis.min.js"></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'colvis'
        ]
    } );
  } );
</script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a  class="logo">
                undian
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
                         
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $_SESSION['fullname']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                    <li>
                               

                                        <li>
                                            <a href="<?php echo base_url().'Admin/logout' ?>"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "<?php echo base_url().'Vr' ?>"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>

                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div>
                                    <center><img src="<?php echo config_item('base_url') ?>/assets/gambar/<?php echo $_SESSION['gambar']; ?>" height="80" width="80" class="img-circle" alt="User Image" style="border: 3px solid white;" /></center>
                                </div>
                                <div class="info">
                                    <center><p><?php echo $_SESSION['fullname']; ?></p></center>

                                </div>
                            </div>
                            <!-- search form -->
                            <!--<form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form> -->
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <?php include "menu.php"; ?>
                        </section>
                        <!-- /.sidebar -->
                    </aside>







                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">
                   

<!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Data user</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
 <script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(500, 0).slideUp(500, function() {  
           $(this).remove();  
         });  
       }, 500);  
     });  
   </script>   
<?php if($this->session->flashdata('sukses')){ ?>  
     <div class="alert alert-success">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Success!</strong> <?php echo $this->session->flashdata('sukses'); ?>  
     </div>  
   <?php } else if($this->session->flashdata('error')){ ?>  
     <div class="alert alert-danger">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
     </div>  
   <?php } ?>  


               <table id="example" border="1" class="table table-hover table-bordered display responsive nowrap" style="width:100%" >
            <thead>
                <tr>            
                   
                    <th>Id</th>   
                    <th>Nama</th>    
                    <th>gambar</th>
                     <th> aksi</th>        
                           
                
                  
                </tr>
            </thead>


             <tbody>
               <?php  foreach($data->result_array() as $i): ?>
            <tr>
             <td> <?php echo $i['id']; ?> </td>
             <td><?php echo $i['nama']; ?></td>
             <td><center><img src="<?php echo config_item('base_url') ?>/assets/gambar_user/<?php echo $i['file']; ?>" height="50" width="50"/></center> </td>
            <td> <a onclick="return confirm ('Yakin hapus <?php echo $i['id'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Data" href="<?php echo site_url().'Input/hapus' ?>/<?php echo $i['id']; ?>"><span class="glyphicon glyphicon-trash"></a>   
               <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit Data" href="<?php echo site_url().'Input/edit' ?>/<?php echo $i['id']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                       </td>
            </tr>
 <?php endforeach;?>  
            </tbody>
           
        </table>
 <div class="text-right" style="margin-top: 10px;">
                 <!-- <a href="input-migrasi.php" class="btn btn-sm btn-primary">Tambah Migrasi <i class="fa fa-arrow-circle-down"></i></a>  -->
                 <a href="<?php echo site_url().'Input' ?>" class="btn btn-sm btn-primary">Tambah Data <i class="fa fa-arrow-circle-down"></i></a>
                </div>
                   </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->

                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy <a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/a0a5cd5c-2ef5-e011-97e3-257192bb7c1e" target="_blank">GYP</a> 2019
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


       
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/Director/dashboard.js" type="text/javascript"></script>




   
</body>
</html>












<?php } ?>