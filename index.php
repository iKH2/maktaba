<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة أيمن</title>
    <!------------------- google fonts ------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!------------------- Bootstrap v5.2.0 ------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!------------------- Font-awesome 6.2.0 ------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!------------------- Main CSS file ------------------->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!------------------- Header ------------------->
    <header>
        <!------------------- Navbar ------------------->
        <?php include "./header.php" ?>
        <!-- Banner Image  -->
        <div class="overlay"></div>
        <div class="banner-image w-100 vh-100 d-flex justify-content-right align-items-center">
            <div class="content">
                <div class="container">
                    <h1 class="text-white">مكتبة أيمن</h1>
                    <p>كل ما تحتاجه لتُبدع!</p>
                </div>
            </div>
        </div>
    </header>
    <!------------------- End of Header ------------------->
    <section class="section-1">
        <div class="container">
            <h3 class="sec-1-t">الأقسام الرئيسية</h3>
            <div class="row align-items-center">

                <div class="col-md-4">
                    <a class="link" href="../maktaba/products.php">
                        <div class="s1-item">
                            <span>قرطاسية</span>
                        </div>
                    </a>
               </div>

               <div class="col-md-4">
                    <a class="link" href="../products.php">
                        <div class="s1-item">
                            <span>هدايا</span>
                        </div>
                    </a>
               </div>

               <div class="col-md-4">
                    <a class="link" href="../products.php">
                        <div class="s1-item">
                            <span>اكسسوارات الجوال</span>
                        </div>
                    </a>
               </div>

            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <h3 class="sec-2-t">الأكثر مبيعاً</h3>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="./img/product.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">فاصل كتاب</h5>
                            <p class="card-text">10 ر.س</p>
                            <a href="#" class="cart" style="
                            text-decoration: none; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: var(--color-three); padding: 4px; width: 30px; height: 30px; color: var(--color-one); margin-left: 4px;
                            "><i class="fa-solid fa-cart-shopping"></i></a>
                            <a href="#" class="fav" style="
                            text-decoration: none; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: var(--color-three); padding: 4px; width: 30px; height: 30px; color: var(--color-one);
                            "><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <h3>موقعنا</h3>
        </div>
    </section>


    <!------------------- Footer ------------------->
    <?php include "./footer.php" ?>
    <!------------------- End of footer ------------------->

    <!------------------- Java Script ------------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>