@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>
        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>
        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p>{{ $portfolio['about'] ?? '"Built with high-performance components and precision engineering, our computer product delivers exceptional reliability, speed, and durability for both everyday and professional use."' }}</p>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Contact</h2>
        <div class="row">
            <h5> location: longos malabon city</h5>
            <h5> Contact no:09994521571</h5>
            @foreach($portfolio['projects'] ?? [] as $project)
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Product Section -->
<section id="product" class="section">
    <div class="container">
        <h2 class="section-title">Featured Product</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="image/pc.jpg" ...>

            </div>
            <div class="col-md-6">
                <h3>Ultimate Performance PC</h3>
                <p>This high-end desktop computer is designed for developers and gamers alike. Powered by an Intel Core i9 processor, 64GB RAM, and RTX 4080 GPU, it can handle anything you throw at it.</p>
                <ul>
                    <li>Price $50.00</li>
                    <li>Processor: Intel Core i9-14900K</li>
                    <li>Graphics: NVIDIA RTX 4080 16GB</li>
                    <li>Memory: 64GB DDR5</li>
                    <li>Storage: 2TB NVMe SSD</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Buy Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p>You can reach me at <a href="mailto:{{ $portfolio['email'] }}">{{ $portfolio['email'] }}</a></p>
    </div>
</section>

@endsection