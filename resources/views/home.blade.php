@extends('layouts.app')


@section('content')
<h1>salut {{auth()->user()->name}}</h1> 
{{-- <h1>salut {{Auth::user()->name}}</h1>  --}}
@endsection