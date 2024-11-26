@extends('layouts.dashboard.app')
@section('content')
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <h1 class="admin-title mb-3">My favorite</h1>

                            <div class="tfcl-favorite-listing">

                                <div class="controller-sorting mb-3">
                                    <div class="count-list">
                                        <span>26</span> Car listing
                                    </div>
                                    <div class="sorting-input">
                                        <div class="label">Sort By</div>
                                        <div class="nice-select form-control" tabindex="0">
                                            <span class="current">Newest</span>
                                            <ul class="list">
                                                <li class="option">New</li>
                                                <li class="option"> Old </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-car-list-1">

                                    @foreach ($favourites as $favourite)
                                        @widget('VehicleWidget', ['vehicle' => $favourite->vehicle])
                                    @endforeach

                                </div>
                                <div class="tfcl-pagination paging-navigation clearfix">
                                    <a class="prev page-numbers" href="#"><i class="far fa-angle-left"></i></a>
                                    <a class="page-numbers" href="#">1</a>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="page-numbers current" href="#">3</a>
                                    <a class="page-numbers" href="#">4</a>
                                    <a class="page-numbers" href="#">...</a>
                                    <a class="next page-numbers" href="#"><i class="far fa-angle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
