<div class="list-car-list-1 list-car-grid-1 gap-30">
    @foreach ($vehicles as $vehicle)
        @widget('VehicleWidget', ['vehicle' => $vehicle])
    @endforeach
</div>
