@extends('layouts.app')

@section('title', 'Edit Landingpage')

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
                    <div class="breadcrumb-item">Landingpage</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Landingpage</h2>



                <div class="card">
                    <form action="{{ route('pengaturan.update', $landingpage) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4>Input Pembaharuan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                is-invalid
                            @enderror"
                                    name="title" value="{{ $landingpage->title }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px;">{{ $landingpage->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="image"
                                      onchange="previewImageUpdate(event)" @error('image') is-invalid @enderror>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="img-holder">
                                @if ($landingpage->image)
                                    <img src="{{ asset('storage/landingpage/' . $landingpage->image) }}"
                                        alt="Product Image" id="preview_image_up">
                                @else
                                    <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image">
                                @endif
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
    <script>
        function previewImageUpdate(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview_image_up');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
