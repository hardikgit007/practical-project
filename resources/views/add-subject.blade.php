@extends('layouts.app')

@section('content')
@php
    $termsArray=[];
    foreach($terms->toArray() as $index => $data)
    {
        $termsArray[$index]=$data['name'];
    }

@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    <div class="row">
                        <form action="{{ route('subject-masters.store') }}" method="POST" id="subject-form" class="subject-form">
                        @csrf
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Subject Name:</strong>
                            <input type="text" name="subject_name" id="subject_name" class="form-control" placeholder="Subject Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Term Id:</strong>
                        {!! Form::select('term_id', $termsArray); !!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary submit_btn">Submit</button>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

