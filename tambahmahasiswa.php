<form action="?url=mahasiswa" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prodi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prodi">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name=submit class="btn btn-primary" >Submit</button>
</form>
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
    $nim= $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi= $_POST['prodi'];
    $alamat = $_POST['alamat'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,prodi,alamat) VALUES('$nim','$nama','$prodi','$alamat')");

    // Show message when user added
    echo "User added successfully. <a href='mahasiswa.php'></a>";
}
?>