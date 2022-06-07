@extends('layouts.lay







.out')
@section('css')
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Client Groups</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Client Groups</a></li>
                        <li class="breadcrumb-item active">Client Groups</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a class="btn btn-outline-info" href="{{ url('/clientGroups/create') }}"><i class="icon-note mr-2"></i>ADD NEW Client Groups</a>
                    <div class="dropdown-divider"></div>
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($clientGroups as $cg)
                                <tr>
                                    <td>{{ $cg->id }}</td>
                                    <td>{{ $cg->name }}</td>
                                    <td>{{ $cg->description }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success waves-effect waves-light"
                                            data-toggle="modal" onclick="modelview({{ $cg->id }})"
                                            data-target="#myModal">View</button>&nbsp;
                                        <a href="/clientGroups/{{ $cg->id }}/edit"
                                            class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
                                        <a href="delete-productCatagories/{{ $cg->id }}"
                                            class="btn btn-danger btn-xs delete-object" title="Delete"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="col-sm-6 col-md-4 col-xl-3">

        <!-- sample modal content -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <style type="text/css">
                            td {
                                padding-left: 50px;
                                padding-right: 50px;
                            }

                        </style>
                        <table border="2px">
                            <tr>
                                <td>Id</td>
                                <td id='clientgroupid'></td>
                            </tr>
                            <tr>
                                <td>Group Name</td>
                                <td id='clientgroupname'></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td id='description'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script>
        function modelview(id) {
            $.ajax({
                url: "clientGroups/"+id,
                type: "GET",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $("#clientgroupid").html(data[0]['id']);
                    $("#clientgroupname").html(data[0]['name']);
                    $("#description").html(data[0]['description']);
                }
            });
        }
    </script>
@endsection
