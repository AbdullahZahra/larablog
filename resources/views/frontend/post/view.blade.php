@extends('layouts.app')

@section('title', 'Larablog - ' . $post->meta_title)

@section('meta_description', $post->meta_description)

@section('meta_keyword', $post->meta_keyword)

@section('content')
    <div class="ph-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h1>{!! $post->name !!}</h1>
                    </div>

                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            {!! $post->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
