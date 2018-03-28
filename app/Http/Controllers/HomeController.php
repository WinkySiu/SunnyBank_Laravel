<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function interfaceDisplay(Request $request){
        $keyword = $request->input('keyword');
        $source = $request->input('source');
        
        $historias = $this -> getHistory();
        $results = $this -> queryDB($keyword, $source);

        return view('home') -> with('historias', $historias) -> with('results', $results) -> with('source', $source);
    }


    public function getHistory() {
        $historias = DB::table('history')->orderBy('id', 'desc')->get();

        return $historias;
    }

    public function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $data = curl_exec($ch);
        curl_close($ch);
        $object = json_decode($data, true);

        return $object;
    }

    public function input_submit(Request $request){
        $keyword = $request->input('keyword');
        $company = $request->input('company');
        $relation = $request->input('relation');
        $customer = $request->input('customer');

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $source = '';

        // $this -> insert_history($keyword, $relation, $company, $customer, $start_date, $end_date);

        return view('new_version.result_test') -> with('keyword', $keyword) -> 
                                                  with('company', $company) -> 
                                                  with('relation', $relation) -> 
                                                  with('customer', $customer) -> 
                                                  with('source', $source);
    }

    public function set_source(Request $request) {
        $keyword = $request->input('keyword');
        $company = $request->input('company');
        $relation = $request->input('relation');
        $customer = $request->input('customer');
        $source = $request->input('source');

        $keyword_array = $this -> data_query($source, $keyword);
        $company_array = $this -> data_query($source, $company);
        $relation_array = $this -> data_query($source, $relation);
        $customer_array = $this -> data_query($source, $customer);

        return view('new_version.result_test') -> with('keyword', $keyword) -> 
                                                  with('company', $company) -> 
                                                  with('relation', $relation) -> 
                                                  with('customer', $customer) -> 
                                                  with('keyword_array', $keyword_array) -> 
                                                  with('company_array', $company_array) -> 
                                                  with('relation_array', $relation_array) -> 
                                                  with('customer_array', $customer_array) -> 
                                                  with('source', $source);
    }

    public function insert_history($keyword, $relation, $company, $customer, $start_date, $end_date){
        date_default_timezone_set("Asia/Taipei");
        $date = date("Y/m/d") . " " . date("H:i A");

        if($relation == ''){
            $relation = '-';
        }
        if($company == ''){
            $company = '-';
        }
        if($customer == ''){
            $customer = '-';
        }
        if($start_date == '' && $end_date == ''){
            $date_range = '-';
        } else {
            $date_range = $start_date . ' - ' . $end_date;
        }

        $id = 'h'.strtotime("now");

        DB::table('history')->insert(
            ['id'=>$id, 'date'=>$date, 'keyword' => $keyword, 'company' => $company, 'relation'=>$relation, 'customer'=>$customer, 'date_range'=>$date_range]
        );
    }

    public function data_query($source, $keyword){
        $results = null;

        if ($keyword!="") {
            if ($source == 'zhigen') {
                $results = DB::table('zhigen')->where('title', 'like', '%' . $keyword . '%')->orWhere('article', 'like', '%' . $keyword . '%')->orderBy('date', 'desc')->get();
            } else if ($source == 'Mops') {
                $keyword = urlencode($keyword);
                $url = 'http://140.134.26.31:5002/Mops/' . $keyword . '/106';
                $results = $this->curl($url);
            } else {
                $keyword = urlencode($keyword);
                $url = 'http://140.134.26.31:5002/'. $source  .'/'.$keyword;
                $results = $this->curl($url);
            }
        }
        return $results;
    }

    public function fb_query(Request $request){
        $fb_id = $request->input('fb-id');
        $results = null;

        if ($fb_id!="") {
            $fb_id = urlencode($fb_id);
            $url = 'http://140.134.26.31:5002/FaceBook/' . $fb_id;
            $results = $this->curl($url);
        }

        return view('new_version.fb_result') -> with('keyword_array', $results) -> 
                                                  with('fb_id', $fb_id);
    }
}