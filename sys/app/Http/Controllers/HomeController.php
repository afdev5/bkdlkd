<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function password(Request $request)
    {
        $this->validate($request, [
            'password_lama' => 'required',
            'password_baru' => 'required|same:password_baru',
            'konfirmasi' => 'required|same:password_baru',
        ]);
        $input = $request->all();
        $pass = Auth::user()->password;
        if(Hash::check($input['password_lama'], $pass))
        {
            $data = User::findOrFail(Auth::user()->id);
            $data->password = bcrypt($input['password_baru']);
            $data->save();
            return redirect()->back()->with(['success' => 'Berhasil Mengubah Password !']);
            // return 'OK';
        } else {
            return redirect()->back()->with(['error' => 'Gagal Megubah Password !']);
        }
    }
}
