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
                <a class="btn btn-success" href="{{ route('subject-masters.create') }}"> Add Subjects</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Subject Name</th>
            <th>Term Id</th>
            <th>Created Time</th>
        </tr>
        @foreach ($subjectMaster as $subject)
        <tr>
            <td>{{ $subject['id'] }}</td>
            <td>{{ $subject['subject_name'] }}</td>
            <td>{{ $subject['term_id'] }}</td>
            <td>{{ $subject['created_at'] }}</td>

        </tr>
        @endforeach
    </table>

    {!! $subjectMaster->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
