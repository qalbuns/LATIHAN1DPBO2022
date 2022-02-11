<?php

class mahasiswa
{
	//properti
	private $nim;
	private $nama;
	private $jenis_kelamin;
    private $program_studi;
    private $semester;

    
	public function __construct($nim, $nama, $jenis_kelamin, $program_studi, $semester){
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
	function display(){
		echo "Nim : ", $this->nim ."<br>";
		echo "Nama : ", $this->nama ."<br>";
		echo "Jenis Kelamin : ", $this->jenis_kelamin ."<br>";
		echo "Program Studi : ", $this->program_studi ."<br>";
		echo "Semester : ", $this->semester ."<br><br>";
	}
}

?>