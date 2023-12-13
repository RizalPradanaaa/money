@extends('Layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
            <div class="row  mb-3">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">JURNAL UMUM TRANSAKSI</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Mitra</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>SR Jateng</option>
                          <option value="1">SSR Kota Semarang</option>

                        </select>
                      </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status Posting</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Posting</option>
                          <option value="1">Belum Posting</option>

                        </select>
                      </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Periode</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>April 2021</option>
                          <option value="1">Mei 2021</option>

                        </select>
                      </div>
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
                    <h6 class="fw-semibold mb-0">Tanggal</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No. Transaksi</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Implementor</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Mata Uang</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Debit</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Kredit</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Balance</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">SR Provinsi</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">SR Provinsi</h6>
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
