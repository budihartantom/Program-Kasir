<?php
session_start();
require_once "sambungan.php";
?>
<?php
$header = include 'header.php';
?>
      <!-- partial -->
      <?php 
       
            if (isset($_GET['home'])){
            include "halamans/home.php";
         }
         else

            if (isset($_GET['deposit_game_mm'])){
            include "halamans/deposit/mm/kas/deposit_game_mm.php";
         }
         else

         if (isset($_GET['transfer_deposit_game_mm'])){
          include "halamans/deposit/mm/transfer/transfer_deposit_game_mm.php";
        }
        else
        
         if (isset($_GET['hutang_deposit_game_mm'])){
          include "halamans/deposit/mm/hutang/hutang_deposit_game_mm.php";
        }
        else

        if (isset($_GET['deposit_game_sb1288'])){
          include "halamans/deposit/sb1288/kas/deposit_game_sb1288.php";
       }
       else

       if (isset($_GET['transfer_deposit_game_sb1288'])){
        include "halamans/deposit/sb1288/transfer/transfer_deposit_game_sb1288.php";
      }
      else
      
       if (isset($_GET['hutang_deposit_game_sb1288'])){
        include "halamans/deposit/sb1288/hutang/hutang_deposit_game_sb1288.php";
      }
      else

      if (isset($_GET['deposit_game_sb168'])){
        include "halamans/deposit/sb168/kas/deposit_game_sb168.php";
     }
     else

     if (isset($_GET['transfer_deposit_game_sb168'])){
      include "halamans/deposit/sb168/transfer/transfer_deposit_game_sb168.php";
    }
    else
    
     if (isset($_GET['hutang_deposit_game_sb168'])){
      include "halamans/deposit/sb168/hutang/hutang_deposit_game_sb168.php";
    }
    else

    if (isset($_GET['deposit_game_dingdong'])){
      include "halamans/deposit/dingdong/kas/deposit_game_dingdong.php";
   }
   else

   if (isset($_GET['transfer_deposit_game_dingdong'])){
    include "halamans/deposit/dingdong/transfer/transfer_deposit_game_dingdong.php";
  }
  else
  
   if (isset($_GET['hutang_deposit_game_dingdong'])){
    include "halamans/deposit/dingdong/hutang/hutang_deposit_game_dingdong.php";
  }
  else

             
// pemisah

if (isset($_GET['withdraw_game_mm'])){
  include "halamans/withdraw/mm/kas/withdraw_game_mm.php";
}
else

if (isset($_GET['transfer_withdraw_game_mm'])){
include "halamans/withdraw/mm/transfer/transfer_withdraw_game_mm.php";
}
else

if (isset($_GET['hutang_withdraw_game_mm'])){
include "halamans/withdraw/mm/hutang/hutang_withdraw_game_mm.php";
}
else

if (isset($_GET['withdraw_game_sb1288'])){
include "halamans/withdraw/sb1288/kas/withdraw_game_sb1288.php";
}
else

if (isset($_GET['transfer_withdraw_game_sb1288'])){
include "halamans/withdraw/sb1288/transfer/transfer_withdraw_game_sb1288.php";
}
else

if (isset($_GET['hutang_withdraw_game_sb1288'])){
include "halamans/withdraw/sb1288/hutang/hutang_withdraw_game_sb1288.php";
}
else

if (isset($_GET['withdraw_game_sb168'])){
include "halamans/withdraw/sb168/kas/withdraw_game_sb168.php";
}
else

if (isset($_GET['transfer_withdraw_game_sb168'])){
include "halamans/withdraw/sb168/transfer/transfer_withdraw_game_sb168.php";
}
else

if (isset($_GET['hutang_withdraw_game_sb168'])){
include "halamans/withdraw/sb168/hutang/hutang_withdraw_game_sb168.php";
}
else

if (isset($_GET['withdraw_game_dingdong'])){
include "halamans/withdraw/dingdong/kas/withdraw_game_dingdong.php";
}
else

if (isset($_GET['transfer_withdraw_game_dingdong'])){
include "halamans/withdraw/dingdong/transfer/transfer_withdraw_game_dingdong.php";
}
else

