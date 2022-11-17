<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //sama kyk diatas
    public function homepegawai()
    {
        $datas = pegawai::all();
        //dd($datas);
        return view('pegawai.home', compact('datas'));
        //
    }
    public function dashboardLTE(){
        return view ('admin.dashboard');
    }

    public function tambahpegawai(){
        return view ('pegawai.tambahdata');
    }
    

    public function insertpegawai(Request $request){
       pegawai::create($request->all());
       return redirect()->route('homepegawai')->WITH('success','Data Berhasil Di Tambahkan');
    }

    public function delete($id){
        $data = pegawai::find($id);
        $data ->delete();
        return redirect()->route('homepegawai')->WITH('success','Data Berhasil Di Hapus');
    }

    public function tampilkandata($id){
        $data = pegawai::find($id);
        //dd ($data);
        return view('pegawai.tampildata',compact('data'));
    }
  
    public function lihatdata($id){
        $data = pegawai::find($id);
        //dd ($data);
        return view('pegawai.lihatdata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pegawai::find($id);
        $data ->update($request->all());
        return redirect()->route('homepegawai')->WITH('success','Data Berhasil Di Update');

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
