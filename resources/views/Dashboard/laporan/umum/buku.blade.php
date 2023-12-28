@extends('Layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">LAPORAN UMUM BUKU BESAR</h5>
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
                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">Tanggal Awal</span>
                        <input type="date" aria-label="First name" class="form-control">
                      </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Tanggal Akhir</span>
                        <input type="date" aria-label="First name" class="form-control">
                      </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Akun Mulai</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>1000000</option>
                          <option value="1">2000</option>

                        </select>
                      </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Akun Akhir</label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected></option>
                          <option value="1">190000</option>

                        </select>
                      </div>
                </div>
                
                <div class="row" style="margin-top: 2%;">
                <div class="col-6">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Kode Jurnal</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">SSR Kota Semarang</option>

                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih Implementor</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">April 2021</option>
                            <option value="1">Mei 2021</option>
                        </select>
                    </div>
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

                <div class="col-4">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Mata Uang</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="rupiah">Rupiah</option>
                            <option value="usd">USD</option>
                        </select>
                    </div>
                </div>
                <div class="col-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Tampilkan Nol</label>
                </div>
                <div class="col-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Konsolidasi</label>
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
                    <h6 class="fw-semibold mb-0">No. Voucher</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Keterangan</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Program</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">BL</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Debet</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Kredit</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">20 Mei 2023</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">1111111</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">12345</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">Ervina Rahma Aristawati</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">Global Fund</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">yow</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">34252</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">1110000</h6>
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


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Saldo Awal</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-stretch">
                          <div class="card w-100">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">Tanggal</span>
                                            <input type="date" aria-label="First name" class="form-control">

                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">Program</span>
                                            <input type="text" aria-label="First name" class="form-control">

                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-primary"><i class="ti ti-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-stretch">
                          <div class="card w-100">
                            <div class="card-body p-4">
                              <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle ">
                                  <thead class="text-dark fs-4 text-center">
                                    <tr>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No. Akun</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Rekening</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Debit</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Kredit</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tanggal</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Program</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">BL</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Sumber Dana</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Keterangan</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Akun</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">Semarang</h6>
                                      </td>
                                      <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">Semarang</h6>
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
                                        <h6 class="fw-semibold mb-0 fs-4">Semarang</h6>
                                      </td>
                                      <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">Semarang</h6>
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
                                  <tfoot class="text-dark fs-4 text-center">
                                    <tr>
                                      <th class="border-bottom-0" colspan="3">
                                        <h6 class="fw-semibold mb-0">TOTAL</h6>
                                      </th>
                                      <th class="border-bottom-0" colspan="3">
                                        <h6 class="fw-semibold mb-0">Rp. 0,00</h6>
                                      </th>
                                      <th class="border-bottom-0" colspan="3">
                                        <h6 class="fw-semibold mb-0">Rp. 0,00</h6>
                                      </th>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>





  <div class="py-6 px-6 text-center shadow-md">
    <p class="mb-0 fs-4 fw-bold">Copyright ©<a href="https://www.mentarisehatindonesia.org/" target="_blank" class="pe-1 text-primary text-decoration-none"> Mentari Sehat Indonesia</a></p>
  </div>
@endsection
