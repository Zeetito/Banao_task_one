@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Your Dashboard') }}</div>

                <div class="card-body">
                    <p>Hello, {{ Auth::user()->name }}!</p>
                    <p>This is your dashboard content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
