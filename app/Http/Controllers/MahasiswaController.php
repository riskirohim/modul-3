<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => "Rizqy rohimulhudda",
            'nim' => "102022300258",
            'email' => "rizqyrohimulhuda@gmail.com",
            'jurusan' => "sistem informasi",
            'fakultas' => "fakultas rekayasa industri",
            'foto' => asset('/images/foto riski.jpg')
    
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);

    }
}
