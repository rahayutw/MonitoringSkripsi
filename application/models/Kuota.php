<?php
   class KBK {
      /* Member variables */
      var $tahunAjar;
      var $kuota;
      
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