@extends('../base')
@section('content')
<div class='col-11 offset-md-1'>
  <div class="row my-5 mx-5">
    <div class="col card rounded py-3">
    <div class="card-body">
        <h3 class="card-title text-secondary">{{$clinic->name}}</h3>
        <p class="card-text text-secondary">{{$clinic->description}}</p>
        <p class="text-secondary">الموقع الالكتروني {{$clinic->website}}</p>
        @if ($clinic->branches->isEmpty() == false)
        <h4 class="card-title text-secondary mb-3 ">Branches</h4><br/>
        @foreach ($clinic->branches as $branch)
        <div class="row">
             <div class="col col-3 col-offset-1 text-secondary"> {{$branch->name}} :</div>
             <div class="col col-4  text-secondary"> {{$branch->address}} </div>
             <div class="col col-4  text-secondary"> /ت {{$branch->phone_no}} </div>
        </div>
        @endforeach
        @endif
    </div>
    <div >
      <a class="btn btn-md btn-outline-secondary mx-3" href="{{route('clinics.index')}}"> Go Back</a>
    </div>
  </div>
  </div>
 
</div>

@endsection