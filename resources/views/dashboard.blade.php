@extends('layouts.app')

@section('pageTitle','Dashboard | TMS - Primatech')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
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
            </div>
        </div>
    </div> --}}

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#create" role="tab" >Create Ticket</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#view" role="tab" >View Ticket</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" >Contact</a>
        </li> --}}
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="create" role="tabpanel">@include('inc.ct')</div>
        <div class="tab-pane fade" id="view" role="tabpanel">@include('inc.vt')</div>
        {{-- <div class="tab-pane fade" id="contact" role="tabpanel">tab 3</div> --}}
    </div>
</div>
@endsection
