@extends('teacher.layout')

@section('title')
course page
@endsection

@section('content')

<div class="container">
    <div class="card-box d-flex gap-3 flex-wrap">
        @foreach ($courses as $course)
            <div class="card" style="width: 20rem;">
                <img src="{{$course->thumbnail?Storage::url($course->thumbnail):'https://source.unsplash.com/500x500/?girls'}}" class="card-img-top" alt="..." style="height: 220px">
                <div class="card-body">
                <h5 class="card-title">{{$course->title}}</h5>
                <a href="{{route('courses.customize', ['id'=>base64_encode($course->id)])}}" class="btn btn-dark">Customize</a>
                </div>
            </div>
        @endforeach
    </div>
    <div id="test-management">

    </div>
</div>

@endsection
