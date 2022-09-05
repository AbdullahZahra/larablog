@extends('layouts.app')

@section('content')
    <div class="ph-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h4>{{ $category->name }}</h4>
                    </div>

                    @forelse ($post as $postitem)
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <a href="{{ url('tutorial/' . $category->slug . '/' . $postitem->slug) }}"
                                    class="text-decoration-none">
                                    <h2>{{ $postitem->name }}</h2>
                                </a>
                                <h6>
                                    Posted On: {{ $postitem->created_at->format('d-m-Y') }}
                                    <span class="ms-3">Posted By: {{ $postitem->user->name }}</span>
                                </h6>
                            </div>
                        </div>
                    @empty
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <h1>No Post Available</h1>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
