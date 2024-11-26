@extends('layouts.app')
@section('content')
    <!-- End Main Header -->
    <!-- slider 1 -->
    @widget('HomeSlider')
    <!-- filter -->
    <div class="flat-filter-search home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flat-tabs">
                        <div class="box-tab center">
                            <ul class="menu-tab tab-title flex">
                                <li class="item-title style active">
                                    <span class="inner fs-16 fw-5 lh-20">All Tractors</span>
                                </li>
                                <li class="item-title style">
                                    <span class="inner fs-16 fw-5 lh-20">New Tractor</span>
                                </li>
                                <li class="item-title style">
                                    <span class="inner fs-16 fw-5 lh-20">Used Tractor</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-tab">
                            <div class="content-inner tab-content">
                                <div class="form-sl">
                                    <form method="get" action="{{ route('alldata') }}">
                                        <div class="wd-find-select flex">
                                            <div class="inner-group select-style">
                                                <div class="form-group-1">
                                                    <label>Make</label>
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select" id="make" name="make" required>
                                                            <option value="">Select Make</option>
                                                            @foreach ($makes as $make)
                                                                <option value="{{ $make->id }}">{{ $make->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">
                                                    <label>Model</label>
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select"id="model" name="model" required>
                                                            <option value="" selected disabled>Select model</option>
                                                            @foreach ($models as $model)
                                                                <option value="{{ $model->id }}">{{ $model->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">
                                                    <label>Type</label>
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select" name="type" required>
                                                            <option value="">Select Type</option>
                                                            @foreach ($types as $type)
                                                                <option value="{{ $type->name }}">{{ $type->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">
                                                    <label>Condition</label>
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select" id="condition" name="condition"
                                                            required>
                                                            <option value="" selected disabled>Select condition
                                                            </option>
                                                            <option value="New">New</option>
                                                            <option value="Used">Used</option>
                                                            <option value="Certified Pre-Owned">Certified Pre-Owned</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-2 form-style">
                                                <a class="icon-filter pull-right ">
                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.00002 6.84375V0.75C4.00002 0.551088 3.92101 0.360322 3.78035 0.21967C3.6397 0.0790178 3.44894 0 3.25002 0C3.05111 0 2.86035 0.0790178 2.71969 0.21967C2.57904 0.360322 2.50002 0.551088 2.50002 0.75V6.84375C1.85471 7.00898 1.28274 7.38428 0.874293 7.91048C0.465842 8.43669 0.244141 9.08387 0.244141 9.75C0.244141 10.4161 0.465842 11.0633 0.874293 11.5895C1.28274 12.1157 1.85471 12.491 2.50002 12.6562V17.25C2.50002 17.4489 2.57904 17.6397 2.71969 17.7803C2.86035 17.921 3.05111 18 3.25002 18C3.44894 18 3.6397 17.921 3.78035 17.7803C3.92101 17.6397 4.00002 17.4489 4.00002 17.25V12.6562C4.64533 12.491 5.2173 12.1157 5.62575 11.5895C6.0342 11.0633 6.25591 10.4161 6.25591 9.75C6.25591 9.08387 6.0342 8.43669 5.62575 7.91048C5.2173 7.38428 4.64533 7.00898 4.00002 6.84375ZM3.25002 11.25C2.95335 11.25 2.66334 11.162 2.41667 10.9972C2.16999 10.8324 1.97774 10.5981 1.8642 10.324C1.75067 10.0499 1.72097 9.74834 1.77885 9.45737C1.83672 9.16639 1.97958 8.89912 2.18936 8.68934C2.39914 8.47956 2.66642 8.3367 2.95739 8.27882C3.24836 8.22094 3.54996 8.25065 3.82405 8.36418C4.09814 8.47771 4.33241 8.66997 4.49723 8.91665C4.66205 9.16332 4.75002 9.45333 4.75002 9.75C4.75002 10.1478 4.59199 10.5294 4.31068 10.8107C4.02938 11.092 3.64785 11.25 3.25002 11.25ZM10.75 2.34375V0.75C10.75 0.551088 10.671 0.360322 10.5304 0.21967C10.3897 0.0790178 10.1989 0 10 0C9.80111 0 9.61034 0.0790178 9.46969 0.21967C9.32904 0.360322 9.25002 0.551088 9.25002 0.75V2.34375C8.60471 2.50898 8.03274 2.88428 7.62429 3.41048C7.21584 3.93669 6.99414 4.58387 6.99414 5.25C6.99414 5.91613 7.21584 6.56331 7.62429 7.08952C8.03274 7.61572 8.60471 7.99102 9.25002 8.15625V17.25C9.25002 17.4489 9.32904 17.6397 9.46969 17.7803C9.61034 17.921 9.80111 18 10 18C10.1989 18 10.3897 17.921 10.5304 17.7803C10.671 17.6397 10.75 17.4489 10.75 17.25V8.15625C11.3953 7.99102 11.9673 7.61572 12.3758 7.08952C12.7842 6.56331 13.0059 5.91613 13.0059 5.25C13.0059 4.58387 12.7842 3.93669 12.3758 3.41048C11.9673 2.88428 11.3953 2.50898 10.75 2.34375ZM10 6.75C9.70335 6.75 9.41334 6.66203 9.16667 6.4972C8.91999 6.33238 8.72773 6.09811 8.6142 5.82403C8.50067 5.54994 8.47097 5.24834 8.52884 4.95736C8.58672 4.66639 8.72958 4.39912 8.93936 4.18934C9.14914 3.97956 9.41642 3.8367 9.70739 3.77882C9.99836 3.72094 10.3 3.75065 10.574 3.86418C10.8481 3.97771 11.0824 4.16997 11.2472 4.41665C11.412 4.66332 11.5 4.95333 11.5 5.25C11.5 5.64782 11.342 6.02936 11.0607 6.31066C10.7794 6.59196 10.3978 6.75 10 6.75ZM19.75 12.75C19.7494 12.0849 19.5282 11.4388 19.121 10.9129C18.7139 10.387 18.1438 10.011 17.5 9.84375V0.75C17.5 0.551088 17.421 0.360322 17.2804 0.21967C17.1397 0.0790178 16.9489 0 16.75 0C16.5511 0 16.3603 0.0790178 16.2197 0.21967C16.079 0.360322 16 0.551088 16 0.75V9.84375C15.3547 10.009 14.7827 10.3843 14.3743 10.9105C13.9658 11.4367 13.7441 12.0839 13.7441 12.75C13.7441 13.4161 13.9658 14.0633 14.3743 14.5895C14.7827 15.1157 15.3547 15.491 16 15.6562V17.25C16 17.4489 16.079 17.6397 16.2197 17.7803C16.3603 17.921 16.5511 18 16.75 18C16.9489 18 17.1397 17.921 17.2804 17.7803C17.421 17.6397 17.5 17.4489 17.5 17.25V15.6562C18.1438 15.489 18.7139 15.113 19.121 14.5871C19.5282 14.0612 19.7494 13.4151 19.75 12.75ZM16.75 14.25C16.4534 14.25 16.1633 14.162 15.9167 13.9972C15.67 13.8324 15.4777 13.5981 15.3642 13.324C15.2507 13.0499 15.221 12.7483 15.2788 12.4574C15.3367 12.1664 15.4796 11.8991 15.6894 11.6893C15.8991 11.4796 16.1664 11.3367 16.4574 11.2788C16.7484 11.2209 17.05 11.2506 17.324 11.3642C17.5981 11.4777 17.8324 11.67 17.9972 11.9166C18.1621 12.1633 18.25 12.4533 18.25 12.75C18.25 13.1478 18.092 13.5294 17.8107 13.8107C17.5294 14.092 17.1478 14.25 16.75 14.25Z"
                                                            fill="CurrentColor" />
                                                    </svg>
                                                    <i class="icon-autodeal-plus search-icon fs-20"></i>
                                                </a>
                                            </div>
                                            <div class="button-search sc-btn-top">
                                                <a class="sc-button" href="{{ route('alldata') }}">
                                                    <span>Find Tractors</span>
                                                    <i class="far fa-search text-color-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wd-find-select wd-search-form ">
                                            <div class="box1 grid-4">
                                                <div class="form-group wg-box3">
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select" name="engine" required>
                                                            <option value="">Select Fuel Type</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Petrol">Petrol</option>
                                                            <option value="Electric">Electric</option>
                                                            <option value="Natural Gas">Natural Gas</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="group-select tf-select">
                                                        <select class="nice-select" id="transmission" name="transmission">
                                                            <option value="" selected disabled>Select transmission
                                                            </option>
                                                            <option value="Automatic">Automatic</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <input type="number" class="text-field" placeholder="Millage"
                                                        name="millage" value="">
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <input type="number" class="text-field" placeholder="HosePower"
                                                        name="hp" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="wrap-icon trending1">
                            <div class="icon-box text-color-1 fs-14 fw-4 flex align-center font">
                                <span class="icon-autodeal-trending"></span>
                                <a href="#"><strong class="font-2 fw-7">Trending:</strong>Caterpillar,
                                    Claas, Case IH, John Deere,Mahindra, Massey Ferguson</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- widegt List car -->
    <section class="tf-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">Tractors By Brand
                        </h2>
                        <a href="{{ route('alldata') }}" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                            data-wow-duration="1000ms">View all<i class="icon-autodeal-btn-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="flat-tabs themesflat-tabs">
                        <div class="box-tab center">
                            <ul class="menu-tab tab-title style flex">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($makes as $make)
                                    @if ($i == 0)
                                        <li class="item-title active ">
                                            <h5 class="inner">{{ $make->name }}</h5>
                                        </li>
                                    @else
                                        <li class="item-title">
                                            <h5 class="inner">{{ $make->name }}</h5>
                                        </li>
                                    @endif
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                        <div class="content-tab">
                            @foreach ($makes as $make)
                                <div class="content-inner tab-content">
                                    @widget('HomeListView', ['make' => $make->id])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
