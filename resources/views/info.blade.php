@extends('layouts.app')

@section('title')
Info
@endsection

@section('content')
<div class="container">
    <div class="row">
        <p>{{ $username }}</p>
    </div>
</div>
@endsection
