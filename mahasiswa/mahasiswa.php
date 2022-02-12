<?php

class mahasiswa
{
	//properti
	private $nim = 0;
	private $nama = 0;
	private $jenis_kelamin = 0;
    private $program_studi = 0;
    private $semester = 0;

    
	public function __construct($nim = 0, $nama = 0, $jenis_kelamin = 0, $program_studi = 0, $semester = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->jenis_kelamin = $jenis_kelamin;
		$this->program_studi = $program_studi;
		$this->semester = $semester;
	}

	public function setNim($nim){
		$this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}

    public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	public function setJk($jenis_kelamin){
		$this->jenis_kelamin = $jenis_kelamin;
	}

	public function getJk(){
		return $this->jenis_kelamin;
	}

    public function setPs($program_studi){
		$this->program_studi = $program_studi;
	}

	public function getPs(){
		return $this->program_studi;
	}

	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getSemester(){
		return $this->semester;
	}
	
	#fungsi untuk menampilkan data mahasiswa 
	#menggunakan get
	function display1(){
		echo "Nim : ", $this->nim ."<br>";
		echo "Nama : ", $this->nama ."<br>";
		echo "Jenis Kelamin : ", $this->jenis_kelamin ."<br>";
		echo "Program Studi : ", $this->program_studi ."<br>";
		echo "Semester : ", $this->semester ."<br><br>";
	}

	#menggunakan set
	function display2(){
	$mahasiswa3 = new mahasiswa(2001299, "Naila Pratiwi", "Perempuan", "Kimia", 4);
		echo "Nim : ", $mahasiswa3->getNim() ."<br>";
		echo "Nama : ", $mahasiswa3->getNama() ."<br>";
		echo "Jenis Kelamin : ", $mahasiswa3->getJk() ."<br>";
		echo "Program Studi : ", $mahasiswa3->getPs() ."<br>";
		echo "Semester : ", $mahasiswa3->getSemester() ."<br><br>";	
	}
}
?>
