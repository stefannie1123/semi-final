@extends('base')

@section('content')
<br>

<h1>List of Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="bg-secondary">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>

        </tr>
    </thead>

    <tbody>
        @foreach($courses as $crs)

            <tr>
                <td>{{$crs->name}}</td>
                <td>{{$crs->description}}</td>
                <td>{{$crs->start}}</td>
                <td>{{$crs->end}}</td>
                
            </tr>

        @endforeach
    </tbody>
</table>


@stop