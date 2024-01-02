@extends('Layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between mb-3">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">LAPORAN MONITORING TUTUP BUKU</h5>
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
            <div class="row">
    <!-- Tipe -->
    <div class="col-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="tipeSelect">Periode</label>
            <select class="form-select" id="tipeSelect">
                <option selected></option>
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
            </select>
        </div>
    </div>

    <!-- Pilih Implementor -->
    <div class="col-6">
        <div class="input-group mb-3">
            <label class="input-group-text" for="implementorSelect">Pilih Implementor</label>
            <select class="form-select" id="implementorSelect">
                <option selected></option>
                <option value="1">114 - SR JAWA TENGAH</option>
                <option value="2">11401 - SSR BANJARNEGARA </option>
                <option value="3">11402 - SSR KEBUMEN </option>
                <option value="4">11403 - SSR BANYUMAS </option>
                <option value="5">11404 - SSR PURBALINGGA </option>
                <option value="6">11405 - SSR BATANG</option>
                <option value="7">11406 - SSR BLORA </option>
                <option value="8">11407 - SSR GROBOGAN</option>
                <option value="9">11408 - SSR BOYOLALI</option>
                <option value="10">11409 - SSR KLATEN</option>
                <option value="11">11410 - SSR BREBES</option>
                <option value="12">11411 - SSR CILACAP </option>
                <option value="13">11412 - SSR DEMAK</option>
                <option value="14">11413 - SSR KUDUS</option>
                <option value="15">114014 - SSR JEPARA</option>
                <option value="16">114015 - SSR PATI </option>
                <option value="17">114016 - SSR KARANGANYAR</option>
                <option value="18">114017 - SSR KENDAL</option>
                <option value="19">114018 - SSR PEMALANG</option>
                <option value="20">114019 - SSR KOTA PEKALONGAN</option>
                <option value="21">114020 - SSR MSI KAB.PEKALONGAN</option>
                <option value="22">114021 - SSR SEMARANG</option>
                <option value="23">11422 - SSR KAB SEMARANG </option>
                <option value="24">11423 - SSR SURAKARTA</option>
                <option value="25">11424 - SSR SRAGEN</option>
                <option value="26">11426 - SSR PURWOREJO</option>
                <option value="27">11427 - SSR SUKOHARJO </option>
                <option value="28">11428 - SSR WONOGIRI</option>
                <option value="29">11429 - SSR TEGAL</option>
                <option value="30">11430 - SSR TEMANGGUNG</option>
                <option value="31">11431 - SSR WONOSOBO</option>
                <option value="32">11434 - SSR MAGELANG </option>
                <!-- Add more options as needed -->
            </select>
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
                                        <h6 class="fw-semibold mb-0 fs-4">Fanni Tyasari</h6>
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
