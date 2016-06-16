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
  <form id="askform">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>試験年</label>
          <select class="form-control" id="year">
            <option value="2017">2017</option>;
            <option value="2016">2016</option>;
            <option value="2015">2015</option>;
            <option value="2015">2014</option>;
            <option value="2015">2013</option>;
            <option value="2015">2012</option>;
          </select>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>試験区分</label>
          <select class="form-control" id="sknkbn">
            <?php foreach ($results as $row) {
                    echo '<option value="' . $row->id . '">' . $row->name .'</option>';
                  }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label>試験月</label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>４月
          </label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">１０月
          </label>
        </div>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-4">
        <label>問</label>
        <input class="form-control">
      </div>
      <div class="col-lg-4">
        <label>設問</label>
        <input class="form-control">
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
            <label>問題文</label>
            <textarea class="form-control" rows="10"></textarea>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <label>選択肢/模範解答</label>
        <div class="form-group">
          <div class="col-lg-3">
            ア．<input class="form-control">
          </div>
          <div class="col-lg-3">
            イ．<input class="form-control">
          </div>
          <div class="col-lg-3">
            ウ．<input class="form-control">
          </div>
          <div class="col-lg-3">
            エ．<input class="form-control">
          </div>
          <div class="col-lg-12">
            模範解答<textarea class="form-control" rows="5"></textarea>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
            <label>解説</label>
            <textarea class="form-control" rows="10"></textarea>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="form-group">
          <div class="col-lg-6">
            <button type="button" class="btn btn-primary">クリア</button>
          </div>
          <div class="col-lg-6">
            <button type="button" class="btn btn-primary">登　録</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row"><br>
    </div>
  </div>
  <!-- /.container-fluid -->
</form>
</div>
<!-- /#page-wrapper -->
