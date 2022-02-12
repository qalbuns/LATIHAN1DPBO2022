<?php
include "mahasiswa.php";

	#menggunakan set
	$mahasiswa1 = new mahasiswa();
	$mahasiswa1->setNim(1904335);
	$mahasiswa1->setNama("Qalbu Natasya Salsabila");
	$mahasiswa1->setJk("Perempuan");
	$mahasiswa1->setPs("Ilmu Komputer");
	$mahasiswa1->setSemester(6);
	
	$mahasiswa1->display1();

	$mahasiswa2 = new mahasiswa(1801199, "Muhammad Sadam", "Laki-laki", "Pendidikan Olahraga", 8);
	$mahasiswa2->display1();

	#menggunakan get
	$mahasiswa3 = new mahasiswa();
	$mahasiswa3->display2();
?>
