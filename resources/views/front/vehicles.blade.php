@extends('layouts.app')
@section('content')
    <section class="listing-grid tf-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section">
                        <h2>{{ count($vehicles) }}+ Get The Best Deals On {{ $title }}</h2>
                        <p class="mt-20">Explore our selection of high-quality Tractorss.</p>
                    </div>
                </div>
                <div class="col-lg-12 flex gap-30 text-start">
                    <div class="sidebar-right-listing style-2" hidden>
                        <div class="sidebar-title flex-two flex-wrap">
                            <h4>Filters and Sort</h4>
                            <a class="fw-5 font claer text-color-2"><i class="icon-autodeal-plus"></i>Clear</a>
                        </div>
                        <div class="form-filter-siderbar">
                            <form method="post">
                                <div class="wd-find-select">
                                    <div class="form-group">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Make</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Make
                                                    </li>
                                                    <li data-value="make-1" class="option">Make</li>
                                                    <li data-value="make-2" class="option">Make</li>
                                                    <li data-value="make-3" class="option">Make</li>
                                                    <li data-value="make-4" class="option">Make</li>
                                                    <li data-value="make-5" class="option">Make</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Models</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">
                                                        Models</li>
                                                    <li data-value="model-1" class="option">Models
                                                    </li>
                                                    <li data-value="model-2" class="option">Models
                                                    </li>
                                                    <li data-value="model-3" class="option">Models
                                                    </li>
                                                    <li data-value="model-4" class="option">Models
                                                    </li>
                                                    <li data-value="model-5" class="option">Models
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Body</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Body</li>
                                                    <li data-value="body-1" class="option">Body
                                                    </li>
                                                    <li data-value="body-2" class="option">Body
                                                    </li>
                                                    <li data-value="body-3" class="option">Body
                                                    </li>
                                                    <li data-value="body-4" class="option">Body
                                                    </li>
                                                    <li data-value="body-5" class="option">Body
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group wg-box3">
                                        <div class="widget widget-price ">
                                            <div class="caption flex-two">
                                                <div>
                                                    <span class="fw-6">Price: </span>
                                                    <span id="slider-range-value01"></span>
                                                    <span id="slider-range-value02"></span>
                                                </div>
                                            </div>
                                            <div id="slider-range2"></div>
                                            <div class="slider-labels">
                                                <div>
                                                    <input type="hidden" name="min-value2" value="">
                                                    <input type="hidden" name="max-value2" value="">
                                                </div>
                                            </div>
                                        </div><!-- /.widget_price -->
                                    </div>

                                    <div class="form-group ">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Fuel type</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Fuel type</li>
                                                    <li data-value="fuel-type-1" class="option">Fuel type
                                                    </li>
                                                    <li data-value="fuel-type-2" class="option">Fuel type
                                                    </li>
                                                    <li data-value="fuel-type-3" class="option">Fuel type
                                                    </li>
                                                    <li data-value="fuel-type-4" class="option">Fuel type
                                                    </li>
                                                    <li data-value="fuel-type-5" class="option">Fuel type
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Transmission</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Transmission</li>
                                                    <li data-value="transmission-1" class="option">Transmission
                                                    </li>
                                                    <li data-value="transmission-2" class="option">Transmission
                                                    </li>
                                                    <li data-value="transmission-3" class="option">Transmission
                                                    </li>
                                                    <li data-value="transmission-4" class="option">Transmission
                                                    </li>
                                                    <li data-value="transmission-5" class="option">Transmission
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Driver type</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Driver type</li>
                                                    <li data-value="1" class="option">Driver type
                                                    </li>
                                                    <li data-value="2" class="option">Driver type
                                                    </li>
                                                    <li data-value="3" class="option">Driver type
                                                    </li>
                                                    <li data-value="4" class="option">Driver type
                                                    </li>
                                                    <li data-value="5" class="option">Driver type
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Door</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Door</li>
                                                    <li data-value="door-1" class="option">Door
                                                    </li>
                                                    <li data-value="door-2" class="option">Door
                                                    </li>
                                                    <li data-value="door-3" class="option">Door
                                                    </li>
                                                    <li data-value="door-4" class="option">Door
                                                    </li>
                                                    <li data-value="door-5" class="option">Door
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Cylinder</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Cylinder</li>
                                                    <li data-value="cylinder-1" class="option">Cylinder
                                                    </li>
                                                    <li data-value="cylinder-2" class="option">Cylinder
                                                    </li>
                                                    <li data-value="cylinder-3" class="option">Cylinder
                                                    </li>
                                                    <li data-value="cylinder-4" class="option">Cylinder
                                                    </li>
                                                    <li data-value="cylinder-5" class="option">Cylinder
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group wg-box3">
                                        <div class="widget widget-price ">
                                            <div class="caption flex-two">
                                                <div>
                                                    <span class="fw-6">Year: </span>
                                                    <span id="slider-range-value03"></span>
                                                    <span id="slider-range-value04"></span>
                                                </div>
                                            </div>
                                            <div id="slider-range3"></div>
                                            <div class="slider-labels">
                                                <div>
                                                    <input type="hidden" name="min-value3" value="">
                                                    <input type="hidden" name="max-value3" value="">
                                                </div>
                                            </div>
                                        </div><!-- /.widget_price -->
                                    </div>

                                    <div class="form-group wg-box3">
                                        <div class="widget widget-price ">
                                            <div class="caption flex-two">
                                                <div>
                                                    <span id="slider-range-value1"></span>
                                                    <span id="slider-range-value2"></span>
                                                </div>
                                            </div>
                                            <div id="slider-range"></div>
                                            <div class=" slider-labels">
                                                <div>
                                                    <input type="hidden" name="min-value" value="">
                                                    <input type="hidden" name="max-value" value="">
                                                </div>
                                            </div>
                                        </div><!-- /.widget_price -->
                                    </div>


                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="sidebar-left-listing">
                        <div class="row">
                            <div class="col-lg-12 listing-list-car-wrap">
                                <div class="category-filter flex justify-space align-center mb-30 flex-wrap gap-8">
                                    <div class="box-1 flex align-center flex-wrap gap-8">
                                        <p class="">Showing 1–16 of 20 results</p>
                                        <div class="filter-mobie">
                                            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight" class="filter">Filter<i
                                                    class="icon-autodeal-filter"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-2 flex flex-wrap gap-8">
                                        <a href="#" class="btn-view grid ">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.04883 6.40508C5.04883 5.6222 5.67272 5 6.41981 5C7.16686 5 7.7908 5.62221 7.7908 6.40508C7.7908 7.18801 7.16722 7.8101 6.41981 7.8101C5.67241 7.8101 5.04883 7.18801 5.04883 6.40508Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M11.1045 6.40508C11.1045 5.62221 11.7284 5 12.4755 5C13.2229 5 13.8466 5.6222 13.8466 6.40508C13.8466 7.18789 13.2227 7.8101 12.4755 7.8101C11.7284 7.8101 11.1045 7.18794 11.1045 6.40508Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M19.9998 6.40514C19.9998 7.18797 19.3757 7.81016 18.6288 7.81016C17.8818 7.81016 17.2578 7.18794 17.2578 6.40508C17.2578 5.62211 17.8813 5 18.6288 5C19.3763 5 19.9998 5.62215 19.9998 6.40514Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M7.74249 12.5097C7.74249 13.2926 7.11849 13.9147 6.37133 13.9147C5.62411 13.9147 5 13.2926 5 12.5097C5 11.7267 5.62419 11.1044 6.37133 11.1044C7.11842 11.1044 7.74249 11.7266 7.74249 12.5097Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M13.7976 12.5097C13.7976 13.2927 13.1736 13.9147 12.4266 13.9147C11.6795 13.9147 11.0557 13.2927 11.0557 12.5097C11.0557 11.7265 11.6793 11.1044 12.4266 11.1044C13.1741 11.1044 13.7976 11.7265 13.7976 12.5097Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M19.9516 12.5097C19.9516 13.2927 19.328 13.9147 18.5807 13.9147C17.8329 13.9147 17.209 13.2925 17.209 12.5097C17.209 11.7268 17.8332 11.1044 18.5807 11.1044C19.3279 11.1044 19.9516 11.7265 19.9516 12.5097Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M5.04297 18.5947C5.04297 17.8118 5.66709 17.1896 6.4143 17.1896C7.16137 17.1896 7.78523 17.8116 7.78523 18.5947C7.78523 19.3778 7.16139 19.9997 6.4143 19.9997C5.66714 19.9997 5.04297 19.3773 5.04297 18.5947Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M11.0986 18.5947C11.0986 17.8118 11.7227 17.1896 12.47 17.1896C13.2169 17.1896 13.8409 17.8117 13.8409 18.5947C13.8409 19.3778 13.2169 19.9997 12.47 19.9997C11.7225 19.9997 11.0986 19.3774 11.0986 18.5947Z"
                                                    stroke="CurrentColor"></path>
                                                <path
                                                    d="M17.252 18.5947C17.252 17.8117 17.876 17.1896 18.6229 17.1896C19.3699 17.1896 19.9939 17.8117 19.9939 18.5947C19.9939 19.3778 19.3702 19.9997 18.6229 19.9997C17.876 19.9997 17.252 19.3774 17.252 18.5947Z"
                                                    stroke="CurrentColor"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="btn-view list active">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7016 18.3317H9.00246C8.5615 18.3317 8.2041 17.9743 8.2041 17.5333C8.2041 17.0923 8.5615 16.7349 9.00246 16.7349H19.7013C20.1423 16.7349 20.4997 17.0923 20.4997 17.5333C20.4997 17.9743 20.1426 18.3317 19.7016 18.3317Z"
                                                    fill="CurrentColor"></path>
                                                <path
                                                    d="M19.7016 13.3203H9.00246C8.5615 13.3203 8.2041 12.9629 8.2041 12.5219C8.2041 12.081 8.5615 11.7236 9.00246 11.7236H19.7013C20.1423 11.7236 20.4997 12.081 20.4997 12.5219C20.5 12.9629 20.1426 13.3203 19.7016 13.3203Z"
                                                    fill="CurrentColor"></path>
                                                <path
                                                    d="M19.7016 8.30919H9.00246C8.5615 8.30919 8.2041 7.95179 8.2041 7.51083C8.2041 7.06986 8.5615 6.71246 9.00246 6.71246H19.7013C20.1423 6.71246 20.4997 7.06986 20.4997 7.51083C20.4997 7.95179 20.1426 8.30919 19.7016 8.30919Z"
                                                    fill="CurrentColor"></path>
                                                <path
                                                    d="M5.5722 8.64465C6.16436 8.64465 6.6444 8.16461 6.6444 7.57245C6.6444 6.98029 6.16436 6.50024 5.5722 6.50024C4.98004 6.50024 4.5 6.98029 4.5 7.57245C4.5 8.16461 4.98004 8.64465 5.5722 8.64465Z"
                                                    fill="CurrentColor"></path>
                                                <path
                                                    d="M5.5722 13.5942C6.16436 13.5942 6.6444 13.1141 6.6444 12.522C6.6444 11.9298 6.16436 11.4498 5.5722 11.4498C4.98004 11.4498 4.5 11.9298 4.5 12.522C4.5 13.1141 4.98004 13.5942 5.5722 13.5942Z"
                                                    fill="CurrentColor"></path>
                                                <path
                                                    d="M5.5722 18.5438C6.16436 18.5438 6.6444 18.0637 6.6444 17.4716C6.6444 16.8794 6.16436 16.3994 5.5722 16.3994C4.98004 16.3994 4.5 16.8794 4.5 17.4716C4.5 18.0637 4.98004 18.5438 5.5722 18.5438Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </a>
                                        <div class="wd-find-select flex gap-8">
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0"><span class="current">Show:
                                                        50</span>
                                                    <ul class="list style">
                                                        <li data-value="10" class="option">Show: 10</li>
                                                        <li data-value="30" class="option">Show: 30</li>
                                                        <li data-value="50" class="option selected">Show: 50
                                                        </li>
                                                        <li data-value="100" class="option">Show: 100</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0"><span class="current">Default
                                                        order</span>
                                                    <ul class="list style">
                                                        <li data-value="" class="option selected">Default order
                                                        </li>
                                                        <li data-value="by-latest" class="option">All </li>
                                                        <li data-value="low-to-high" class="option">Low to high
                                                        </li>
                                                        <li data-value="high-to-low" class="option">High to low
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-car-list-1">
                                    @foreach ($vehicles as $vehicle)
                                        @widget('VehicleWidget', ['vehicle' => $vehicle])
                                    @endforeach
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
