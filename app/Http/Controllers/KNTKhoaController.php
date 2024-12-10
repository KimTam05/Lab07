<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KNTKhoaController extends Controller
{
    public function KNTindex()
    {
    // Truy vấn đọc dữ liệu từ bảng khoa
    $KNTkhoa = DB::table('kntkhoa')->get();
    return view('KNTKhoa.KNTList',['KNTkhoa'=>$KNTkhoa]);
    }
    public function KNTdetail($makh)
    {
        // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $KNTkhoa = DB::table('kntkhoa')->where('KNTMaKH',$makh)->first();
        return view('KNTKhoa.KNTDetail',['KNTkhoa'=>$KNTkhoa]);
    }

    public function KNTcreate(){
        return view('KNTKhoa.KNTCreate');
    }
    public function KNTcreateSubmit(Request $request)
    {
        DB::insert('insert into kntkhoa(KNTMaKH, KNTTenKH) values(?,?)',[$request->KNTMaKH,$request->KNTTenKH]);
        return redirect('/khoa');
    }

    public function KNTedit($makh)
    {
        $KNTkhoa = DB::select('select * from kntkhoa where KNTMaKH =?',[$makh])[0];
        return view('KNTKhoa.KNTEdit',['KNTkhoa'=>$KNTkhoa]);
    }

    public function KNTeditSubmit(Request $request, $makh)
    {
        DB::table('kntkhoa')->where('KNTMaKH', $makh)->update(['KNTTenKH', $request->KNTTenKH]);
        return redirect('/khoa');
    }

    public function KNTdeleteSubmit($makh)
    {
        DB::table('kntkhoa')->where('KNTMaKH',$makh)->delete();
        return redirect('/khoa');
    }
}
