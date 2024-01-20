<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class FileUpdateController extends Controller
{
    public function fileUpdate(){
        return view('update_product');
    }

    public function prosesFileUpdate(Request $request){

        $request->validate([
            'prodname' => 'required|min:5',
            'prodprice' => 'required|numeric|min:1000',
            'proddesc' => 'required|min:5',
            'prodtype' => 'required|',
            'prodimg' => 'required|file|image|max:15000'
        ]);
    
        $namaFile = $request->input('prodname').'.'.$request->prodimg->getClientOriginalExtension();
        $path = $request->prodimg->move('image', $namaFile);
        
        $pathBaru = asset('image/'.$namaFile);
    
        // Mengambil nilai prodname, prodprice, dan proddesc dari request
        $prodname = $request->input('prodname');
        $prodprice = $request->input('prodprice');
        $proddesc = $request->input('proddesc');
    
        return view('product_admin', compact('namaFile', 'path', 'pathBaru', 'prodname', 'prodprice', 'proddesc'));
    }

}