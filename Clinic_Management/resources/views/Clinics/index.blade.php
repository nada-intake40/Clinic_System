@extends('../base')
@section('content')
<div class='col-10 offset-1'>
 @foreach ($clinics as $clinic)
  <div class="row my-3">
    <div class="card rounded">
    <div class="card-body">
        <h3 class="card-title text-secondary">{{$clinic->name}}</h3>
        <p class="card-text text-secondary">{{ str_limit( $clinic->description, $limit = 100, $end = '...') }}</p>
        <p class="text-secondary">الموقع الالكتروني {{$clinic->website}}</p>
        <div>
           <a class="btn btn-md btn-outline-secondary rounded-pill px-2 float-left" href="{{route('clinic.show',['id'=> $clinic->id])}}">المزيد</a>
           <a class="btn btn-md btn-outline-info rounded-pill px-2 mx-3 float-left" href="{{route('branch.create',['id'=> $clinic->id])}}">اضافة فرع</a>
           <a class="btn btn-md btn-outline-warning rounded-pill px-2 mx-3 float-left" href="{{route('clinic.edit',['id'=> $clinic->id])}}"> تعديل</a>
        </div>
    </div>
    </div>
  </div>
  @endforeach
  {{ $clinics->onEachSide(5)->links() }}
</div>

@endsection