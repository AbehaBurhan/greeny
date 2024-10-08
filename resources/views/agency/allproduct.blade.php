@extends('agency.layouts.master')

@section('content')
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ asset('agency/assets/images/product/01.jpg') }}" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="inner-section single-banner"
        style="background: url(agency/assets/images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Shop 5 Column</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">shop-5column</li>
            </ol>
        </div>
    </section>
    <section class="inner-section shop-part">
        <div class="container">
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
                                <option value="3">trending</option>
                                <option value="1">featured</option>
                                <option value="2">recommend</option>
                            </select></div>
                        <div class="filter-action"><a href="shop-3column.html" title="Three Column"><i
                                    class="fas fa-th"></i></a><a href="shop-2column.html" title="Two Column"><i
                                    class="fas fa-th-large"></i></a><a href="shop-1column.html" title="One Column"><i
                                    class="fas fa-th-list"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text new">new</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/01.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/02.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/03.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text feat">feature</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/04.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/05.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/06.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text feat">feature</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/07.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text new">new</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/08.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/09.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text feat">feature</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/10.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text new">new</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/11.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/12.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/13.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text feat">feature</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/14.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/15.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text new">new</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/16.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text new">new</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="{{ asset('agency/assets/images/product/17.jpg') }}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text feat">feature</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img
                                    src="{{ asset('agency/assets/images/product/18.jpg') }}" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img
                                    src="{{ asset('agency/assets/images/product/19.jpg') }}" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img
                                    src="{{ asset('agency/assets/images/product/20.jpg') }}" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-long-arrow-alt-left"></i></a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">60</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-long-arrow-alt-right"></i></a></li>
                        </ul>
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
                    <form class="news-form"><input type="text"
                            placeholder="Enter Your Email Address"><button><span><i
                                    class="icofont-ui-email"></i>Subscribe</span></button></form>
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
