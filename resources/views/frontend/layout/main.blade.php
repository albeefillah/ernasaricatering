<!DOCTYPE html>
<html lang="en">
    @include('frontend.layout.head')


<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    @include('frontend.layout.header')

	<!-- end site-header -->
	
    @include('frontend.layout.banner')
    <!-- end banner -->

    @include('frontend.layout.about')

    @include('frontend.layout.spesialmenu')
    <!-- end special-menu -->

    @include('frontend.layout.daftarmenu')
    <!-- end menu -->

    @include('frontend.layout.team')
    <!-- end team-main -->

    @include('frontend.layout.gallery')
    <!-- end gallery-main -->

    {{-- @include('frontend.layout.reservation') --}}

    <!-- end reservations-main -->
    @include('frontend.layout.client')
    @include('frontend.layout.footer')
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    @include('frontend.layout.colorscheme')

    @include('frontend.layout.script')

  
</body>

</html>