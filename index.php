<?php include "./header.php" ?>
<!------------------- header ------------------->
<!-- Banner Image  -->
<div class="overlay"></div>
<div class="banner-image w-100 vh-100 d-flex justify-content-right align-items-center">
    <div class="content">
        <div class="container">
            <h1 class="text-white"></h1>
            <p>كل ما تحتاجه لتُبدع!</p>
        </div>
    </div>
</div>
<!------------------- End of Header ------------------->
<!------------------- section-1 ------------------->
<section class="section-1">
    <div class="container">
        <h3 class="sec-1-t">الأقسام الرئيسية</h3>
        <div class="row align-items-center">

            <div class="col-md-4">
                <a class="link" href="./products.php">
                    <div class="s1-item">
                        <span>قرطاسية</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a class="link" href="./products.php">
                    <div class="s1-item">
                        <span>هدايا</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a class="link" href="./products.php">
                    <div class="s1-item">
                        <span>اكسسوارات الجوال</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!------------------- end of section-1 ------------------->
<!------------------- section-1.1 ------------------->
<section class="section-1-1">
    <div class="container">
        <h3>ما يميّزنا</h3>
        <div class="sec-1-1-content">
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="sec-1-1-item">
                        <div class="section-1-1-item-img">
                            <img src="img/quality.svg" alt="" width="100" height="100">
                        </div>
                        <div class="sec-1-1-item-title">
                            <h4>منتجات أصلية</h4>
                        </div>
                        <div class="sec-1-1-item-detail">
                            <p>منتجاتنا هي الأفضل وذات جودة عالية ويتم اختيارها بعناية لتناسب ذوقكم الرفيع</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sec-1-1-item">
                        <div class="section-1-1-item-img">
                            <img src="img/customer-service-agent.svg" alt="" width="100" height="100">
                        </div>
                        <div class="sec-1-1-item-title">
                            <h4>الدعم الفنّي</h4>
                        </div>
                        <div class="sec-1-1-item-detail">
                            <p>نقدم دعم فنّي على مدار الساعة مع مركز دعم متكامل لجميع استفساراتكم</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sec-1-1-item">
                        <div class="section-1-1-item-img">
                            <img src="img/shopping-list.svg" alt="" width="100" height="100">
                        </div>
                        <div class="sec-1-1-item-title">
                            <h4>تنوع المنتجات</h4>
                        </div>
                        <div class="sec-1-1-item-detail">
                            <p>نوفر كل ما تحتاجه تحت سقف واحد من قرطاسية وألعاب واكسسوارات الجوال وغيرها</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sec-1-1-item">
                        <div class="section-1-1-item-img">
                            <img src="img/delivery-truck.svg" alt="" width="100" height="100">
                        </div>
                        <div class="sec-1-1-item-title">
                            <h4>التوصيل السريع</h4>
                        </div>
                        <div class="sec-1-1-item-detail">
                            <p>نوصّل لجميع الأحياء وفي نفس اليوم للطلبات قبل الساعة الخامسة مساءً</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- end of section-1.1 ------------------->
<!------------------- section-2 ------------------->
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
                        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a href="#" class="fav"><i class="fa-solid fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!------------------- end of section-2 ------------------->
<!------------------- section-3 ------------------->
<section class="section-3" id="contact-us">
    <div class="container">
        <h3>اتصل بنا</h3>
        <div class="row g-4">
            <div class="col-md-5">
                <div class="form-area">
                    <form>
                        <div class="mb-3">
                            <label for="contact-t" class="form-label">الموضوع</label>
                            <input type="text" class="form-control" id="contact-t">
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">عنوان البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea" class="form-label">الرسالة</label>
                            <textarea class="form-control" id="FormControlTextarea" rows="4"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">إرسال</button>
                    </form>
                </div>
            </div>

            <div class="col-md-7">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.899469078283!2d37.09540097932759!3d36.21763838281101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c45fc5046e4b3b4!2zMzbCsDEyJzU5LjciTiAzN8KwMDUnNDIuMiJF!5e0!3m2!1sar!2ssa!4v1664186677078!5m2!1sar!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- end of section-3 ------------------->
<!------------------- Footer ------------------->
<?php include "./footer.php" ?>
<!------------------- End of footer ------------------->