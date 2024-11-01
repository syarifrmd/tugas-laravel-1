<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
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
        <!-- Sidebar Navigation -->
        <nav class="bg-light p-3" style="min-width: 200px;">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link link-kiri-active" href="#databarang">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-kiri" href="/datatransaksi">Data Transaksi</a>
                </li>
                <li class="nav-item mt-4">
                <a href="/login" class="btn btn-danger">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <!-- Data Barang Page -->
            <section id="data-barang">
                <h2 style="color: #7969ed; font-weight: bold;">Data Barang</h2>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>HP iPhone 13</td>
                            <td>Rp 15.000.000</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>HP Samsung Galaxy S22</td>
                            <td>Rp 13.000.000</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>HP Xiaomi Redmi Note 12</td>
                            <td>Rp 3.500.000</td>
                            <td>50</td>
                        </tr>
                    </tbody>
                </table>
            </section>

           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
