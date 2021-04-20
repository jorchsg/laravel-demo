@extends('layouts.app')
@section('content')
<div class="container">
    @include('task.partials.task-form')
    <br>
    @include('task.partials.task-list')
</div>
@endsection