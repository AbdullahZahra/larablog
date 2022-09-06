@extends('layouts.app')

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
