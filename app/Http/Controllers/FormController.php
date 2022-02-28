<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }
    public function hasil(Request $request)
    {
        $messagesError = [
            'required' => ':attribute ini wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
            'mimes' => ':foto harus berupa jpg,png,jpeg!',
            'numeric' => 'attribute harus diisi angka!',
        ];
        
        $this->validate($request,[
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5|max:40',
            'jenis_kelamin' => 'required|max:1',
            'alamat' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required|numeric',
            'ktp' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],$messagesError);
        $request->ktp = $this->SavePhoto($request);
        return view('hasil',['data' => $request]);
    }

    /* Untuk menyimpan foto di dalam storage, sebelumnya tulis command (php artisan storage:link) untuk membuat folder storage di dalam folder public*/
    public function SavePhoto(Request $request)
    {
        $photo = $request->ktp;
        $photo_name = ''; 
        $telephone = $request->nomor_telepon;
        if ($photo !== NULL)
        {
            $photo_name = 'Foto' . '_' . $telephone . "." . $photo->extension(); 
            $photo_name = str_replace(' ', '_', strtolower($photo_name)); //buat mengganti spasi menjadi _
            $photo_name = str_replace('+62', '0', $photo_name); //buat mengganti +62 menjadi 0
            $photo->storeAs(null, $photo_name, ['disk' => 'public']); //agar menyimpan di folder public
        }
        return asset('storage') . '/' . $photo_name;
    }
}