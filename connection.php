

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nama = $_POST['nama'];
	$usia = $_POST['usia'];
	$tgl_lahir = $_POST['tgl_lahir'];

	$_SESSION['nama'] = $nama;
	$_SESSION['usia'] = $usia;
	$_SESSION['tgl_lahir'] = $tgl_lahir;

	$birthday = date('d-m', strtotime($tgl_lahir));
	$current_day = date('d-m');

	if (empty($nama) || empty($usia) || empty($tgl_lahir)) {
		// mengecek apakah ketiga input ada atau tidak
        echo "<script>alert('Isi dengan benar');</script>";
        header("Location: index.html");
        exit;
	}
	else {
		if ($current_day === $birthday) {
			header('Location: birthday_page.html'); // Location: file untuk redirect page 
			exit;
		} else {
			header('Location: page.html');
			exit;
		}
	}
}

?>
