@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('faculty.create') }}"> Add Faculty</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Faculty Name</th>
            <th>Email</th>
            <th>Created Time</th>
        </tr>
        @foreach ($faculty as $data)


        <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
               <td>{{ $data['created_at'] }}</td>
        </tr>
        @endforeach
    </table>

    {!! $faculty->links() !!}

</div>
</div>
</div>
</div>
@endsection
