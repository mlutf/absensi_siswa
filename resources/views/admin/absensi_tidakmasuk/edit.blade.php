@extends('layout.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('absensi.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('absensi.update',$absensi->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nis</strong>
                    <input type="text" name="nis" class="form-control" placeholder="nis" value="{{$absensi->nis}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="nama" value="{{$absensi->nama}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rombel</strong>
                    <select class="form-control" name="rombel">
                        @foreach($studentGroups as $studentGroup)
                        <option value="{{$studentGroup->rombel}}" @if($absensi->rombel == $studentGroup->rombel)selected @endif>{{$studentGroup->rombel}}</option>
                        @endforeach
                    </select>   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rayon</strong>
                    <select class="form-control" name="rayon">
                        @foreach($rayon as $rayon)
                        <option value="{{$rayon->rayon}}" @if($absensi->rayon == $rayon->rayon)selected @endif>{{$rayon->rayon}}</option>
                        @endforeach
                    </select>                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jam_datang</strong>
                    <input type="text" name="jam_datang" class="form-control" placeholder="jam_datang" value="{{$absensi->jam_datang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jam_pulang</strong>
                    <input type="text" name="jam_pulang" class="form-control" placeholder="jam_pulang" value="{{$absensi->jam_pulang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ket</strong>
                    <!-- <input type="text" name="ket" class="form-control" placeholder="ket" value="{{$absensi->ket}}"> -->
                    <select name="ket" class="form-control" value="{{$absensi->ket}}" id="">
                    <option selected>Keterangan</option>
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="sakit">Sakit</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection