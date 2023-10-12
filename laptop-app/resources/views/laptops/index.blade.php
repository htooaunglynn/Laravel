@extends('layouts.app')

@section('content')
    <div class="container py-5">
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
        <div class="row">
            @foreach ($laptops as $laptop)
                <div class="col-4 mb-5">
                    <div class="card">
                        <img src="{{ asset('images/' . $laptop->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $laptop->brand }}</h5>
                            <h6 class="card-text">{{ $laptop->model }}</h6>
                            <h4 class="card-text">{{ $laptop->price }}</h4>
                            <h4 class="card-text">{{ $laptop->img }}</h4>
                            <a href="{{ route('laptop.edit', ['laptop' => $laptop]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('laptop.destroy', ['laptop' => $laptop]) }}" method="post" style="display: inline">
                                @csrf
                                @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
