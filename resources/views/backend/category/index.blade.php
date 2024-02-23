@extends('layouts.backend.app1')

@section('title', 'Kategori')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Kategori</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2">
                            <button type="button" class="btn btn-success add-btn"  onclick = "window.location.href='{{ route('category.create') }}';"><i class="ri-add-line align-bottom me-1"></i>Shto Kategori</button>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
    
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Emri</th>
                                <th>Brandi</th>
                                <th>Data Krijimit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
        <!--end col-->
    </div>
    </div>
    <!--end row-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
    
          var table = $('.yajra-datatable').DataTable({
            responsive: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('all_categories') }}",
                data: function (d) {
                    d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'brand', name: 'brand'},

                
                
                { 
                    data: 'created_at', 
                    name: 'created_at',
                    render: function (data) {
                        return moment(data, 'YYYY-MM-DDTHH:mm:ss').format('YYYY-MM-DD');
                    }
                },
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
          });
    
        });
    </script>
    
@endsection


