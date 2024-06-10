@extends("teacher.layout")

@section('title')
tests page
@endsection


@section('content')
<div class="test-container my-4 d-flex gap-3 flex-wrap">
    @foreach ($tests as $test)
    <div class="card" style="width: 18rem;">
      @isset ($test->thumbnail)
        <img src="{{Storage::url($test->thumbnail)}}" class="card-img-top" alt="...">
      @endisset
        <div class="card-body">
          <p class="card-title">
            {!!$test->title!!}
          </p>
          <div class="d-sm-flex">
            <a href="{{route('teacher.test.customize', ['id'=>$test->id])}}">
              <button class="btn btn-dark me-2">
                Customize
              </button>
            </a>
            <a href="{{route('test.mcq.result')}}">
              <button class="btn btn-dark">
                Result
              </button>
            </a>
          </div>
          
        </div>
      </div>
    @endforeach
</div>
@endsection