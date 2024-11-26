@extends('layouts.dashboard.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <h1 class="admin-title mb-3">My Tractors</h1>

                            <div class="tfcl-dashboard-middle mt-2">
                                <div class="row">
                                    <div class="tfcl-dashboard-middle-left col-md-12">
                                        <div class="tfcl-dashboard-listing">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon search">
                                                        <input type="text" name="title_search" id="title_search" value
                                                            placeholder="Search...">
                                                        <span class="datepicker-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 18 18" fill="none">
                                                                <path
                                                                    d="M15.7506 15.7506L11.8528 11.8528M11.8528 11.8528C12.9078 10.7979 13.5004 9.36711 13.5004 7.87521C13.5004 6.38331 12.9078 4.95252 11.8528 3.89759C10.7979 2.84265 9.36711 2.25 7.87521 2.25C6.38331 2.25 4.95252 2.84265 3.89759 3.89759C2.84265 4.95252 2.25 6.38331 2.25 7.87521C2.25 9.36711 2.84265 10.7979 3.89759 11.8528C4.95252 12.9078 6.38331 13.5004 7.87521 13.5004C9.36711 13.5004 10.7979 12.9078 11.8528 11.8528Z"
                                                                    stroke="#B6B6B6" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon">
                                                        <input type="text" id="from-date"
                                                            class="datetimepicker hasDatepicker" name="from_date" value
                                                            placeholder="From Date">
                                                        <span class="datepicker-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                height="18" viewBox="0 0 19 18" fill="none">
                                                                <path
                                                                    d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                    stroke="#B6B6B6" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon">
                                                        <input type="text" id="to-date"
                                                            class="datetimepicker hasDatepicker" name="to_date" value
                                                            placeholder="To Date">
                                                        <span class="datepicker-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                height="18" viewBox="0 0 19 18" fill="none">
                                                                <path
                                                                    d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                    stroke="#B6B6B6" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="nice-select form-control" tabindex="0"><span
                                                            class="current">Select
                                                            Status</span>
                                                        <ul class="list">
                                                            <li data-value="/autodeal/dashboard-2/?post_status=default"
                                                                class="option selected">Select
                                                                Status</li>
                                                            <li class="option">
                                                                hidden
                                                            </li>
                                                            <li class="option">
                                                                sold
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tfcl-table-listing">
                                                <div class="table-responsive">
                                                    <span class="result-text"><b>16</b> results found</span>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Listing</th>
                                                                <th>Status</th>
                                                                <th>Posting date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tfcl-table-content">
                                                            @foreach (Auth::user()->tractors as $tractor)
                                                                @php
                                                                    $images = json_decode($tractor->images, true);
                                                                @endphp
                                                                <tr>
                                                                    <td class="column-listing">
                                                                        <div class="tfcl-listing-product">
                                                                            <a href="listing-detail-v1.html">
                                                                                <img src="{{ $images[0] }}"
                                                                                    alt="image">
                                                                            </a>
                                                                            <div class="tfcl-listing-summary">
                                                                                <h4 class="tfcl-listing-title">
                                                                                    <a target="_blank"
                                                                                        href="listing-detail-v1.html">{{ $tractor->name }}</a>
                                                                                </h4>
                                                                                <div class="features-text">
                                                                                    {{ $tractor->description }}
                                                                                </div>
                                                                                <div class="price">
                                                                                    <div class="inner tfcl-listing-price">
                                                                                        {{ number_format($tractor->price) }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="column-status">
                                                                        <span class="tfcl-listing-status status-publish">
                                                                            Approved </span>
                                                                    </td>
                                                                    <td class="column-date">
                                                                        <div class="tfcl-listing-date">
                                                                            {{ $tractor->created_at }}</div>
                                                                    </td>
                                                                    <td class="column-controller">
                                                                        <div class="inner-controller">
                                                                            <span class="icon">
                                                                                <img src="/assets/images/dashboard/pen.svg"
                                                                                    alt="icon">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn-action tfcl-dashboard-action-edit">Edit</a>
                                                                        </div>
                                                                        <div class="inner-controller">
                                                                            <span class="icon">
                                                                                <img src="/assets/images/dashboard/hide.svg"
                                                                                    alt="icon">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn-action tfcl-dashboard-action-edit">Sold</a>
                                                                        </div>
                                                                        <div class="inner-controller">
                                                                            <span class="icon">
                                                                                <img src="/assets/images/dashboard/trash.svg"
                                                                                    alt="icon">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn-action tfcl-dashboard-action-edit">Delete</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tfcl-pagination paging-navigation clearfix">
                                                    <a class="prev page-numbers" href="#"><i
                                                            class="far fa-angle-left"></i></a>
                                                    <a class="page-numbers" href="#">1</a>
                                                    <a class="page-numbers" href="#">2</a>
                                                    <a class="page-numbers current" href="#">3</a>
                                                    <a class="page-numbers" href="#">4</a>
                                                    <a class="page-numbers" href="#">...</a>
                                                    <a class="next page-numbers" href="#"><i
                                                            class="far fa-angle-right"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
