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
                            Detail Menu
                        </h2>

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

    <div class="site-section">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <img src="{{ asset('storage/fotomenu/'. $menu->foto) }}" alt="Image" class="img-responsive" width="60%">
            </div>
            <div class="col-md-6">
              <h2 class="text-black">{{ $menu->nama_menu }}</h2>

              <p class="mb-4">{{ $menu->deskripsi }}</p>
              <p><strong class="text-primary h4">Rp. {{ number_format($menu->harga,0,'.','.')}}</strong></p>

              <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>

              </div>
              <p><a href="" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

            </div>
          </div>
        </div>
      </div>
    <!-- end menu -->


    @include('frontend.layout.footer')
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    @include('frontend.layout.colorscheme')

    @include('frontend.layout.script')


</body>

</html>
