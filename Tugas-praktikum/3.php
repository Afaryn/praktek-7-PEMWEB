<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "data_pegawai";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// insert data department
$sql = "INSERT INTO department (kode_depar, nama_depar) VALUES ('DP001', 'Departemen A')";
if (mysqli_query($conn, $sql)) {
    echo "Data department berhasil ditambahkan";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Menambah data pegawai
$sql = "INSERT INTO employee (id_department, nama, email, alamat) VALUES ('1', 'John Doe', 'johndoe@example.com', '123 Main St')";
if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Mengubah data pegawai
$sql = "UPDATE employee SET nama='Jane Doe' WHERE id_em=1";
if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil diubah.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menghapus data pegawai
$sql = "DELETE FROM employee WHERE id_em=1";
if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil dihapus.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
