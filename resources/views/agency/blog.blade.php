@extends('agency.layouts.master')

@section('content')
    <section class="inner-section single-banner"
        style="background: url(agency/assets/images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>blog grid</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog grid</li>
            </ol>
        </div>
    </section>
    <section class="inner-section blog-grid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-show"><label class="filter-label">Show :</label><select
                                        class="form-select filter-select">
                                        <option value="1">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select></div>
                                <div class="filter-short"><label class="filter-label">Short by :</label><select
                                        class="form-select filter-select">
                                        <option selected>default</option>
                                        <option value="3">recent</option>
                                        <option value="1">featured</option>
                                        <option value="2">recommend</option>
                                    </select></div>
                                <div class="filter-action">
                                    <a href="blog-grid.html" class="active" title="Two Column"><i
                                            class="fas fa-th-large"></i></a>
                                    <a href="blog-standard.html" title="One Column"><i class="fas fa-th-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/01.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/02.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/03.jpg') }}" alt="blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/04.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/05.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/06.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title"><a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a></h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/07.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="{{ asset('agency/assets/images/blog/08.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fas fa-user"></i><span>admin</span></li>
                                        <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Alias autem recusandae deleniti nam dignissimos sequi ... </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">60</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Find blogs</h3>
                        <form class="blog-widget-form">
                            <input type="text" placeholder="Search blogs">
                            <button class="icofont-search-1"></button>
                        </form>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">popular feeds</h3>
                        <ul class="blog-widget-feed">
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{ asset('agency/assets/images/blog-widget/01.jpg') }}" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a><span>february 02,
                                        2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{ asset('agency/assets/images/blog-widget/02.jpg') }}" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a><span>february 02,
                                        2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{ asset('agency/assets/images/blog-widget/03.jpg') }}"
                                        alt="blog-widget"></a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a><span>february 02,
                                        2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{ asset('agency/assets/images/blog-widget/04.jpg') }}" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a><span>february 02,
                                        2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{ asset('agency/assets/images/blog-widget/05.jpg') }}" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a><span>february 02,
                                        2021</span>
                                </h6>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">top categories</h3>
                        <ul class="blog-widget-category">
                            <li><a href="#">farming <span>22</span></a></li>
                            <li><a href="#">agriculture <span>14</span></a></li>
                            <li><a href="#">organic food <span>35</span></a></li>
                            <li><a href="#">vegetables <span>67</span></a></li>
                            <li><a href="#">healthy life <span>89</span></a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">popular tags</h3>
                        <ul class="blog-widget-tag">
                            <li><a href="#">farming</a></li>
                            <li><a href="#">organic</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">healthy</a></li>
                            <li><a href="#">agriculture</a></li>
                            <li><a href="#">vegetables</a></li>
                            <li><a href="#">grocery</a></li>
                            <li><a href="#">vegan</a></li>
                            <li><a href="#">life</a></li>
                            <li><a href="#">enjoy</a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">follow us</h3>
                        <ul class="blog-widget-social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                            <li><a href="#" class="icofont-pinterest"></a></li>
                            <li><a href="#" class="icofont-instagram"></a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('agency/assets/images/promo/blog/01.jpg') }}"
                                alt="promo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-part" style="background: url(agency/assets/images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button>
                            <span><i class="icofont-ui-email"></i>Subscribe</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
