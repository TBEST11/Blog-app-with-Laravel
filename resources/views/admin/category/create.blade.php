@extends('layouts.master')
@section('title','Category')
@section('content')

<div class="container-fluid px-4">
    

    <div class="card mt-4">
        <div class="card-header">
            <h4 class=""> Add Category</h4>
        </div>
        <div class="card-body">


            @if ($errors->any())
            <div class="alert alert_danger">
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>  
            @endif

            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="">Slog</label>
                    <input type="text" class="form-control" name="slog">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  class="form-control" name="description" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="">Mata Title</label>
                    <input type="text" class="form-control" name="mata_title">
                </div>
                <div class="mb-3">
                    <label for="">Mata Description</label>
                    <textarea  class="form-control" name="mata_description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Mata Keywords</label>
                    <textarea  class="form-control" name="mata_keyword" rows="3"></textarea>
                </div>
                <h6>Status Mode</h6>
                <div class="row">
                <div class="col-mb-3 mb-3">
                    <label for="">Navbar Status</label>
                    <input type="checkbox"  name="navbar_status" >
                </div>
                <div class="col-mb-3 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status" >
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection