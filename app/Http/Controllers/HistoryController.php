<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use DB;

class HistoryController extends Controller
{

    public function insertHistory(Request $request) {
        date_default_timezone_set("Asia/Taipei");
        $date = date("Y/m/d") . " " . date("H:i A");

        $title= $request->title;
        $url= $request->url;
        $source= $request->source;
        DB::table('search_history')->insert(
            ['title' => $title, 'source' => $source, 'date'=>$date, 'url'=>$url   ]
        );
    }

    public function history_query() {
        $historias = DB::table('history')->orderBy('id', 'desc')->get();

        return view('new_version.history_test') -> with('historias', $historias);
    }
}