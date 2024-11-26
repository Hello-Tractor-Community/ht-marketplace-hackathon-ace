<aside class="sidebar-dashboard">
    <div class="db-content db-logo pad-30">
        <a href="{{ route('home') }}" title="autodecar">
            <img class="site-logo" src="/assets/images/dashboard/logo.png" alt="autodecar">
        </a>
    </div>

    <div class="db-content db-author pad-30">
        <h6 class="db-title">Profile</h6>
        <div class="author">
            <div class="avatar">
                <img loading="lazy" id="tfre_avatar_thumbnail" src="{{ Auth::user()->profile }}" alt="admin"
                    title="admin">
            </div>
            <div class="content">
                <div class="name">{{ Auth::user()->name }}</div>
                <div class="author-email">{{ Auth::user()->email }} </div>
            </div>
        </div>
    </div>

    <div class="db-content db-list-menu">
        <h6 class="db-title">Menu</h6>
        <div class="db-dashboard-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="menu-index-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path d="M6.92479 9.35156V15.64" stroke="#F1FAEE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.2021 6.34375V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.4092 12.6758V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.4619 1.83398H6.87143C3.87698 1.83398 2 3.95339 2 6.95371V15.0476C2 18.0479 3.86825 20.1673 6.87143 20.1673H15.4619C18.4651 20.1673 20.3333 18.0479 20.3333 15.0476V6.95371C20.3333 3.95339 18.4651 1.83398 15.4619 1.83398Z"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('mytractors') }}" class="menu-index-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path
                                    d="M10.0135 2.55687H6.58608C3.76733 2.55687 2 4.55245 2 7.37762V14.9988C2 17.824 3.75908 19.8195 6.58608 19.8195H14.6747C17.5027 19.8195 19.2617 17.824 19.2617 14.9988V11.3065"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.57059 10.0111L14.4208 3.16086C15.2743 2.30836 16.6575 2.30836 17.5109 3.16086L18.6265 4.27644C19.4799 5.12986 19.4799 6.51403 18.6265 7.36653L11.7433 14.2498C11.3702 14.6229 10.8642 14.8328 10.3362 14.8328H6.90234L6.98851 11.3678C7.00134 10.8581 7.20943 10.3723 7.57059 10.0111Z"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.3789 4.21875L17.5644 8.40425" stroke="#F1FAEE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>My Tractors </a>
                </li>
                <li>
                    <a href="{{ route('favourites') }}" class="menu-index-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.34088 10.6318C1.35729 7.56096 2.50679 4.05104 5.73071 3.01246C7.42654 2.46521 9.29838 2.78788 10.7082 3.84846C12.042 2.81721 13.9825 2.46888 15.6765 3.01246C18.9005 4.05104 20.0573 7.56096 19.0746 10.6318C17.5438 15.4993 10.7082 19.2485 10.7082 19.2485C10.7082 19.2485 3.92304 15.5561 2.34088 10.6318Z"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.375 6.14258C15.3558 6.45974 16.0488 7.33516 16.1322 8.36274"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>My Favorites
                    </a>
                </li>
                <li>
                    <a href="{{ route('messages') }}" class="menu-index-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.6487 17.4814C14.8473 20.2831 10.699 20.8885 7.30422 19.3185C6.80306 19.1167 6.39219 18.9537 6.00159 18.9537C4.91361 18.9601 3.5594 20.015 2.85558 19.3121C2.15176 18.6082 3.20749 17.2529 3.20749 16.1583C3.20749 15.7677 3.05088 15.3641 2.84913 14.862C1.27843 11.4678 1.8846 7.31811 4.68607 4.51726C8.2623 0.939714 14.0725 0.939714 17.6487 4.51634C21.2314 8.09941 21.225 13.9047 17.6487 17.4814Z"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.7784 11.3802H14.7867" stroke="#F1FAEE" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.1026 11.3802H11.1109" stroke="#F1FAEE" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.42686 11.3802H7.43511" stroke="#F1FAEE" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>Message <span class="count-page">7</span></a>
                </li>

                <li>
                    <a href="{{ route('profile') }}" class="menu-index-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.5729 14.0684C7.02762 14.0684 4 14.6044 4 16.7511C4 18.8979 7.00841 19.4531 10.5729 19.4531C14.1183 19.4531 17.145 18.9162 17.145 16.7703C17.145 14.6245 14.1375 14.0684 10.5729 14.0684Z"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.5726 11.0056C12.8992 11.0056 14.7849 9.11897 14.7849 6.79238C14.7849 4.46579 12.8992 2.58008 10.5726 2.58008C8.24599 2.58008 6.3594 4.46579 6.3594 6.79238C6.35154 9.11111 8.22503 10.9977 10.5429 11.0056H10.5726Z"
                                    stroke="#F1FAEE" stroke-width="1.42857" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>Profile </a>
                </li>

                <li>
                    <a href="#" class="menu-index-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <g opacity="0.2">
                                <path
                                    d="M13.2237 6.77418V5.91893C13.2237 4.05352 11.7112 2.54102 9.84575 2.54102H5.377C3.5125 2.54102 2 4.05352 2 5.91893V16.1214C2 17.9868 3.5125 19.4993 5.377 19.4993H9.85492C11.7148 19.4993 13.2237 17.9914 13.2237 16.1315V15.2671"
                                    stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M19.4516 11.0208H8.41406" stroke="#F1FAEE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.7656 8.34766L19.4496 11.0197L16.7656 13.6927" stroke="#F1FAEE"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>Logout </a>
                </li>
            </ul>
        </div>
    </div>

</aside>

<script>
    // Get the current URL
    const currentUrl = window.location.href;

    // Select all <a> elements
    const menuLinks = document.querySelectorAll("a");

    // Loop through each link and check if the href matches the current URL
    menuLinks.forEach((link) => {
        if (link.href === currentUrl) {
            link.classList.add("active");
        }
    });
</script>
