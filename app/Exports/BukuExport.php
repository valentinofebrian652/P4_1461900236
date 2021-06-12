<?php

namespace App\Exports;

use App\Buku;

use Illuminate\support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BukuExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : view
    {
        $buku = DB::table('rak_buku')
                ->join('buku','rak_buku.id','=','buku.id')  
                ->join('jenis_buku','rak_buku.id','=','jenis_buku.id')  
                ->get();
    
                return view('buku_export0236',['buku' => $buku]);
    }
}

