@extends('layouts.layout')
@section('title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Client Groups</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Client Groups</a></li>
                        <li class="breadcrumb-item active">Edit Client Groups</li>
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
                    <h4 class="card-title mb-4">Edit Client Groups</h4>

                    <form class="form-horizontal" action="{{ route('clientGroups.update', $clientGroups->id) }}"
                        method="POST">
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

                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name='id' value="{{ $clientGroups->id }}">
                        <div class="form-group">
                            <label for="groupname">Client Groups Name</label>
                            <input type="text" class="form-control" id="groupname" name="groupname"
                                value="{{ $clientGroups->name }}" placeholder="Enter Client Groups Name">
                            <span class="text-danger">@error('groupname'){{ $message }}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="2"
                                    placeholder="Description">{{ $clientGroups->description }}</textarea>
                                <span class="text-danger">@error('description'){{ $message }}@enderror</span>
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
