<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('add_product');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'prodname' => 'required|min:5',
            'prodprice' => 'required|numeric|min:1000',
            'proddesc' => 'required|min:5',
            'prodtype' => 'required',
            'prodimg' => 'required|file|image|max:15000'
        ]);

        $namaFile = $request->input('prodname').'.'.$request->prodimg->getClientOriginalExtension();
        $path = $request->prodimg->move('image', $namaFile);
        $pathBaru = asset('image/'.$namaFile);

        $prodname = $request->input('prodname');
        $prodprice = $request->input('prodprice');
        $proddesc = $request->input('proddesc');
        $prodtype = $request->input('prodtype');
        $prodimg = $pathBaru; 
        
        // Menggunakan pathBaru sebagai nilai prodimg

        // Simpan data ke database menggunakan model Product
        $product = new Product();
        $product->prodname = $prodname;
        $product->prodprice = $prodprice;
        $product->proddesc = $proddesc;
        $product->prodtype = $prodtype;
        $product->prodimg = $prodimg;
        $product->save();

        return view('product_admin', compact('namaFile', 'path', 'pathBaru', 'prodname', 'prodprice', 'proddesc'));
    }

}
