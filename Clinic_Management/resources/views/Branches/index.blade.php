@extends('../base')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Branch Name</th>
            <th>Address </th>
            <th>Phone number </th>
            <th>Clinic </th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($branches as $branch)
        <tr>
            <td>{{ $branch->id}}</td>
            <td>{{ $branch->name}}</td>
            <td>{{ $branch->address }}</td>
            <td>{{ $branch->phone_no }}</td>
            <td>{{ $branch->clinic->name }}</td>
            <td>  
            <a class="btn btn-info btn-sm" href="{{route('branch.edit',['id'=>$branch->id])}}">
                <i class="fas fa-pencil-alt"> </i>Edit</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection