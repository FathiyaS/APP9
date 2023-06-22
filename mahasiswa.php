
<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim ASC");
?>

<html>
<head>
    <title>Data mahasiswa</title>
</head>

<body>
<b>Data Mahasiswa</b><br>
<a href="?url=tambahmahasiswa">Tambah Mahasiswa</a><br/><br/>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <tr class="header">
        <th>Nim</th><th>Nama</th> <th>Prodi</th> <th>Alamat</th><th>Aksi</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['prodi']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?id=$user_data[nim]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</div>
</div>
</div>

</body>

</html>