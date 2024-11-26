@php
    $images = json_decode($vehicle->images, true);
@endphp
<div class="box-car-list style-2 hv-one">
    <div class="image-group relative ">
        <div class="top flex-two">
            <ul class="d-flex gap-8">
                <li class="flag-tag success">Featured</li>
                <li class="flag-tag style-1">
                    <div class="icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    {{ count($images) }}
                </li>
            </ul>
            <div class="year flag-tag">{{ $vehicle->year }}</div>
        </div>
        <ul class="change-heart flex">
            <li class="box-icon w-32">
                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                    class="icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                            stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
            <li class="box-icon w-32" style="background-color: {{ favourite($vehicle->id) }}"
                onclick="favourite(this, '{{ $vehicle->id }}')">
                <a href="javascript:;" class="icon">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                            stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
        </ul>
        <div class="img-style">
            <img class="lazyload" data-src="{{ $images[0] }}" src="{{ $images[0] }}" alt="image">
        </div>
    </div>
    <div class="content">
        <div class="inner1">
            <div class="text-address">
                <p class="text-color-3 font">{{ $vehicle->type }}</p>
            </div>
            <h5 class="link-style-1">
                <a href="{{ route('vehicle', $vehicle->slug) }}">{{ $vehicle->name }}</a>
            </h5>
            <div class="icon-box flex flex-wrap">
                <div class="icons flex-three">
                    <i class="icon-autodeal-km1"></i>
                    <span>{{ $vehicle->millage }} kms</span>
                </div>
                <div class="icons flex-three">
                    <i class="icon-autodeal-diesel"></i>
                    <span>{{ $vehicle->engine }}</span>
                </div>
                <div class="icons flex-three">
                    <i class="icon-autodeal-automatic"></i>
                    <span>{{ $vehicle->transmission }}</span>
                </div>
            </div>
            <div class="money fs-20 fw-5 lh-25 text-color-3">Ksh {{ number_format($vehicle->price) }}</div>
            <a href="{{ route('vehicle', $vehicle->slug) }}" class="view-car">View details<i
                    class="icon-autodeal-btn-right"></i></a>
        </div>
        <div class="inner2">
            <div class="days-box">
                <div class="img-author">
                    <img class="lazyload" data-src="{{ $vehicle->user->profile }}" src="{{ $vehicle->user->profile }}"
                        alt="image">
                    <span class="font text-color-2 fw-5">{{ $vehicle->user->company ?? $vehicle->user->name }}</span>
                </div>
                <a href="{{ route('vehicle', $vehicle->slug) }}" class="view-car">View
                    Tractor</a>

                <button href="#" class="chat"
                    @if (Auth::check()) onclick="showModal('{{ Auth::user()->id }}','vehicle','{{ $vehicle->id }}', '{{ $vehicle->user->id }}')" @else data-bs-toggle="modal"
                data-bs-target="#popup_bid" @endif>
                    <div class="icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                fill="CurrentColor" />
                        </svg>
                    </div>
                    <span>Chat</span>
                </button>
                <p class="fs-12 lh-16">View 20 variants matching your search
                    criteria</p>

            </div>
        </div>
    </div>
</div>
