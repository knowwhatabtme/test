<div class="modal fade" id="ModalFilter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Filter</h1>
            </div>
            <div class="modal-body">
                <form action="" method="get">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="region" class="col-form-label">Region :</label>
                            <select class="form-select" name="region" aria-label="Default select example">
                                <option value="">All</option>
                                <option value="Limo">Limo</option>
                                <option value="PD Labu">PD Labu</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="jarak" class="col-form-label">Jarak Kampus :</label>
                            <select class="form-select" name="jarak" aria-label="Default select example">
                                <option value="">All</option>
                                <option value="1KM">1KM</option>
                                <option value="2KM">2KM</option>
                                <option value="3KM">3KM</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="jenis" class="col-form-label">Jenis kost :</label>
                            <select class="form-select" name="jenis" aria-label="Default select example">
                                <option value="">All</option>
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Campur">Campur</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" href="?" class="btn btn-primary">Reset</a>
            </div>
        </div>
    </div>
</div>
