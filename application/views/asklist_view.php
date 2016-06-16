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
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">問題一覧</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
