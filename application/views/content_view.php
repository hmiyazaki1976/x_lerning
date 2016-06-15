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
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- pccordion panel row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="selection" id="page-1">
          <div class="panel panel-default">
              <div class="panel-heading">
                  問１
              </div>
              <div class="panel-body">
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
                  <br>
                  <br>
                  <div class="form-group">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>ア．
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">イ．
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">ウ．
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">エ．
                          </label>
                      </div>
                      <br>
                      <button type="button" class="btn btn-primary disabled" id="prev_p1">Prev</button>
                      <button type="button" class="btn btn-primary" id="next_p1">Next</button>
                  </div>
                  <p class="text-right">＜出典：＞</p>
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <div class="selection" id="page-2">
          test page2
        </div>
        <div class="selection" id="page-3">
          test page3
        </div>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
          <div id="light-pagination" class="pagination"></div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
