<x-app-layout>
    <x-slot name="header"></x-slot>
test_survey
<p>{{$questions}}</p>
<p>{{$choices}}</p>
<p>{{$choice_answers}}</p>
<p>{{$text_answers}}</p>
<!-- インスタ分析結果を表示するためのリンク（セキュリティの都合上postで送信） -->
<form method="POST" action="{{ route('client.instagram')}}"> 
    @csrf
    <input type="hidden" name="project_id" value="{{$project_id}}">
    <button type="submit">link for instagram</button>
</form> 
</x-app-layout>