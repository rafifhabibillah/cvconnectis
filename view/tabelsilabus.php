<?php
include ('koneksi.php');
{
?>                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <form action="?web=insert_pencapaian.php" method="post" name="input" enctype="multipart/form-data">
                        <div class="panel-body">
                            <p align="center"><b> Silabus Teknik Komputer Jaringan </b></p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    
                                        <tr>
    <th>Pencapaian</th>
    <th>Silabus Siswa</th>
    
</tr>
<script>
    function toogle(pilih){
        checkboxes = document.getElementsByName('cek[]');
        for(var i=0,n=checkboxes.length;i<n;i++){
            checkboxes[i].checked = pilih.checked
        }
    }

</script>                           
                                        <?php
 $no=1;
$queri="SELECT * from silabustkj";//menampilkan semua data dari table device        
$hasil = mysqli_query ($koneksi,$queri); //funggsi untuk sql
?>

  <?php while ($data= MySQLi_fetch_array ($hasil)){ ?>

        <tr>
          <td><div class="form-group" required>
    <input type ="checkbox" name="cek[]" value="belum" checked>&nbsp;&nbsp;Belum
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="checkbox" name="cek[]" value="sudah">&nbsp;&nbsp;Sudah
</div> </td>
          <td><?php echo $data['silabus']; ?> </td>
        </tr> 
                                    
                                
                                <?php   
   }
?>
                            </table>
                            <button type="submit" name="input" value="simpan" class="btn btn-default btn-lg">Simpan</button>
<button type="reset" name="reset" value="batal" class="btn btn-default btn-lg">Batal</button>
                     </div>       
                </div>
                            </div>
                     <!-- End  Kitchen Sink -->
                    <!--  end  Context Classes  -->
                
<?php
}
?>