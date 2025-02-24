<!-- "layouts/app.blade.php" includes main elements (header/footer) to display on every page -->
<!-- Works similarily as "include('header/footer)" -directive in PHP -->
<!-- "extends" allows reusing assets e.g from template files -->
<!-- "layouts.app" (layouts/app.blade.php) tells where the location of the template file is from within this directory -->
<!-- NOTE TO SELF: DO NOT USE "at" sign as it breaks functionality even if it is just a comment -->
@extends('layouts.app')

<!-- Start of home content -->
<!-- "yield('content')" directive in "layouts/app.blade.php" -file allows below content to be shown until "endsection" -->
@section('content')

        <!-- Page header with logo and tagline -->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>

        <!-- Page content -->
        <div class="container">

            <div class="row">

                <!-- Blog entries -->
                <div class="col-lg-8">

                    <!-- Nested row for non-featured blog posts -->
                    <div class="row">
                        @foreach ($posts as $post )

                            <div class="col-lg-6">

                                <!-- Blog post -->
                                <div class="card mb-4">
                                    
                                    <!-- Routing to posts from image -->
                                    <a href="{{ route('post.show', $post) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>

                                    <div class="card-body">

                                        <div class="small text-muted">{{ $post->created_at }}</div>
                                        <h2 class="card-title h4">{{ $post->title }}</h2>
                                        <p class="card-text">{{ $post->text }}</p>
                                        <a class="btn btn-primary" href="#!">Read more -></a>

                                    </div>

                                </div>

                            </div>
                        
                        @endforeach
                    </div>

                </div>
                
                <!-- Side widgets -->
                <div class="col-lg-4">

                    <!-- Categories widget -->
                    <div class="card mb-4">

                        <div class="card-header">Categories</div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">

                                        <!-- 
                                        Foreach-loop to display the contents from "index()" public function 
                                        from /app/Http/Controllers/HomeController.php
                                        
                                        Requires a controller (/app/Http/Controllers/HomeController.php) to handle the data.
                                        Requires a view (home.blade.php) to "view" the data.
                                        Requires a route (/resources/routes/web.php) to the controller to pass the data.
                                        -->
                                        @foreach($categories as $category)
                                        
                                            <!-- <li><a href="#!">{{ $category->name }}</a></li> -->
                                        
                                            <li><a href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a></li>
                                        
                                        @endforeach

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
    
        </div>

<!-- End of content section -->
<!-- Content from layouts/app.blade.php -file is displayed after "yield('content')" -directive -->
@endsection
