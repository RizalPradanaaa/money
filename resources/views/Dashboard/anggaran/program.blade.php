    @extends('Layouts.main')

    @section('container')

    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="row d-flex justify-content-between mb-3">
                    <div class="col-6">
                        <h5 class="card-title fw-semibold mb-4">Program</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="ti ti-plus"></i> BUAT BARU
                        </button>
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
                <thead class="text-dark fs-4 text-left">
                    <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold">Action</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold">Kegiatan</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold">Program</h6>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-bottom-0">
                            <button class="btn btn-primary">
                                <i class="ti ti-pencil"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">20 Mei 2023</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">1111111</h6>
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
                                        <div class="col-20">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Nama Program</span>
                                                <input type="text" aria-label="First name" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-20">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Budget</span>
                                                <input type="text" aria-label="First name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Start</span>
                                                <input type="date" aria-label="First name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">End</span>
                                                <input type="date" aria-label="First name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-group">
                                                <label class="input-group-text" for="inputGroupSelect01">Currency</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected></option>
                                                    <option value="rupiah">Rupiah</option>
                                                    <option value="usd">USD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Kurs IDR to IDR</label>
                                                <input type="text" aria-label="First name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="input-group">
                                                <label class="input-group-text" for="inputGroupSelect01">Kurs IDR to USD</label>
                                                <input type="text" aria-label="First name" class="form-control">
                                            </div>
                                        </div>
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
