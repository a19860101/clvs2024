@extends('template.master')
@section('main')
<div>
    <h2 class="text-3xl font-bold mb-4 bg-rose-300 p-3 rounded-lg">檔案下載</h2>
    <table class="table-auto w-full border-collapse">
        <thead class="py-3 bg-blue-100">
            <tr>
                <th class="w-2/3">標題</th>
                <th class="w-1/3">發布時間</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $doc)
            <tr>
                <td><span class="flex justify-between">
                    {{$doc->title}}
                    <a download href="/images/{{$doc->doc}}" class="text-blue-200 hover:text-blue-100 px-2 py-1 bg-blue-800 rounded">
                        下載
                    </a>
                </span></td>
                <td>{{$doc->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
@endsection
