<?php
include ('koneksi.php');
{
?>
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <form action="?web=tabel.php" method="post">
                            <big><b> Silabus TKJ </b></big>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <small><b>PENCARIAN :</b></small>
    <input type="text" name="cari">
    <button type="submit" class="btn btn-default btn-xs">search<span class="glyphicon glyphicon-search"></span></button>
    </form>
                        </div>
                        <?php
    include('koneksi.php');
    if(isset($_POST['cari'])){
        $cari=$_POST['cari'];
        
    }
    ?>
                        <div class="panel-body">
                            <p align="center"><b> Silabus Teknik Komputer Jaringan </b></p>
                            <center><a href ="?web=silabustkj.php" class="btn btn-warning btn-XS">TAMBAH silabus</a></center>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    
                                        <tr>
    <th>Silabus Siswa</th>
    <th>Action</th>
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
$queri="SELECT * from silabustkj LIMIT $posisi,$batas";//menampilkan semua data dari table device        
$hasil = mysqli_query ($koneksi,$queri); //funggsi untuk sql
$no = $posisi + 1;
    {
        if (isset($_POST['cari'])){
            $cari = $_POST['cari'];
            $hasil=mysqli_query($koneksi,"select * from silabustkj where id_silabus like'%".$cari."%'
        or silabus   like '%".$cari."%'
        ");
        }

?>

  <?php while ($data= MySQLi_fetch_array ($hasil)){ ?>

        <tr>
          <td><?php echo $data['silabus']; ?> </td>
            <td><a href="?web=edit_biodata.php&id=<?php echo $data['id']; ?>"  class="btn btn-primary btn-md btn-block"><i class="fa fa-edit"></i> Edit</a>
            </td>
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
                $jml = mysqli_num_rows(mysqli_query($koneksi, "select * from silabustkj "));
                if($hal == 1){ // Jika page adalah page ke 1, maka disable link PREV        
                    ?>          
                    <li class="disabled"><a href="#">First</a></li>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <?php        
                }else{ // Jika page bukan page ke 1          
                    $link_prev = ($hal > 1)? $hal - 1 : 1;        
                    ?>          
                    <li><a href="?web=tabelsilabus.php&hal=1">First</a></li>
                    <li><a href="?web=tabelsilabus.php&hal=<?php echo $link_prev; ?>">&laquo;</a></li>
                <?php        
                }        
                ?>
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for($i=1; $i<=$jml_hal; $i++){
                        if($i != $hal){
                            echo "<li><a href='?web=tabelsilabus.php&hal=$i'>$i</a></li>";
                        } else{
                            echo "<li><a href='?web=tabelsilabus.php&hal=$i'>$i</a></li>";
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
                    <li><a href="?web=tabelsilabus.php&hal=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="?web=tabelsilabus.php&hal=<?php echo $jml_hal; ?>">Last</a></li>
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