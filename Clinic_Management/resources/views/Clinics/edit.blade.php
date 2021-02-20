@extends('../base')
@section('content')
<div class='col-10 offset-1'>
    <div class='card'>
        <div class='card-header text-info'>
             <strong>Clinic Form</strong>
        </div>
<!-- ########################################################################################################## -->
        <div class='card-body' >
        <form class="form-horizontal" action="{{route('clinic.update',['id'=> $clinic->id])}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="name">Clinic Name</label>
                <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name',$clinic->name)}}" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="website">website</label>
                <div class="col-md-8">
                    <input class="form-control @error('website') is-invalid @enderror" id="website" type="text" name="website" vale="{{old('website',$clinic->website)}}" required>
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label px-2" for="desciption">Description</label>
                <div class="col-md-8">
                    <textarea class="form-control @error('desciption') is-invalid @enderror" id="desciption" name="notes" rows="10" cols="30">{{$clinic->description}}</textarea>
                    @error('desciption')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
<!-- ############################################################################################# -->
        <div class="card-footer" >
            <button class="btn btn-md btn-outline-success" type="submit"> Submit</button>
            <a class="btn btn-md btn-outline-danger" href="{{route('clinics.index')}}"> Go Back</a>
        </div>
        </form>
  </div>
  

@endsection