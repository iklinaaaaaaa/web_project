{{-- <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 80%; margin-left:25%; margin-top:10%;">
          <img src="$item" class="card-img-top" alt="" style="width: 90%;" height="230px; margin-left:50%;">
          <div class="card-body">
              <h6 class="card-title">
              </h6>
              <div class="card-text" style="font-weight: bold" >
              </div>
              <div class="b">
                <a href="detailproduct" class="btn btn-primary" style="border-radius: 50px; margin-left:80px; margin-top:5%;">Beli Sekarang</a>  
              </div>
          </div>
     </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header {
      background-image: linear-gradient(to right, #6a11cb, #2575fc);
      color: white;
      padding: 40px 0;
    }

    .header-title {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .header-subtitle {
      font-style: italic;
      font-size: 1.2rem;
    }

    .card {
      border: none;
      margin-bottom: 20px;
      border-radius: 15px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #6a11cb;
      color: #fff;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .product-image {
      max-height: 200px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
    }

    .btn-custom {
      background-color: #2575fc;
      border-color: #2575fc;
      color: white;
      border-radius: 50px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .btn-custom:hover {
      background-color: #6a11cb;
      transform: scale(1.05);
    }

    .btn-outline-danger {
      border-radius: 50px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .btn-outline-danger:hover {
      background-color: #dc3545;
      color: white;
      transform: scale(1.05);
    }

    footer {
      background-color: #f8f9fa;
      padding: 40px 0;
      margin-top: 40px;
      border-top: 5px solid #6a11cb;
    }

    .footer-text {
      color: #6c757d;
      font-size: 1rem;
    }

    .highlight {
      background-color: #ffefc3;
      padding: 10px;
      border-radius: 10px;
      font-size: 0.9rem;
    }

    .badge {
      font-size: 0.9rem;
      border-radius: 5px;
      padding: 5px 10px;
      background-color: #ff6347;
      color: white;
    }
  </style>
</head>
<body>
  <form action="/keranjang">

      <header class="text-center">
          <div class="container">
      <h1 class="header-title">Keranjang Belanja Anda</h1>
      <p class="header-subtitle">"Belanja dengan Ketenangan dan Keberkahan"</p>
    </div>
</header>

<!-- Cart Section -->
<div class="container my-5">
    <div class="row">
        <!-- Cart Items -->
      <div class="col-lg-8">
          <!-- Item Pertama -->
          <div class="card shadow-sm">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
                <img src="{{asset('assets/bootstrap-5.3.2-dist/foto/toner.jpg')}}" class="img-fluid product-image" alt="Produk Religius">
              </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Centella<span class="badge"></span></h5>
                <p class="card-text text-muted">Toner Brighthening</p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="text-primary fw-bold">Rp 93.000</span>
                  <button class="btn btn-outline-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>
          </div>
        </div>

        <!-- Item Kedua -->
        <div class="card shadow-sm">
            <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <img src="{{asset('assets/bootstrap-5.3.2-dist/foto/face wash.jpg')}}" class="img-fluid product-image" alt="Produk Religius">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">CENTELLA</h5>
                <p class="card-text text-muted">Face wash Brighthening</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-primary fw-bold">Rp 98.000</span>
                  <button class="btn btn-outline-danger btn-sm">Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Summary Section -->
      {{-- <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header text-center">
              <h4 class="mb-0">Ringkasan Pesanan</h4>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  Subtotal
                  <span>Rp 200.000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pajak
                <span>Rp 10.000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center highlight">
                <strong>Total</strong>
                <strong>Rp 210.000</strong>
              </li>
            </ul>
            <a href="/checkout" class="btn btn-primary">checkout</a>
        </div>
    </div>
</div>
</div>
</div> --}}

<!-- Footer -->
{{-- <footer class="text-center">
    <div class="container">
        <p class="footer-text">&copy; 2024 E-commerce Religius. All rights reserved.</p>
        <p class="footer-text">"Berbelanja dengan hati yang penuh ketenangan."</p>
    </div>
</footer> --}}

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</form>
</html>