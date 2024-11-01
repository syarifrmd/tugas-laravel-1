<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .link-kiri {
            color: green;
            font-weight: ;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
        }
        .link-kiri-active {
            color: #7969ed;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
    <nav class="bg-light p-3" style="min-width: 200px;">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link link-kiri" href="/databarang">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-kiri-active" href="#data-transaksi">Data Transaksi</a>
                </li>
                <li class="nav-item mt-4">
                <a href="/login" class="btn btn-danger">Logout</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid p-4">
              <!-- Data Transaksi Page -->
             <section id="data-transaksi" >
                <h2 style="color: #7969ed; font-weight: bold;">Data Transaksi</h2>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>T001</td>
                            <td>HP iPhone 13</td>
                            <td>1</td>
                            <td>Rp 15.000.000</td>
                            <td>2024-10-01</td>
                        </tr>
                        <tr>
                            <td>T002</td>
                            <td>HP Samsung Galaxy S22</td>
                            <td>2</td>
                            <td>Rp 26.000.000</td>
                            <td>2024-10-05</td>
                        </tr>
                        <tr>
                            <td>T003</td>
                            <td>HP Xiaomi Redmi Note 12</td>
                            <td>3</td>
                            <td>Rp 10.500.000</td>
                            <td>2024-10-10</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
             

    </div>
        
  
</body>
</html>