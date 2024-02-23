@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Edito Brande')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edito Brande</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Edito Brand</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('brand.update',$brand->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri</label>
                                <input type="text" class="form-control" name="name" value="{{$brand->name}}" placeholder="Emri Brandit" required>
                            </div>
                        </div>
                         <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli Shqip</label>
                                <input type="text" class="form-control" name="title" value="{{$brand->title}}" placeholder="Titulli" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli Anglisht</label>
                                <input type="text" class="form-control" name="title_en" value="{{$brand->title_en}}" placeholder="Titulli Anglisht" >
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Brandit</h5>
                                <img src="{{URL::asset('images/brands/'. $brand->image)}}" style="width:250px;">
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        <div class="col-3">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Baneri Brandit</h5>
                                <img src="{{URL::asset('images/brands/'. $brand->banner)}}" style="width:250px;">
                                <input class="form-control" name="banner" type="file"/>
                            </div>
                        </div>
                         <div class="col-3">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Logo e Brandit</h5>
                                <img src="{{URL::asset('images/brands/'. $brand->logo)}}" style="width:250px;">
                                <input class="form-control" name="logo" type="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="description">Përshkrimi Shqip</label>
                            <textarea name="description" id="ckeditor-classic">
                                {{$brand->description}}
                            </textarea>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="description_en">Përshkrimi Anglisht</label>
                            <textarea name="description_en" id="ckeditor-classic_en">
                                {{$brand->description_en}}
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="description">Kategoria</label>
                        <input type="text" class="form-control" name="category" value="{{$brand->category}}"  placeholder="Kategori" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="description">Kategoria Anglisht</label>
                        <input type="text" class="form-control" name="category_en" value="{{$brand->category_en}}"  placeholder="Kategori Anglisht" required>
                    </div>
                    </div>
                </div>
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Ndrysho</button>
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
<script>
    var uploadUrl = '{{ route('image.upload.brand') }}';
    var csrfToken = '{{ csrf_token() }}';
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor-classic' ), {
            ckfinder: {
                uploadUrl: uploadUrl + '?_token=' + csrfToken
            }
        })
        .catch( error => {
            console.error( error );
        });
        
         ClassicEditor
        .create( document.querySelector( '#ckeditor-classic_en' ), {
            ckfinder: {
                uploadUrl: uploadUrl + '?_token=' + csrfToken
            }
        })
        .catch( error => {
            console.error( error );
        });
</script>




@endpush


