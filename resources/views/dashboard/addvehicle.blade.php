@extends('layouts.dashboard.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <form action="{{ route('store.vehicle') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="tfcl-dashboard">
                                <h1 class="admin-title mb-3">Add Tractor</h1>

                                <div class="tfcl-add-listing upload-photo">
                                    <h3>Upload Photo</h3>

                                    <div class="container mt-4">
                                        <!-- File input -->
                                        <div class="mb-3">
                                            <label for="imagePicker" class="form-label">Pick Images</label>
                                            <input type="file" class="form-control" id="imagePicker" name="images[]"
                                                multiple accept="image/*" required>
                                        </div>

                                        <!-- Preview container -->
                                        <div class="row" id="previewContainer">
                                            <!-- Dynamic preview items will be appended here -->
                                        </div>
                                    </div>
                                </div>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Tractor details</h3>

                                    <div class="form-group">
                                        <label for="listing_title">Name *</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter title"
                                            name="name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_title">Description *</label>
                                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                    </div>
                                    <div class="row mb-2">
                                        <!-- Make -->
                                        <div class="col-md-3">
                                            <label for="make" class="form-label">Make</label>
                                            <select class="form-control" id="make" name="make" required>
                                                <option value="" selected disabled>Select make</option>
                                                @foreach ($makes as $make)
                                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Model -->
                                        <div class="col-md-3">
                                            <label for="model" class="form-label">Model</label>
                                            <select class="form-control" id="model" name="model" required>
                                                <option value="" selected disabled>Select model</option>
                                                @foreach ($models as $model)
                                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Type -->
                                        <div class="col-md-2">
                                            <label for="type" class="form-label">Type</label>
                                            <select class="form-control" id="type" name="type"required>
                                                <option value="">Select Type</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->name }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="year" class="form-label">Year</label>
                                            <select class="form-control" id="year" name="year"required>
                                                <option value="">Select Year</option>
                                                @for ($y = 2000; $y <= date('Y'); $y++)
                                                    <option value="{{ $y }}">{{ $y }}</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="transmission" class="form-label">Transmission</label>
                                            <select class="form-control" id="transmission" name="transmission" required>
                                                <option value="" selected disabled>Select transmission</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!-- 4-Column Grid Layout for Transmission, Engine, Millage, and Condition -->
                                    <div class="row mb-3">
                                        <!-- Condition -->
                                        <div class="col-md-3">
                                            <label for="condition" class="form-label">Condition</label>
                                            <select class="form-control" id="condition" name="condition" required>
                                                <option value="" selected disabled>Select condition</option>
                                                <option value="New">New</option>
                                                <option value="Used">Used</option>
                                                <option value="Certified Pre-Owned">Certified Pre-Owned</option>
                                            </select>
                                        </div>
                                        <!-- Horsepower (HP) -->
                                        <div class="col-md-3">
                                            <label for="hp" class="form-label">Horsepower (HP)</label>
                                            <input type="number" class="form-control" id="hp" name="hp"
                                                placeholder="Enter horsepower" required>
                                        </div>

                                        <!-- Engine -->
                                        <div class="col-md-3">
                                            <label for="engine">Select Tractor Engine Type:</label>
                                            <select id="engine" class="form-control" name="engine" required>
                                                <option value="">Select Type</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Petrol">Petrol</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Natural Gas">Natural Gas</option>
                                                <option value="Hybrid">Hybrid</option>
                                            </select>
                                        </div>

                                        <!-- Millage -->
                                        <div class="col-md-3">
                                            <label for="millage" class="form-label">Millage</label>
                                            <input type="number" class="form-control" id="millage" name="millage"
                                                placeholder="Enter millage" required>
                                        </div>


                                    </div>


                                </div>

                                <div class="tfcl-add-listing car-price">
                                    <h3>Tractor price</h3>
                                    <div class="form-group mb-0">
                                        <label for="listing_title">Full price</label>
                                        <input type="number" class="form-control" name="price"
                                            placeholder="Your price" value="" required>
                                    </div>
                                </div>

                                <div class="tfcl-add-listing car-location">
                                    <h3>Location</h3>

                                    <div class="pac-card" id="pac-card">
                                        <div>
                                            <div id="title">Autocomplete search</div>
                                            <div class="row">
                                                <div class="col-md-6" style="padding: 10px">
                                                    <input type="text" id="lat" name="latitude"
                                                        value="{{ $coordinates['latitude'] ?? '' }}" class="form-control"
                                                        readonly required>
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
                                                class="form-control" name="address" />
                                        </div>
                                    </div>
                                    <div id="map"></div>
                                    <div id="infowindow-content">
                                        <span id="place-name" class="title"></span><br />
                                        <span id="place-address"></span>
                                    </div>

                                </div>


                                <div class="group-button-submit">
                                    <button type="submit" class="pre-btn">Save</button>
                                </div>

                            </div>
                        </form>
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
    <style>
        .image-picker {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .banner-picker img,
        .profile-picker img {
            object-fit: cover;
        }

        .banner-picker img {
            width: 100%;
            height: 250px;
            border-radius: 10px;
            border: 2px solid #ccc;
        }

        .profile-picker img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #ccc;
            margin-top: -75px;
            background-color: white;
        }

        input[type="file"] {
            display: none;
        }

        .image-picker label {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        .banner-container {
            position: relative;
            width: 100%;
            text-align: center;
        }

        .banner-container .profile-picker {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
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
        document.getElementById('imagePicker').addEventListener('change', function(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('previewContainer');

            // Clear existing previews
            previewContainer.innerHTML = '';

            // Loop through the selected files
            Array.from(files).forEach((file) => {
                // Validate if the file is an image
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();

                // Load the image
                reader.onload = function(e) {
                    const imageUrl = e.target.result;

                    // Create the preview item
                    const previewItem = document.createElement('div');
                    previewItem.classList.add('col-md-3', 'mb-3');

                    previewItem.innerHTML = `
            <div class="item">
                <img src="${imageUrl}" alt="thumb" class="img-fluid rounded">
                <a href="#" class="btn btn-danger btn-sm mt-2 d-block w-100 remove-btn">Remove</a>
            </div>
        `;

                    // Add remove functionality
                    previewItem.querySelector('.remove-btn').addEventListener('click', function(e) {
                        e.preventDefault();
                        previewItem.remove();
                    });

                    // Append the item to the preview container
                    previewContainer.appendChild(previewItem);
                };

                reader.readAsDataURL(file);
            });
        });
    </script>

    <script>
        var models = {!! json_encode($models, true) !!};
        document.getElementById('make').addEventListener('change', function() {
            var makeId = this.value;
            var modelSelect = document.getElementById('model');

            // Clear the current options in the model select dropdown
            modelSelect.innerHTML = '<option value="">Select Model</option>';

            // Filter models by selected make_id
            var filteredModels = models.filter(function(model) {
                return model.make_id == makeId;
            });

            // Populate the model select dropdown with the filtered models
            filteredModels.forEach(function(model) {
                var option = document.createElement('option');
                option.value = model.id;
                option.textContent = model.name;
                modelSelect.appendChild(option);
            });
        });
    </script>
@endsection
