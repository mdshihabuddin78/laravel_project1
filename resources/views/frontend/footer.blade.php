<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">{{__('app.GET IN TOUCH')}}</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">{{ __('app.FOLLOW US') }}</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100053411808800"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://x.com/shihab_uddin78"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.linkedin.com/in/shihab-uddin-bd/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">{{__('app.POPULAR NEWS')}}</h5>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{__('app.BUSINESS')}}</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{__('app.BUSINESS')}}</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
            <div class="">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{__('app.BUSINESS')}}</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">{{__('app.CATEGORIES')}}</h5>
{{--            <div class="m-n1">--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Politics</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Corporate</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Health</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Education</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Science</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Foods</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Entertainment</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Travel</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Lifestyle</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Politics</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Corporate</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Health</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Education</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Science</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Business</a>--}}
{{--                <a href="" class="btn btn-sm btn-secondary m-1">Foods</a>--}}
{{--            </div>--}}
            @foreach($categories as $category)
                <a href="{{ route('wb.cat', $category->id) }}" class="nav-item nav-link">
                    {{ __('app.category.' . strtoupper($category->category_name)) ?: $category->category_name }}
                </a>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">{{__('app.FLICKR PHOTOS')}}</h5>
            <div class="row">
                @foreach($footer_photo as $photo)
                <div class="col-4 mb-3">
                    <a href=""><img class="w-100" style="width: 100px;height: 100px" src="{{env('STORAGE_PATH')}}/{{$photo->thumbnail}}" alt=""></a>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.

        Design by <a href="https://htmlcodex.com">HTML Codex</a></p>
</div>
<a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>