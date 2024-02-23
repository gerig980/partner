@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Krijo Aktivitet')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Krijo Aktivitetin</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo Aktivitetin</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('activity.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                         <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli Shqip</label>
                                <input type="text" class="form-control" name="title"  placeholder="Titulli Shqip" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli Anglisht</label>
                                <input type="text" class="form-control" name="title_en"  placeholder="Titulli Anglisht" required>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Kryesore</h5>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhe nga Aktiviteti</h5>
                                <input class="form-control" name="other_images[]" type="file" multiple/>

                            </div>
                        </div>
                        <div class="col-3">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Vendndodhja</h5>                           
                                <input class="form-control" name="location" type="text"/>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-4">
                                 <h5 class="fs-14 mb-1">Data</h5>                           
                                 <input class="form-control date" name="date" type="date"/>
                             </div>
                         </div>
                         <div class="col-3">
                            <div class="mb-4">
                                 <h5 class="fs-14 mb-1">Ora</h5>                           
                                 <input class="form-control" name="time" type="text"/>
                             </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                        <label class="form-label" for="description">Përshkrimi</label>
                        <textarea name="description" id="ckeditor-classic">
                            
                        </textarea>
                    </div>
                     <div class="col-6">
                        <label class="form-label" for="description">Përshkrimi Anglisht</label>
                        <textarea name="description_en" id="ckeditor-classic_en">
                            
                        </textarea>
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
<script>
    var uploadUrl = '{{ route('image.upload.activity') }}';
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
        

        $(document).ready(function () {
            $(".date").flatpickr({
            enableTime: false,
            dateFormat: "Y-m-d",
        });
        });
        
</script>




@endpush


