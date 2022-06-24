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

            <th>Jam Datang</th>
            <th>Jam Pulang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($absensi as $absensi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $absensi->nis }}</td>
            <td>{{ $absensi->tgl }}</td>

            <td>{{ $absensi->jam_datang }}</td>
            <td>{{ $absensi->jam_pulang }}</td>
            <td>{{ $absensi->ket }}</td>
            <td>
                <form action="{{ route('absensi.destroy',$absensi->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('absensi.edit',$absensi->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
   
        
@endsection