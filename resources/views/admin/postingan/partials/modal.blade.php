  <!-- Modal -->
  <div class="modal fade" id="ModalPosts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
              </div>
              <div class="modal-body">
                  <form action="{{ route('managepost.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Nama Kost:</label>
                          <input type="text" class="form-control" id="recipient-name" name="namaKos">
                      </div>
                      <div class="mb-3">
                          <label for="desc" class="col-form-label">Deskripsi :</label>
                          <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="category_id" class="form-label">Jenis kost</label>
                          <select class="form-select" id="category_id" aria-label="Default select example"
                              name="jenisKos">
                              <option selected>Open this select menu</option>
                              <option value="Laki - laki">Laki - laki</option>
                              <option value="Perempuan">Perempuan</option>
                              <option value="Campur">Campur</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="jarakKampus" class="form-label">Jarak Kampus</label>
                          <select class="form-select" id="jarakKampus" aria-label="Default select example"
                              name="jarakKampus">
                              <option selected>Open this select menu</option>
                              <option value="1KM">1KM</option>
                              <option value="2KM">2KM</option>
                              <option value="3KM">3KM</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="region" class="form-label">Region Kampus</label>
                          <select class="form-select" id="region" aria-label="Default select example" name="region">
                              <option selected>Open this select menu</option>
                              <option value="Limo">Limo</option>
                              <option value="PD Labu">PD Labu</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="max_lantai" class="col-form-label">Jumlah lantai:</label>
                          <input type="number" class="form-control" id="max_lantai" name="jumLantai">
                      </div>
                      <div class="mb-3">
                          <label for="max_kamarT" class="col-form-label">Jumlah Kamar Tidur:</label>
                          <input type="number" class="form-control" id="max_kamarT" name="jumKamar">
                      </div>
                      <div class="mb-3">
                          <label for="max_kamarM" class="col-form-label">Jumlah Kamar Mandi:</label>
                          <input type="number" class="form-control" id="max_kamarM" name="jumKamarMandi">
                      </div>
                      <div class="mb-3">
                          <label for="alamat_kost" class="col-form-label">Alamat Kost:</label>
                          <input type="text" class="form-control" id="alamat_kost" name="address">
                      </div>
                      <div class="mb-3">
                          <label for="alamat_kost" class="col-form-label">Jalur trasport:</label>
                          <div class="container text-start">
                              <div class="row">
                                  <div class="col-6 col-md-4">
                                      <input class="form-check-input" type="checkbox" value="Angkot"
                                          id="flexCheckDefault" name="checkbox0[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Angkot
                                      </label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-6 col-md-4">
                                      <input class="form-check-input" type="checkbox" value="Transjakarta"
                                          id="flexCheckDefault" name="checkbox0[]">
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
                                      <input class="form-check-input" type="checkbox" value="AC"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          AC
                                      </label>
                                  </div>
                                  <div class="col text-start">
                                      <input class="form-check-input" type="checkbox" value="TV"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          TV
                                      </label>
                                  </div>
                                  <div class="col text-start">
                                      <input class="form-check-input" type="checkbox" value="Parkir Luar"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Parkir Luar
                                      </label>
                                  </div>
                                  <div class="col text-start">
                                      <input class="form-check-input" type="checkbox" value="Parkir Dalam"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Parkir Dalam
                                      </label>
                                  </div>
                              </div>
                              <div class="row row-cols-2">
                                  <div class="col text-start">
                                      <input class="form-check-input" type="checkbox" value="Kamar Mandi Dalam"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Kamar Mandi Dalam
                                      </label>
                                  </div>
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="Kamar Mandi Luar"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Kamar Mandi Luar
                                      </label>
                                  </div>
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="Dapur Bersama"
                                          id="flexCheckDefault" name="checkbox1[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Dapur Bersama
                                      </label>
                                  </div>
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="Dapur Sendiri"
                                          id="flexCheckDefault" name="checkbox1[]">
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
                                      <input class="form-check-input" type="checkbox" value="Rumah sakit"
                                          id="flexCheckDefault" name="checkbox3[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Rumah sakit
                                      </label>
                                  </div>
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="Tempat Ibadah"
                                          id="flexCheckDefault" name="checkbox3[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Tempat Ibadah
                                      </label>
                                  </div>
                              </div>
                              <div class="row row-cols-2">
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="ATM"
                                          id="flexCheckDefault" name="checkbox3[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          ATM
                                      </label>
                                  </div>
                                  <div class="col">
                                      <input class="form-check-input" type="checkbox" value="Minimarket"
                                          id="flexCheckDefault" name="checkbox3[]">
                                      <label class="form-check-label" for="flexCheckDefault">
                                          Minimarket
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label for="maps" class="col-form-label">Url lokasi kost:</label>
                          <input type="text" class="form-control" id="maps" name="maps">
                      </div>
                      <div class="mb-3">
                          <label for="harga" class="col-form-label">Harga:</label>
                          <input type="text" class="form-control" id="harga" name="harga">
                      </div>
                      <div class="mb-3">
                          <label for="formFileSm" class="form-label">Gambar Kost</label>
                          <input class="form-control form-control-sm" id="formFileSm" type="file" name="picture">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
