
<!DOCTYPE html>
<html lang="en" data-textdirection="RTL" class="loading">
<head>
    <meta charset="UTF-8">
    <title>Boraq - تسجيل الدخول</title>

    <meta http-equiv="X-UA-Compatible" content=="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/open-sans/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/dinnext/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libs/tether/css/tether.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/common.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/pages/auth-login.min.css')}}" />
</head>
<body>

<div class="ks-page">
    {{--<div class="ks-header">--}}
        {{--<a href="#" class="ks-logo">Boraq</a>--}}
    {{--</div>--}}
    <div class="ks-body">
        <div class="ks-logo"><img src="{{asset('admin-assets/images/logo/logo.png')}}" alt=""></div>

        <div class="card panel panel-default ks-light ks-panel ks-login">
            <div class="card-block">
                <form class="form-container" action="{{ route('login') }}" novalidate="" method="post" />
                    @csrf
                    <h4 class="ks-header">تسجيل الدخول</h4>
                    <div class="form-group">
                        <div class="input-icon icon-right icon-lg icon-color-primary">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="form-control input-lg" id="user-name" placeholder="البريد الالكتروني" tabindex="1" required="" data-validation-required-message="الرجاء إدخال البريد الالكتروني"  />
                            <span class="icon-addon">
                                <span class="la la-at">
                                </span>
                            </span>


                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-icon icon-right icon-lg icon-color-primary">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="icon-addon">
                                <span class="la la-key"></span>
                            </span>

                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <fieldset class="form-group">
                        <div class="col-xs-12 text-xs-center text-md-right">
                            <fieldset>
                                <label for="remember" class="chk-remember2"> {{ __('تذكرني') }}</label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="chk-remember" />
                            </fieldset>
                        </div>
                        <!--                                <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="./recover-pass.html" class="card-link">نسيت كلمة المرور؟</a></div>-->
                    </fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">دخول</button>
                    </div>
                    <div class="ks-text-center">
                        لا تمتلك حساب <a href="pages-signup.html">تسجيل جديد</a>
                    </div>
                    <div class="ks-text-center">
                        <a href="pages-forgot-password.html">هل نسيت كلمة السر؟</a>
                    </div>


                </form>
            </div>
        </div>
    </div>

</div>

<script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('libs/tether/js/tether.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>