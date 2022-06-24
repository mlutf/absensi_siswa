@php
use App\Models\Student;

$student =  Student::where('username', Auth::user()->name)->first();




@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: lightblue;">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>Add new</h2>
            </div>
            <div class="pull-right mb-3 ">
                <a class="btn btn-primary" href="{{url('student') }}"> Back</a>
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
        
    <!-- <form action="{{ route('keterangan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS</strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rombel</strong>
                    <input type="text" name="rombel" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rayon</strong>
                   
                    <input type="text" name="rayon" class="form-control" placeholder="nama">

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti</strong>
                    <input type="text" name="bukti" class="form-control" placeholder="upload bukti keterangan">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>keterangan</strong>

                <input type="text" name="ket" class="form-control" placeholder="keterangan">

                    <!-- <strong>Keterangan</strong>
                    <!-- <input type="text" name="ket" class="form-control" placeholder="ket"> -->
                    <!-- <select name="ket" class="form-control" id="">
                    <option selected>Keterangan</option>
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="sakit">Sakit</option>
                    </select> --> 
                <!-- </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
    </div> --> 
    <form action="{{ route('upload.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card text-center mt-5">
  <div class="card-header">
    Ketidak Hadiran
  </div>
  <div class="card-body">
    <div class="row">
        <input type="hidden" name="nis" value="{{$student->nis}}">
        <input type="hidden" name="tgl" value="{{ date('d-m-Y') }}">
        <div class="col-6">
        <select class="form-select form-select-lg mb-3" name="ket" aria-label=".form-select-lg example">
            <option selected>Keterangan</option>
            <option value="sakit">Sakit</option>
            <option value="izin">Izin</option>
            
        </select>
        </div>
        <div class="col-6">
            <button class="btn btn-success"><input type="file" name="file" style="width:400px;"></button>
        </div>
        <div class="col-12 text-center mt-3 mb-3">
            <button class="btn btn-primary btn-lg" style="width:400px;" >Submit</button>
        </div>
    </div>
  </div>
</form>
  
  </div>
</div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>