@extends('admin.auth.layouts.app')

@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form action="{{ route('admin.login') }}" method="post">
                @csrf

                <h1>Login Form</h1>
                <input type="hidden" name="user_type" value="admin">
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Username" required="" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <input class="form-control" type="password" id="password1" name="password" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />

                            <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                                <i id="slash" class="fa fa-eye-slash"></i>
                                <i id="eye" class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-info btn-sm" style="width:100%">Log in</button>
                            <a class="reset_pass" href="{{ route('admin.forgot_password') }}">{{ __('Lost your password?') }}</a>
                            <span class="reset_pass">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="separator">

                    <div class="clearfix"></div>
                    <br />

                    <div>
                    <h1><i class="fa fa-paw"></i> Green Glow!</h1>
                    <p>??2022 All Rights Reserved. Green Glow Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function hideshow(){
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if(password.type === 'password'){
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            }
            else{
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }
        }
    </script>
@endpush
