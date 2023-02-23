<?php
include"../Template-SPP/Header.php";
include"../Template-SPP/Navbar.php";
include"../Template-SPP/Sidebar.php";

?>

<div class="main-content">
        <section class="section">
          <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Kelas</h4>
                    <div class="card-header-action">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM user1 WHERE id='$id'")or 
    die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']?>">
                        <input type="text" name="nama" value="<?php echo $data['nama']?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php  ?>    

<?php
    include "../Template-SPP/Footer.php";
    ?>