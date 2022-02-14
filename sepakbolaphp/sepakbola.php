<?php

class sepakbola
{
	//properti
	private $nama = 0;
	private $negara = 0;
	private $tahun = 0;
    private $pemain = 0;

    
	public function __construct($nama = 0, $negara = 0, $tahun = 0, $pemain = 0){
		$this->nama = $nama;
		$this->negara= $negara;
		$this->tahun = $tahun;
		$this->pemain  = $pemain;
	}

    public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	public function setNegara($negara){
		$this->negara = $negara;
	}

	public function getNegara(){
		return $this->negara;
	}

	public function setTahun($tahun){
		$this->tahun = $tahun;
	}

	public function getTahun(){
		return $this->tahun;
	}

    public function setPemain($pemain){
		$this->pemain = $pemain;
	}

	public function getPemain(){
		return $this->pemain;
	}

	#fungsi untuk menampilkan data mahasiswa
	function display(){
		echo "Nama Tim : ", $this->nama ."<br>";
		echo "Asal Negara : ", $this->negara ."<br>";
		echo "Tahun Berdiri : ", $this->tahun ."<br>";
		echo "Pemain : " ."<br>";
	}
}

?>
