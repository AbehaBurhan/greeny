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
            <h2>checkout</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                <li class="breadcrumb-item active" aria-current="page">checkout</li>
            </ol>
        </div>
    </section>
    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>Returning customer? <a href="{{ route('login') }}">Click here to login</a></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your order</h4>
                        </div>
                        <div class="account-content">
                            <div class="table-scroll">
                                <table class="table-list">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">brand</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>01</h6>
                                            </td>
                                            <td class="table-image"><img
                                                    src="{{ asset('agency/assets/images/product/01.jpg') }}"
                                                    alt="product">
                                            </td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>$19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Fresh Company</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>3</h6>
                                            </td>
                                            <td class="table-action"><a class="view" href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#product-view"><i
                                                        class="fas fa-eye"></i></a><a class="trash" href="#"
                                                    title="Remove Wishlist"><i class="icofont-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>02</h6>
                                            </td>
                                            <td class="table-image"><img
                                                    src="{{ asset('agency/assets/images/product/02.jpg') }}"
                                                    alt="product">
                                            </td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>$19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Radhuni Masala</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>5</h6>
                                            </td>
                                            <td class="table-action"><a class="view" href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#product-view"><i
                                                        class="fas fa-eye"></i></a><a class="trash" href="#"
                                                    title="Remove Wishlist"><i class="icofont-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>03</h6>
                                            </td>
                                            <td class="table-image"><img
                                                    src="{{ asset('agency/assets/images/product/03.jpg') }}"
                                                    alt="product">
                                            </td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>$19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Pran Prio</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>2</h6>
                                            </td>
                                            <td class="table-action"><a class="view" href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#product-view"><i
                                                        class="fas fa-eye"></i></a><a class="trash" href="#"
                                                    title="Remove Wishlist"><i class="icofont-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>04</h6>
                                            </td>
                                            <td class="table-image"><img
                                                    src="{{ asset('agency/assets/images/product/04.jpg') }}"
                                                    alt="product">
                                            </td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>$19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Real Food</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>3</h6>
                                            </td>
                                            <td class="table-action"><a class="view" href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#product-view"><i
                                                        class="fas fa-eye"></i></a><a class="trash" href="#"
                                                    title="Remove Wishlist"><i class="icofont-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-serial">
                                                <h6>05</h6>
                                            </td>
                                            <td class="table-image"><img
                                                    src="{{ asset('agency/assets/images/product/05.jpg') }}"
                                                    alt="product">
                                            </td>
                                            <td class="table-name">
                                                <h6>product name</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>$19<small>/kilo</small></h6>
                                            </td>
                                            <td class="table-brand">
                                                <h6>Rdhuni Company</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <h6>7</h6>
                                            </td>
                                            <td class="table-action"><a class="view" href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#product-view"><i
                                                        class="fas fa-eye"></i></a><a class="trash" href="#"
                                                    title="Remove Wishlist"><i class="icofont-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="chekout-coupon"><button class="coupon-btn">Do you have a coupon code?</button>
                                <form class="coupon-form"><input type="text"
                                        placeholder="Enter your coupon code"><button
                                        type="submit"><span>apply</span></button></form>
                            </div>
                            <div class="checkout-charge">
                                <ul>
                                    <li><span>Sub total</span><span>$267.45</span></li>
                                    <li><span>delivery fee</span><span>$10.00</span></li>
                                    <li><span>discount</span><span>$00.00</span></li>
                                    <li><span>Total<small>(Incl. VAT)</small></span><span>$277.00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Delivery Schedule</h4>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule active">
                                        <h6>express</h6>
                                        <p>90 min express delivery</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>8am-10pm</h6>
                                        <p>8.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>Next day</h6>
                                        <p>Next day or Tomorrow</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>contact number</h4><button data-bs-toggle="modal" data-bs-target="#contact-add">add
                                contact</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact active">
                                        <h6>primary</h6>
                                        <p>+8801838288389</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#contact-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801941101915</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#contact-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801747875727</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#contact-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>delivery address</h4><button data-bs-toggle="modal" data-bs-target="#address-add">add
                                address</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address active">
                                        <h6>Home</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#address-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Office</h6>
                                        <p>east tejturi bazar, dhaka-1200. word no-04, road no-13/c, house no-4/b</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#address-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Bussiness</h6>
                                        <p>kawran bazar, dhaka-1100. word no-02, road no-13/d, house no-7/m</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This"
                                                    data-bs-toggle="modal" data-bs-target="#address-edit"></button>
                                            </li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card mb-0">
                        <div class="account-title">
                            <h4>payment option</h4><button data-bs-toggle="modal" data-bs-target="#payment-add">add
                                card</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment active"><img
                                            src="{{ asset('agency/assets/images/payment/png/01.png') }}" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5><button class="trash icofont-ui-delete" title="Remove This"
                                            data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment"><img
                                            src="{{ asset('agency/images/payment/png/02.png') }}" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5><button class="trash icofont-ui-delete" title="Remove This"
                                            data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment"><img
                                            src="{{ asset('agency/assets/images/payment/png/03.png') }}" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5><button class="trash icofont-ui-delete" title="Remove This"
                                            data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-check"><input type="checkbox" id="checkout-check"><label
                                for="checkout-check">By making this purchase you agree to our <a href="#">Terms
                                    and Conditions</a>.</label></div>
                        <div class="checkout-proced"><a href="invoice.html" class="btn btn-inline">proced to
                                checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="contact-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new contact</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option selected>choose title</option>
                            <option value="primary">primary</option>
                            <option value="secondary">secondary</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">number</label><input class="form-control"
                            type="text" placeholder="Enter your number"></div><button class="form-btn"
                        type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="address-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new address</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option selected>choose title</option>
                            <option value="home">home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">address</label>
                        <textarea class="form-control" placeholder="Enter your address"></textarea>
                    </div><button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="payment-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new payment</h3>
                    </div>
                    <div class="form-group"><label class="form-label">card number</label><input class="form-control"
                            type="text" placeholder="Enter your card number"></div><button class="form-btn"
                        type="submit">save card info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contact-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit contact info</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option value="primary" selected>primary</option>
                            <option value="secondary">secondary</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">number</label><input class="form-control"
                            type="text" value="+8801838288389"></div><button class="form-btn" type="submit">save
                        contact info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="address-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit address info</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option value="home" selected>home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">address</label>
                        <textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                    </div><button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>
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
                    <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i
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
