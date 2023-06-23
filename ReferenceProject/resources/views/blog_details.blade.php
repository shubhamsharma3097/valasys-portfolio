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
                                    Blog Details
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Blog Details</li>
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
    <div class="iq-blog-section overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 mt-lg-0 mt-5">
                    <article id="post-218"
                        class="post-218 post type-post status-publish format-standard has-post-thumbnail hentry category-marketing tag-business tag-marketing">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="{{ URL::asset('assets/images/blog/blog-1.jpg') }}" class="img-fluid" alt="qloud" />
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="iq-postdate">
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar mr-2"></i>
                                            <span class="screen-reader-text">Posted on</span> <a href="javascript:void(0)"
                                                rel="bookmark"><time class="entry-date published updated"
                                                    datetime="2020-02-17T06:44:40+00:00">February 17, 2020</time></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using Content
                                        here, content here, making it look like readable English.</p>
                                    <blockquote class="wp-block-quote">
                                        <p><b>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                                their default model text, and a search for;lorem will uncover many web sites
                                                still in their infancy.</b></p>
                                        <p class="text-right">– Jhone Caret</p>
                                    </blockquote>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                        letters, as opposed to using ;Content here, content here, making it look like
                                        readable English. Many desktop publishing packages and web page editors now use
                                        Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover
                                        many web sites still in their infancy.</p>
                                </div>
                            </div>
                        </div>
                        <div id="comments" class="comments-area">
                            <div id="respond" class="comment-respond">
                                <h4 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                            id="cancel-comment-reply-link"
                                            href="/wp-themes/qloud/blog/official-terraform-provider/#respond"
                                            style="display:none;">Cancel reply</a></small></h4>
                                <form action="#" method="post" id="commentform" class="comment-form" novalidate>
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be
                                            published.</span> Required fields are marked <span class="required">*</span></p>
                                    <p class="comment-form-comment"><label for="comment">Comment</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author"><label for="author">Name <span
                                                class="required">*</span></label> <input id="author" name="author"
                                            type="text" value="" size="30" maxlength="245"
                                            required='required' /></p>
                                    <p class="comment-form-email"><label for="email">Email <span
                                                class="required">*</span></label> <input id="email" name="email"
                                            type="email" value="" size="30" maxlength="100"
                                            aria-describedby="email-notes" required='required' /></p>
                                    <p class="comment-form-url"><label for="url">Website</label> <input id="url"
                                            name="url" type="url" value="" size="30" maxlength="200" />
                                    </p>
                                    <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                            name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label
                                            for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit"
                                            class="submit" value="Post Comment" /> <input type='hidden'
                                            name='comment_post_ID' value='218' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                            value='0' />
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->
                        </div>
                        <!-- #comments -->
                    </article>
                    <!-- #post-## -->
                </div>
                <div class="col-lg-4 col-sm-12 mt-lg-0 mt-5">
                    <aside id="secondary" class="widget-area" aria-label="Blog Sidebar">
                        <div id="search-2" class="widget widget_search">
                            <form method="get" class="search-form" action="#">
                                <label for="search-form-5e875eae921cb">
                                    <span class="screen-reader-text">Search for:</span>
                                </label>
                                <input type="search" id="search-form-5e875eae921cb" class="search-field"
                                    placeholder="Search &hellip;" value="" name="s" />
                                <button type="submit" class="search-submit"><i class="fa fa-search"></i><span
                                        class="screen-reader-text">Search</span></button>
                            </form>
                        </div>
                        <div id="recent-posts-2" class="widget widget_recent_entries">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="main-post">
                                        <img src="{{ URL::asset('assets/images/blog/blog-01.jpg') }}" alt="img">
                                        <h4><a href="blog-details.html" class="text-white">Official Terraform Provider</a>
                                        </h4>
                                    </div>

                                </li>
                                <li>
                                    <div class="main-post">
                                        <img src="{{ URL::asset('assets/images/blog/blog-02.jpg') }}" alt="img">
                                        <h4><a href="blog-details.html" class="text-white">CCPA Compliance Update</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-post">
                                        <img src="{{ URL::asset('assets/images/blog/blog-03.jpg') }}" alt="img">
                                        <h4><a href="blog-details.html" class="text-white">Introducing Object Storage!</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-post">
                                        <img src="{{ URL::asset('assets/images/blog/blog-04.jpg') }}" alt="img">
                                        <h4><a href="blog-details.html" class="text-white">Content Marketing</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="recent-comments-2" class="widget widget_recent_comments">
                            <h4 class="widget-title">Recent Comments</h4>
                            <ul id="recentcomments">
                                <li class="recentcomments"><span class="comment-author-link"><a href='#'
                                            rel='external nofollow ugc' class='url'>A Html Commenter</a></span> on <a
                                        href="javascript:void(0)">Construction industry</a></li>
                            </ul>
                        </div>
                        <div id="archives-2" class="widget widget_archive">
                            <h4 class="widget-title">Archives</h4>
                            <ul>
                                <li><a href='#'>February 2020</a></li>
                            </ul>
                        </div>
                        <div id="categories-2" class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="javascript:void(0)">Marketing</a>
                                </li>
                                <li class="cat-item cat-item-2"><a href="javascript:void(0)">Design</a>
                                </li>
                                <li class="cat-item cat-item-2"><a href="javascript:void(0)">Fashion</a>
                                </li>
                                <li class="cat-item cat-item-2"><a href="javascript:void(0)">Photography</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- #secondary -->
                </div>
            </div>
            <!-- #row -->
        </div>
    </div>

@endsection
@push('js')
@endpush
