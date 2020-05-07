<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

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

    public function adminpage()
    {
        return view('home');
    }



 public function allData(){
         $registrationData = User:: paginate(3);
        return view('listofusers', compact('registrationData'));


    }

    public function edituser($id){
        $registration =  User::find($id);
        return view('edituser', compact('registration'));

    }

    public function update(Request $req, $id){

           $registration =  User::find($id);

            $registration -> name = $req->input('name');
            // $registration -> surname = $req->input('surname');
            $registration -> email = $req->input('email');
            // $registration -> phone = $req->input('phone');
            // $registration -> password = $req->input('password');


            $registration -> save();

           return redirect()-> route('home')->with('success', 'ОБНОВЛЕНИЕ прошло успешно ');
     
    }


    public function delete($id){
        User::find($id)->delete();
        return redirect( route( 'home')) -> with('success', 'User delete successfully!');

    }


}
