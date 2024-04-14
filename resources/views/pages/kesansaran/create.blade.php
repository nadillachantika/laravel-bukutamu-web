@extends('layouts.app')

@section('title', 'Tambahkan Kesan dan Saran')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
<style>
    .img-holder img {
        max-width: 150px;
        max-height: 150px;
    }
</style>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Kesan dan Saran</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Kesan dan Saran</h2>



                <div class="card">
                    <form action="{{ route('kesansaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Nama Tamu</label>
                                <select name="tamu_id" class=" select2 @error('tamu_id') is-invalid @enderror"
                                    id="">
                                    <option value="" class="align-center">--Pilih Tamu--</option>
                                    @foreach ($tamus as $tamu)
                                        <option
                                            value="{{ $tamu->id }}"{{ old('tamu_id') == $tamu->id ? 'selected' : '' }}>
                                            {{ $tamu->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kesan</label>
                                <input type="text"
                                    class="form-control @error('kesan')
                                is-invalid
                            @enderror"
                                    name="kesan">
                                @error('kesan')
                                    <div class="invalid-feedback">s
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Saran</label>
                                <input type="text"
                                    class="form-control @error('saran')
                                is-invalid
                            @enderror"
                                    name="saran">
                                @error('saran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

