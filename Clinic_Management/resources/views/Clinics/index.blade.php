@extends('../base')
@section('content')
<div class='col-11  mx-5'>
        <div class="my-5 mx-5" >
            <a class="btn btn-lg  btn-outline-success" href="{{route('clinic.create')}}">New Clinic</a>
        </div>
 @foreach ($clinics as $clinic)
  <div class="row my-3 mx-5">
    <div class="col-12 card rounded">
    <div class="card-body">
        <h3 class="card-title text-secondary">{{$clinic->name}}</h3>
        <p class="card-text text-secondary">{{ $clinic->description }}</p>
        <p class="text-secondary">الموقع الالكتروني <a class="text-secondary" href="{{$clinic->website}}"> {{$clinic->website}}</a></p>
        <div>
           <a class="btn btn-md btn-outline-secondary rounded-pill px-2 float-left" href="{{route('clinic.show',['id'=> $clinic->id])}}">المزيد</a>
           <a class="btn btn-md btn-outline-info rounded-pill px-2 mx-3 float-left" href="{{route('branch.create',['id'=> $clinic->id])}}">اضافة فرع</a>
           <a class="btn btn-md btn-outline-warning rounded-pill px-2 mx-3 float-left" href="{{route('clinic.edit',['id'=> $clinic->id])}}"> تعديل</a>
        </div>
    </div>
    </div>
  </div>
  @endforeach
  <p>
  {!! $clinics->links() !!}
  </p>
</div>

@endsection