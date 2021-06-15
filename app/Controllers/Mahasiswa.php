<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelMahasiswa;
class Mahasiswa extends Controller {
    public function index() {
        $mhs = new ModelMahasiswa();
        $data = [
            'tampildata' => $mhs->tampildata()->getResult()
        ];

        echo View('viewtampilmahasiswa', $data);
    }
    public function formtambah()
        {
            helper('form');
            echo View('viewformtambah');
        }

    public function simpandata(){
        $data = [
            'mhsnim' => $this->request->getpost('nim'),
            'mhsnama' => $this->request->getpost('nama'),
            'mhsalamat' => $this->request->getpost('alamat'),
            'mhstelp' => $this->request->getpost('telp'),
            'mhstmplahir' => $this->request->getpost('tempat'),
            'mhstgllahir' => $this->request->getpost('tanggal'),
        ];
        $mhs = new ModelMahasiswa();

        $simpan = $mhs->simpan($data);

        if($simpan){
            return redirect() ->to('/mahasiswa/index');
        }
    }

    function hapus(){
            $uri = service('uri');
            $nim = $uri->getSegment('3');
            
            $mhs = new ModelMahasiswa();
            $mhs->hapusdata($nim); 
            return redirect() ->to('/mahasiswa/index');
        }

        function formedit(){

            helper('form');
            $uri = service('uri');
            $nim = $uri->getSegment('3');
            
            $mhs = new ModelMahasiswa();
            $ambildata = $mhs->ambildata($nim);

            if(count($ambildata->getResult()) > 0){
                $row = $ambildata->getRow();
                $data = [
                    'nim' => $nim,
                    'nama' => $row->mhsnama,
                    'tempat' => $row->mhstmplahir,
                    'tanggal' => $row->mhstmplahir,
                    'alamat' => $row->mhsalamat,
                    'telp' => $row->mhstelp,
                ];
                    echo View('viewformedit', $data);
        }
    }

    function updatedata () {

        $nim = $this->request->getpost('nim');
        $data = [
            'mhsnama' => $this->request->getpost('nama'),
            'mhsalamat' => $this->request->getpost('alamat'),
            'mhstelp' => $this->request->getpost('telp'),
            'mhstmplahir' => $this->request->getpost('tempat'),
            'mhstgllahir' => $this->request->getpost('tanggal'),
        ];
        $mhs = new ModelMahasiswa();

        $update = $mhs->editdata($data, $nim);

        if($update){
            return redirect() ->to('/mahasiswa/index');
        }

    }
}