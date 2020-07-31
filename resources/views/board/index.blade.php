@extends('layouts.boardapp')

@section('title', 'Board/index')

@section('content')
<p>掲示板の表示</P>
@foreach($items as $item)
    <ul>
        <li>{{$item->getData()}}</li>
    </ul>
@endforeach



<form method="post" action="/board">
    {{csrf_field()}}
    <input type="hidden" name="name" value={{$name}}>
    <input type="text" name="message" value="write message">
    <input type="submit" value="send">
</form>
<form method="post" action="/board/del">
    {{csrf_field()}}
    <input type="submit" value="delete">
</form>
@endsection

