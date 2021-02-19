@extends('../base')
@section('content')
<div class='col-10 offset-1'>
  <div class="row my-3">
    <div class="card rounded">
    <div class="card-body">
        <h3 class="card-title text-secondary">{{$clinic->name}}</h3>
        <p class="card-text text-secondary">{{$clinic->description}}</p>
        <p class="text-secondary">الموقع الالكتروني {{$clinic->website}}</p>
        <h4 class="card-title text-secondary mb-3">الفروع</h4>
        @foreach ($clinic->branch as branch)
        <div class="row">
             <div class="col col-3 col-offset-1 text-secondary"> {{branch->name}} :</div>
             <div class="col col-3  text-secondary"> {{branch->address}} </div>
             <div class="col col-3  text-secondary"> /ت {{branch->phone_no}} </div>
        </div>
    </div>
    </div>
  </div>
  @endforeach
  {{ $clinics->onEachSide(5)->links() }}
</div>

@endsection