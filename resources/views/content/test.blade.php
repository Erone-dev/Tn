@extends('layouts/app')

@section('title')
Test
@endsection

@section('content')
<h1>Test</h1>
<pre>
    {{var_dump($obj)}}
</pre>

@endsection