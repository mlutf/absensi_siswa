@extends('layout.master')

@section('content')
<div class="container">
    <div>
        <div class="card">
        <div class="card-body bg-info shadow">
            <h1 class="card-title" style="color: white;">Welcome Admin</h1>
            <p class="card-text"style="color: white;">what do you want to see?</p>
            
        </div>
    </div>
    </div>
    <div class="row mt-5">
  <div class="col-sm-6">
    <div class="card rounded-pill">
      <div class="card-body bg-danger rounded-pill shadow-lg">
        <div class="pl-4">
        <h5 class="card-title" style="color: white;">Attendance Data</h5>
        <p class="card-text"style="color: white;">You can ADD, CHANGE and DELETE Attendance Data</p>
        <a href="{{ url('absensi') }}" class="btn btn-success">See More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card rounded-pill">
      <div class="card-body bg-success rounded-pill shadow-lg">
        <div class="pl-4">
        <h5 class="card-title" style="color: white;">Rayon Data</h5>
        <p class="card-text" style="color: white;">You can ADD, CHANGE and DELETE Rombel Data</p>
        <a href="{{ url('rayons') }}" class="btn btn-primary">See More</a>
        </div>
      </div>
    </div>
  </div>
</div> <div class="row mt-5">
  <div class="col-sm-6">
    <div class="card rounded-pill">
      <div class="card-body bg-warning rounded-pill shadow-lg">
        <div class="pl-4">
        <h5 class="card-title" style="color: white;">StudentGroup Data</h5>
        <p class="card-text" style="color: white;">You can ADD, CHANGE and DELETE StudentGroup Data</p>
        <a href="{{ url('studentGroups') }}" class="btn btn-danger">See More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card rounded-pill">
      <div class="card-body bg-primary rounded-pill shadow-lg">
        <div class="pl-4">
        <h5 class="card-title" style="color: white;">Regintrasi</h5>
        <p class="card-text" style="color: white;">You can register here</p>
        <a href="{{ url('registers') }}" class="btn btn-warning">See More</a>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection