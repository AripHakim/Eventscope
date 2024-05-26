<?php
// Konfigurasi database
$servername = "localhost"; // ganti dengan nama server database Anda
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "event_db"; // ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses data yang dikirim dari form
$namaEvent = $_POST['nama'];
$kategori = $_POST['kategori'];
$organizer = $_POST['organizer'];
$tanggalWaktu = $_POST['tanggalWaktu'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];
$namaKontak = $_POST['namaKontak'];
$email = $_POST['email'];
$nomor_hp = $_POST['nomor_hp'];

// Memproses upload file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadGambar"]["name"]);
move_uploaded_file($_FILES["uploadGambar"]["tmp_name"], $target_file);

// Menyimpan data ke database
$sql = "INSERT INTO events (nama, kategori, organizer, tanggalWaktu, lokasi, harga, namaKontak, email, nomor_hp, nama_gambar) VALUES ('$namaEvent', '$kategori', '$organizer', '$tanggalWaktu', '$lokasi','$harga', '$namaKontak', '$email', '$nomor_hp', '$target_file')";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
