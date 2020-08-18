@extends('layouts.master')
@section('title') {{ $post->title }} - FirstViewAgency @endsection

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>

                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li>{{ $post->title }}</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="blog aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="{{'/storage/' .$post->image}}" alt="{{ $post->title }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="">{{ $post->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                        href="blog-single.html">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                        href="blog-single.html">
                                        <time>{{$post->created_at->format('M d ,yy')}}</time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                        href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            {!! $post->body !!}
                        </div>

                        <div class="entry-footer clearfix">
                            <div class="float-left">
                                <i class="icofont-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{$post->category->name}}</a></li>
                                </ul>

                                <i class="icofont-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>

                            <div class="float-right share">
                                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                            </div>

                        </div>

                    </article><!-- End blog entry -->
                    <div class="blog-comments">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                {{-- start comments --}}
                                @comments(['model' => $post,'approved' => true])
                                {{-- end comments --}}
                            </div>
                        </div>
                    </div>
                    <!-- End blog author bio -->

                    <!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <!-- <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div> -->
                        <!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a class="active" href="{{url('/blog')}}">Tous</a></li>
                                @foreach($myCategories as $category)
                                    <li><a href="{{url('/blog/'.$category->id)}}"> {{$category->name}} <span>({{$category->posts->count()}})</span></a>
                                    </li>
                                @endforeach
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($lastposts as $post)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('/storage/'.$post->image) }}" alt="{{ $post->title }}">
                                    <h4><a href="{{url('/post/'.$post->slug)}}">{{ $post->title }}</a></h4>
                                    <time
                                        datetime="{{$post->created_at}}">{{$post->created_at->format('M d ,yy')}}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End row -->

        </div><!-- End container -->

    </section>
@endsection
