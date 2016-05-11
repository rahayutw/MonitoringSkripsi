<?php
   class KBK extends CI_Model{
      /* Member variables */
      var $tahunAjar;
      var $kuota;
      
      function __construct() {
          parent::__construct();
      }
      /* Member functions */
      
      function getTahunAjar() {
          return $this->tahunAjar;
      }

      function getKuota() {
          return $this->kuota;
      }

      function setTahunAjar($tahunAjar) {
          $this->tahunAjar = $tahunAjar;
      }

      function setKuota($kuota) {
          $this->kuota = $kuota;
      }


   }
?>