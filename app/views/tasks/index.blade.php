@extends('layouts.default')

@section('header')
    <h1>La liste de {{ $user->fullname }}</h1>
@stop

@section('content')
    <table class="table">
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @include('forms.tasks.add')
        @if($tasks)
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->body }}</td>
                    <td>{{ link_to_route('doneTask', 'X', ['id' => $task->id], ['class' => 'badge badge-important']) }}</td>
                </tr>
            @endforeach
        @endif
    </table>

    <table class="table table-condensed muted">
        @if($tasksDone)
            <caption>Tâches effectuées</caption>
            @foreach($tasksDone as $taskDone)
                <tr class="done">
                    <td>{{ $taskDone->title }}</td>
                    <td>{{ $taskDone->body }}</td>
                </tr>
            @endforeach
        @endif
    </table>
@stop
