<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
  <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
      <div class="symbol symbol-50px">
        <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
      </div>
      <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <a href="#" class="text-white text-hover-primary fs-6 fw-bold">BI Coffe</a>
            <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">Coffeeshop</span>
            <div class="d-flex align-items-center text-success fs-9">
              O-42352
            </div>
          </div>
          <div class="me-n2 d-flex">
            <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
              <i class="ki-duotone ki-setting text-muted fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
              <div class="menu-item px-5">
                <a href="#" class="menu-link px-5">Settings</a>
              </div>
              <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                  <span class="menu-title">Outlet</span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                  <div class="menu-item px-3">
                    <a href="../../demo8/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                  </div>
                  <div class="menu-item px-3">
                    <a href="../../demo8/dist/account/billing.html" class="menu-link px-5">Billing</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="aside-search"> </div>
  </div>

  <div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
      <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
        
        <div class="menu-item @if ($title == 'Dashboard') here @endif">
          <a class="menu-link" href="{{ route('dashboard') }}">
            <span class="menu-icon">
              <i class="ki-duotone ki-element-11 fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </div>
        
        <div class="menu-item pt-5">
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
          </div>
        </div>
        
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if ($menu == 'katalog') here show @endif">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-basket fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">Katalog</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item  @if ($title == 'Kategori') here @endif">
              <a class="menu-link" href="{{ route('katalog.kategori') }}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Kategori</span>
              </a>
            </div>
            <div class="menu-item  @if ($title == 'Produk') here @endif">
              <a class="menu-link" href="{{ route('katalog.produk') }}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Produk</span>
              </a>
            </div>
          </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-chart-pie-3 fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
              </i>
            </span>
            <span class="menu-title">Laporan</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laporan Transaksi</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laporan Pemasukan</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laporan Laba</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laporan Per-Kategori</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laporan Per-Produk</span>
              </a>
            </div>
          </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-bank fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">Akuntansi</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Uang Masuk</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Uang Keluar</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Laba</span>
              </a>
            </div>
          </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-discount fs-2">
                <i class="path1"></i>
                <i class="path2"></i>
              </i>
            </span>
            <span class="menu-title">Promo</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Diskon</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Kupon</span>
              </a>
            </div>
          </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-address-book fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
              </i>
            </span>
            <span class="menu-title">Karyawan</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Pegawai</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Kasir</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Dapur</span>
              </a>
            </div>
          </div>
        </div>

        <div class="menu-item">
          <a class="menu-link" href="#">
            <span class="menu-icon">
              <i class="ki-duotone ki-star fs-2">
              </i>
            </span>
            <span class="menu-title">Review</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="menu-link" href="#">
            <span class="menu-icon">
              <i class="ki-duotone ki-setting-2 text-muted fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">Pengaturan</span>
          </a>
        </div>

        <div class="menu-item pt-5">
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Bantuan</span>
          </div>
        </div>

        <div class="menu-item">
          <a class="menu-link" href="#">
            <span class="menu-icon">
              <i class="ki-duotone ki-rocket fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">Tiket Bantuan</span>
          </a>
        </div>
        
        <div class="menu-item">
          <a class="menu-link" href="#">
            <span class="menu-icon">
              <i class="ki-duotone ki-abstract-26 fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">Panduan Pengguna</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="menu-link" href="#">
            <span class="menu-icon">
              <i class="ki-duotone ki-code fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">Update</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
    <a href="#" class="btn btn-flex btn-custom btn-primary w-100 d-flex align-items-center">
      <i class="ki-duotone ki-entrance-right fs-2 me-2 minimize-default">
        <span class="path1"></span>
        <span class="path2"></span>
      </i>
      <span class="btn-label">Keluar</span>
    </a>
  </div>
</div>