{{-- @extends('layouts.layout-dashboard') --}}
@extends('dashboard.layouts.layout_dashboard')

@section('title')
    Dashboard
@endsection

@section('content')

    
   <div class="main-content-inner">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    <h1>343434</h1>
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>

   </div>
    

@endsection

