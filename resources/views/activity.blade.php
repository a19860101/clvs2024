@extends('template.master')
@section('main')
<div>
    <h2 class="text-3xl font-bold mb-4 bg-rose-300 p-3 rounded-lg">活動歷程</h2>
    <table class="table-auto w-full border-collapse">
        <thead class="py-3 bg-blue-100">
            <tr>
                <th class="w-2/3">標題</th>
                <th class="w-1/3">發布時間</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                <td><a href="/activity/{{$activity->id}}" class="text-blue-500 hover:text-blue-700">{{$activity->title}}</a></td>
                <td>{{$activity->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
@endsection
