@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="py-5">

    <div class="container px-5 pb-5">

        <div class="row gx-5 align-items-center">

            <!-- Text -->
            <div class="col-xxl-6">

                <div class="text-center text-xxl-start">

                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">
                            Design &middot; Development &middot; Web
                        </div>
                    </div>

                    <div class="fs-3 fw-light text-muted">
                        I can help your business to
                    </div>

                    <h1 class="display-3 fw-bolder mb-5">

                        <span class="text-gradient d-inline">
                            Get online and grow fast
                        </span>

                    </h1>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">

                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                           href="{{ route('projects') }}">

                            Projects

                        </a>

                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                           href="{{ route('resume') }}">

                            Resume

                        </a>

                    </div>

                </div>

            </div>


            <!-- Profile Image -->
            <div class="col-xxl-6">

                <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                    <div class="profile bg-gradient-primary-to-secondary">

                        <img class="profile-img"
                             src="{{ asset('assets/profile.png') }}"
                             alt="Profile Image">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- About / Skills Section -->
<section class="py-5 bg-white">

    <div class="container px-5">

        <div class="row gx-5 justify-content-center">

            <div class="col-lg-8 col-xl-6">

                <div class="text-center">

                    <h2 class="display-5 fw-bolder mb-4">

                        <span class="text-gradient d-inline">
                            About Me
                        </span>

                    </h2>

                    <p class="lead fw-light mb-4">
                        Welcome to my personal website.
                        This website was developed using
                        Laravel and Bootstrap.
                    </p>

                    <p class="text-muted">
                        Here you can find information about my
                        profile, resume, projects, and ways to
                        get in touch with me.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Call to Action -->
<section class="py-5 bg-gradient-primary-to-secondary text-white">

    <div class="container px-5 my-5">

        <div class="text-center">

            <h2 class="display-4 fw-bolder mb-4">
                Let's build something together
            </h2>

            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder"
               href="{{ route('contact') }}">

                Contact me

            </a>

        </div>

    </div>

</section>

@endsection