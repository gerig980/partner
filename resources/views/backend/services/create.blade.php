@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Create Services')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Create Services</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo Shërbim</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<!--<form  autocomplete="off" class="needs-validation" novalidate >-->
<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri</label>
                                <input type="text" class="form-control" name="name"  placeholder="Emri Sherbimit" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="type" class="form-label">Lloji i Sherbimit</label>
                                
                                <select name="type" class="form-control">
                                    <option disabled selected value="">Zgjidh llojin e sherbimit</option>
                                    <option value="1">Hair Transplant</option>
                                    <option value="2">Dental Implants</option>
                                    <option value="3">Eye Surgery</option>
                                    <option value="4">Hip Replacement</option>
                                    <option value="5">Knee Replacement</option>
                                    <option value="6">Shoulder Replacement</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Sherbimit</h5>
                            
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        
                    </div>
                    <label class="form-label" for="description">Përshkrimi</label>
                    <textarea name="description" id="ckeditor-classic">
                        
                    </textarea>
                </div>
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Submit</button>
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
    var uploadUrl = '{{ route('image.upload') }}';
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
</script>




@endpush


