<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $users = DB::table('tbl_users');

        if ($request->query('usertype')) {
            $usertype = $request->query('usertype');
            $users->where('usertype', $usertype);
        }

        if ($request->query('searchUser')) {
            $name = $request->query('searchUser');
            $users->where('firstname', 'like', "%$name%")->orWhere('lastname', 'like', "%$name%");
        }

        $data['tbl_users'] = $users->get()->toArray();
        $data['adminCount'] = DB::table('tbl_users')->where('usertype', 'admin')->count();
        $data['staffCount'] = DB::table('tbl_users')->where('usertype', 'staff')->count();
        $data['residentCount'] = DB::table('tbl_users')->where('usertype', 'resident')->count();
        $data['allCount'] = DB::table('tbl_users')->count();

        return view('users', $data);
    }



    public function userUpdate(Request $request)
    {
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
