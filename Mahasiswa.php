<?php
    class Mahasiswa{
 
    public $nim;
    public $nama;
    public $programStudi;
 
    function setData($nim, $nama, $programStudi){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->programStudi = $programStudi;
}
    function getData(){
    return [
    'nim' => $this->nim,
    'nama' => $this->nama,
    'programStudi' => $this->programStudi
    ];
}
 public function tampilData(){
    echo "<p>NIM   : ".$this->nim."</p>";
    echo "<p>NAMA   : ".$this->nama."</p>";
    echo "<p>PROGRAM STUDI   : ".$this->programStudi."</p>";
 }
 } 