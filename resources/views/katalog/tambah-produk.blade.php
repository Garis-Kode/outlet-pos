@extends('layouts.app')

@section('content')

  <div class="row g-5 g-xl-8">
      <div class="col-xl-3 mb-8">
        <div class="card card-flush py-4">
          <div class="card-header">
            <div class="card-title">
              <h2>Thumbnail</h2>
            </div>
          </div>
          <div class="card-body text-center pt-0">
            <style>.image-input-placeholder { background-image: url('{{ asset('assets/media/svg/files/blank-image.svg') }}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg') }}'); }</style>
            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
              <div class="image-input-wrapper w-150px h-150px"></div>
              <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <i class="ki-duotone ki-pencil fs-7">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="avatar_remove" />
              </label>
              <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="ki-duotone ki-cross fs-2">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </span>
              <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="ki-duotone ki-cross fs-2">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </span>
            </div>
            <div class="text-muted fs-7">Maksimal ukuran gambar 2MB dan hanya file dengan ekstensi jpg, png yang diizinkan</div>
          </div>
        </div>

        <div class="card card-flush py-4 my-5">
          <div class="card-header">
            <div class="card-title">
              <h2>Kategori</h2>
            </div>
          </div>
          <div class="card-body pt-0">
            <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
              <option></option>
              <option value="published" selected="selected">Published</option>
              <option value="scheduled">Scheduled</option>
              <option value="unpublished">Unpublished</option>
            </select>
            <div class="d-none mt-10">
              <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing date and time</label>
              <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date & time" />
            </div>
          </div>
        </div>

        <div class="card card-flush py-4 my-5">
          <div class="card-header">
            <div class="card-title">
              <h2>Status</h2>
            </div>
            <div class="card-toolbar">
              <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
            </div>
          </div>
          <div class="card-body pt-0">
            <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
              <option></option>
              <option value="published" selected="selected">Published</option>
              <option value="scheduled">Scheduled</option>
              <option value="unpublished">Unpublished</option>
            </select>
            <div class="d-none mt-10">
              <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing date and time</label>
              <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date & time" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 mb-8">
        <div class="card card-flush py-4">
          <div class="card-header">
            <div class="card-title">
              <h2>Tambah Produk</h2>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="mb-10 fv-row">
              <label class="required form-label">Nama Produk</label>
              <input type="text" name="category_name" class="form-control mb-2" placeholder="Nama Kategori" value="" />
            </div>
            <div>
              <label class="form-label">Deskripsi</label>
              <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div>
            </div>
          </div>
        </div>

        <div class="card card-flush py-4 my-5">
          <div class="card-header">
            <div class="card-title">
              <h2>Harga</h2>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
              <label class="form-label">Fixed Discounted Price</label>
              <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
              <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
            </div>
            <div class="d-flex flex-wrap gap-5">
              <div class="fv-row w-100 flex-md-root">
                <label class="required  form-label">Modal</label>
                <div class="input-group mb-3">
                  <span class="input-group-text mb-2" id="basic-addon1">Rp.</span>
                  <input type="text" class="form-control mb-2" placeholder="0" value="" />
                </div>
              </div>
              <div class="fv-row w-100 flex-md-root">
                <label class="required  form-label">Harga Jual</label>
                <div class="input-group mb-3">
                  <span class="input-group-text mb-2" id="basic-addon1">Rp.</span>
                  <input type="text" class="form-control mb-2" placeholder="0" value="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <a href="{{ route('katalog.produk') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Batal</a>
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
          <span class="indicator-label">Simpan</span>
          <span class="indicator-progress">Loading...
          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
      </div>
  </div>

@endsection

@section('script')
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
@endsection
