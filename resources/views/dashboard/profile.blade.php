-@extends('layouts.dashboard.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <h1 class="admin-title mb-3">Edit profile</h1>

                            <div class="tfcl-add-listing profile-inner">
                                <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h3>Avatar</h3>
                                    <div class="tfcl_choose_avatar">
                                        <div class="avatar">
                                            <div class="form-group">
                                                <img loading="lazy" decoding="async" width="158" height="138"
                                                    id="tfcl_avatar_thumbnail" src="{{ Auth::user()->profile }}"
                                                    alt="avatar">
                                            </div>
                                            <div class="choose-box">
                                                <label>Upload a new Avatar</label>
                                                <div class="form-group">
                                                    <input type="file" hidden="" class="form-control"
                                                        id="tfcl_avatar" name="profile" accept="image/*">
                                                    <button id="btnBrowse" type="button"
                                                        onclick="document.getElementById('tfcl_avatar').click();">
                                                        Choose file</button>
                                                    <input type="text" id="txtPath" placeholder="No file Choose">
                                                </div>
                                                <span class="notify-avatar">PNG, JPG, SVG dimension (400 * 400) max
                                                    file not more then size 4 mb</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="form-title">Information</h3>
                                    <div class="form-group">
                                        <label for="listing_title">Full name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Your name"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_title">Description</label>
                                        <textarea name="" id="" placeholder="Your description">{{ Auth::user()->description }}</textarea>
                                    </div>
                                    <div class="form-group-4">
                                        <div class="form-group">
                                            <label for="listing_title">Your company</label>
                                            <input type="text" class="form-control" name="company"
                                                value="{{ Auth::user()->company }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Job</label>
                                            <input type="text" class="form-control" name="job"
                                                value="{{ Auth::user()->job }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Email address</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Your phone</label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>


                                    <div class="tfcl-add-listing car-location">
                                        <h3>Location</h3>
                                        @php
                                            $coordinates = json_decode(Auth::user()->coordinates, true);
                                        @endphp
                                        <div class="pac-card" id="pac-card">
                                            <div>
                                                <div id="title">Autocomplete search</div>
                                                <div class="row">
                                                    <div class="col-md-6" style="padding: 10px">
                                                        <input type="text" id="lat" name="latitude"
                                                            value="{{ $coordinates['latitude'] ?? '' }}"
                                                            class="form-control" readonly required>
                                                    </div>
                                                    <div class="col-md-6" style="padding: 10px">
                                                        <input type="text" id="long" name="longitude"
                                                            value="{{ $coordinates['longitude'] ?? '' }}"
                                                            class="form-control" readonly required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="pac-container">
                                                <input id="pac-input" type="text" placeholder="Search location"
                                                    class="form-control" name="address"
                                                    value="{{ Auth::user()->address }}" />
                                            </div>
                                        </div>
                                        <div id="map"></div>
                                        <div id="infowindow-content">
                                            <span id="place-name" class="title"></span><br />
                                            <span id="place-address"></span>
                                        </div>

                                    </div>


                                    <div class="group-button-submit left mb-3">
                                        <button class="pre-btn" type="submit">Save & Update</button>
                                    </div>
                                </form>

                                <h3>Change passwords</h3>

                                <div class="tfcl-add-listing profile-password">
                                    <div class="form-group">
                                        <label for="listing_title">Old password</label>
                                        <input type="text" class="form-control" name="listing_title"
                                            placeholder="Old password" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_title">New password</label>
                                        <input type="text" class="form-control" name="listing_title"
                                            placeholder="New password" value="">
                                    </div>

                                    <ul class="list-check-req mb-3">
                                        <li class="check"><span>One number</span></li>
                                        <li><span>One lowercase character</span></li>
                                        <li><span>One uppercase character</span></li>
                                        <li><span>8 characters minimum</span></li>
                                    </ul>

                                    <div class="form-group">
                                        <label for="listing_title">Confirm password</label>
                                        <input type="text" class="form-control" name="listing_title"
                                            placeholder="Confirm password" value="">
                                    </div>
                                    <div class="group-button-submit left mb-0">
                                        <button class="pre-btn">Change passwords</button>
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
@section('css')
    <style>
        #map {
            height: 500px;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #f30051;
        }

        #title {
            color: #fff;
            background-color: #f30051;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
    </style>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRzos358SIFG3ub_Nx8W7oG86ycpiRxw&libraries=places">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRzos358SIFG3ub_Nx8W7oG86ycpiRxw&callback=initMap&libraries=places&v=weekly"
        defer></script>
    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:

        function initMap() {
            const myLatLng = {
                lat: {{ $coordinates['latitude'] ?? -1.275557 }},
                lng: {{ $coordinates['longitude'] ?? 36.813163 }}
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                center: myLatLng,
                zoom: 13,
                mapTypeControl: false,
            });
            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "{{ Auth::user()->name }}",
            });
            const card = document.getElementById("pac-card");
            const input = document.getElementById("pac-input");
            const biasInputElement = document.getElementById("use-location-bias");
            const strictBoundsInputElement = document.getElementById("use-strict-bounds");
            const options = {
                componentRestrictions: {
                    country: "ke"
                },
                fields: ["formatted_address", "geometry", "name"],
                strictBounds: false,
            };

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

            const autocomplete = new google.maps.places.Autocomplete(input, options);

            // Bind the map's bounds (viewport) property to the autocomplete object,
            // so that the autocomplete requests use the current map bounds for the
            // bounds option in the request.
            autocomplete.bindTo("bounds", map);

            const infowindow = new google.maps.InfoWindow();
            const infowindowContent = document.getElementById("infowindow-content");

            infowindow.setContent(infowindowContent);

            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
                draggable: true,
            });

            autocomplete.addListener("place_changed", () => {
                infowindow.close();
                marker.setVisible(false);

                const place = autocomplete.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
                infowindowContent.children["place-name"].textContent = place.name;
                infowindowContent.children["place-address"].textContent =
                    place.formatted_address;
                infowindow.open(map, marker);
                var lat = place.geometry.location.lat();
                var lon = place.geometry.location.lng();
                console.log(lon);
                $("#lat").val(lat);
                $("#long").val(lon);
            });

            google.maps.event.addListener(marker, 'dragend', function() {
                var loc = marker.getPosition();
                var lat = loc.lat();
                var lon = loc.lng();
                $("#lat").val(lat);
                $("#long").val(lon);
            });
            //autocomplete.setTypes(["address", "establishment", "(cities)", "(regions)"]);
            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.


        }

        window.initMap = initMap;
    </script>

    <script>
        const imageInput = document.getElementById("tfcl_avatar");
        const imagePreview = document.getElementById("tfcl_avatar_thumbnail");

        imageInput.addEventListener("change", () => {
            const file = imageInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "";
                imagePreview.style.display = "none";
            }
        });
    </script>
@endsection
