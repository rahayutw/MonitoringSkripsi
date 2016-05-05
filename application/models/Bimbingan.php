<?php
   class Dosen {
      /* Member variables */
      var $idSkripsi;
      var $NIK;
      var $subjek;
      var $jenis;
      var $persetujuan;
      
      /* Member functions */
      
      function getIdSkripsi() {
          return $this->idSkripsi;
      }

      function getNIK() {
          return $this->NIK;
      }

      function getSubjek() {
          return $this->subjek;
      }

      function getJenis() {
          return $this->jenis;
      }

      function getPersetujuan() {
          return $this->persetujuan;
      }

      function setIdSkripsi($idSkripsi) {
          $this->idSkripsi = $idSkripsi;
      }

      function setNIK($NIK) {
          $this->NIK = $NIK;
      }

      function setSubjek($subjek) {
          $this->subjek = $subjek;
      }

      function setJenis($jenis) {
          $this->jenis = $jenis;
      }

      function setPersetujuan($persetujuan) {
          $this->persetujuan = $persetujuan;
      }




   }
?>