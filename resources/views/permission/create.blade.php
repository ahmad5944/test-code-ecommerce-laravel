@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h5 class="card-title">{{ 'Tambah ' . $pageTitle }}</h5>
                    <a href="{{ url()->previous() }}" type="button" class="btn btn-warning btn-sm"><i
                            class="ni ni-bold-left"></i>
                        Back</a>
                </div>
            </div><br>
            <div class="card">
                <form method="POST" action="{{ route($routePath . '.store') }}" role="form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body" id="dynamicTable">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label">Nama Permission</label>
                                    <input type="text" class="form-control" placeholder="user-list" name="name">
                                    <small class="text-danger">(Format Ada "list/create/edit/delete/show")</small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" rows="3" placeholder="..." name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12">
                            <button type="submit"
                                class="btn btn-primary me-1 waves-effect waves-float waves-light btn-sm font-small-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
