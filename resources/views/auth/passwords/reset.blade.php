@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.forgot_password') }}</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST' ,'route'=>'password.update']) !!}

                        {!! Form::hidden('token', $token) !!}

                        <div class="form-group row">
                            {!! Form::label('email', trans('auth.email'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class'=>'form-control', 'id'=>'email']) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('auth.password'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['id'=>'password', 'class'=>'form-control']) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('auth.password_confirm'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['id'=>'password-confirm', 'class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('auth.reset_password'), ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
