@extends('layouts.app')

@section('content')

  <div class="row g-5 g-xl-8">
    <div class="col-xl-12 mb-8">
      <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
          <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
              <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
              <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Cari Uang Masuk" />
            </div>
          </div>
          <div class="card-toolbar">
            <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px me-2" placeholder="Cari Uang Masuk" />
            <div class="d-flex">
              <div>
                <button type="button" class="btn btn-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                  <i class="ki-duotone ki-exit-up fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>Export
                </button>
                <div id="kt_ecommerce_report_sales_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                  </div>
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                  </div>
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                  </div>
                </div>
              </div>
              <a href="{{ route('akuntansi.uang_masuk.add') }}" class="btn btn-primary d-flex align-items-center"><i class="ki-duotone ki-plus fs-2"></i>
                Tambah
              </a>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Sumber</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th class="text-end">Aksi</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <tr>
                <td>UM/231110/1 <br>
                  <a href="">
                    Lihat Bukti
                    <i class="ki-duotone ki-information-3 text-primary">
                      <span class="path1"></span>
                      <span class="path2"></span>
                      <span class="path3"></span>
                    </i>
                  </a>
                </td>
                <td>11 Desember 2023</td>
                <td>BSI: 1293816 <br> <small class="text-muted">a.n Fajar Rivaldi Chan</small></td>
                <td>Loak</td>
                <td>Hasil jual kardus berkas</td>
                <td>Rp. 2.0000.000</td>
                <td class="text-end">
                  <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-dots-horizontal fw-bold  fs-1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                      <span class="path3"></span>
                    </i>
                  </a>
                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Edit</a>
                    </div>
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Hapus</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script src="{{ asset('assets/js/custom/apps/ecommerce/reports/views/views.js') }}"></script>
@endsection