@extends('admin.partials.master')
@section('content')
    @include('admin.postingan.partials.modal')
    <div class="container-xl">
        <div class="col">
            <div class="card mb-grid">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Daftar Kost</div>
                    <div class="justify-content-end m-0 p-0">
                        <a class="btn btn-sm btn-labeled-right btn-success" data-bs-toggle="modal"
                            data-bs-target="#ModalPosts">
                            <span class="btn-label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-down-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6.364 2.5a.5.5 0 0 1 .5-.5H13.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 2 13.5V6.864a.5.5 0 1 1 1 0V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H6.864a.5.5 0 0 1-.5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M11 10.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L1.146 1.854a.5.5 0 1 1 .708-.708L10 9.293V5.5a.5.5 0 0 1 1 0v5z" />
                                </svg>
                            </span>
                            <span class="btn-text">
                                Tambah Kost
                            </span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <label class="custom-control custom-checkbox m-0 p-0">
                                        <input type="checkbox" class="custom-control-input table-select-all">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </th>
                                {{-- <th scope="col">Judul</th>
                                <th scope="col">Post pertama pada</th>
                                <th scope="col">Edit Post</th>
                                <th scope="col">Action</th> --}}
                                <th scope="col">Nama Kos</th>
                                <th scope="col">status</th>
                                <th scope="col">Edit kost</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php
                                $posts = \App\PostManage::all();
                                
                            @endphp
                            @foreach ($posts as $w)
                        
                                @php
                                    $selectedTransport = explode(',', $w->jalurTransport);
                                    $checkboxFkos = explode(',', $w->fasilitas_kamar);
                                    $checkboxFsekitar = explode(',', $w->fasilitas_sekitar);

                                    $mapupdate = '<iframe src="'. $w->maps .'" style="border:0;" height="200px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

                                @endphp    

                                <tr>
                                    <th scope="row row-cols-2">
                                        <label class="custom-control custom-checkbox m-0 p-0">
                                            <input type="checkbox" class="custom-control-input table-select-row">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </th>
                                    <td>{{ $w->namaKos }}</td>
                                    <td>{{ $w->created_at->format('d-m-Y') }}</td>
                                    <td><a href="#ModaleditPosts-{{ $w->id }}" data-bs-toggle="modal" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <a href="{{ route('managepost.destroy', ['id' => $w->id]) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="ModaleditPosts-{{ $w->id }}" tabindex="-1" aria-labelledby="ModaleditPosts" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title text-center justify-content-center" id="exampleModalLabel">Edit Post for {{ $w->namaKos }}</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('managepost.update', $w->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label" for="namaKos">Nama Kost:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="namaKos" value="{{ $w->namaKos }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="desc" class="col-form-label">Deskripsi :</label>
                                            <textarea class="form-control" id="desc" name="desc" rows="3">{{ $w->desc }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                            <label for="category_id" class="form-label">Jenis kost</label>
                                            <select class="form-select" id="category_id" aria-label="Default select example" name="jenisKos" >
                                                <option value="Laki - laki" {{ old('jenisKos', $w->category_id) == 'Laki - laki' ? 'selected' : '' }}>Laki - laki</option>
                                                <option value="Perempuan" {{ old('jenisKos', $w->category_id) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                <option value="Campur" {{ old('jenisKos', $w->category_id) == 'Campur' ? 'selected' : '' }}>Campur</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="jarakKampus" class="form-label">Jarak Kampus</label>
                                            <select class="form-select" id="jarakKampus" aria-label="Default select example" name="jarakKampus" >
                                                <option value="Laki - laki" {{ old('jarakKampus', $w->jarakKampus) == '1KM' ? 'selected' : '' }}>1KM</option>
                                                <option value="Perempuan" {{ old('jarakKampus', $w->jarakKampus) == '2KM' ? 'selected' : '' }}>2KM</option>
                                                <option value="Campur" {{ old('jarakKampus', $w->jarakKampus) == '3KM' ? 'selected' : '' }}>3KM</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="max_lantai" class="col-form-label">Jumlah lantai:</label>
                                            <input type="text" class="form-control" id="max_lantai" name="max_lantai" value="{{ $w->jumLantai }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="max_kamarT" class="col-form-label">Jumlah Kamar Tidur:</label>
                                            <input type="text" class="form-control" id="max_kamarT" name="max_kamarT" value="{{ $w->jumKamar }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="max_kamarM" class="col-form-label">Jumlah Kamar Mandi:</label>
                                            <input type="text" class="form-control" id="max_kamarM" name="max_kamarM" value="{{ $w->jumKamarMandi }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="alamat_kost" class="col-form-label">Alamat Kost:</label>
                                            <input type="text" class="form-control" id="alamat_kost" name="alamat_kost" value="{{ $w->address }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="alamat_kost" class="col-form-label">Jalur trasport:</label>
                                            <div class="container text-start">
                                                <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <input class="form-check-input" type="checkbox" value="Angkot" id="flexCheckDefault" name="checkbox0[]" {{ in_array('Angkot', $selectedTransport) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Angkot
                                                    </label></div>
                                                </div>
                                                <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <input class="form-check-input" type="checkbox" value="Transjakarta" id="flexCheckDefault" name="checkbox0[]" {{ in_array('Transjakarta', $selectedTransport) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Transjakarta
                                                    </label> 
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                            <label for="alamat_kost" class="col-form-label">Fasilitas kamar:</label>
                                            <div class="container text-start">
                                                <div class="row row-cols-2">
                                                <div class="col text-start">
                                                    <input class="form-check-input" type="checkbox" value="AC" id="flexCheckDefault" name="checkbox1[]" {{ in_array('AC', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    AC
                                                    </label>
                                                </div>
                                                <div class="col text-start">
                                                    <input class="form-check-input" type="checkbox" value="TV" id="flexCheckDefault" name="checkbox1[]" {{ in_array('TV', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    TV
                                                    </label>
                                                </div>
                                                <div class="col text-start">
                                                    <input class="form-check-input" type="checkbox" value="Parkir Luar" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Parkir Luar', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Parkir Luar
                                                    </label>  
                                                </div>
                                                <div class="col text-start">
                                                    <input class="form-check-input" type="checkbox" value="Parkir Dalam" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Parkir Dalam', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Parkir Dalam
                                                    </label> 
                                                </div>
                                                </div>
                                                <div class="row row-cols-2">
                                                <div class="col text-start">
                                                    <input class="form-check-input" type="checkbox" value="Kamar Mandi Dalam" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Kamar Mandi Dalam', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Kamar Mandi Dalam
                                                    </label> 
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Kamar Mandi Luar" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Kamar Mandi Luar', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Kamar Mandi Luar
                                                    </label> 
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Dapur Bersama" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Dapur Bersama', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Dapur Bersama
                                                    </label> 
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Dapur Sendiri" id="flexCheckDefault" name="checkbox1[]" {{ in_array('Dapur Sendiri', $checkboxFkos) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Dapur Sendiri
                                                    </label> 
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                            <label for="alamat_kost" class="col-form-label">Fasilitas sekitar:</label>
                                            <div class="container text-start">
                                                <div class="row row-cols-2">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Rumah sakit" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Rumah sakit', $checkboxFsekitar) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Rumah sakit
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Tempat Ibadah" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Tempat Ibadah', $checkboxFsekitar) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Tempat Ibadah
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="row row-cols-2">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="ATM" id="flexCheckDefault" name="checkbox3[]" {{ in_array('ATM', $checkboxFsekitar) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    ATM
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="Minimarket" id="flexCheckDefault" name="checkbox3[]" {{ in_array('Minimarket', $checkboxFsekitar) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Minimarket
                                                    </label>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="mb-3">
                                            <label for="maps" class="col-form-label">Url lokasi kost:</label>
                                            <input type="text" class="form-control" id="maps" name="maps" value="{{ $mapupdate }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="harga" class="col-form-label">Harga:</label>
                                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $w->harga }}">
                                            </div>
                                            <div class="mb-3">
                                            <label for="formFileSm" class="form-label">Gambar Kost</label>
                                            <input class="form-control form-control-sm" id="formFileSm" type="file" accept="image/jpg, image/jpeg, image/png" name="picture" value="{{ $w->picture }}">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                {{-- Modal End --}}

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
