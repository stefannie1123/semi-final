@extends('base')

@section('content')
<br>
<h2>Edit Instructor: [{{ $instructors->id }}]</h2>

<div class="row">
    <div class="col-md-5">

        {!!  Form::model($instructors, ['url'=>"/instructors/$instructors->id", 'method'=>'patch']) !!}

        @include('instructors._form')

        <div class="form-group">
            <button class="btn btn-primary float-right">Update Instructor</button>
        </div>

        {!!  Form::close() !!}

    </div>
    <div class="col-md-7">

        @include('errors')
    </div>
</div>

@endsection