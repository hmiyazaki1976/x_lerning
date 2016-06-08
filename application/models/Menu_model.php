<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();
    }

    function get_testkbnList() {
      $sql = 'SELECT * FROM `m002_testKbn`';
      if ($result = $this->db->query($sql)) {
        return $result->result();	;
      } else {
        return -1;
      }
    }
}
?>
