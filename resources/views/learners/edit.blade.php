@extends('base')

@section('content')

<br>

<h2>Edit Learner: [{{ $learners->id }}]</h2>

<div class="row">
    <div class="col-md-5">

        {!!  Form::model($learners, ['url'=>"/learners/$learners->id", 'method'=>'patch']) !!}

        @include('learners._form')

        <div class="form-group">
            <button class="btn btn-primary float-right">Update Learner</button>
        </div>

        {!!  Form::close() !!}

    </div>
    <div class="col-md-7">

        @include('errors')
    </div>
</div>

@endsection