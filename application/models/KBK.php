<?php
   class KBK {
      /* Member variables */
      var $idKBK;
      var $namaKBK;
      var $NIK;
      
      /* Member functions */
      
      function getIdKBK() {
          return $this->idKBK;
      }

      function getNamaKBK() {
          return $this->namaKBK;
      }

      function getNIK() {
          return $this->NIK;
      }

      function setIdKBK($idKBK) {
          $this->idKBK = $idKBK;
      }

      function setNamaKBK($namaKBK) {
          $this->namaKBK = $namaKBK;
      }

      function setNIK($NIK) {
          $this->NIK = $NIK;
      }


   }
?>