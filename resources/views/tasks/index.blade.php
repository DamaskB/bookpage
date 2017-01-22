@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи -->
    <div class="panel-body">
        @include('_common.errors')
        <form action="/task" method="post" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Задача</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="task-name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button class="btn btn-default">
                        <i class="fa fa-plus"></i>Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Текущие задачи -->
    @if(count($tasks)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Текущая задача
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
                            <td>
                                <form action="/task/{{$task->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button>Удалить задачу</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
