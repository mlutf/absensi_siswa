<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\Rayon;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('student.keterangan.index');
        $keterangan = Keterangan::latest()->paginate(5);
    
        return view('student.keterangan.index',compact('keterangan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function absen()
    {
        // return view('student.keterangan.index');
       return view('admin.absensi_tidakmasuk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $rayon = Rayon::all(); 
    //     $rombel = StudentGroup::all();
    //     return view('student.keterangan.index',compact('rayon','rombel', $rayon, $rombel));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'tgl' => 'required',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'ket' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Keterangan::create([
            'nis' => $request->nis,
            'tgl' => $request->tgl,
			'file' => $nama_file,
			'ket' => $request->ket,
		]);
 
		return view('student/keterangan/index2');

        // $request->validate([
        //     'nis' => 'required',
        //     'nama' => 'required',
        //     'rombel' => 'required',
        //     'rayon' => 'required',
        //     'bukti' => 'required',
        //     'ket' => 'required',
        // ]);
    
        // Keterangan::create($request->all());
     
        // return redirect()->route('keterangan.index')
        //                 ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function show(Keterangan $keterangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keterangan $keterangan)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keterangan $keterangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keterangan $keterangan)
    {
        //
    }
}
