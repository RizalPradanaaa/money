@extends('Layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">IC MONITOR</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a class="btn btn-primary"><i class="ti ti-download"></i> DOWNLOAD CSV</a>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="input-group">
                        <span class="input-group-text">Bulan</span>
                        <input type="month" aria-label="First name" class="form-control">
                      </div>
                </div>
                <div class="col-2">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Tahun</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>2020</option>
                          <option value="1">2021</option>
                          <option value="2">2022</option>
                          <option value="3">2023</option>
                        </select>
                      </div>
                </div>
                <div class="col-2">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Mitra</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>SR Jateng</option>
                          <option value="1">SSR Kota</option>

                        </select>
                      </div>
                </div>

                <div class="col-2">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Posting</option>
                          <option value="1">Belum Posting</option>

                        </select>
                      </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">Cari No.Transaksi</span>
                        <input type="text" aria-label="First name" class="form-control">

                      </div>
                </div>
                <div class="col-1">
                    <button class="btn btn-primary"><i class="ti ti-search"></i></button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
    <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle ">
              <thead class="text-dark fs-4 text-center">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Tipe</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Posting</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Mitra</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No. Transaksi</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Tanggal</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Keterangan</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Jumlah</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Ostd Date</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Kas Bank</span>
                      </div>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">Belum</span>
                      </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">SR Provinsi</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">BRI</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">111111</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">Rizal Pradana</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">Semarang</h6>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Aktif</span>
                      </div>
                  </td>
                  <td class="border-bottom-0">
                    <button class="btn btn-primary">
                        <i class="ti ti-pencil"></i>
                    </button>
                    <button class="btn btn-danger">
                        <i class="ti ti-trash"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>






  <div class="py-6 px-6 text-center shadow-md">
    <p class="mb-0 fs-4 fw-bold">Copyright ©<a href="https://www.mentarisehatindonesia.org/" target="_blank" class="pe-1 text-primary text-decoration-none"> Mentari Sehat Indonesia</a></p>
  </div>
@endsection
