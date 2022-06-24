@php
use App\Models\Keterangan;

$keterangan = Keterangan::all();
$i=0;

@endphp
@extends('layout.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Absensi</h2>
            </div>
            <!-- <div class="pull-right">
                <a class="btn btn-success" href="{{ route('absensi.create') }}"> Create</a>
            </div> -->
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Tanggal</th>
            <th>Bukti Keterangan</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($keterangan as $keterangan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $keterangan->nis }}</td>
            <td>{{ $keterangan->tgl }}</td>
            <td><img  width="150px" src="{{ url('/data_file/'.$keterangan->file) }}" alt=""></td>
            <td>{{ $keterangan->ket }}</td>
            <td>
                <form action="{{ route('absensi_tidakmasuk.destroy',$keterangan->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('absensi.edit',$keterangan->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
   
        
@endsection