<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aspirasi;
use App\Models\kategori;
use App\Models\penduduk;

class AspirasiController extends Controller
{
    //
    public function lapor(){
        $data = kategori::all();
        return view('welcome',compact('data'));
    }
    public function postlapor(Request $request){
        //dd($request->all());
        $masyarakat = new penduduk;
        $masyarakat->nik = $request->nik;
        $masyarakat->nama = $request->name;
        $masyarakat->alamat = $request->alamat;
        $masyarakat->save();
        //Insert Ke Aspirasi
        $request->request->add(['id_penduduk' => $masyarakat->id]);
        $aspirasi = aspirasi::create($request->all());
        return redirect('/')->with('sukses','Selamat Anda Berhasil Melapor');

    }
    public function index(Request $request){
        $data = aspirasi::orderby('status','asc')->get();
        $filterKeyword =  $request->get('status');
        $kat = kategori::all();
        if($filterKeyword){
                  $data =  aspirasi::where("status",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
      
        return view('aspirasi.dashboard',compact('data','kat'));
    }
    public function proses(Request $request, $id){
   
        $data = aspirasi::where('id',$id)->update(['status' => 'proses']);
        return redirect('/aspirasimasyarakat');
    }
    public function selesai(Request $request, $id){

        $data = aspirasi::where('id',$id)->update(['status' => 'selesai']);
        return redirect('/aspirasimasyarakat');
    }
    public function indexriw(Request $request){
        return view('riwayat');
    }
    public function riwayat(Request $request){
        $data = penduduk::all();
        $filterKeyword =  $request->get('nik');

        if($filterKeyword){
                  $data =  penduduk::where("nik",  "LIKE",
            "%$filterKeyword%")->paginate(10);
        }
     
        return view('datariwayat',compact('data'))->with('sukses','Data Search Succes');
    }
    public function datariwayat($id){
        $data = aspirasi::where('id_penduduk','=',$id)->first();
        return view('riwayataspirasi',compact('data'));
    }
    public function feedback(Request $request, $id){
        $data = aspirasi::find($id);
        $data->update($request->all());
        return redirect('/')->with('sukses','Anda telah memberi Feedback');
    }

    public function index2(){
        $data = aspirasi::all();
        return view('aspirasi.index',compact('data'));
    }


    public function aspirasitanggal(Request $request)
    {
        $tgl = date('Y-m-d', strtotime ($request->tanggal));
        $data = aspirasi::whereDate('created_at', '=' , $tgl)->get();
        $kat = kategori::all();
        $pen = penduduk::all();
        return view('aspirasi.dashboard', compact('data','kat','pen'));
    }
    public function aspirasibulan(Request $request)
    {
        $data = aspirasi::whereMonth('created_at', '=' , $request->bulan)->get();
        $kat = kategori::all();
        $pen = penduduk::all();
        return view('aspirasi.dashboard', compact('data','kat','pen'));
    }
    public function aspirasikategori(Request $request)
    {
        $data = aspirasi::where('id_kategori', '=' , $request->kategori)->get();
        $kat = kategori::all();
        $pen = penduduk::all();
        return view('aspirasi.dashboard', compact('data','kat','pen'));
    }

}
  