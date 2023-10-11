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
              <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
            </div>
          </div>
          <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <a href="{{ route('katalog.produk.tambah') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
          </div>
        </div>
        <div class="card-body pt-0">
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-200px">Product</th>
                <th class="text-center min-w-100px">Kategori</th>
                <th class="text-end min-w-100px">Modal</th>
                <th class="text-end min-w-100px">Harga</th>
                <th class="text-end min-w-100px">Status</th>
                <th class="text-end min-w-70px">Aksi</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <a href="#" class="symbol symbol-50px">
                      <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/50.gif') }});"></span>
                    </a>
                    <div class="ms-5">
                      <span class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">Sandals</span>
                      <div class="text-muted fs-7 fw-bold">sku23547</div>                    
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="fw-bold ms-3">Drink</span>
                </td>
                <td class="text-end">
                  <span class="fw-bold ms-3">Rp. 20.000</span>
                </td>
                <td class="text-end">Rp. 25.000</td>
                <td class="text-end">
                  <div class="badge badge-light-primary">Scheduled</div>
                </td>
                <td class="text-end">
                  <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                  <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
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

@endsection