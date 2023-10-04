@extends('layouts.app')

@section('content')

  <div class="row g-5 g-xl-8">
      <div class="col-xl-3 mb-8">
        <div class="card card-flush py-4">
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
            <div class="text-muted fs-7">Set the category status.</div>
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
              <h2>Tambah Kategori</h2>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="mb-10 fv-row">
              <label class="required form-label">Nama Kategori</label>
              <input type="text" name="category_name" class="form-control mb-2" placeholder="Nama Kategori" value="" />
              <div class="text-muted fs-7">Nama kategori wajib diisi dan direkomendasikan agar unik.</div>
            </div>
            <div>
              <label class="form-label">Deskripsi</label>
              <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <a href="{{ route('katalog.kategori') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Batal</a>
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
