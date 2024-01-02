@extends('Layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">LAPORAN NERACA BUKU</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-plus"></i> BUAT BARU
                    </button>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary"><i class="ti ti-filter"></i> FILTER</button>
                    </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Implementor</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>SR Jateng</option>
                            <option value="1">SSR Kota Semarang</option>

                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Periode Awal</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">April 2021</option>
                            <option value="1">Mei 2021</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Periode Akhir</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>April 2021</option>
                            <option value="">Mei 2021</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                <div class="col-4">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Program</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="eliminasiTB">Eliminasi TB</option>

                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Donor</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">Global Fund</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Revisi</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>
                    <div class="col-2 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Tampilkan Nol</label>
                    </div>
                    <div class="col-2 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Konsolidasi</label>
                    </div>
        </div>
      </div>
    </div>
</div>
    <!--  Row 1 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" style="margin-left: 1%;">Simpan</button>
        </div>
      </div>
    </div>
  </div>





  <div class="py-6 px-6 text-center shadow-md">
    <p class="mb-0 fs-4 fw-bold">Copyright ©<a href="https://www.mentarisehatindonesia.org/" target="_blank" class="pe-1 text-primary text-decoration-none"> Mentari Sehat Indonesia</a></p>
  </div>
@endsection
