@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
    <table><tr><th>Name</th><th>Mail</th><th>Age</th></tr></table>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
@endsection

@section('footer')
  copyright 2018 takano.
@endsection
