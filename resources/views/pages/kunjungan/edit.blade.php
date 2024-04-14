@extends('layouts.app')

@section('title', 'Kunjungan Create')

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
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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
                    <div class="breadcrumb-item">Kunjungan</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Kunjungan</h2>



                <div class="card">
                    <form action="{{ route('kunjungan.update', $kunjungan) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                        <option value="{{ $tamu->id }}"
                                            {{ $kesansaran->tamu_id == $tamu->id ? 'selected' : '' }}>
                                            {{ $tamu->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kunjungan</label>
                                <select name="jenis_kunjungan"
                                    class="form-control selectric @error('jenis_kunjungan') is-invalid @enderror"
                                    id="">
                                    <option value="">--Pilih Jenis Kunjungan--</option>
                                    <option value="perorangan"
                                        {{ $kunjungan->jenis_kunjungan == 'perorangan' ? 'selected' : '' }}>
                                        Perorangan
                                    </option>
                                    <option value="kelompok"
                                        {{ $kunjungan->jenis_kunjungan == 'kelompok' ? 'selected' : '' }}>
                                        Kelompok
                                    </option>
                                </select>
                            </div>

                            <div class="form-group mr-3">
                                <label>Tanggal</label>
                                <input type="date"
                                    class="form-control @error('tanggal')
                                is-invalid
                            @enderror"
                                    name="tanggal" value="{{ $kunjungan->tanggal }}">
                                @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row pl-3">
                                <div class="form-group mr-3">
                                    <label>Waktu Masuk</label>
                                    <input type="time"
                                        class="form-control @error('waktu_masuk')
                                    is-invalid
                                @enderror"
                                        name="waktu_masuk" value="{{ $kunjungan->waktu_masuk }}">
                                    @error('waktu_masuk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Waktu Keluar</label>
                                    <input type="time"
                                        class="form-control @error('waktu_keluar')
                                    is-invalid
                                @enderror"
                                        name="waktu_keluar" value="{{ $kunjungan->waktu_keluar }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text"
                                    class="form-control @error('keterangan')
                                is-invalid
                            @enderror"
                                    name="keterangan" value="{{ $kunjungan->keterangan }}">
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

@push('scripts')
    <script defer>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
