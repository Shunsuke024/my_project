<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sampleテキストです。";

        // $records = DB::connection('mysql')->select("select * from items");
        // $name = $records[0]->name;

         // 追加
        // $insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'melon',2000)");

        // 更新
        // $updateResult = DB::connection("mysql")->update("update items set price = 500 where name = 'peach'");

        // $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'peach'");
        // dd($deleteResult);

        return view("top/index" , [ "sampleValue" => $sampleValue ]);
    }
}