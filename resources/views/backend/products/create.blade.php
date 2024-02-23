@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Krijo Produkte')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Krijo Produkte</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo Produkte</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Emri Produktit" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="barcode">Barkodi</label>
                                <input type="text" class="form-control" name="barcode" value="{{old('barcode')}}" placeholder="Barkodi">
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Produktit (250px / 250px)</h5>
                            
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="fs-14 mb-1">Brandet</h5>
                            <select class="form-select mb-4" aria-label="Zgjidhni brandin" value="{{old('brand')}}" name="brand">
                                  <option selected disabled>Zgjidhni brandin te cilit i perket produkti</option>
                                  @if($brands)
                                  @foreach($brands as $brand)
                                  <option value="{{$brand->name}}">{{$brand->name}}</option>
                                  @endforeach
                                  @endif
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label" for="system_code">Kodi ne sistem</label>
                                <input type="text" class="form-control" name="system_code" value="{{old('system_code')}}" placeholder="Kodi ne sistem" >
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label" for="packet_code">Kodi i kutise</label>
                                <input type="text" class="form-control" name="packet_code" value="{{old('packet_code')}}" placeholder="Kodi kutise" >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label" for="package">Paketimi</label>
                                <input type="text" class="form-control" name="package" value="{{old('package')}}" placeholder="Shembull: Tetrapack" >
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label" for="pieces">Cope/Koli</label>
                                <input type="text" class="form-control" name="pieces" value="{{old('pieces')}}" placeholder="Shembull: 12"  >
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label" for="lifespan">Jetegjatesia</label>
                                <input type="text" class="form-control" placeholder="Shembull: 9 muaj" name="lifespan" value="{{old('lifespan')}}" >
                            </div>
                        </div>
                         <div class="col-4">
                             <div class="mb-3">
                            <label class="form-label">Kategoria</label>
                               <select class="form-select" aria-label="Zgjidhni Kategorine" value="{{old('category')}}" name="category">
                                  <option selected disabled>Zgjidhni kategorinë te cilit i perket produkti</option>
                                  @if($categories)
                                  @foreach($categories as $category)
                                  <option value="{{$category->name}}">{{$category->name}}</option>
                                  @endforeach
                                  @endif
                            </select>
                            </div>
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
        .create( document.querySelector( '#ckeditor-classic2' ), {
            ckfinder: {
                uploadUrl: uploadUrl + '?_token=' + csrfToken
            }
        })
        .catch( error => {
            console.error( error );
        });
</script>




@endpush


