@extends('layouts.app')

@section('title', 'Edit Tamu')

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
                    <div class="breadcrumb-item">Tamu</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tamu</h2>



                <div class="card">
                    <form action="{{ route('tamu.update', $tamu) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                is-invalid
                            @enderror"
                                    name="nama" value="{{ $tamu->nama }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text"
                                    class="form-control @error('alamat')
                                is-invalid
                            @enderror"
                                    name="alamat" value="{{ $tamu->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">s
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="text"
                                    class="form-control @error('nohp')
                                is-invalid
                            @enderror"
                                    name="nohp" value="{{ $tamu->nohp }}">
                                @error('nohp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan/Profesi</label>
                                <input type="text"
                                    class="form-control @error('jabatan')
                                is-invalid
                            @enderror"
                                    name="jabatan" value="{{ $tamu->jabatan }}">
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Instansi</label>
                                <input type="text"
                                    class="form-control @error('instansi')
                                is-invalid
                            @enderror"
                                    name="instansi" value="{{ $tamu->instansi }}">
                                @error('instansi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text"
                                    class="form-control @error('keterangan')
                                is-invalid
                            @enderror"
                                    name="keterangan" value="{{ $tamu->keterangan }}">
                                @error('keterangan')
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

