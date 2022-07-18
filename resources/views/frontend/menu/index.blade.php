<!DOCTYPE html>
<html lang="en">
    @include('frontend.layout.head')


<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    @include('frontend.partials.header')

    <div id="" class="footer-main">
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main" style="margin-top: 10%; margin-bottom : 5%">
                    
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                            Daftar Menu 	
                        </h2>
                        <p class="text-center" style="color: white">HOME / MENU</p>
                        <!-- end col -->
            
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>

    @include('frontend.menu.daftarmenu')
    <!-- end menu -->


    @include('frontend.layout.footer')
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    @include('frontend.layout.colorscheme')

    @include('frontend.layout.script')

  
</body>

</html>