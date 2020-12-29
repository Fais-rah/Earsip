<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Outgoingmail extends Model
{
    protected $fillable = ['id','nomor_surat','alamat_penerima','tanggal','perihal'];

    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->from_date))
      {
       $data = DB::table('outgoingmails')
         ->whereBetween('tanggal', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('outgoingmails')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     return view('outgoingmails');
    }
}
