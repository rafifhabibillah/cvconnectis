<?php
include ('koneksi.php');
{
?>
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <form action="?web=tabel.php" method="post">
                            <big><b> Tabel Biodata </b></big>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    
                                        <tr>
    <th>NAMA LENGKAP</th>
    <th>ALAMAT</th>
    <th>TELEPON</th>
    <th>FOTO</th>
    <th>ASAL SEKOLAH</th>
    <th>JURUSAN</th>
    <th>MULAI PKL</th>
    <th>SELESAI PKL</th>    
        <th>ACTION</th> 
</tr>
                                    
                                    
                                        <?php
 $no=1;
$batas = 5;
$hal = @$_GET['hal'];
if(empty($hal)) {
$posisi = 0;
$hal = 1;
} else {
$posisi = ($hal - 1) * $batas;
}
$queri="SELECT * from pkl";//menampilkan semua data dari table device
             
$hasil = mysqli_query ($koneksi,$queri);

$no = $posisi + 1;
    {
        if (isset($_POST['cari'])){
            $cari = $_POST['cari'];
            $hasil=mysqli_query($koneksi,"select * from pkl where id like'%".$cari."%'
        or nama_lengkap   like '%".$cari."%'
        or tanggal_lahir    like '%".$cari."%'
        or alamat            like '%".$cari."%'
        or jurusan        like '%".$cari."%'
        or mulai_pkl          like '%".$cari."%'
        or selesai_pkl            like '%".$cari."%'
        ");
        }

?>

  <?php while ($data= MySQLi_fetch_array ($hasil)){ 
    $alamat=$data['alamat'];
$pisah=explode("#",$alamat);?>

        <tr>
          <td><?php echo $data['nama_lengkap']; ?> </td>
            <td><?php echo $pisah[0],',',$pisah[1],' Rt:',$pisah[2],' Rw:',$pisah[3],',',$pisah[4],',',$pisah[5],',',$pisah[6];?></td>
            <td><?php echo $data['telepon'];?> </td>
            <th><?php echo "<img src='../images/".$data['foto']."' width='40' height='40'>";?></th>
            <td><?php echo $data['asal_sekolah'];?></td>
            <td><?php echo $data['jurusan'];?></td>
            <td><?php echo $data['mulai_pkl'];?></td>
            <td><?php echo $data['selesai_pkl'];?></td>

            
            <td><a href="?web=edit_biodata.php&id=<?php echo $data['id']; ?>"  class="btn btn-primary btn-md btn-block"><i class="fa fa-edit"></i> Edit</a>
            </td>
        </tr> 
                                    
                                
                                <?php 
}  
   }
?>
                            </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                    <!--  end  Context Classes  -->
                
<?php
}
?>