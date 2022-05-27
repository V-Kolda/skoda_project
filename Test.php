<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Bootstrap Product Card</title>
    <!----Bootstrap CSS link----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!---Fontawesome CDN Link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!----Custom CSS Filw Link--->
    <link rel="stylesheet" href="style.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Lexend', sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5 !important;
}
:root{ --main-color: #76a713; }
.boxc{
    width: 1145px;
    height: 420px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.product-grid{
    font-family: 'Lexend', sans-serif;
    text-align: center;
    margin: 0 0 10px;
    border: 10px solid #fff;
    transition: all 0.4s ease 0s;
}
.product-grid:hover{ box-shadow: 0 15px 45px rgba(131,131,131,.3); }
.product-grid .product-image{ position: relative; }
.product-grid .product-image a.image{display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid .product-links{
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    position: absolute;
    top: 10px;
    right: 10px;
    transition: all 0.4s ease 0s;
}
.product-grid:hover .product-links{ opacity: 1; }
.product-grid .product-links li{
    margin: 0 0 8px;
    transform: translateX(-10px);
    transition: all 0.3s ease 0s;
}
.product-grid:hover .product-links li{ transform: translateX(0);}
.product-grid .product-links li a{
    color: var(--main-color);
    background-color: rgba(118,167,19,.15);
    font-size: 16px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    border-radius: 3px;
    display: block;
    transition: all 0.2s ease-out;
}
.product-grid .product-links li a:hover{
    color: #fff;
    background: var(--main-color);
}
.product-grid .product-content{ 
    background: #fff;
    padding: 18px 12px 12px;
    position: relative;
}
.product-grid .title{
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 10px;
}
.product-grid .title a{
    color: #071c1f;
    transition: all 0.3s ease 0s;
    text-decoration: none;
}
.product-grid .title a:hover{ color: var(--main-color); }
.product-grid .price{
    color: #ff7d3f;
    font-size: 17px;
    font-weight: 700;
}
.product-grid .price span{
    color: #071c1f;
    text-decoration: line-through;
}
.product-grid .add-to-cart{
    color: #fff;
    background-color: var(--main-color);
    font-size: 19px;
    line-height: 40px;
    width: 40px;
    height: 40px;
    border-radius: 40px;
    transform: scale(0);
    position: absolute;
    bottom: -28px;
    right: -4px;
    transition: all 0.3s ease 0s;
}
.product-grid:hover .add-to-cart{ transform: scale(1); }
.product-grid .add-to-cart:hover{ background: #ff7800; }
@media screen and (max-width: 990px){
    .product-grid{ margin-bottom: 30px; }
}
    </style>
</head>
<body>


<div class="container">
<div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="https://cdn-images.farfetch-contents.com/18/34/28/99/18342899_39396783_300.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price">$75.55</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="https://m.media-amazon.com/images/I/61EAIo1fgmL._AC_UX679_.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Jacket</a></h3>
                    <div class="price"><span>$85.99</span> $69.99</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="image/img-3.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price">$75.55</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="image/img-4.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price">$75.55</div>
                    <a class="add-to-cart" href="#">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="open_grepper_editor" title="Edit & Save To Grepper"></div>



  <!----Bootstrap JS File Link----->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