if (isset($_GET['hutang_withdraw_game_dingdong'])){
include "halamans/withdraw/dingdong/hutang/hutang_withdraw_game_dingdong.php";
}
else



           if (isset($_GET['transfer'])){
            include "halamans/transfer.php";
         }
         else

           if (isset($_GET['laporan_transaksi'])){
            include "halamans/laporan_transaksi.php";
         }
         else

          if (isset($_GET['report_game_mm'])){
            include "halamans/report_game_mm.php";
         }
         else

           if (isset($_GET['report_game_bk'])){
            include "halamans/report_game_bk.php";
         }
         else

          if (isset($_GET['report_game_slot'])){
            include "halamans/report_game_slot.php";
         }
         else

          if (isset($_GET['report_game_dingdong'])){
            include "halamans/report_game_dingdong.php";
         }
         else

           if (isset($_GET['report_game_mm_deposit'])){
            include "halamans/report_game_mm_deposit.php";
         }
         else

          if (isset($_GET['report_game_bk_deposit'])){
            include "halamans/report_game_bk_deposit.php";
         }
         else

          if (isset($_GET['report_game_slot_deposit'])){
            include "halamans/report_game_slot_deposit.php";
         }
         else

           if (isset($_GET['report_game_dingdong_deposit'])){
            include "halamans/report_game_dingdong_deposit.php";
         }
         else

          if (isset($_GET['report_game_mm_withdraw'])){
            include "halamans/report_game_mm_withdraw.php";
         }
         else

          if (isset($_GET['report_game_bk_withdraw'])){
            include "halamans/report_game_bk_withdraw.php";
         }
         else

          if (isset($_GET['report_game_slot_withdraw'])){
            include "halamans/report_game_slot_withdraw.php";
         }
         else

          if (isset($_GET['report_game_dingdong_withdraw'])){
            include "halamans/report_game_dingdong_withdraw.php";
         }
         else   

          if (isset($_GET['logout'])){
            include "halamans/logout.php";
         }
         else

         if (isset($_GET['deposit_pilih_menu_mm'])){
          include "halamans/pilih_menu_deposit_mm.php";
       }
       else

          if (isset($_GET['deposit_pilih_menu_sb1288'])){
              include "halamans/pilih_menu_deposit_sb1288.php";
          }
          else

          if (isset($_GET['deposit_pilih_menu_sb168'])){
            include "halamans/pilih_menu_deposit_sb168.php";
        }
        else

        if (isset($_GET['deposit_pilih_menu_dingdong'])){
          include "halamans/pilih_menu_deposit_dingdong.php";
      }
      else

        if (isset($_GET['withdraw_pilih_menu_mm'])){
          include "halamans/pilih_menu_withdraw_mm.php";
        }
        else

        if (isset($_GET['withdraw_pilih_menu_sb1288'])){
        include "halamans/pilih_menu_withdraw_sb1288.php";
        }
        else

        if (isset($_GET['withdraw_pilih_menu_sb168'])){
        include "halamans/pilih_menu_withdraw_sb168.php";
        }
        else

        if (isset($_GET['withdraw_pilih_menu_dingdong'])){
        include "halamans/pilih_menu_withdraw_dingdong.php";
        }
        else

       if (isset($_GET['input_penghutang'])){
        include "halamans/input_penghutang.php";
     }
     else

       if (isset($_GET['input_bank'])){
        include "halamans/input_bank.php";
       }
       else

        if (isset($_GET['report_kas_kecil_game_mm'])){
        include "halamans/report_kas_kecil_game_mm.php";
       }
       else
       
       if (isset($_GET['report_kas_kecil_game_slot'])){
        include "halamans/report_kas_kecil_game_slot.php";
       }
       else

         if (isset($_GET['report_kas_kecil_game_bk'])){
        include "halamans/report_kas_kecil_game_bk.php";
       }
       else

       if (isset($_GET['report_kas_kecil_game_dingdong'])){
        include "halamans/report_kas_kecil_game_dingdong.php";
       }
       else

        if (isset($_GET['report_penghutang'])){
        include "halamans/report/report_penghutang.php";
       }
       else

       //transfer

       if (isset($_GET['menu_transfer'])){
        include "halamans/pilih_menu_transfer.php";
       }
       else

       if (isset($_GET['kas_kas'])){
        include "halamans/mutasi/kas_kas/kas_kas.php";
       }
       else

       if (isset($_GET['kas_bank'])){
        include "halamans/mutasi/kas_bank/kas_bank.php";
       }
       else

       if (isset($_GET['kas_hutang'])){
        include "halamans/mutasi/kas_hutang/kas_hutang.php";
       }
       else

       if (isset($_GET['bank_kas'])){
        include "halamans/mutasi/bank_kas/bank_kas.php";
       }
       else

        if (isset($_GET['bank_bank'])){
        include "halamans/mutasi/bank_bank/bank_bank.php";
       }
       else

       if (isset($_GET['bank_hutang'])){
        include "halamans/mutasi/bank_hutang/bank_hutang.php";
       }
       else

       if (isset($_GET['hutang_kas'])){
        include "halamans/mutasi/hutang_kas/hutang_kas.php";
       }
       else

       if (isset($_GET['hutang_bank'])){
        include "halamans/mutasi/hutang_bank/hutang_bank.php";
       }
       else

        if (isset($_GET['report_bank_account'])){
        include "halamans/report_bank_account.php";
       }
       else

         if (isset($_GET['kas_bank1'])){
        include "halamans/kas_bank1.php";
       }
       else

       if (isset($_GET['kredit_balance_deposit_game'])){
        include "halamans/kredit_balance_deposit_game/pemasukan_game.php";
       }
       else

       if (isset($_GET['kredit_balance_withdraw_game'])){
        include "halamans/kredit_balance_withdraw_game/pengeluaran_game.php";
       }
       else

       if (isset($_GET['pemasukan_kas'])){
        include "halamans/pemasukan/pemasukan_kas/pemasukan_kas.php";
       }
       else

       if (isset($_GET['pemasukan_bank'])){
        include "halamans/pemasukan/pemasukan_bank/pemasukan_bank.php";
       }
       else

       if (isset($_GET['pemasukan_hutang'])){
        include "halamans/pemasukan/pemasukan_hutang/pemasukan_hutang.php";
       }
       else

       if (isset($_GET['pengeluaran_hutang'])){
        include "halamans/pengeluaran/pengeluaran_hutang/pengeluaran_hutang.php";
       }
       else

       if (isset($_GET['pengeluaran_kas'])){
        include "halamans/pengeluaran/pengeluaran_kas/pengeluaran_kas.php";
       }
       else

       if (isset($_GET['pengeluaran_bank'])){
        include "halamans/pengeluaran/pengeluaran_bank/pengeluaran_bank.php";
       }
       else

        if (isset($_GET['report_data_bank'])){
        include "halamans/report/report_data_bank.php";
       }
       else

        if (isset($_GET['report_saldo_penghutang_all'])){
        include "halamans/penghutang/report_saldo_penghutang_all.php";
       }
       else

        if (isset($_GET['report_data_bank_all'])){
        include "halamans/report/report_data_bank_all.php";
       }
       else

         if (isset($_GET['report_grand_total_game_mm'])){
        include "halamans/total_transaksi_game_all/report_grand_total_game_mm.php";
       }
       else

        if (isset($_GET['report_grand_total_game_bk'])){
        include "halamans/total_transaksi_game_all/report_grand_total_game_bk.php";
       }
       else

        if (isset($_GET['report_grand_total_game_slot'])){
        include "halamans/total_transaksi_game_all/report_grand_total_game_slot.php";
       }
       else

        if (isset($_GET['report_grand_total_game_dingdong'])){
        include "halamans/total_transaksi_game_all/report_grand_total_game_dingdong.php";
       }
       else

         if (isset($_GET['hutang_produk'])){
        include "halamans/hutang_produk.php";
       }
       else

         if (isset($_GET['report_penghutang_rokok'])){
        include "halamans/report/report_penghutang_rokok.php";
       }
       else

        if (isset($_GET['report_mutasi_kas_ke_kas'])){
        include "halamans/report_mutasi/report_mutasi_kas_ke_kas.php";
       }
       else

        if (isset($_GET['report_mutasi_kas_ke_bank'])){
        include "halamans/report_mutasi/report_mutasi_kas_ke_bank.php";
       }
       else

         if (isset($_GET['report_mutasi_kas_ke_hutang'])){
        include "halamans/report_mutasi/report_mutasi_kas_ke_hutang.php";
       }
       else

        if (isset($_GET['report_mutasi_bank_ke_bank'])){
        include "halamans/report_mutasi/report_mutasi_bank_ke_bank.php";
       }
       else

         if (isset($_GET['report_mutasi_bank_ke_kas'])){
        include "halamans/report_mutasi/report_mutasi_bank_ke_kas.php";
       }
       else

        if (isset($_GET['report_mutasi_bank_ke_hutang'])){
        include "halamans/report_mutasi/report_mutasi_bank_ke_hutang.php";
       }
       else

         if (isset($_GET['report_mutasi_hutang_ke_kas'])){
        include "halamans/report_mutasi/report_mutasi_hutang_ke_kas.php";
       }
       else

         if (isset($_GET['report_mutasi_hutang_ke_bank'])){
        include "halamans/report_mutasi/report_mutasi_hutang_ke_bank.php";
       }
       else

       //  if (isset($_GET['cetak_report_transaksi_game_mm'])){
       //  include "halamans/cetak_report/cetak_report_transaksi_game_mm.php";
       // }
       // else

       //  if (isset($_GET['cetak_report_penghutang'])){
       //  include "halamans/cetak_report/cetak_report_penghutang.php";
       // }
       // else

        



          ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-center d-sm-inline-block">Copyright © OS8 2019
              <!--<a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>-->
            <!--<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>-->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
   <script type="text/javascript">
    
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp.');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
    }
  </script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
