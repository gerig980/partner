@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link href="{{('backend/assets/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />

@endpush
@section('title', 'Edit Service')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Service</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Ndrysho Shërbim</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<!--<form  autocomplete="off" class="needs-validation" novalidate >-->
<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('service.update', $service->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri Sherbimit</label>
                                <input type="text" class="form-control" name="name" value="{{ $service->name}}" >
                            </div>
                        </div>
                            <div class="col-6">
                            <div class="mb-4">
                                <label for="type" class="form-label">Lloji i Sherbimit</label>
                                
                                <select name="type" class="form-control">
                                    <option disabled value="">Zgjidh llojin e sherbimit</option>
                                    <option value="1"  @if ($service->type == 1) selected @endif>Hair Transplant</option>
                                    <option value="2" @if ($service->type ==2) selected @endif>Dental Implants</option>
                                    <option value="3" @if ($service->type == 3) selected @endif>Eye Surgery</option>
                                    <option value="4" @if ($service->type == 4) selected @endif>Hip Replacement</option>
                                    <option value="5" @if ($service->type == 5) selected @endif>Knee Replacement</option>
                                    <option value="6" @if ($service->type == 6) selected @endif>Shoulder Replacement</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Sherbimit</h5>
                            
                                <div class="avatar-lg bg-light rounded p-1">
                                    <img src="{{ URL::asset('images/services/'.$service->image)}}" class="img-fluid d-block">
                                </div><br>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                    </div>
                    <label class="form-label" for="description">Pershkrimi</label>
                    <textarea name="description" id="ckeditor-classic">
                        @if($service->description != '')
                        {{$service->description}}
                        @endif
                    </textarea>
                </div>
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Update</button>
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
{{-- <script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="{{(URL::asset('backend/assets/js/pages/ecommerce-product-create.init.js'))}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
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


