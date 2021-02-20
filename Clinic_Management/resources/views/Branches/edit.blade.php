@extends('../base')
@section('content')
<div class='col-10 offset-1'>
    <div class='card my-5 mx-5'>
        <div class='card-header text-info'>
             <strong>Branch Form</strong>
        </div>
<!-- ########################################################################################################## -->
        <div class='card-body' >
        <form class="form-horizontal" action="{{route('branch.update',['id'=> $branch->id])}}" method="POST">
        @csrf
        @method("PUT")
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="name">Branch Name</label>
                <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name',$branch->name)}}" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="address"> Address </label>
                <div class="col-md-8">
                    <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" value="{{old('address',$branch->address)}}" required>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label px-2" for="phone_no">Phone number</label>
                <div class="col-md-8">
                    <input class="form-control @error('phone_no') is-invalid @enderror" type="text" id="phone_no" name="phone_no" value="{{old('phone_no',$branch->phone_no)}}" required>
                    @error('phone_no')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="clinic" value="{{$branch->clinic}}">
<!-- ############################################################################################# -->
        <div class="card-footer" >
            <button class="btn btn-md btn-outline-success" type="submit"> Submit</button>
            <a class="btn btn-md btn-outline-danger" href="{{route('branches.index')}}"> Go Back</a>
        </div>
        </form>
  </div>
  

@endsection