@extends('frontend.layouts.layout')

@section('title')
tests page
@endsection

@section('content')


<!-- Test Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Available Test</h1>
        </div>
        
        <div class="row g-4 justify-content-center">
            @if (!isset($tests))
                <h5>Comming Soon....</h5>
            @endif
            @foreach ($tests as $test)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light shadow-sm">
                        <div class="position-relative overflow-hidden">
                            @if ($test->thumbnail)
                                <img class="img-fluid" src="{{Storage::url($test->thumbnail)}}" alt="">
                            @else
                                <img class="img-fluid" src="assets/img/course-1.jpg" alt="">
                            @endif
                        </div>
                        <div class="text-center p-4 pb-0">
                            @isset($test->price)
                                <h3 class="mb-0">Rs {!!$test->price!!}</h3>
                            @endisset
                            
                            <div class="mb-3">
                                <span class="text-primary h6">4.8</span>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">{!!$test->title!!}</h5>
                        </div>
                        <div class="d-flex justify-content-center border-top">
                                <a href="{{route('test.detail', ['id'=>base64_encode($test->id)])}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 my-2 border-end" style="@isset($test->price) border-radius: 30px 0 0 30px;@endisset @unless($test->price) border-radius: 30px @endunless">View Details</a>
                                @isset($test->price)
                                {{-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> --}}
                                @endisset
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Test End -->

@endsection