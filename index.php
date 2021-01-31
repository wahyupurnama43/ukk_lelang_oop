<!doctype html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lelang Online</title>

    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="menu">

        <ul class="menu-list" id="nav">
            <li><a href="">PRODUCT</a></li>
            <li><a href="">ABOUT US</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>

        <button class="menu-toggle" id="menu-toggle">
            <i data-feather="menu"></i>
        </button>

        <ul class="menu-login">
            <li><a href="/views/login.php">LOGIN</a></li>
            <li><a href="/views/register.php">SIGN UP</a></li>
        </ul>

    </nav>

    <section class="hero">
        <img src="./assets/img/hero.jpg" alt="">
        <div class="now">
            <a href="">NOW</a>
        </div>
    </section>

    <section class="product">
        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>
        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>
        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>

        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>
        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>
        <div class="card">
            <img src="./assets/img/p-1.jpeg" alt="">
            <h1>Product</h1>
            <p class="des">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam possimus, sapiente maiores, odio quas est delectus in officia dolorem facilis!
            </p>
            <p class="price">
                Bind From Rp 90.000
            </p>

            <button class="btn bind">BIND</button>
        </div>

    </section>

    <footer>
        Copyright &copy; 2020 by Wahyu Purnama
    </footer>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>

        const nav = document.getElementById('nav');
        const hum = document.getElementById('menu-toggle');

        hum.addEventListener('click',function(){
            nav.classList.toggle('show');
        });
        feather.replace();
    </script>
</body>

</html>
