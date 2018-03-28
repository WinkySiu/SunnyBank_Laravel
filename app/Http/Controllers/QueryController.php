<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function queryDB(){
        $string = "一百零四年度台覆字第";
        $results = DB::table('zhigen')->where('title', 'like', '%' . $string . '%')->get();

        return view('home') -> with('results', $results);
    }
}
