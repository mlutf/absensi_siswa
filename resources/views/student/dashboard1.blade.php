@php
use App\Models\Student;

$student =  Student::where('username', Auth::user()->name)->first();
date_default_timezone_set('Asia/Jakarta');


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
  <body style="background-color: white;">
    
<form action="{{ route('user-dashboard.store') }}" method="post">
  @csrf
    <div class="container">
        <div class="row d-flex align-items-center mt-5 pt-5">
            <div class="col-6 text-center">
                <div>
               <font style="color:blue; font-size: 80px;">W</font><font style="color: orange; font-size: 80px;">E</font style="color: blue; font-size: 80px;"><font style="font-size: 80px; color: red;">L</font><font style="font-size: 80px; color: purle;">C</font><font style="font-size: 80px; color: lightred;">O</font><font style="font-size: 80px; color: blue;">M</font><font style="font-size: 80px; color: grey;">E</font>
               </div>
               <input type="hidden" name="nis" value="{{ $student->nis }}">
               <input type="hidden" name="tgl" value="{{ date('d-m-Y') }}">
               <input type="hidden" name="jam_datang" value="{{ date('h:i:sa') }}">
               <input type="hidden" name="jam_pulang" value="belum pulang">
               <input type="hidden" name="ket" value="hadir">
               <div class="mt-5">
               <button type="submit" class="btn btn-success btn-lg" style="width: 200px;" >Datang</button>
               <a href="{{ url('keterangan') }}" class="btn btn-danger btn-lg ms-3" style="width: 200px;">Tidak Masuk</a>
               </div>
            </div>
            <div class="col-6">
                <img src="assets/img/5 (1).jpg" class="rounded-circle" style="width:500px;" alt="">
            </div>
        </div>
    </div>
 </form>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>