<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php require_once("libs/count_records.php");?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo ucwords('BLOG ADMIN'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>
   <div id="wrapper">
  <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">BLOG ADMIN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="blogs_view.php"><i class="fa fa-rss"></i>Blogs</a></li>
            <li><a href="blogs_view.php"><i class="fa fa-check"></i>Published</a></li>
            <li><a href="#"><i class="fa fa-tasks"></i>Drafts</a></li>
            <?php
            $usernow=getLoggedMemberID();
            if ($usernow=="admin") {
            # code...show more links for admin only
            echo'<li><a href="titles_view.php"><i class="fa fa-desktop"></i>Web Details</a></li>
            <li><a href="links_view.php"><i class="fa fa-link"></i>Links</a></li>';
          }
          ?>
          </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo getLoggedMemberID(); ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo PREPEND_PATH; ?>membership_profile.php"><i class="fa fa-user"></i> <strong>My Profile Details</strong> </a></li>

            <!--login/logout area ends-->
            <li class="divider"></li>
            <li><a class="btn navbar-btn btn-primary" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <strong style="color:white"><?php echo $Translation['sign out']; ?></strong> </a></li>
          </ul>
        </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
  <div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12">
            <h1>Hello <?php echo getLoggedMemberID(); ?> !</h1>
            <ol class="breadcrumb">
              <li><a href="../index.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>View Website</strong></a></li>
              <li><a href="index.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>Dashboard</strong></a></li>
            </ol>
            <?php include("libs/alerts.php");?>
          </div>
        </div><!-- /.row -->

    