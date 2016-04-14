<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="laporanDropdown" method="post">
            <select name="laporan">
                <option value="1">Performa Dosen Pembimbing</option>
                <option value="2">KBK</option>
                <option value="3">Skripsi Khusus</option>
            </select> 
            <input type="submit" name="Submit" value="Submit">
        </form>
        
        <?php
        
            // When I navigate to any_laporan
            if(isset($_POST['laporan'])) {
                
                // Then I should see laporan_data
                switch($_POST['laporan']){
                    case 1 : echo "Tabel dan Grafik : Performa Dosen Pembimbing";
                        showLaporan ($_POST['laporan']);
                        break;
                    case 2 : echo "Tabel dan Grafik : KBK";
                        showLaporan ($_POST['laporan']);
                        break;
                    case 3 : echo "Tabel dan Grafik : Skripsi Khusus";
                        showLaporan ($_POST['laporan']);
                        break;
                }
                
            }
            
            function showLaporan($kategori){
                
            }
       
        ?>
        
        
    </body>
</html>
