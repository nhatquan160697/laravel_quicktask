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

    @if (session('success'))
        <script type="text/javascript" charset="utf-8">
            alert("{{ session('success') }}");
        </script>
    @endif

    <div class="main-current-task">
        @if (count($displayTasks) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('home.current_tasks') }}
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <thead>
                            <th>{{ trans('home.lb_taskName') }}</th>
                            <th>&nbsp;</th>
                        </thead>

                        <tbody>
                            @foreach ($displayTasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        <!-- TODO: Delete Button -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

@endsection
