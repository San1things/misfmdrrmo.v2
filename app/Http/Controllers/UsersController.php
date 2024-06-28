<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UsersController extends Controller
{
    public function index()
    {
        $data = [];
        $data['tbl_users'] = DB::table('tbl_users')->get()->toArray();

        $adminCount = DB::table('tbl_users')->where('usertype', 'admin')->count();
        $staffCount = DB::table('tbl_users')->where('usertype', 'staff')->count();
        $residentCount = DB::table('tbl_users')->where('usertype', 'resident')->count();
        $allCount = DB::table('tbl_users')->count();

        return view('users', [
            'tbl_users' => $data['tbl_users'],
            'adminCount' => $adminCount,
            'staffCount' => $staffCount,
            'residentCount' => $residentCount,
            'allCount' => $allCount
        ]);

    }
    

    public function userUpdate(Request $request){
        $input = $request->input();
        DB::table('tbl_users')->where('id', $input['id'])
        ->update([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'usertype' => $input['usertype'],
            'username' => $input['username'],
            'password' => $input['password'],
            'gender' => $input['gender'],
            'bday' => $input['birthday'],
            'contact' => $input['contact'],
            'team' => $input['team'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('/');
    }

}
