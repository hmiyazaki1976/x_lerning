<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>統計情報<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">学習状況（自分）</a>
                    </li>
                    <li>
                        <a href="morris.html">学習状況（他ユーザー）</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i>演習問題<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <?php foreach ($results as $row) {
                          echo '<li>';
                          echo '<a href="' . $row->id .'">' . $row->Name . '</a>';
                          echo '</li>';
                        }
                  ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i>管理メニュー<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                      <a href="flot.html">個人情報</a>
                  </li>
                  <li>
                      <a href="flot.html">問題編集</a>
                  </li>
                  <li>
                      <a href="flot.html">試験区分</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
