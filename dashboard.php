<div class="container-fluid">
    <div class="row">
        <div class="col pt-3">
            <h1 class="text-center pb-2">View Data</h1>
            <form action="index.php" method="post">
                <div class="form-group row float-right pr-3">
                    <input type="text" name="cari">
                    <input type="submit" class="btn btn-primary" value="Cari">
                </div>
            </form>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Hobi</th>
                        <th>Genre Film</th>
                        <th>Wisata</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("koneksi.php");
                        @$cari = $_POST['cari'];
                        $result = $data -> tampil($cari);
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['namadepan'] . " " . $row['namabelakang']; ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['kelas']; ?></td>
                            <td><?php echo $row['hobi']; ?></td>
                            <td><?php echo $row['genre']; ?></td>
                            <td><?php echo $row['wisata']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><a href="index.php?halaman=EditData&nim=<?php echo $row['nim'];?>"><input type="button" class="btn btn-primary" value="Edit"></a> | <a href="koneksi.php?delete=<?php echo $row['nim']; ?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
                        </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>