@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                        <a href="{{ route('subject-masters.index') }}"  class="btn btn-outline-primary">Subject List</a>
                        <a href="{{ route('subject-masters.create') }}" class="btn btn-outline-secondary">Add Subejct</a>
                        <a href="{{ route('faculty.create') }}" class="btn btn-outline-info">Add Faculty</a>
                        <a href="{{ route('faculty.index') }}" class="btn btn-outline-dark">Faculty List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
