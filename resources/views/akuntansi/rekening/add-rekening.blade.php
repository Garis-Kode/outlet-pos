@extends('layouts.app')

@section('content')

  <div class="row g-5 g-xl-8 justify-content-center">
      <div class="col-xl-9 mb-8">
        <div class="card card-flush py-4">
          <div class="card-header">
            <div class="card-title">
              <h2>Tambah Rekening</h2>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="mb-10 fv-row">
              <label class="required form-label">Bank</label>
              <input type="text" name="category_name" class="form-control mb-2" placeholder="Contoh: BCA" value="" />
            </div>
            <div class="mb-10 fv-row">
              <label class="required form-label">NO. Rekening</label>
              <input type="number" name="category_name" class="form-control mb-2" placeholder="Contoh: 123456789" value="" />
            </div>
            <div class="mb-10 fv-row">
              <label class="required form-label">Nama Rekening</label>
              <input type="text" name="category_name" class="form-control mb-2" placeholder="Contoh: wawan" value="" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 text-end">
        <a href="{{ route('akuntansi.rekening') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Batal</a>
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
          <span class="indicator-label">Simpan</span>
          <span class="indicator-progress">Loading...
          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
      </div>
  </div>

@endsection

@section('script')
@endsection
