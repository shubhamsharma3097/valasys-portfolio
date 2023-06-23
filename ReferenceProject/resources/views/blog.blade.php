@extends('layouts.layout')
@section('title', 'Valasys - Blogs')
@section('content')
    <!-- Breadcrumb Start -->
    <div class=" main-bg">
        <div class="container-fluid p-0">
            <div class="text-left iq-breadcrumb-one
              iq-bg-over black     ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                                <h2 class="title">
                                    Blog
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog Start -->
    <section class="iq-blog-section iq-pb-55">
        <div class="container">
            <div class="row">
                <div class="iq-blog text-left ">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-1.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the
                                        readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-2.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Auctor alinean.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the
                                        readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-3.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Marketing Agencies Strategies</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the
                                        readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-4.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Tools for Digital Growth</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the
                                        readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-5.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Analytics for your website</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by
                                        the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="iq-blog-box">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-6.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-detail">
                                    <div class="blog-title">
                                        <a href="/blog-details">
                                            <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by
                                        the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="/blog-details">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#">Next page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
@endpush
