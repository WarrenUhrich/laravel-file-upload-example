@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="text-center">
                    <img class="rounded-circle border border-dark"
                        src="{{ asset( '/img/'.Auth::user()->avatar ) }}"
                        alt="{{ Auth::user()->name }}"
                        width=200
                        style="margin:32px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
