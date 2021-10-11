@extends('layout.app')

@section('content')
<div id="fh5co-pricing">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Pricing Plan</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="pricing">

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <form>
                            @csrf
                            <h2 class="pricing-plan">1 Месяц</h2>
                            <div class="price"><sup class="currency">$</sup>15</div>
                            <br>
                            @if(isset($_COOKIE[\App\Models\Client::CLIENT]))
                                <input value="1" name="id" type="hidden">
                                <button class="btn btn-select-plan btn-sm" formmethod="post" formaction="{{route('make.sub')}}">Select Plan</button>
                            @else
                                <p>Авторизируйтесь</p>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <form>
                            @csrf
                            <h2 class="pricing-plan">2 месяца</h2>
                            <div class="price"><sup class="currency">$</sup>29</div>
                            <br>
                            @if(isset($_COOKIE[\App\Models\Client::CLIENT]))
                                <input value="2" name="id" type="hidden">
                                <button class="btn btn-select-plan btn-sm" formmethod="post" formaction="{{route('make.sub')}}">Select Plan</button>
                            @else
                                <p>Авторизируйтесь</p>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <form>
                            @csrf
                            <h2 class="pricing-plan pricing-plan-offer">4 месяца</h2>
                            <br>
                            <div class="price"><sup class="currency">$</sup>50</div>
                            <br>
                            @if(isset($_COOKIE[\App\Models\Client::CLIENT]))
                                <input value="3" name="id" type="hidden">
                                <button class="btn btn-select-plan btn-sm" formmethod="post" formaction="{{route('make.sub')}}">Select Plan</button>
                            @else
                                <p>Авторизируйтесь</p>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <form>
                            @csrf
                            <h2 class="pricing-plan">6 месяцев</h2>
                            <div class="price"><sup class="currency">$</sup>70</div>
                            <br>
                            @if(isset($_COOKIE[\App\Models\Client::CLIENT]))
                                <input value="4" name="id" type="hidden">
                                <button class="btn btn-select-plan btn-sm" formmethod="post" formaction="{{route('make.sub')}}">Select Plan</button>
                            @else
                                <p>Авторизируйтесь</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
