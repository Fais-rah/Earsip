<?php

namespace App\Http\Controllers;

use App\Outgoingmail;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use Symfony\Polyfill\Intl\Idn\Idn;
use DB;

class OutgoingmailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $outgoingmails = Outgoingmail::all();
        return view('outgoingmails.index', ['outgoingmails' => $outgoingmails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/outgoingmails/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'alamat_penerima' => 'required',
            'tanggal' => 'required',
            'perihal' => 'required'
        ]);

        $id = Outgoingmail::getId();
        foreach ($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('m-Y');

        $nomor_Surat = "PJM/".$idbaru.'/'.$blt;
            

        Outgoingmail::create($request->all());
        $outgoingmails = Outgoingmail::all();
        $outgoingmails->nomor_surat = $nomor_Surat;
        return redirect('/outgoingmails')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Outgoingmail  $outgoingmail
     * @return \Illuminate\Http\Response
     */
    public function show(Outgoingmail $outgoingmail)
    {
        return view('outgoingmails.show', compact('outgoingmail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Outgoingmail  $outgoingmail
     * @return \Illuminate\Http\Response
     */
    public function edit(Outgoingmail $outgoingmail)
    {
        return view('outgoingmails.edit', compact('outgoingmail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Outgoingmail  $outgoingmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outgoingmail $outgoingmail)
    {
        Outgoingmail::where('id', $outgoingmail->id)
            ->update([
                'nomor_surat'    =>  $request->nomor_surat,
                'alamat_penerima' =>  $request->alamat_penerima,
                'tanggal'         =>  $request->tanggal,
                'perihal'         =>  $request->perihal
            ]);

        return redirect('/outgoingmails')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Outgoingmail  $outgoingmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outgoingmail $outgoingmail)
    {
        Outgoingmail::destroy($outgoingmail->id);


        return redirect('/outgoingmails')->with('success', 'Data Berhasil Dihapus!');
    }

    //public function inboxFilter(Request $request){
    //    $month = $request->get('month');
    //    $year = $request->get('year');
    //    
    //        
    //    $outgoingmails = Outgoingmail::whereYear('created_at', '=', $year)
    //              ->whereMonth('created_at', '=', $month)
    //              ->get();
    //        
    //              return view('outgoingmails.index', ['outgoingmails' => $outgoingmails]);
    //    }
    function filter(Request $request)
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
     return view('outgoingmails.index');
    }
}
