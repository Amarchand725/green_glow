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
                    <input type="email" class="form-control" name="email" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="password" class="form-control"  id="input-password" name="password" placeholder="Password" required="" />
                    <div class="form-check" style="text-align: left !important;">
                        <input class="form-check-input" type="checkbox" id="show-password">

                        <label class="form-check-label" for="show-password">
                            {{ __('Show') }}
                        </label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-info btn-sm" style="width:100%">Log in</button>
                    <a class="reset_pass" href="{{ route('admin.forgot_password') }}">{{ __('Lost your password?') }}</a>
                    <span class="reset_pass">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </span>
                </div>

                <div class="clearfix"></div>

                <div class="separator">

                    <div class="clearfix"></div>
                    <br />

                    <div>
                    <h1><i class="fa fa-paw"></i> Green Glow!</h1>
                    <p>©2022 All Rights Reserved. Green Glow Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
@endsection
@push('js')
    <script type='text/javascript'>
        $(document).ready(function(){
            $('#show-password').click(function(){
                $(this).is(':checked') ? $('#input-password').attr('type', 'text') : $('#input-password').attr('type', 'password');
            });
        });
    </script>
@endpush
