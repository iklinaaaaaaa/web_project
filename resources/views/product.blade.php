<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: rgb(99, 159, 216);
            color: rgb(4, 19, 27);
        }

        header {
            background-color: rgb(99, 159, 216);
            color: rgb(39, 20, 23);
            padding: 15px 0;
            text-align: center;
            margin-top: 20px;
        }

        header h1 {
            margin-bottom: 10px;
            margin-top: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: rgb(39, 20, 23);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url(img/cover_w1920_h590_website-revamp_others-1903x582.jpg);
            background-size: cover;
            background-position: center;
            color: rgb(39, 20, 23);
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 55px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .hero a {
            background-color: rgb(99, 159, 216);
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .hero a:hover {
            background-color: #555;
        }

        .hero img{
            width: 1250px;
            height: 450px;
        }

        .products {
            padding: 50px 20px;
            text-align: center;
        }

        .products h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .product-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 60px);
            height: 800px;
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
            height: 500px;
        }

        .product h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product p {
            margin-bottom: 15px;
        }

        .product a {
            display: inline-block;
            background-color: rgb(99, 159, 216);
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .product a:hover {
            background-color: rgb(99, 159, 216);
        }

        .about {
            background-color: rgb(99, 159, 216);
            padding: 50px 20px;
            text-align: center;
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .about p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 18px;
        }


        footer {
            background-color: rgb(99, 159, 216);
            color: #770c60;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .product {
                width: calc(50% - 40px);
            }

            .hero h2 {
                font-size: 36px;
                margin-top: 30px;
            }

            .hero p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .product {
                width: calc(100% - 30px);
            }

            .hero h2 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1 style="font-size: 100px">Centella Skincare</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang Kami</a></li>
                {{-- <li><a href="#">Kontak</a></li> --}}
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        {{-- <img src="{{asset('assets/bootstrap-5.3.2-dist/foto/images2.jpeg')}}" alt=""> --}}
        {{-- <h2>Kulit Cantik Berseri</h2>
        <p>Temukan produk perawatan kulit terbaik untuk Anda.</p>
        <a href="#">Belanja Sekarang</a> --}}
    </section>

    
    <section class="products" id="">
        <h2>Shop Our Products</h2>
        <div class="product-list">
        @foreach ($product as $item)
            <div class="product">
            <img src="{{asset('assets/bootstrap-5.3.2-dist/foto/'.$item->foto)}}" alt="Paris" width="400" height="300">
                <h3>{{$item->name}}</h3>
                <h3>{{$item->deskripsi}}</h3>
                <p>{{$item->harga}}</p>
                <a href="/user/shop/{{$item->id}}">Beli Sekarang</a>
            </div>
        @endforeach
        

        </div>
    </section>

    <section class="about" id="">

        <h2>Tentang Kami</h2>
        <p>Kami adalah toko yang menyediakan produk skincare berkualitas tinggi untuk perawatan kulit Anda. Dengan bahan-bahan alami dan teknologi terbaru, produk kami dirancang untuk memberikan hasil terbaik bagi kesehatan dan kecantikan kulit Anda.</p>
    </section>

    <footer>
        <p>&copy; 2024 Skincare . Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
<script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>