<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userentry_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();
    }

    function set_User($data) {
      $sql = "call proc_userentry('" . $data['email'] . "','". $data['name'] ."',
      '". $data['fastname'] ."','". $data['lastname'] ."','','','','','". $data['password'] ."',@code,@str)";
      $this->db->query($sql);
      $sql = "select @code as retcode, @str as retmes";
      $this->db->query($sql);
    }

    function get_User($data) {
      $sql = "SELECT `xid`, `uid`, `email`, `name`, `fastname`, `lastname`, `postcode1`,
      `post1`, `postcode2`, `post2`, `password` FROM `m001_user` WHERE `email` = '" . $data['email']. "' and
      `password` = '". $data['password'] ."'";
      $query = $this->db->query($sql);
      $row = $query->row_array();
      return $row;
    }
}
