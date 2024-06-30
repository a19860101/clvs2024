@extends('template.master')
@section('main')
<div class="mb-5">
    <h2 class="text-3xl font-bold mb-4 bg-rose-300 p-3 rounded-lg">{{$activity->title}}</h2>
    <div>
        {!!$activity->body!!}
    </div>
</div>
<a href="#" class="bg-blue-300 rounded-lg inline-block px-3 py-1" onclick="history.back()">返回</a>
@endsection
