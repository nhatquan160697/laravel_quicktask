@extends('layouts.app')

@section('content')

    <div class="panel-body">

        @include('common.errors')

        {!! Form::open(['method'=>'POST', 'routes'=>'tasks' , 'class'=>'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('task-name', trans('home.lb_taskName'), ['class'=>'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class'=>'form-control', 'id'=>'task-name']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('home.btn_addTask'), ['class'=>'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@endsection
