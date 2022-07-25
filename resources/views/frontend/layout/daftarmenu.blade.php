<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Daftar Menu
                </h2>
                    <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
                <div class="tab-menu">
                    <div class="slider slider-nav" style="margin-left: 20%;">

                        <div class="tab-title-menu">
                            <h2>PAKET</h2>
                            <p> <i class="flaticon-dinner"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>SATUAN</h2>
                            <p> <i class="flaticon-canape"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>MENU UTAMA</h2>
                            <p> <i class="flaticon-desert"></i> </p>
                        </div>

                    </div>
                    <div class="slider slider-single">
                        <div>
                            @foreach ($menupaket as $key => $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <a href="{{ route('single_menu', $item->id) }}">
                                    <img src="{{ asset('storage/fotomenu/'. $item->foto) }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>{{ $item->nama_menu }}</h3>
                                        <p>
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                    <span class="offer-price">Rp. {{ number_format($item->harga,0,'.','.')}}</span>
                                </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div>
                            @foreach ($menusatuan as $key => $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <a href="{{ route('single_menu', $item->id) }}">
                                    <img src="{{ asset('storage/fotomenu/'. $item->foto) }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>{{ $item->nama_menu }}</h3>
                                        <p>
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                    <span class="offer-price">Rp. {{ number_format($item->harga,0,'.','.')}}</span>
                                </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div>

                            @foreach ($menuutama as $key => $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <a href="{{ route('single_menu', $item->id) }}">
                                    <img src="{{ asset('storage/fotomenu/'. $item->foto) }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>{{ $item->nama_menu }}</h3>
                                        <p>
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                    <span class="offer-price">Rp. {{ number_format($item->harga,0,'.','.')}}</span>
                                </a>
                                </div>
                            </div>
                            @endforeach
                            <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end tab-menu -->

            </div>

            <!-- end col -->
        </div>


            <!-- end banner-static -->

        <!-- end row -->
    </div>
    <div class="banner-static">
        <div class="banner-text">
            <div class="banner-cell">
                <div class="book-btn2">
                    <a href="{{ url('/halaman_menu')}}" class="table-btn hvr-underline-from-center2">Lihat Menu Selengkapnya</a>
                </div>

            </div>
            <!-- end banner-cell -->
        </div>
        <!-- end banner-text -->
    </div>

    <!-- end container -->
</div>
