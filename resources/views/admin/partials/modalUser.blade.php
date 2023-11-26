@php
    $user = auth()->user();
@endphp

<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container text-center justify-center">
                    <div class="row">
                        <div class="col-lg-12">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                            @if(request('punya-kos', '0')=='0')
                                                <h1>Profile Penyewa Kos</h1>
                                            @else
                                                <h1>Profile Pemilik Kos</h1>
                                            @endif                               
                                                <hr style="border: 0.5px solid #F86D08;">
                                            </div>
                
                                            <div class="col-lg-12">
                                                <form method="POST" action="{{ route('user.update') }}">
                                                    @csrf
                                                    <input type="hidden" name="punya_kos" value="{{ request('punya-kos', '0') }}">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nama</label>
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                                            value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nik" class="form-label">NIK</label>
                                                        <input id="nik" type="number" placeholder="Disabled input" disabled
                                                            class="form-control @error('nik') is-invalid @enderror" name="nik"
                                                            value="{{ old('nik', $user->nik) }}" required autocomplete="nik" autofocus>
                
                                                        @error('nik')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="noTelp" class="form-label">No Telp</label>
                                                        <input id="noTelp" type="number"
                                                            class="form-control @error('noTelp') is-invalid @enderror" name="noTelp"
                                                            value="{{ old('noTelp', $user->noTelp) }}" required autocomplete="noTelp" autofocus>
                
                                                        @error('noTelp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                                        <input id="tanggalLahir" type="date"
                                                            class="form-control @error('tanggalLahir') is-invalid @enderror"
                                                            name="tanggalLahir" value="{{ old('tanggalLahir', $user->tanggalLahir) }}" required
                                                            autocomplete="tanggalLahir">
                
                                                        @error('tanggalLahir')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea id="alamat" type="Text" class="form-control" name="alamat">{{ old('alamat', $user->alamat) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                                            value="{{ old('email', $user->email) }}" required autocomplete="email">
                
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">password</label>
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                                            required autocomplete="new-password">
                
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">
                                                        Simpan
                                                    </button>
                                                </form>
                                                <div class="mt-3 text-center">
                                                    <a type="button" class="btn" data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"></path>
                                                        </svg>
                                                        Back
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                       
