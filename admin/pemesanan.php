<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
     <!-- component -->
<div class="min-h-screen flex">
  <div class="py-12 px-10 w-1/4">
    <div class="flex space-2 items-center border-b-1 pb-4">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div class="ml-3">
        <h1 class="text-3xl font-bold text-indigo-600">MAS</h1>
        <p class="text-center text-sm text-indigo-600 mt-1 font-serif">L A U N D R Y</p>
      </div>
    </div>
    <div class="flex items-center space-x-0.5 p-0.5 bg-indigo-600 rounded-md"></div>
    <div class="mt-8">
      <ul class="space-y-8">
      <li>
          <a href="dashboard.php" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Dashboard</a
          >
        </li>
        <li>
          <a href="pelanggan.php" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
            Pelanggan</a
          >
        </li>
        <li>
          <a href="paket.php" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Paket</a
          >
        </li>
        <li>
          <a href="pemesanan.php" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
            </svg>
            Pemesanan</a
          >
        </li>
        <li>
          <a href="transaksi.php" class="flex items-centerx text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Transaksi</a
          >
        </li>
      </ul>
    </div>
    <div class="flex mt-20 space-x-4 items-center">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
      </div>
      <a href="#" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
    </div>
  </div>
  <div class="bg-indigo-50 flex-grow py-12 px-10">
    <div class="flex justify-between">
      <div>
        <h4 class="text-sm font-bold text-indigo-600">Hi, Did get you a new customer?</h4>
        <h1 class="text-4xl font-bold text-indigo-900 mt-">--- DATA PEMESANAN ---</h1>
      </div>
      <div>
        <div class="flex items-center border rounded-lg bg-white w-max py-2 px-4 space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input class="outline-none" type="text" placeholder="Search" />
        </div>
      </div>
    </div>

 <!-- Componen -->
 <main id="main" class="main"> 
<?php
    include "koneksi.php";
    ?>
    <br></br>
    <a href = "tambah_pemesanan.php" class = "p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Tambahkan Pemesanan</a>
    <!-- <a  class = "p-2 pl-5 pr-5 bg-blue-800 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-800" href="#" onclick="window.print();" role = "button">Cetak Laporan</a> -->

    <div class="flex mt-6 justify-center">
    <table class="min-w-full table-auto">
    <thead class="justify-between">
              <tr class="text-center bg-indigo-600">
                <!-- <th class="px-10 py-2">
                  <span class="text-indigo-50">NO.</span>
                </th> -->
                <th class="px-10 py-2">
                  <span class="text-indigo-50">TANGGAL MASUK</span>
                </th>
                <th class="px-10 py-2">
                  <span class="text-indigo-50">NAMA</span>
                </th>
                <th class="px-10 py-2">
                  <span class="text-indigo-50">JENIS LAUNDRY</span>
                </th>

                <th class="px-10 py-2">
                  <span class="text-indigo-50">TOTAL HARGA</span>
                </th>
                <th class="px-10 py-2">
                  <span class="text-indigo-50">STATUS LAUNDRY</span>
                </th>
                <th class="px-10 py-2">
                  <span class="text-indigo-50">PEMBAYARAN</span>
                </th>
              </tr>
    </thead>
  <tbody>
  <?php
            $qry_transaksi = mysqli_query($koneksi,"SELECT a.*, b.nama, SUM(c.harga) as total FROM transaksi a JOIN member b ON a.id_member=b.id_member JOIN detail_transaksi c ON a.id_transaksi=c.id_transaksi GROUP BY a.id_transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi = mysqli_query($koneksi,"SELECT a.*, b.jenis FROM detail_transaksi a JOIN paket b ON a.id_paket=b.id_paket WHERE a.id_transaksi = '".$data_transaksi['id_transaksi']."'");
                $detail = '<table border="0" style="border-collapse: collapse;">';
                while($data_detail_transaksi=mysqli_fetch_array($qry_detail_transaksi)){
                    $detail .= '
                        <tr>
                            <td>'.$data_detail_transaksi['jenis'].'</td>
                            <td>('.$data_detail_transaksi['qty'].')</td>
                            <td>'.$data_detail_transaksi['harga'].'</td>
                        </tr>
                    ';
                }
                $detail .= '</table>'; 
            ?>    
                 <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <!-- <td><?=$data_transaksi['id_transaksi']?></td> -->
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static"><?=$data_transaksi['tgl']?></td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static"><?=$data_transaksi['nama']?></td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static"><?=$detail?></td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Rp <?=$data_transaksi['total']?>,00.</td>  
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <form action="ubah_status.php" method="post">
                                                <input type="hidden" name="id_transaksi" value="<?=$data_transaksi['id_transaksi']?>">
                                                <select name="status" class="form-select">
                                                    <option value=""disabled selected><?=$data_transaksi['status']?></option>
                                                    <option value="Baru">Baru</option>
                                                    <option value="Sedang Diproses">Proses</option>
                                                    <option value="Selesai">Selesai</option>
                                                    <option value="Diambil">Diambil</option>
                                                </select>
                                                <input type="submit" value="OK" class="btn text-white" style="background-color: #0041C2;">
                                            </form>                
                    </td>                   
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <form action="ubah_bayar.php" method="post">
                        <input type="hidden" name="id_transaksi" value="<?=$data_transaksi['id_transaksi']?>">
                        <select name="dibayar" class="form-select">
                            <option value=""selected><?=$data_transaksi['dibayar']?></option>
                            <option value="Dibayar">Dibayar</option>
                        </select>
                        <!-- <button type="submit" value="Bayar" name="status" class="btn text-white" style="background-color: #0041C2;"  href="ubah_bayar.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']?>">
                            Bayar
                        </a> -->
                        <input type="submit" value="Bayar" class="btn text-white" style="background-color: #0041C2;">
                        </form>                   
                    </td> 
                    </tr>                   
            <?php 
                } 
            ?>       
    </table>
</table>

</div>
</div>
</div>
</main>
</body>
</html>