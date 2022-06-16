@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-5">
                                @foreach($paths as $path)
                                    {{ $path }} /
                                @endforeach
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-b-40 pt-5">
                    @include('partials.app.table.company')
                </div>
            </div>
            @include('partials.app.footer')
        </div>
    </div>
@endsection