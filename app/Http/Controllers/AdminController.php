<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\storePasswordReset;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function storeAdmin(Request $request)
    {

        // dd($request);
        $FormFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $FormFields['password'] = Hash::make($FormFields['password']);
        admin::create($FormFields);
        return redirect()->back();
    }
    // hello i just want to make new comit today
    public function authenticate(Request $request)
    {
        $FormFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($FormFields)) {
            // dd(auth()->attempt($FormFields));
            $request->session()->regenerate();

            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');
    }

    public function signOut(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/sign_in');
    }

    // public function mailTo(Request $request)
    // {
    //     Mail::to('oegbosionu@gmail.com')->send(new($request));
    //     return redirect()->back()->with('message', 'Thanks for reaching out!');
    // }

    public function passwordUpdate (storePasswordReset $request){
        $response = Auth::check(['password' => $request->currentpassword]);
        if (!$response) return redirect()->back()->withErrors('Your current password does not matches with the password.');

        $admin = Auth::user();
        $admin = admin::find($admin->id);
        // dd($student);
        $admin->password = hash::make($request->get('newpassword'));
        $admin->save();
        return redirect()->back()->with('message', 'Password reset successful!');
    }
}


// Skills::create($formFields);
// Alert::success('Skills Created Successfully');
// return redirect()->back(); 