<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Program Kasir Muara Karang</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body style="font-family: verdana;">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="images/logo.jpg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports
            <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">

          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  
                </div>
                <div class="text-wrapper">
                  
                  <div>
                  </div>
                </div>
              </div>
              <a href="https://api.whatsapp.com/send?phone=6289688336853&amp;text=Hubungi%20jika,%20keadaan%20darurat%20saja....."><img src="https://lh3.googleusercontent.com/-N23V4qsFKs8/WMV9mGK5x5I/AAAAAAAAAPQ/BcC6qzLzJtcqKUWAX5TXX8KxuwDX5JXAgCLcB/h90/Button%2BChat%2Bvia%2BWhatsapp.png" style="    max-width: 100%;" / /></a></center>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?home">
              <i class="menu-icon mdi mdi-television"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Dashboard</span></b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Deposit</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="?deposit_game_mm">Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?deposit_game_sb1288"> Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?deposit_game_sb168">Slot / S 168</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?deposit_game_dingdong">Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Withdraw</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?withdraw_game_mm">Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?withdraw_game_sb1288">Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?withdraw_game_sb168">Slot / S 168</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?withdraw_game_dingdong">Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?menu_transfer">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Mutasi Dana</span></b>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Transaksi Lain</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?laporan_transaksi_pemasukan"> Report Pemasukan & Pengeluaran</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="?pemasukan_kas"> Detail Pemasukan</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?report_bank_account"> Detail Bank Account</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="?pengeluaran_kas">Detail Pengeluaran</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?kas_bank1"> Contoh Kas Bank</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Kredit Game</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic10">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?kredit_balance_deposit_game">Penambahan Kredit Game</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?kredit_balance_withdraw_game">Pengurangan Kredit Game</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report All Transaksi Game </span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic11">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_mm">Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_bk">Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_slot">Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_dingdong">Dingdong</a>
                </li>
              </ul>
            </div>
          </li> -->
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Depo / WD report</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_mm">Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_bk">Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_slot">Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_dingdong">Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report All Kas Kecil</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_kas_kecil_game_mm">Kas Kecil Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_kas_kecil_game_bk">Kas Kecil Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_kas_kecil_game_slot">Kas Kecil Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_kas_kecil_game_dingdong">Kas Kecil Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report Pemasukan</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_mm_deposit">Deposit Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_bk_deposit">Deposit Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_slot_deposit">Deposit Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_dingdong_deposit">Deposit Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report Pengeluaran</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_mm_withdraw">Withdraw Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_bk_withdraw">Withdraw Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_slot_withdraw">Withdraw Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_game_dingdong_withdraw">Withdraw Dingdong</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_data_bank">bank tester</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Input Penghutang & Bank</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic7">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?input_penghutang">Input Data Penghutang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?input_bank">Input Data Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?hutang_produk">Input Hutang Produk</a>
                </li>              
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?cetak_report_penghutang">cetak_report_penghutang</a>                                     
                </li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report All Transaksi Game </span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic11">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_mm">Mickey Mouse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_bk">Bakarat / S 1288</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_slot">Slot / S 128</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_grand_total_game_dingdong">Dingdong</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report Penghutang & Bank</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_penghutang">Data Penghutang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_saldo_penghutang_all">Data Penghutang All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_penghutang_rokok">Data Penghutang Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_data_bank">Data Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_data_bank_all">Data Bank All</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?cetak_report_penghutang">cetak_report_penghutang</a>                                     
                </li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <b><span class="menu-title" style="font-size:15px; font-family: arial;">Report Mutasi</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_kas_ke_kas">Mutasi Kas Ke Kas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_kas_ke_bank">Mutasi Kas Ke Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_kas_ke_hutang">Mutasi Kas Ke Hutang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_bank_ke_bank">Mutasi Bank Ke Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_bank_ke_kas">Mutasi Bank Ke Kas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_bank_ke_hutang">Mutasi Bank Ke Hutang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_hutang_ke_kas">Mutasi Hutang Ke Kas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?report_mutasi_hutang_ke_bank">Mutasi Hutang Ke Bank</a>
                </li>
              
                <!-- <li class="nav-item">
                  <a class="nav-link" href="?cetak_report_penghutang">cetak_report_penghutang</a>                                     
                </li> -->
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <b><span class="menu-title" style="font-size:15px;">Keluar Sistem</span></b>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="?logout">Logout</a>
                </li>
              </ul>
            </div>
          </li>
        </ul> -->
      </nav>