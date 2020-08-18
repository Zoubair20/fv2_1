@extends('layouts.master')
@section('title')Blog - FirstViewAgency @endsection
@section('content')
    <div class="bg-overlay-gradient .bg-overlay">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </section>
    </div>
    <section class="blog aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="container">

            <div class="row">
                <div class="col-lg-8 entries">

                    <section class="service-details pt-0">
                        <div class="container">
                            <div class="row">
                            @foreach ($myposts as $post)
                                <!-- End blog entry -->
                                    <div class="col-md-12 align-items-stretch aos-init" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-img">
                                                <a href="{{url('/post/'.$post->slug)}}"><img
                                                        src="{{ asset('/storage/'.$post->image) }}"
                                                        alt="{{ $post->title }}"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><a
                                                        href="{{url('/post/'.$post->slug)}}">{{ $post->title }}</a></h5>
                                                <p class="card-text"> {{ Str::limit($post->excerpt,50) }}</p>
                                                <div class="read-more"><a href="{{url('/post/'.$post->slug)}}"><i
                                                            class="icofont-arrow-right"></i>Lire la suite</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            {{$myposts->links()}}
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4 pt-2">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a class="active" href="{{url('/blog')}}">Tous</a></li>
                                @foreach($myCategories as $category)
                                    <li><a href="{{url('/blog/'.$category->slug)}}"> {{$category->name}} <span>({{$category->posts->count()}})</span></a>
                                    </li>
                                @endforeach
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($lastposts as $post)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('/storage/'.$post->image) }}" alt="">
                                    <h4><a href="{{url('/post/'.$post->slug)}}">{{ $post->title }}</a></h4>
                                    <time
                                        datetime="{{$post->created_at}}">{{$post->created_at->format('M d ,yy')}}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </section>
@endsection
