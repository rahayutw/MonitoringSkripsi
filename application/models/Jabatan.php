<?php
   class Jabatan {
      /* Member variables */
      var $idJabatan;
      var $namaJabatan;
      var $NIK;
      
      /* Member functions */
      
      function getIdJabatan() {
          return $this->idJabatan;
      }

      function getNamaJabatan() {
          return $this->namaJabatan;
      }

      function getNIK() {
          return $this->NIK;
      }

      function setIdJabatan($idJabatan) {
          $this->idJabatan = $idJabatan;
      }

      function setNamaJabatan($namaJabatan) {
          $this->namaJabatan = $namaJabatan;
      }

      function setNIK($NIK) {
          $this->NIK = $NIK;
      }



   }
?>