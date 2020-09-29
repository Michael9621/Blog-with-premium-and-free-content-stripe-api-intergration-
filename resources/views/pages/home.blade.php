@extends('layouts.main')


@section('content')

<div class="hero">
    <div class="hero-content">
        <h1>Daily dose of cute animals</h1>
        <h2>Only $20/mo</h2>
        <div class="cta">
            <p>we promise you wont regret it</p>
            <a href="/subscribe" class="btn btn-danger btn-lg">subscribe</a>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="section-header">
            <h2>Latest animals</h2>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class=".col-sm-6 .col-md-4 col-md-3">
                    @include('partials.postcard', ['post'=>$post])
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection 