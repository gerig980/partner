@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Krijo Kategori')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Krijo Kategori</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo Kategori</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri</label>
                                <input type="text" class="form-control" name="name"  placeholder="Emri Kategorise" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name_en">Emri Anglisht</label>
                                <input type="text" class="form-control" name="name_en"  placeholder="Emri Kategorise Anglisht" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="brand">Brandi</label>
                               <select class="form-select" aria-label="Zgjidhni brandin" value="{{old('brand')}}" name="brand">
                                  <option selected disabled>Zgjidhni brandin te cilit i perket kategoria</option>
                                  <option value="Amita">Amita</option>
                                  <option value="Amita Free">Amita Free</option>
                                  <option value="Papadoupoulos">Papadoupoulos</option>
                            </select>
                            </div>
                        </div>
                    
                </div>
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Ruaj</button>
                </div>
           
            </div>
            <!-- end card -->

        </div>
        <!-- end col -->    
    </div>
    <!-- end row -->

</form>


@endsection
@push('js')
<!-- ckeditor -->
<script src="{{(URL::asset('backend/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js'))}}"></script>

<!-- dropzone js -->
<script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//unpkg.com/alpinejs" defer></script>





@endpush


