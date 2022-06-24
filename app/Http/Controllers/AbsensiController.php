<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\Rayon;
use App\Models\StudentGroup;



class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::latest()->paginate(5);
    
        return view('admin.absensi.index',compact('absensi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayon = Rayon::all(); 
        $studentGroups = StudentGroup::all();
        return view('admin.absensi.create',compact('rayon','studentGroups', $rayon, $studentGroups));
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
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'ket' => 'required'
        ]);
    
        Absensi::create($request->all());
     
        return redirect()->route('absensi.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        $rayon = Rayon::all(); 
        $studentGroups = StudentGroup::all();

        return view('admin.absensi.edit',compact('absensi','rayon', 'studentGroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'ket' => 'required'
        ]);
            
        $absensi->update($request->all());
    
        return redirect()->route('absensi.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
         $absensi->delete();
     
        return redirect()->route('absensi.index')
        ->with('success','Berhasil Hapus !');
    }
}
