<?php
include "mahasiswa.php";

	#objek
	$mahasiswa1 = new mahasiswa(1904335, "Qalbu Natasya Salsabila", "Perempuan", "Ilmu Komputer", 6);
	$mahasiswa1->display();

	$mahasiswa2 = new mahasiswa(1801199, "Muhammad Sadam", "Laki-laki", "Pendidikan Olahraga", 8);
	$mahasiswa2->display();

	$mahasiswa3 = new mahasiswa(2001299, "Naila Pratiwi", "Perempuan", "Kimia", 4);
	$mahasiswa3->display();

?>
