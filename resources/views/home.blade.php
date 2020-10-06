@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session()->get('message') }}
                </div>
            @endif
    <div id="root"></div>
</div>
@endsection
