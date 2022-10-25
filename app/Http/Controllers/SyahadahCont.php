<?php

namespace App\Http\Controllers;
use Crypt;
use DataTables;
use QrCode;
use App\Models\Peserta;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class SyahadahCont extends Controller
{
    public function index_daftar(Request $request, $pelatihan_id)
    {
        $id =  Crypt::decrypt($pelatihan_id);
        $diklat = Pelatihan::findOrFail($id);
        
        if ($request->ajax()) {
            # code...
            $data   = Peserta::where('pelatihan_id',$id)->where('bersyahadah','1')
            ->orderBy('id','asc')->get();
                return DataTables::of($data)
                ->addColumn('download',function($data){
                    $peserta_id = Crypt::encrypt($data->id);
                    $ok = '<a href="/syahadah-peserta/'.$peserta_id.'" target="_blank" class="btn btn-sm btn-success text-white"><i class="fa fa-download"></i></a>';
                    return $ok;
                })
                ->rawColumns(['download'])
                ->make(true);
        }

        return view('page.daftar_syahadah',compact('diklat','pelatihan_id'));
    }

    public function syahadah_peserta(Request $request, $peserta_id)
    {
        $id =  Crypt::decrypt($peserta_id);
        $peserta = Peserta::findOrFail($id);

        $qrcode = base64_encode(QrCode::size(100)->generate('https://syahadah.nurulfalah.org/syahadah-peserta/'.$peserta_id));
       

        return view('page.syahadah',compact('peserta','peserta_id'));
    }

    public function download($peserta_id)
    {
        return 'ok';
    }
}
