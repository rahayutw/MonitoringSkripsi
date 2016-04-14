<?php
 
    $user_name = "root";
    $password = "";
    $database = "monitoringskripsi";
    $host_name = "localhost";

    $connect_db = mysql_connect($host_name, $user_name, $password);

    $find_db = mysql_select_db($database);

    if ($find_db) {
        echo "Database Ada";
    }else {
        echo "Database Tidak Ada";
        mysql_close($connect_db);
    }
    /**
     * define ObjectsTable
     */
    $table_dosen = "dosen";
    
    /**
     *  define ObjectsClass
     */
    Class Dosen{}
    
    /**
     *  function manipulating Database
     */
    
    // DOSEN //
    function createDosen($dosen){
        $td = new Dosen();
        $td = $dosen;
        
        $query = "INSERT " + $table_dosen + "(nik,idkbk,tahunajar,nama,alamat,telepon,email,password) "
                + "VALUES('$td->getNik()','$td->getIDKBK()','$td->getTahunAjar(),'$td->getNama()','$td->getAlamat()',"
                + "'$td->getTelepon(),'$td->getEmail()','$td->getPassword()')";
        $hasil = mysql_query($query);
    }
    
    function getDosen($id){
        $query = "SELECT  * FROM " + $table_dosen + 
                " WHERE "+ NIK + " = '" + id + "'";
        $hasil = mysql_query($query);
        
        $td = new Dosen();
        $td->setNik($hasil[0]);
        $td->setNama($hasil[1]);
        $td->setIDKBK($hasil[2]);
        $td->setIdtahunajar($hasil[3]);
        $td->setAlamat($hasil[4]);
        $td->setTelepon($hasil[5]);
        $td->setEmail($hasil[6]);
        $td->setPassword($hasil[7]);
        
        return $td;
    }
    
    function getAllDosen(){
        
    }
    
    function getDosenCount(){
        
    }
    
    
?>