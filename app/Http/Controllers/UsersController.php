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
        $allCount = DB::table('tbl_users')->count();

        return view('users', [
            'tbl_users' => $data['tbl_users'],
            'adminCount' => $adminCount,
            'staffCount' => $staffCount,
            'allCount' => $allCount
        ]);

    }

}
