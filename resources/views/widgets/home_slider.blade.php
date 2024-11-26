<div class="swiper mainslider slider home">
    <div class="swiper-wrapper">
        @foreach ($vehicles as $vehicle)
            @widget('SliderView', ['vehicle' => $vehicle])
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
