@extends('_layouts.master')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ $page->image ? $page->image : '/assets/images/post-bg.jpg' }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $page->title }}</h1>
                        <h2 class="subheading">{{ $page->subtitle }}</h2>
                        <span class="meta">Posted on {{ date('F jS, Y', $page->date) }}@if($page->showReadingTime) &bull; {{ $page->readingTime($page) }}@endif</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @yield('content')
                    <hr>
                    @include('_partials/share')
                    <hr>
                    @if ($page->getNext())
                        <p>
                            <strong>
                                Next post: <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
                            </strong>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </article>

    <!-- Footer -->
    @include('_partials/footer')
@endsection
