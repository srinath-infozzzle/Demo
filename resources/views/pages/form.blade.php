@extends('layout.app')
@section('content')
<h1>form</h1>
<form role="form" method="post" action="{{action('DataController@store')}}">
@csrf
<input type="text" name="name">
<input type="submit" value="submit"/>
</form>
@endsection