@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.verify_email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ trans('auth.link_verify') }}
                        </div>
                    @endif

                    {{ trans('auth.before_proceeding') }}
                    {{ trans('auth.receive_email') }}, <a href="{{ route('verification.resend') }}">{{ trans('auth.click_here') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
