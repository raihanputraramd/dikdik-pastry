@extends('layouts.common.app')

@section('content')
        @include('layouts.common.components.navbar')
            <header id="header" class="position-relative">
                <img alt="header-img" src="{{asset('front_assets/img/header-bg.png')}}" class="position-absolute header-bg background-secondary-one" alt="header background" width="100%" height="auto">
                <div class="header-bg-front position-absolute"></div>
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full">
                        <div class="col-6 d-flex">
                            <h1 class="header1 header-title my-auto color-primary">Toko Pastry Terbaik Di Bandung </h1>
                        </div>
                    </div>
                </div>
            </header>
            <section id="keunggulanPerusahaan">
                <div class="container px-3 px-md-0 position-relative">
                    <div class="row h-full  keper-wrapper-all mx-auto">
                        <div class="col-12 col-xl-3 keper-item ml-xl-auto  background-secondary-one d-flex flex-column">
                            <img alt="keper-img" src="{{asset('front_assets/img/keper-icon.png')}}" class="keper-icon mx-auto mt-auto">
                            <p class="mx-auto mt-3 mb-auto keper-item-desc header3 color-black">Layanan Terbaik</p>
                        </div>
                        <div class="col-12 col-xl-3 keper-item ml-xl-2 background-secondary-one d-flex flex-column">
                            <img alt="keper-img" src="{{asset('front_assets/img/keper-icon.png')}}" class="keper-icon mx-auto mt-auto">
                            <p class="mx-auto mt-3 mb-auto keper-item-desc header3 color-black">Terdapat 10 Cabang</p>
                        </div>

                    </div>
                </div>
            </section>
            <section id="keunggulanProduk">
                <div class="container px-3 px-md-5">
                    <div class="row h-full">
                        <div class="col-12">
                            <div class="row px-3 px-md-0">
                                <div class="col-12 col-md-6 py-2 d-flex">
                                    <img alt="kepro-img" src="{{asset('front_assets/img/kepro-img.png')}}" class="w-full h-full kepro-img mx-auto">                                
                                </div>
                                <div class="col-12 col-md-6 px-xl-5 my-auto px-0 mx-auto">
                                    <div class="row">
                                        <h2 class="kepro-title header2 color-black col-12 col-md-12">KEUNGGULAN PASTRY BUATAN KAMI</h2>
                                        <p class="kepro-desc body1 col-12 col-md-11">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et. Phasellus scelerisque cursus diam sed faucibus. Pellentesque ultrices dapibus tortor, semper eleifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius elementum ligula. Nullam volutpat libero vel est blandit, gravida accumsan purus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gambarProses" class="background-secondary-one">
                <div class="container px-3 px-md-5 ">
                    <div class="row p-2 px-xl-0">
                        <h2 class="col-12 gapro-title mx-auto header2 color-black text-center mt-3">GALERI KAMI SAAT MEMBUAT PASTRY</h2>
                        <p class="col-10 body1 text-center mt-3 mx-auto text-black">Pellentesque ultrices dapibus tortor, semper eleifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius elementum</p>
                        <div class="col-12">
                            <div class="row justify-content-center mt-3">
                                <div class="col-12 col-md-3 background-primary h-full gapro-item mx-2 p-0">
                                    <img alt="gapro-img" src="{{asset('front_assets/img/gapro-img-1.png')}}" class="gapro-img w-full h-full">
                                </div>
                                <div class="col-4 col-md-3 background-primary h-full gapro-item mx-2 p-0">
                                    <img alt="gapro-img" src="{{asset('front_assets/img/gapro-img-2.png')}}" class="gapro-img w-full h-full">
                                </div>
                                <div class="col-4 col-md-3 background-primary h-full gapro-item mx-2 p-0">
                                    <img alt="gapro-img" src="{{asset('front_assets/img/gapro-img-3.png')}}" class="gapro-img w-full h-full">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section id="tentangKami">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full">
                        <div class="col-xl-6 col-12 my-auto order-2  order-xl-2">
                            <div class="row my-auto">
                                <h2 class="col-12 testimoni-title header1">TENTANG AHLINYA PASTRY</h2>
                                <p class="col-12 testimoni-desc body1 mt-3">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et. Phasellus scelerisque cursus diam sed faucibus. Pellentesque ultrices dapibus tortor, semper eleifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius elementum ligula. Nullam volutpat libero vel est blandit, gravida accumsan purus commodo.</p>
                            </div>
                        </div>
                        <p class="col-xl-5 col-12 order-1 order-xl-2">
                            <img alt="teka-img" src="{{asset('front_assets/img/teka-img.png')}}" class="teka-img">
                        </p>
                    </div>
                </div>
            </section>

            <section id="kenapaHarusBeliKepadaKami">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row">
                        <div class="col-12 header1 text-center background-primary keha-title color-black">KENAPA HARUS BELI KEPADA KAMI</div>
                        <div class="col-12 keha-wrapper-list my-5">
                            <div class="row h-full">
                                <div class="col-xl-5 col-12 mt-3 mt-xl-0 background-secondary-one mr-auto p-0">
                                    <div class="row h-full">
                                        <img alt="keha-img" class="col-5 keha-img h-full" src="{{asset('front_assets/img/keha-img-1.png')}}">
                                        <div class="col-7 px-2 my-auto  ">
                                            <h3 class="header3 keha-item-title color-black">Tahan Lama</h3>
                                            <p class="body2 keha-item-desc color-black">leifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-12 mt-3 mt-xl-0 background-secondary-one ml-auto p-0">
                                    <div class="row h-full">
                                        <img alt="keha-img" class="col-5 keha-img h-full" src="{{asset('front_assets/img/keha-img-2.png')}}">
                                        <div class="col-7 px-2 my-auto  ">
                                            <h3 class="header3 keha-item-title color-black">Rasa Nikmat</h3>
                                            <p class="body2 keha-item-desc color-black">leifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimoni" class="background-secondary-one">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row px-5 h-full">
                       <h2 class="col-12 header2 color-black testimoni-title mt-auto">Tanggapan Pelanggan Ahlinya pastry</h2>
                       <ul class="col-12 testimoni-list mb-auto mt-4">
                           <li class="background-primary  p-0 py-2">
                            <div class="row px-5 h-full">
                               <div class="col-8 my-auto">
                                   <h3 class="testimoni-item-title header3 text-left color-black">Sri Lestari Agustina</h3>
                                   <p class="testimoni-desc body2 text-left color-black">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. </p>
                               </div>
                               <img alt="testimoni-img" src="{{asset('front_assets/img/testimoni-img.png')}}" class="col-4 p-0 testimoni-img h-full" width="120" height="120">
                            </div>
                           </li>
                           <li class="background-primary  p-0 py-2">
                            <div class="row px-5 h-full">
                               <div class="col-8 my-auto">
                                   <h3 class="testimoni-item-title header3 text-left color-black">Sri Lestari Agustina</h3>
                                   <p class="testimoni-desc body2 text-left color-black">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. </p>
                               </div>
                               <img alt="testimoni-img" src="{{asset('front_assets/img/testimoni-img.png')}}" class="col-4 p-0 testimoni-img h-full" width="120" height="120">
                            </div>
                           </li>
                           <li class="background-primary  p-0 py-2">
                            <div class="row px-5 h-full">
                               <div class="col-8 my-auto">
                                   <h3 class="testimoni-item-title header3 text-left color-black">Sri Lestari Agustina</h3>
                                   <p class="testimoni-desc body2 text-left color-black">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. </p>
                               </div>
                               <img alt="testimoni-img" src="{{asset('front_assets/img/testimoni-img.png')}}" class="col-4 p-0 testimoni-img h-full" width="120" height="120">
                            </div>
                           </li>
                           <li class="background-primary  p-0 py-2">
                            <div class="row px-5 h-full">
                               <div class="col-8 my-auto">
                                   <h3 class="testimoni-item-title header3 text-left color-black">Sri Lestari Agustina</h3>
                                   <p class="testimoni-desc body2 text-left color-black">Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. </p>
                               </div>
                               <img alt="testimoni-img" src="{{asset('front_assets/img/testimoni-img.png')}}" class="col-4 p-0 testimoni-img h-full" width="120" height="120">
                            </div>
                           </li>

                       </ul>
                    </div>
                </div>
            </section>

            <section id="daftarProduk"> 
                <div class="container px-3 px-md-5">
                    <div class="row">
                        <h2 class="col-12 header2 dapro-title mx-2 text-center color-black">Menu ahlinya pastry</h2>
                        <ul class="col-12 dapro-list d-flex flex-wrap">
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-1.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Choux Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 3.000/2 pcs</h4>
                                </div>
                            </li>
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-2.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Croissant Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 5.000/2 pcs</h4>
                                </div>
                            </li>
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-3.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Croissant Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 6.000/2 pcs</h4>
                                </div>
                            </li>
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-4.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Short Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 6.000/2 pcs</h4>
                                </div>
                            </li>
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-5.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Phyllo Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 1.000/2 pcs</h4>
                                </div>
                            </li>
                            <li class="dapro-item background-secondary-one position-relative">
                                <img alt="dapro-img" src="{{asset('front_assets/img/dapro-img-6.png')}}" width="314" height="268" class="dapro-img">
                                <div class="dapro-wrapper-desc background-primary py-3">
                                    <h3 class="dapro-item-title body1 color-black text-center text-uppercase">Phyllo Pastry</h3>
                                    <h4 class="dapro-item-desc body1 color-black text-center text-uppercase">Rp. 6.000/2 pcs</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('front_assets/css/pages/home/index.css') }}">
@endpush

@push('js')
<script src="{{ asset('front_assets/js/pages/home/index.js') }}"></script>
@endpush
