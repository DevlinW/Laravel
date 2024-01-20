<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function register(Request $request){
        // Add validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
    
        // Check if the validation fails
        if ($validator->fails()) {
            // Redirect back with error message
            return redirect('/register')->withErrors($validator)->withInput();
        }
    
        $user = new User([
            "name" => '',
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
    
        $user->save();
        return redirect('/login');
    }
    

    function login(Request $request){
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);
    
        if($request->remember){
            Cookie::queue('remember', 'yes');
        }
    
        if(Auth::attempt($credentials)){
            // Cek apakah alamat email pengguna cocok dengan pola yang diinginkan
            if (strpos(Auth::user()->email, '@admin.com') !== false) {
                return redirect('/Admin');
            } else {
                return redirect('/Home');
            }
        } else {
            // Tambahkan pesan error jika login gagal
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }
    
    function logout()
    {
        $user = Auth::user();
        Auth::logout();
        session()->flush();
        return redirect (route('login.page'))->with('message', 'log out successful');
    }

    public function editAccount()
    {
        $users = User::all();
        return view('edit_account', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit_account_form', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/edit-account')->with('status', 'User updated successfully');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/edit-account')->with('status', 'User deleted successfully');
    }
}