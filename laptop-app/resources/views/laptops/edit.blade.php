@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-6">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('laptop.update', ['laptop'=>$laptop]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" value="{{ $laptop->brand }}" class="form-control" placeholder="Enter Brand" id="brand" name="brand">
                </div>
                <div class="mb-3">
                    <input type="text" value="{{ $laptop->model }}" class="form-control" placeholder="Enter model" id="model" name="model">
                </div>
                <div class="mb-3">
                    <input type="number" value="{{ $laptop->price }}" class="form-control" placeholder="Enter price" id="price" name="price">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" value="{{ $laptop->img }}" placeholder="Enter photo" id="photo" name="img">
                    {{-- <input type="file" class="form-control-file" placeholder="Photo Upload"> --}}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
