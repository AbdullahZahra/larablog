@extends('layouts.app')

@section('title', 'Larablog')

@section('meta_description', 'Larablog')

@section('meta_keyword', 'Larablog')

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel category-carousel owl-theme">

                        @foreach ($all_categories as $all_cate_item)
                            <div class="item">
                                <a href="{{ url('tutorial/' . $all_cate_item->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="Image">
                                        <div class="card-body text-center">
                                            <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>About Us</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis tempora atque doloremque magnam
                        cupiditate aspernatur repellat at vel, soluta ea deleniti minima quam expedita natus accusantium
                        iusto veniam ullam! Repellat.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
