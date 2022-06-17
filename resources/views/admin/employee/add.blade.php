@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid pb-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-5">
                                @foreach ($data[1] as $path)
                                    {{ $path }} /
                                @endforeach
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong>
                        Tambah Data
                    </strong>
                </div>
                <div class="card-body card-block">
                    @include('partials.app.form.employee_add')
                </div>
            </div>
        </div>
        @include('partials.app.footer')
    </div>
@endsection