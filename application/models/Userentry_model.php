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
      $sql = "INSERT INTO `m001_user`(`xid`, `uid`, `mailaddr`, `name`, `fastname`,
       `lastname`, `postcode1`, `post1`, `postcode2`, `post2`)
       VALUES ('00001','" . $data['email'] . "','". $data['email'] ."','". $data['name'] ."',
       '". $data['fastname'] ."','". $data['lastname'] ."','','','','')";
       $this->db->query($sql);
    }
}
?>
