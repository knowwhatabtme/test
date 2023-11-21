<!DOCTYPE html>
<html lang="en-US">

@include('frontend.partials.head')



<body>
    <!-- Page Loader Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner"></div>
    </div>
    <!-- Page Loader End -->

    @include('frontend.partials.navbar')

    @yield('content')
    @include('frontend.blog.partials.modal')

    <section class="aubna-welcome-area">
        <!--Content before waves-->
        <div class="container text-center">
            <div class="align-items-center justify-content-between ">
                <div class="inner-header">
                    <div class="row">
                        <div class="col">
                            <div class="welcome-left">
                                <h1>Veteran Kos</h1>
                                <p>Kosan siap huni di sekitar kampus UPNVJ</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="inner-content">
                    
                 </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="aubna-blog-area section_100">
        <div class="container-md text-center">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalFilter"><i
                    class="bi bi-filter"></i> Filter</button>
            <div class="row p-md-5">
                <div class="col-lg-24">
                    <div class="row row-cols-4 row-cols-lg-4">
                        @foreach ($posts as $p)
                            <div class="card btn ml-5 mb-3" data-bs-toggle="modal"
                                href="#exampleModalToggle{{ $p->id }}">
                                <img src="{{ asset('images') }}/blogs/{{ $p->picture }}" class="card-img-top "
                                    alt="...">
                                <div class="card-body">
                                    <div class="container">
                                        <h4 class="card-title">{{ Str::limit($p->namaKos, 45) }}</h4>
                                        <div class="row">
                                            <div class="col">
                                                <span class="badge text-bg-success"><i class="bi bi-cash"></i>
                                                    Rp{{ $p->harga }} </span>
                                            </div>
                                            <div class="col">
                                                <span class="badge text-bg-info">Kamar : {{ $p->jumKamar }}</span>
                                                {{-- <h6>Kamar : {{ $p->max_kamarT }}</h6> --}}
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="card-text">{{ Str::limit($p->address, 25) }}</p>
                                        <div class="col">
                                            <span class="badge text-bg-info"
                                                style="size: 20em">{{ $p->region }}</span>
                                        </div>
                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- MODAL -->
                            <div class="modal modal-xl fade" id="exampleModalToggle{{ $p->id }}"
                                aria-hidden="true" aria-labelledby="exampleModalToggle{{ $p->id }}Label"
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 "
                                                id="exampleModalToggle{{ $p->id }}Label">{{ $p->title }}
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container align-items-center text-start">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row mb-2">
                                                            <img src="{{ asset('images') }}/blogs/{{ $p->picture }}"
                                                                class="card-img-top" alt="...">
                                                        </div>
                                                        <div class="row mb-2">
                                                            {{-- <a type="button" class="btn btn-success btn-lg" href="{{ $p->maps }}">Lokasi Tempat</a> --}}
                                                            <iframe src="{{ $p->maps }}" style="border:0;"
                                                                height="200px" allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="card mb-2">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Detail Pemilik</h5>
                                                                    <hr style="border: 0.5px solid #F86D08;">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text">Pemilik </p>
                                                                        </div>
                                                                        <div class="col-1">
                                                                            :
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->pemilik->name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text"><i
                                                                                    class="bi bi-geo-alt-fill"></i>
                                                                                Alamat</p>
                                                                        </div>
                                                                        <div class="col-1">
                                                                            :
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->pemilik->alamat }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text"><i
                                                                                    class="bi bi-telephone"></i> nomor
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-1">
                                                                            :
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->pemilik->noTelp }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="card mb-2">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Detail Kost</h5>
                                                                    <hr style="border: 0.5px solid #F86D08;">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <p class="card-text text-center" >Deskripsi :
                                                                            </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->desc }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <p class="card-text text-start"
                                                                                style="font-size: 14px">Jumlah Lantai :
                                                                            </p>
                                                                        </div>
                                                                        <div class="col text-start">
                                                                            {{ $p->jumLantai }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <p class="card-text text-start"
                                                                                style="font-size: 14px">Jumlah Kamar :
                                                                            </p>
                                                                        </div>
                                                                        <div class="col text-start">
                                                                            {{ $p->jumKamar }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <p class="card-text text-start"
                                                                                style="font-size: 13px">Jumlah Kamar
                                                                                Mandi: </p>
                                                                        </div>
                                                                        <div class="col text-start">
                                                                            {{ $p->jumKamarMandi }}
                                                                        </div>
                                                                    </div>
                                                                    <p class="card-text"></p>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text">Jenis kost :</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            <span
                                                                                class="badge text-bg-warning">{{ $p->jenisKos }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text">Region :</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            <span
                                                                                class="badge text-bg-info">{{ $p->region }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text"
                                                                            style="font-size: 13px">Jarak Kampus :</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            <span
                                                                                class="badge text-bg-info">{{ $p->jarakKampus }}
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text"><i
                                                                                    class="bi bi-geo-alt-fill"></i>
                                                                                Alamat : </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->address }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text">Fasilitas : </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->fasilitas_kamar }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <p class="card-text"
                                                                                style="font-size: 14px">Dekat dengan:
                                                                            </p>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ $p->fasilitas_sekitar }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Card Review --}}
                                                        <div class="row mb-2">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="list-group">
                                                                        @foreach ($p->review as $r)
                                                                            <a  class="list-group-item list-group-item-action">
                                                                                <div class="d-flex w-100 justify-content-between">
                                                                                    <h5 class="mb-1">{{ $r->pereview->name }}</h5>
                                                                                    <small>{{ $r->created_at->diffForHumans() }}</small>
                                                                                </div>
                                                                            <p class="mb-1">{{ $r->pesan }}</p>
                                                                            {{-- <small>And some small print.</small> --}}
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                                    @auth 
                                                                        @can('admin')
                                                                    @else
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <form action="{{ route('review.store') }}" method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" name="id_kos" value="{{ $p->id }}">
                                                                                    {{-- <div class="input-group mt-2 mb-2">
                                                                                    <input type="text" name="pesan" class="form-control" placeholder="Tambah Review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" type="submit">Tambah Review</button>
                                                                                    </div> --}}
                                                                                    <div class="input-group mt-2 d-flex">
                                                                                        <input type="text" name="pesan" class="form-control" placeholder="Tulis Review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                                                        <button class="btn btn-outline-secondary mt-2" id="button-addon2" type="submit">Tambah Review</button>
                                                                                     </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    @endcan
                                                                @endauth
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <a type="button" class="btn btn-danger btn-lg"
                                                            href="https://wa.me/<?php echo $p->pemilik->noTelp; ?>?text=Halo%20apakah%20untuk%20<?php echo $p->namaKos; ?>%20masih%20tersedia%3F">Hubungi</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="col-4">
                    <div class="card border-secondary">
                        @foreach ($posts as $p)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <figure class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" alt="blog imag">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->title }}</h5>
                                            <p class="card-text">{{ Str::limit($p->body, 50) }}</p>
                                            <p class="card-text"><small class="text-muted">Last updated
                                                    {{ $p->created_at->format('d-m-Y') }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
        </div>
    </section>


    {{-- @include('frontend.partials.footer') --}}
    @include('frontend.partials.script')
    @yield('scripts')

</body>

</html>
