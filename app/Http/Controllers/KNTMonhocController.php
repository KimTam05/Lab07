<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KNTMonhocController extends Controller
{
    public function KNTList(){
        $KNTMonhoc = DB::table("kntmonhoc")->get();
        return view("KNTMonhoc.KNTList",["KNTMonhoc"=>$KNTMonhoc]);
    }
    public function KNTCreate(){
        return view("KNTMonhoc.KNTCreate");
    }
    public function KNTCreateSubmit(Request $request){
        $request->validate([
            "KNTMaMH"=> "required|max:2",
            "KNTTenMH"=> "required|max:50",
            "KNTSotiet"=> "required|max:4",
        ],[
            "KNTMaMH.required"=> "Vui lòng nhập mã môn học vào trường này!",
            'KNTTenMH.required'=>"Vui lòng nhập tên môn học vào trường này!",
            "KNTSotiet.required"=> "Vui lòng nhập số tiết vào trường này!",
            "KNTMaMH.max"=> "Mã MH chỉ được tối đa 2 kí tự",
            "KNTTenMH.max"=> "Tên MH chỉ được tối đa 50 kí tự",
            "KNTSotiet.max"=> "Số tiết chỉ được tối đa 4 số"
        ]);
        $data = $request->all('KNTMaMH', 'KNTTenMH', 'KNTSotiet');
        DB::table('kntmonhoc')->insert($data);
        return redirect('/monhoc');
    }
    public function KNTEdit($id){
        $KNTEdit = DB::table('kntmonhoc')->where('KNTMaMH', $id)->first();
        return view('KNTMonhoc.KNTEdit',['KNTEdit'=>$KNTEdit]);
    }
    public function KNTEditSubmit(Request $request, $id){
        $request->validate([
            "KNTTenMH"=> "required|max:50",
            "KNTSotiet"=> "required|max:4",
        ],[
            'KNTTenMH.required'=>"Vui lòng nhập tên môn học vào trường này!",
            "KNTSotiet.required"=> "Vui lòng nhập số tiết vào trường này!",
            "KNTMaMH.max"=> "Mã MH chỉ được tối đa 2 kí tự",
            "KNTTenMH.max"=> "Tên MH chỉ được tối đa 50 kí tự",
            "KNTSotiet.max"=> "Số tiết chỉ được tối đa 4 số"
        ]);
        $data = $request->all('KNTMaMH', 'KNTTenMH', 'KNTSotiet');
        DB::table('kntmonhoc')->where('KNTMaMH', $id)->update($data);
        return redirect('/monhoc');
    }
    public function KNTDelete($id){
        DB::table('kntmonhoc')->where('KNTMaMH', $id)->delete();
        return redirect('/monhoc');
    }
}
