@extends('panel.adminLayout.login')
@section('main')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side">

                        <p class="text-white h4">{{__('static.slogan')}}</p>
                        <p class="white mb-0">
                            {{__('auth.loginGuide')}}
                            <br>
                            @if(Route::has('admin.register'))
                                {!! __('auth.registerGuide',['link'=>route('admin.register')]) !!}
                            @endif
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="{{route('admin.login')}}">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">{{__('auth.login')}}</h6>
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <label class="form-group has-float-label mb-4">
                                <input name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       class="form-control @error('email') border-danger @enderror">
                                <span>{{__('auth.username')}}</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input name="password" type="password" placeholder="" required autocomplete="current-password"
                                       class="form-control @error('password') border-danger @enderror" >
                                <span>{{__('auth.password')}}</span>
                            </label>

                            <div class="custom-control custom-checkbox mb-3">
                                <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                                       class="custom-control-input " id="remember">
                                <label class="custom-control-label" for="remember">
                                    {{__('auth.rememberMe')}}
                                </label>
                            </div>
0.
                            @error('email')
                            <div class="alert alert-danger " role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger " role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                            <div class="d-flex justify-content-between align-items-center">
                                @if (Route::has('admin.password.request'))
                                <a href="{{ route('admin.password.request') }}">
                                    {{__('auth.forgotPassword')}}
                                </a>
                                @endif

                                <button class="btn btn-primary btn-lg btn-shadow"
                                        type="submit">{{__('auth.login')}}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

