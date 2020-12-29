<?php

namespace App\Http\Controllers;
use App\Outgoingmail;
use Illuminate\Support\Facades\Request;

class FilterController extends Controller
{
    //public function inboxFilter($tahun, $bulan){
//
    //    $filter = Outgoingmail::orderBy('id', 'desc')->get();
    //    //dd($outgoingmails);
    //   if (Request::get('tahun')) {
    //         $filter->whereYear('created_at', Request::get('tahun'));
    //    }
    //    if (Request::get('bulan')) {
    //        $filter->whereYear('created_at', Request::get('bulan'));
    //     }
    //    $filter = $filter;
    //    dd($filter);
    //    //return view('outgoingmails')->with(compact('outgoingmails'));
    //    return redirect('outgoingmails.filter',compact('outgoingmails'));
    //}

    public function inboxFilter(Request $request){
        $outgoingmails = Outgoingmail::orderBy('id', 'desc')->get();
        dd($outgoingmails);
        $month = $request->get('month');
        $year = $request->get('year');

        $outgoingmails = Outgoingmail::whereYear('created_at', '=', $year)
                  ->whereMonth('created_at', '=', $month)
                  ->get();
            
                  return view('outgoingmails.index', ['outgoingmails' => $outgoingmails]);
        }
}
