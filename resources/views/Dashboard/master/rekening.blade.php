@extends('Layouts.main')

@section('container')
    <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Daftar Rekening</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle ">
              <thead class="text-dark fs-4 text-center">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">ID</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Mata Uang</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Implementor</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Nama Bank</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Rekening</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Atas Nama</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Cabang</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Status</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Aksi</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                  <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">IDR</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">SR Provinsi</p>
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
