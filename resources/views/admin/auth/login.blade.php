@extends('admin.master')
@section('title','Login')
@section('content')
    <div class="container-lg">
        <div class="section_head">
            <h2 class="section_head--header text-center">
                Login
            </h2>
        </div>
    </div>

    <!-- LOGIN -->
    <section class="section section_news">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form class="login_form" method="post" action="{{route('admin.login.handle')}}">
                        {{ csrf_field() }}
{{--                        @if($errors->any())--}}
{{--                            <h5>{{$errors->first('message')}}</h5>--}}
{{--                        @endif--}}
                        <div class="form-group">
                            <label class="customLabel" for="email">Username</label>
                            <input class="formControl" name="username" id="username" type="text" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <label class="customLabel" for="password">Password</label>
                            <input class="formControl" name="password" id="password" type="password" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label pl-2" for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group pt-3">
                            <hr/>

                            <button type="submit" class="login customBtn quickBtn">
                                Login
                            </button>
{{--                            <a href="#" class="customBtn quickBtn quickBtn--minor">--}}
{{--                                Forgot Your Password--}}
{{--                            </a>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- LOGIN END -->
@endsection
