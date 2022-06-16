@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">
                                Dashboard
                            </h2>
                        </div>
                    </div>
                </div>
                @include('partials.app.footer')
            </div>
        </div>
    </div>
@endsection