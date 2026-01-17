@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
        @endcomponent
    </div>
    <div class="col-9">
        <h1>おすすめ商品</h1>
        <!-- <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            和栗の詰め合わせ<br>
                            <label>￥2000</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/persimmon.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            おいしい柿<br>
                            <label>￥500</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/orange.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            旬なみかん<br>
                            <label>￥1200</label>
                        </p>
                    </div>
                </div>
            </div> -->
        <div class="row">
            @foreach ($recommend_products as $recommend_product)
            <div class="col-4">
                <a href="{{ route('products.show', $recommend_product) }}">
                    @if ($recommend_product->image !== "")
                    <img src="{{ asset($recommend_product->image) }}" class="img-thumbnail">
                    @else
                    <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                    @endif
                </a>
                <div class="row">
                    <div class="col-12">
                        <div class="samuraimart-product-label mt-2 mb-3">
                            {{ $recommend_product->name }}<br>
                            <div class="d-flex align-items-center mb-1" style="clear: both;">
                                <span class="samuraimart-star-rating" data-rate="{{ $recommend_product->getAverageScore()  }}">
                                    <span class="star-rating-front" style="width: {{ $recommend_product->getStarRatingWidth() }}"></span>
                                </span>

                                <span class="ms-2 small fw-bold">{{ number_format($recommend_product->getAverageScore(),1 ) }}</span>
                            </div>
                            <label>￥{{ $recommend_product->price }}</label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-between">
            <h1>新着商品</h1>
            <a href="{{ route('products.index', ['sort' => 'id', 'direction' => 'desc']) }}">もっと見る</a>
        </div>
        <div class="row">
            <!-- <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/robot-vacuum-cleaner.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            ロボット掃除機<br>
                            <label>￥55000</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/sofa.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            3人掛けソファー<br>
                            <label>￥35000</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/cup.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            コーヒーカップ<br>
                            <label>￥1000</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/cutlery.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            食器 カトラリーセット1組<br>
                            <label>￥2000</label>
                        </p>
                    </div>
                </div>
            </div> -->

            @foreach ($recently_products as $recently_product)
            <div class="col-3">
                <a href="{{ route('products.show', $recently_product) }}">
                    @if ($recently_product->image !== "")
                    <img src="{{ asset($recently_product->image) }}" class="img-thumbnail">
                    @else
                    <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                    @endif
                </a>
                <div class="row">
                    <div class="col-12">
                        <div class="samuraimart-product-label mt-2 mb-3">
                            {{ $recently_product->name }}<br>
                            <div class="d-flex align-items-center mb-1" style="clear: both;">
                                <span class="samuraimart-star-rating" data-rate="{{ $recently_product->getAverageScore()  }}">
                                    <span class="star-rating-front" style="width: {{ $recently_product->getStarRatingWidth() }}"></span>
                                </span>

                                <span class="ms-2 small fw-bold">{{ number_format($recently_product->getAverageScore(),1 ) }}</span>
                            </div>
                            <label>￥{{ $recently_product->price }}</label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection