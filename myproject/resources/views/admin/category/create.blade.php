@extends('layouts.master')

@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Category</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all(); as $error)
                       <div>{{ $error }}</div> 
                    @endforeach
                </div>
                
            @endif

            <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection