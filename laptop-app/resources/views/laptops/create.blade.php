@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('laptop.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <input type="text" @error('brand')is-invalid @enderror class="form-control" placeholder="Enter Brand" id="brand" name="brand">
                        @error('brand')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" @error('model')is-invalid @enderror class="form-control" placeholder="Enter model" id="model" name="model">
                        @error('model')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="number" @error('price')is-invalid @enderror class="form-control" placeholder="Enter price" id="price" name="price">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        {{-- <input type="text" @error('img')is-invalid @enderror class="form-control" placeholder="Enter photo" id="photo" name="img"> --}}
                        <input type="file" @error('img')is-invalid @enderror name="img" class="form-control-file">
                        @error('img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
