<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$email = "";
$password = "";
$name = "";
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
if (isset($_SESSION['loginName'])) {
  $name = $_SESSION['loginName'];
}
if (isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
}

?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">x-lerning</a>
            </div>
            <!-- /.navbar-header -->
            <form id="uivalues">
            <ul class="nav navbar-top-links navbar-right">
                <?=$name?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a id="logout_btn"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
          </form>
            <!-- /.navbar-top-links -->
