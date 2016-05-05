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
            
                $dosen = array();
                $ydata = array();
                
                // Then I should see laporan_data
                switch($_POST['laporan']){
                    case 1 : echo "Tabel dan Grafik : Performa Dosen Pembimbing";
                        showLaporan($_POST['laporan'],$dosen,$ydata);
                        break;
                    case 2 : echo "Tabel dan Grafik : KBK";
                        showLaporan($_POST['laporan'],$dosen,$ydata);
                        break;
                    case 3 : echo "Tabel dan Grafik : Skripsi Khusus";
                        showLaporan($_POST['laporan'],$dosen,$ydata);
                        break;
                }
                
            }
            
            function showLaporan($kategori, $dosen,$ydata){
                $lines = @file($aFile,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
                if( $lines === false ) {
                    throw new JpGraphException('Can not read dosen bimbing data file.');
                }
                foreach( $lines as $line => $datarow ) {
                    $split = preg_split('/[\s]+/',$datarow);
                    $aDosens[] = substr(trim($split[0]),0,4);
                    $aSunspots[] = trim($split[1]);
                }
            }
            
            
        ?>
        
        
    </body>
</html>
