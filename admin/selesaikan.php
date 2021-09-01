<?php
require("../config/config.default.php");
require("../config/config.function.php");
require("../config/functions.crud.php");
$idnilai = $_POST['id'];
$nilai = fetch($koneksi, 'nilai', array('id_nilai' => $idnilai));
$idm = $nilai['id_mapel'];
$ids = $nilai['id_siswa'];
$idu = $nilai['id_ujian'];
$where = array(
	'id_mapel' => $idm,
	'id_siswa' => $ids,
	'id_ujian' => $idu
);

$benar = $salah = 0;
$mapel = fetch($koneksi, 'mapel', array('id_mapel' => $idm));
$siswa = fetch($koneksi, 'siswa', array('id_siswa' => $ids));
$ceksoal = select($koneksi, 'soal', array('id_mapel' => $idm, 'jenis' => 1));
$ceksoalesai = select($koneksi, 'soal', array('id_mapel' => $idm, 'jenis' => 2));

$arrayjawabesai = array();
foreach ($ceksoalesai as $getsoalesai) {
	$w2 = array(
		'id_siswa' => $ids,
		'id_mapel' => $idm,
		'id_soal' => $getsoalesai['id_soal'],
		'jenis' => 2
	);
	// $cekjwbesai = rowcount($koneksi, 'jawaban', $w2);
	// if ($cekjwbesai <> 0) {
	$getjwb2 = fetch($koneksi, 'jawaban', $w2);
	if ($getjwb2) {
		$jawabxx = str_replace("'", "`", $getjwb2['esai']);
		$jawabxx = str_replace("#", ">>", $jawabxx);
		$jawabxx = preg_replace('/[^A-Za-z0-9\@\<\>\$\_\&\-\+\(\)\/\?\!\;\:\`\"\[\]\*\{\}\=\%\~\`\÷\× ]/', '', $jawabxx);
		$arrayjawabesai[$getsoalesai['id_soal']] = $jawabxx;
	} else {
		$arrayjawabesai[$getsoalesai['id_soal']] = 'Tidak Diisi';
	}
	// } else {
	// 	$arrayjawabesai[$getjwb2['id_soal']] = 'tidak diisi';
	// }
}
$arrayjawab = array();
foreach ($ceksoal as $getsoal) {
	$w = array(
		'id_siswa' => $ids,
		'id_mapel' => $idm,
		'id_soal' => $getsoal['id_soal'],
		'jenis' => 1
	);

	// $cekjwb = rowcount($koneksi, 'jawaban', $w);
	// if ($cekjwb <> 0) {
	$getjwb = fetch($koneksi, 'jawaban', $w);
	if ($getjwb) {
		$arrayjawab[$getsoal['id_soal']] = $getjwb['jawaban'];
	} else {
		$arrayjawab[$getsoal['id_soal']] = 'X';
	}
	($getjwb['jawaban'] == $getsoal['jawaban']) ? $benar++ : $salah++;
	// } else {
	// 	$arrayjawab[$getjwb['id_soal']] = 'X';
	// 	$salah++;
	// }
}
$bagi = $mapel['jml_soal'] / 100;
$bobot = $mapel['bobot_pg'] / 100;
$skor = ($benar / $bagi) * $bobot;
$skor = round($skor);

$data = array(
	'ujian_selesai' => $datetime,
	'jml_benar' => $benar,
	'jml_salah' => $salah,
	'skor' => $skor,
	'total' => $skor,
	'online' => 0,
	'jawaban' => serialize($arrayjawab),
	'jawaban_esai' => serialize($arrayjawabesai)
);
$simpan = update($koneksi, 'nilai', $data, $where);
echo mysqli_error($koneksi);
// if ($simpan) {
// 	delete($koneksi, 'jawaban', $where);
// }
mysqli_query($koneksi, "INSERT INTO log (id_siswa,type,text,date) VALUES ('$ids','login','Selesai Ujian','$tanggal $waktu')");
