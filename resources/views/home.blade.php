@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                 

                    Welcome  {{ Auth::user()->name }} Please select from the menu  to add or edit corresponding sections
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
