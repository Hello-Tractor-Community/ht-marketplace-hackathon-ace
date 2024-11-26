<header class="main-header">
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="container2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-container flex justify-space align-center">
                        <!-- Logo Box -->
                        <div class="logo-box flex">
                            <div class="logo"><a href="index.html"><img src="/assets/images/logo/logo.png" alt
                                        width="225" height="40"></a></div>
                        </div>
                        <div class="nav-outer flex align-center">
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">


                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <div class="header-account flex align-center">
                            <a href="#" class="box-avatar dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="avatar avt-40 round">
                                    <img src="{{ Auth::user()->profile }}" alt="avt">
                                </div>
                                <p class="name">{{ Auth::user()->name }} <i class="fal fa-angle-down"></i></p>
                            </a>
                            <div class="dropdown-menu dashboard-menu">
                                <a class="dropdown-item" href="{{ route('dashboard') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path d="M6.92479 9.35156V15.64" stroke="#F1FAEE" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11.2021 6.34375V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.4092 12.6758V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.4619 1.83398H6.87143C3.87698 1.83398 2 3.95339 2 6.95371V15.0476C2 18.0479 3.86825 20.1673 6.87143 20.1673H15.4619C18.4651 20.1673 20.3333 18.0479 20.3333 15.0476V6.95371C20.3333 3.95339 18.4651 1.83398 15.4619 1.83398Z"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg> Dashboard</a>
                                <a class="dropdown-item" href="{{ route('mytractors') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path
                                                d="M10.0135 2.55687H6.58608C3.76733 2.55687 2 4.55245 2 7.37762V14.9988C2 17.824 3.75908 19.8195 6.58608 19.8195H14.6747C17.5027 19.8195 19.2617 17.824 19.2617 14.9988V11.3065"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.57059 10.0111L14.4208 3.16086C15.2743 2.30836 16.6575 2.30836 17.5109 3.16086L18.6265 4.27644C19.4799 5.12986 19.4799 6.51403 18.6265 7.36653L11.7433 14.2498C11.3702 14.6229 10.8642 14.8328 10.3362 14.8328H6.90234L6.98851 11.3678C7.00134 10.8581 7.20943 10.3723 7.57059 10.0111Z"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M13.3789 4.21875L17.5644 8.40425" stroke="#F1FAEE"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </g>
                                    </svg> My Tractors</a>
                                <a class="dropdown-item" href="my-favorites.html"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.34088 10.6318C1.35729 7.56096 2.50679 4.05104 5.73071 3.01246C7.42654 2.46521 9.29838 2.78788 10.7082 3.84846C12.042 2.81721 13.9825 2.46888 15.6765 3.01246C18.9005 4.05104 20.0573 7.56096 19.0746 10.6318C17.5438 15.4993 10.7082 19.2485 10.7082 19.2485C10.7082 19.2485 3.92304 15.5561 2.34088 10.6318Z"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M14.375 6.14258C15.3558 6.45974 16.0488 7.33516 16.1322 8.36274"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg> My Favorites</a>
                                <a class="dropdown-item" href="{{ route('messages') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.6487 17.4814C14.8473 20.2831 10.699 20.8885 7.30422 19.3185C6.80306 19.1167 6.39219 18.9537 6.00159 18.9537C4.91361 18.9601 3.5594 20.015 2.85558 19.3121C2.15176 18.6082 3.20749 17.2529 3.20749 16.1583C3.20749 15.7677 3.05088 15.3641 2.84913 14.862C1.27843 11.4678 1.8846 7.31811 4.68607 4.51726C8.2623 0.939714 14.0725 0.939714 17.6487 4.51634C21.2314 8.09941 21.225 13.9047 17.6487 17.4814Z"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M14.7784 11.3802H14.7867" stroke="#F1FAEE" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11.1026 11.3802H11.1109" stroke="#F1FAEE" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.42686 11.3802H7.43511" stroke="#F1FAEE" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg> Message</a>
                                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path
                                                d="M16.5756 8.11328L12.5026 11.4252C11.7331 12.0357 10.6504 12.0357 9.88082 11.4252L5.77344 8.11328"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.6665 19.25C18.4544 19.2577 20.3333 16.9671 20.3333 14.1518V7.85584C20.3333 5.04059 18.4544 2.75 15.6665 2.75H6.66687C3.87897 2.75 2 5.04059 2 7.85584V14.1518C2 16.9671 3.87897 19.2577 6.66687 19.25H15.6665Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg> My Reviews</a>
                                <a class="dropdown-item" href="{{ route('mytractors') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.5729 14.0684C7.02762 14.0684 4 14.6044 4 16.7511C4 18.8979 7.00841 19.4531 10.5729 19.4531C14.1183 19.4531 17.145 18.9162 17.145 16.7703C17.145 14.6245 14.1375 14.0684 10.5729 14.0684Z"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.5726 11.0056C12.8992 11.0056 14.7849 9.11897 14.7849 6.79238C14.7849 4.46579 12.8992 2.58008 10.5726 2.58008C8.24599 2.58008 6.3594 4.46579 6.3594 6.79238C6.35154 9.11111 8.22503 10.9977 10.5429 11.0056H10.5726Z"
                                                stroke="#F1FAEE" stroke-width="1.42857" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg> Profile</a>

                                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.2">
                                            <path
                                                d="M13.2237 6.77418V5.91893C13.2237 4.05352 11.7112 2.54102 9.84575 2.54102H5.377C3.5125 2.54102 2 4.05352 2 5.91893V16.1214C2 17.9868 3.5125 19.4993 5.377 19.4993H9.85492C11.7148 19.4993 13.2237 17.9914 13.2237 16.1315V15.2671"
                                                stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M19.4516 11.0208H8.41406" stroke="#F1FAEE" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16.7656 8.34766L19.4496 11.0197L16.7656 13.6927" stroke="#F1FAEE"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </g>
                                    </svg> Logout</a>
                            </div>
                            <div class="flat-bt-top">
                                <a class="sc-button" href="{{ route('create.vehicle') }}">
                                    <i class='fas fa-tractor' style='font-size:24px;color:orange'></i>
                                    <span>Add Tractor</span>
                                </a>
                            </div>
                        </div>

                        <div class="mobile-nav-toggler mobile-button"><span></span></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="/assets/images/logo/logo%402x.png" alt
                        width="197" height="48"></a></div>
            <div class="bottom-canvas">
                <div class="login-box flex align-center">
                    <i class="icon-autodeal-user fs-20"></i>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#popup_bid"
                        class="fw-7 font-2">Login</a>
                </div>
                <div class="menu-outer"></div>
                <div class="button-mobi-sell">
                    <a class="sc-button btn-icon center" href="add-listing.html">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4960_5223)">
                                <path
                                    d="M5.91699 13.75H1.33366C1.22315 13.75 1.11717 13.7061 1.03903 13.628C0.960891 13.5498 0.916992 13.4438 0.916992 13.3333C0.916992 13.2228 0.960891 13.1168 1.03903 13.0387C1.11717 12.9606 1.22315 12.9167 1.33366 12.9167H4.91116L3.61033 11.6158C3.37548 11.3824 3.0581 11.251 2.72699 11.25H1.33366C1.22315 11.25 1.11717 11.2061 1.03903 11.128C0.960891 11.0498 0.916992 10.9438 0.916992 10.8333C0.916992 10.7228 0.960891 10.6168 1.03903 10.5387C1.11717 10.4606 1.22315 10.4167 1.33366 10.4167H2.72699C3.28366 10.4167 3.80616 10.6333 4.20033 11.0267L6.21199 13.0383C6.27083 13.0964 6.311 13.1708 6.32737 13.2518C6.34374 13.3329 6.33557 13.417 6.30391 13.4934C6.27224 13.5698 6.21851 13.635 6.14959 13.6807C6.08067 13.7264 5.99969 13.7505 5.91699 13.75ZM5.08366 17.9167H2.58366C1.89449 17.9167 1.33366 17.3558 1.33366 16.6667V15C1.33366 14.8895 1.37756 14.7835 1.4557 14.7054C1.53384 14.6272 1.63982 14.5833 1.75033 14.5833C1.86083 14.5833 1.96681 14.6272 2.04495 14.7054C2.12309 14.7835 2.16699 14.8895 2.16699 15V16.6667C2.16699 16.7772 2.21089 16.8831 2.28903 16.9613C2.36717 17.0394 2.47315 17.0833 2.58366 17.0833H5.08366C5.19417 17.0833 5.30015 17.0394 5.37829 16.9613C5.45643 16.8831 5.50033 16.7772 5.50033 16.6667V15.4167C5.50033 15.3061 5.54422 15.2002 5.62236 15.122C5.7005 15.0439 5.80649 15 5.91699 15C6.0275 15 6.13348 15.0439 6.21162 15.122C6.28976 15.2002 6.33366 15.3061 6.33366 15.4167V16.6667C6.33366 17.3558 5.77283 17.9167 5.08366 17.9167Z"
                                    fill="white" />
                                <path
                                    d="M14.25 16.25H6.75C6.6852 16.2499 6.62129 16.2348 6.56333 16.2058L4.985 15.4167H1.33333C1.24152 15.4168 1.15226 15.3865 1.07945 15.3306C1.00664 15.2747 0.954383 15.1962 0.930833 15.1075C0.653273 13.9813 0.508675 12.8265 0.5 11.6667C0.5 9.78916 1.0825 8.6475 2.39083 7.96416C3.53917 7.36333 6.11667 7.08333 10.5 7.08333C14.8833 7.08333 17.4608 7.36333 18.6092 7.96416C19.9175 8.6475 20.5 9.78916 20.5 11.6667C20.5 13.4717 20.0867 15.0417 20.0692 15.1075C20.0456 15.1962 19.9934 15.2747 19.9206 15.3306C19.8477 15.3865 19.7585 15.4168 19.6667 15.4167H16.015L14.4358 16.2058C14.3782 16.2349 14.3145 16.25 14.25 16.25ZM6.84833 15.4167H14.1517L15.7308 14.6275C15.7887 14.5983 15.8527 14.5832 15.9175 14.5833H19.3375C19.4525 14.0525 19.6667 12.9058 19.6667 11.6667C19.6667 10.0975 19.2483 9.23833 18.2242 8.70249C17.2258 8.18083 14.6275 7.91666 10.5 7.91666C6.3725 7.91666 3.77417 8.18083 2.77583 8.70249C1.75167 9.23833 1.33333 10.0975 1.33333 11.6667C1.33333 12.9058 1.5475 14.0525 1.66333 14.5833H5.08333C5.1475 14.5833 5.21167 14.5983 5.27 14.6275L6.84833 15.4167Z"
                                    fill="white" />
                                <path
                                    d="M19.6664 13.75H15.0831C15.0006 13.7501 14.9199 13.7258 14.8512 13.68C14.7825 13.6342 14.729 13.5691 14.6974 13.4929C14.6658 13.4167 14.6576 13.3328 14.6737 13.2518C14.6899 13.1709 14.7297 13.0966 14.7881 13.0383L16.7997 11.0267C16.9929 10.8327 17.2225 10.6789 17.4754 10.5742C17.7283 10.4695 17.9994 10.416 18.2731 10.4167H19.6664C19.7769 10.4167 19.8829 10.4606 19.961 10.5387C20.0392 10.6168 20.0831 10.7228 20.0831 10.8333C20.0831 10.9438 20.0392 11.0498 19.961 11.128C19.8829 11.2061 19.7769 11.25 19.6664 11.25H18.2731C17.9439 11.25 17.6223 11.3833 17.3889 11.6158L16.0889 12.9167H19.6664C19.7769 12.9167 19.8829 12.9606 19.961 13.0387C20.0392 13.1168 20.0831 13.2228 20.0831 13.3333C20.0831 13.4438 20.0392 13.5498 19.961 13.628C19.8829 13.7061 19.7769 13.75 19.6664 13.75ZM12.9998 13.75H7.99975C7.93868 13.75 7.87836 13.7365 7.82306 13.7106C7.76776 13.6847 7.71884 13.6469 7.67975 13.6L5.59642 11.1C5.54539 11.0393 5.5128 10.9652 5.50248 10.8866C5.49217 10.8079 5.50456 10.728 5.5382 10.6561C5.57184 10.5843 5.62532 10.5236 5.69233 10.4812C5.75935 10.4387 5.8371 10.4164 5.91642 10.4167H15.0831C15.1623 10.4167 15.2398 10.4393 15.3066 10.4818C15.3734 10.5243 15.4267 10.5849 15.4603 10.6566C15.4938 10.7283 15.5063 10.8081 15.4962 10.8866C15.486 10.9651 15.4538 11.0392 15.4031 11.1L13.3197 13.6C13.2807 13.6469 13.2317 13.6847 13.1764 13.7106C13.1211 13.7365 13.0608 13.75 12.9998 13.75ZM8.19475 12.9167H12.8039L14.1931 11.25H6.80558L8.19475 12.9167ZM18.4164 8.75C18.3351 8.75005 18.2556 8.72633 18.1877 8.68176C18.1197 8.63719 18.0663 8.57372 18.0339 8.49916C17.0931 6.3325 15.9423 3.92666 15.6447 3.64916C15.3256 3.37833 13.9681 2.91666 10.9164 2.91666H10.0831C7.03142 2.91666 5.67392 3.37833 5.35308 3.65083C5.05725 3.92666 3.90642 6.33333 2.96558 8.49916C2.92149 8.60061 2.83891 8.68038 2.73599 8.72094C2.63308 8.76149 2.51828 8.7595 2.41683 8.71541C2.31539 8.67132 2.23561 8.58873 2.19506 8.48582C2.1545 8.38291 2.15649 8.26811 2.20058 8.16666C2.67392 7.07666 4.26142 3.48416 4.81308 3.01499C5.50058 2.43166 7.46975 2.08333 10.0831 2.08333H10.9164C13.5297 2.08333 15.4989 2.43166 16.1864 3.01583C16.7381 3.485 18.3248 7.0775 18.7989 8.16749C18.826 8.23094 18.8369 8.30009 18.8308 8.3688C18.8247 8.4375 18.8017 8.50363 18.7638 8.56129C18.726 8.61895 18.6744 8.66635 18.6138 8.69927C18.5532 8.73219 18.4854 8.74962 18.4164 8.75ZM18.4164 17.9167H15.9164C15.2273 17.9167 14.6664 17.3558 14.6664 16.6667V15.4167C14.6664 15.3062 14.7103 15.2002 14.7885 15.122C14.8666 15.0439 14.9726 15 15.0831 15C15.1936 15 15.2996 15.0439 15.3777 15.122C15.4559 15.2002 15.4998 15.3062 15.4998 15.4167V16.6667C15.4998 16.7772 15.5436 16.8832 15.6218 16.9613C15.6999 17.0394 15.8059 17.0833 15.9164 17.0833H18.4164C18.5269 17.0833 18.6329 17.0394 18.711 16.9613C18.7892 16.8832 18.8331 16.7772 18.8331 16.6667V15C18.8331 14.8895 18.877 14.7835 18.9551 14.7054C19.0333 14.6272 19.1392 14.5833 19.2498 14.5833C19.3603 14.5833 19.4662 14.6272 19.5444 14.7054C19.6225 14.7835 19.6664 14.8895 19.6664 15V16.6667C19.6664 17.3558 19.1056 17.9167 18.4164 17.9167Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                </clippath>
                            </defs>
                        </svg>
                        <span>Add listing</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>