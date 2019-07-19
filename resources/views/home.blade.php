@extends('layouts.app')

@section('content')
<div class="container">
    <div style="border: 1px solid #ddd; padding: 10px">
        <a href="/questions">Questions</a>
    </div>

    @if(auth()->user())
    <div style="margin-top: 20px">
        Welcome, {{ ucwords(auth()->user()->name) }}
    </div>
    @else
    <div style="margin-top: 20px">Welcome, Guest</div>
    @endif
</div>
@endsection