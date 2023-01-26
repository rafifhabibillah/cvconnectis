<?php
include ('koneksi.php');
{
?>
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1><b> Data Siswa PKL </b></h1>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    
                                        <tr><th>NO</th>
    
    <th>NAMA LENGKAP</th>
    <th>TANGGAL LAHIR</th>
    <th>ALAMAT</th>
    <th>TELEPON</th>
    <th>FOTO</th>
    <th>ASAL SEKOLAH</th>
    <th>JURUSAN</th>
    <th>MULAI PKL</th>
    <th>SELESAI PKL</th>    
         
</tr>
                                    
                                    
                                        <?php
 $no=1;

$batas = 5;
    $hal =(isset($_GET['hal']))? $_GET['hal'] : 1;
    if(empty($hal)) {
    $posisi = 0;
    $hal = 1;
    } else {
    $posisi = ($hal - 1) * $batas;
    }
$queri="SELECT * from pkl LIMIT $posisi,$batas";//menampilkan semua data dari table device        
$hasil = mysqli_query ($koneksi,$queri); //funggsi untuk sql
$no = $posisi + 1;
    {
?>

  <?php while ($data= MySQLi_fetch_array ($hasil)){ 
    $alamat=$data['alamat'];
$pisah=explode("#",$alamat);?>

        <tr><td><?php echo $no++;?></td>
    
          <td><?php echo $data['nama_lengkap']; ?> </td>
            <td><?php echo $data['tanggal_lahir'];?> </td>
            <td><?php echo $pisah[0],',',$pisah[1],' Rt:',$pisah[2],' Rw:',$pisah[3],',',$pisah[4],',',$pisah[5],',',$pisah[6];?></td>
            <td><?php echo $data['telepon'];?> </td>
            <th><?php echo "<img src='../images/".$data['foto']."' width='40' height='40'>";?></th>
            <td><?php echo $data['asal_sekolah'];?></td>
            <td><?php echo $data['jurusan'];?></td>
            <td><?php echo $data['mulai_pkl'];?></td>
            <td><?php echo $data['selesai_pkl'];?></td>

    
        </tr> 
                                    
                                
                                <?php 
}  
   }
?>
                            </table>
                            <div style="margin-top:10px; float:right;">
                         <div>
            <ul class="pagination"> 
                <?php        
                $jml = mysqli_num_rows(mysqli_query($koneksi, "select * from pkl "));
                if($hal == 1){ // Jika page adalah page ke 1, maka disable link PREV        
                    ?>          
                    <li class="disabled"><a href="#">First</a></li>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <?php        
                }else{ // Jika page bukan page ke 1          
                    $link_prev = ($hal > 1)? $hal - 1 : 1;        
                    ?>          
                    <li><a href="?web=tabel2.php&hal=1">First</a></li>
                    <li><a href="?web=tabel2.php&hal=<?php echo $link_prev; ?>">&laquo;</a></li>
                <?php        
                }        
                ?>
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for($i=1; $i<=$jml_hal; $i++){
                        if($i != $hal){
                            echo "<li><a href='?web=tabel2.php&hal=$i'>$i</a></li>";
                        } else{
                            echo "<li><a href='?web=tabel2.php&hal=$i'>$i</a></li>";
                        }
                    }
                    ?>
                    
                    
                    <?php        
                // Jika page sama dengan jumlah page, maka disable link NEXT nya        
                // Artinya page tersebut adalah page terakhir        
                if($hal == $jml_hal){ // Jika page terakhir        
                    ?>          
                    <li class="disabled"><a href="#">&raquo;</a></li>
                    <li class="disabled"><a href="#">Last</a></li>
                    <?php        
                }else{ // Jika Bukan page terakhir          
                    $link_next = ($hal < $jml_hal)? $hal + 1 : $jml_hal;        
                    ?>          
                    <li><a href="?web=tabel2.php&hal=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="?web=tabel2.php&hal=<?php echo $jml_hal; ?>">Last</a></li>
                <?php        
                }        
                ?>  
                </ul>
                </div>
                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                    <!--  end  Context Classes  -->
                
<?php
}
?>