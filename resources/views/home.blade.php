@extends('layouts.app')

@section('content')
@if(Auth::user())
   <appdrawer-component></appdrawer-component>
@endif
@endsection
