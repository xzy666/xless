@extends('stage.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
            <div class="well bs-component">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerRequest') }}">
                    {{ csrf_field() }}

                    <fieldset>
                        <legend class="text-center">注册</legend>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name" class="control-label">用户名</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="用户名" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="email" class="control-label">邮箱</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="邮箱" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="password" class="control-label">密码</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="密码" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="password-confirm" class="control-label">确认密码</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="确认密码" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-1">
                                <button type="submit" class="btn btn-primary form-control">
                                    注册
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <a class="btn btn-link" href="{{ url('/login') }}">
                                   已有账号?
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
