@extends('../base')
@section('content')
<div class='col-10 offset-1'>
    <div class='card'>
        <div class='card-header text-info'>
             <strong>Clinic Form</strong>
        </div>
<!-- ########################################################################################################## -->
        <div class='card-body' >
        <form class="form-horizontal" action="{{route('clinic.store')}}" method="POST">
        @csrf
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="name">Clinic Name</label>
                <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name')}}" placeholder="Enter Clinic Name." required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label" for="website">website</label>
                <div class="col-md-8">
                    <input class="form-control @error('website') is-invalid @enderror" id="website" type="url" name="website" value="{{old('website')}}" placeholder="Enter your Clinic Website." required>
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="margin:8px 15px;">
                <label class="col-md-2 offset-md-1 col-form-label px-2" for="desciption">Description</label>
                <div class="col-md-8">
                    <textarea class="form-control @error('description') is-invalid @enderror" id="desciption" name="description" rows="10" cols="30">Enter your Clinic Descript.</textarea>
                    @error('desciption')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
<!-- ############################################################################################# -->
        <div class="card-footer" style="margin:8px 15px;">
            <button class="btn btn-md btn-outline-success" type="submit"> Submit</button>
            <button class="btn btn-md btn-outline-danger" type="reset"> Reset</button>
        </div>
        </form>
  </div>
  
</div>
@endsection