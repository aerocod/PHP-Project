<?php
class Mahasiswa{

    public function __construct(public int $nim, public string $nama, public string $jurusan, public int $tahun_masuk, public string $universitas) //public or private
    {}
    function getMahasiswa(){
        return "NIM: {$this->nim} atas nama {$this->nama} dan berkuliah di {$this->universitas}";
    }
    
}
$detail_Mahasiswa = new Mahasiswa(nim: 422021004, nama: "Neil Christian", jurusan: "Sistem Informasi", tahun_masuk: 2021, universitas: "Ukrida");
$detail_Mahasiswa1 = new Mahasiswa(nim: 412021011, nama: "Vincent Wijaya", jurusan: "Informatika", tahun_masuk: 2021, universitas: "Ukrida");
$detail_Mahasiswa2 = new Mahasiswa(nim: 102021058, nama: "Adolf Sebastian", jurusan: "Kedokteran", tahun_masuk: 2021, universitas: "Ukrida");
var_dump($detail_Mahasiswa);
var_dump($detail_Mahasiswa1);  //Describe tipe data
var_dump($detail_Mahasiswa2);

echo $detail_Mahasiswa->getMahasiswa();
echo $detail_Mahasiswa1->getMahasiswa();  //Output return
echo $detail_Mahasiswa2->getMahasiswa();