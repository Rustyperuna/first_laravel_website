<!-- Display header and footer from "layouts/app.blade.php" -file -->
<!-- Works similarily as "include('header/footer)" -directive in basic PHP -->
@extends('layouts.app')
 
<!-- Start of content for contact page -->
<!-- Section is "yielded" for use in "layouts/app.blade.php" -->
@section('content')

    <!-- Page header with logo and tagline -->
    <header class="py-5 bg-light border-bottom mb-4">

        <div class="container">

            <div class="text-center my-5">
                <h1 class="fw-bolder">Contact us</h1>
            </div>

        </div>

    </header>

    <!-- Page content -->
    <div class="container mb-4">

        <div class="row">

            <!-- Blog entries -->
            <div class="col-lg-12">
                <p class="lead mb-0">Contact us text</p>
            </div>

        </div>

    </div>

<!-- End of content for contact page -->
<!-- Content from "layouts/app.blade.php" -file is included after "yield('content')" -directive -->
@endsection