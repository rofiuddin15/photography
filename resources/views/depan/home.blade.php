@extends('depan.index')

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="{{ asset('depan/img/categories/category-1.jpg') }}">
                        <div class="categories__text">
                            <h1>{{ $last->nama }}</h1>
                            <p>{{ $last->deskripsi }}</p>
                            <a href="{{ route('home.detil', $last->id) }}">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($data->slice(1, 4) as $item)
                            <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                <div class="categories__item set-bg"
                                    data-setbg="{{ asset('depan/img/categories/category-2.jpg') }}">
                                    <div class="categories__text">
                                        <h4>{{ $item->nama }}</h4>
                                        <p>Stok {{ $item->stok }}</p>
                                        <a href="{{ route('home.detil', $item->id) }}">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>Produk Terbaru</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($kat as $category)
                            <li data-filter=".{{ $category->nama }}">{{ $category->nama }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                @foreach ($data->slice(4, 24) as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset('depan/img/product/product-1.jpg') }}">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li><a href="{{ asset('depan/img/product/product-1.jpg') }}" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="{{ route('home.detil', $item->id) }}"><span
                                                class="icon_menu-square_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Buttons tweed blazer</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Instagram End -->
@endsection
