<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
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
    <?php include "./header.php" ?>
    <section class="contact">
        <div class="container">
            <div class="form-area">
                <h3>تواصل معنا</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">الاسم</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">عنوان البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">لن يتم مشاركة ايميلك مع أي جهة أخرى.</div>
                    </div>
                    <div class="mb-3">
                        <label for="FormControlTextarea" class="form-label">الرسالة</label>
                        <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">إرسال</button>
                </form>
            </div>
        </div>
    </section>
    <!------------------- Java Script ------------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <?php include "./footer.php" ?>
</body>
</html>