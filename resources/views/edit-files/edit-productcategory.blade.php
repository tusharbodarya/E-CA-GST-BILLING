@extends('layouts.layout')
@section('title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Product Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Edit Product Category</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Product Category</h4>

                    <form class="form-horizontal" action="{{ route('update-productCatagories') }}" method="POST">
                        <input type="hidden" name="id" value="{{ $Categories->id }}">
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

                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $Categories->name }}"
                                placeholder="Enter Category Name">
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="saree">Saree Niddle Set</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="saree_niddle1">Niddle 1</label>
                                    <input type="text" class="form-control" id="saree_niddle1" name="saree_niddle1" value="{{ $Categories->saree_niddle1 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="saree_niddle2">Niddle 2</label>
                                    <input type="text" class="form-control" id="saree_niddle2" name="saree_niddle2" value="{{ $Categories->saree_niddle2 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="saree_niddle3">Niddle 3</label>
                                    <input type="text" class="form-control" id="saree_niddle3" name="saree_niddle3" value="{{ $Categories->saree_niddle3 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="saree_niddle4">Niddle 4</label>
                                    <input type="text" class="form-control" id="saree_niddle4" name="saree_niddle4" value="{{ $Categories->saree_niddle4 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="saree_niddle5">Niddle 5</label>
                                    <input type="text" class="form-control" id="saree_niddle5" name="saree_niddle5" value="{{ $Categories->saree_niddle5 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="saree_niddle6">Niddle 6</label>
                                    <input type="text" class="form-control" id="saree_niddle6" name="saree_niddle6" value="{{ $Categories->saree_niddle6 }}">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="lace">Lace Niddle Set</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="lace_niddle1">Niddle 1</label>
                                    <input type="text" class="form-control" id="lace_niddle1" name="lace_niddle1" value="{{ $Categories->lace_niddle1 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lace_niddle2">Niddle 2</label>
                                    <input type="text" class="form-control" id="lace_niddle2" name="lace_niddle2" value="{{ $Categories->lace_niddle2 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lace_niddle3">Niddle 3</label>
                                    <input type="text" class="form-control" id="lace_niddle3" name="lace_niddle3" value="{{ $Categories->lace_niddle3 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lace_niddle4">Niddle 4</label>
                                    <input type="text" class="form-control" id="lace_niddle4" name="lace_niddle4" value="{{ $Categories->lace_niddle4 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lace_niddle5">Niddle 5</label>
                                    <input type="text" class="form-control" id="lace_niddle5" name="lace_niddle5" value="{{ $Categories->lace_niddle5 }}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lace_niddle6">Niddle 6</label>
                                    <input type="text" class="form-control" id="lace_niddle6" name="lace_niddle6" value="{{ $Categories->lace_niddle6 }}">
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="Description">Description</label>
                                <input type="text" class="form-control" id="Description" value="{{ $Categories->description }}" name="Description"
                                    placeholder="Enter Description">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
