@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        @foreach ($data as $item)
        
        <div class="col-xl-4 col-lg-6 mt-5">
            <div class="card mb-5 m-auto" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex">
                        <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem">
                            {{ $item->name }}
                        </div>
                        {{-- <img src="https://source.unsplash.com/600x900/?guitar,guitar" class="card-img" alt="PRODUCT PHOTO"> --}}
                        <img src="{{ asset('uploads/category/'.$item->image) }}" class="card-img" alt="PRODUCT PHOTO">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            {{-- <p class="card-text fst-italic"><small class="text-muted"><i class="far fa-clock"></i> created in date</small></p> --}}
                            <p class="card-text">{{ $item->description }}</p>
                        </div>
                        <div class="fs-5 p-5">
                            {{-- <span class="fst-italic text-muted px-4">
                                <strong>Quantity</strong>
                                <small class="px-2">:</small>
                            </span> --}}
                            {{-- <strong class="px-4">quantity</strong> <br> --}}
                            <span class="fst-italic text-muted px-4">
                                <strong>Price</strong>
                                <small class="px-2">:</small>
                            </span>
                            {{-- <span class="text-muted text-decoration-line-through">$20.00</span> --}}
                            <strong>{{ $item->price }}</strong>
                        </div>
                        {{-- <div class="text-end px-4 py-4"><button href="#modal-task" data-bs-toggle="modal" class="btn btn-outline-dark mt-auto" onclick="editProduct('.$id.')">View options</button></div> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection
