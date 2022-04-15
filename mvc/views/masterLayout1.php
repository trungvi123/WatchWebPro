<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterLayout1</title>
    <link rel="stylesheet" href="./public/css/partial.css">
    <link rel="stylesheet" href="./public/css/MasterLayout1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header>
        <?php require_once "./partial/header.php"?>    
    </header>
    <main>
        <div class="container__custom">
                <div class="row">
                    <div class="sideBar col-lg-3">
                        <aside class="nav_menu-2">
                            <span class="sideBar__title">DANH MỤC SẢN PHẨM</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <li class="menu__item"><a href=""> Đồng hồ nam </a></li>
                                    <li class="menu__item"><a href=""> Đồng hồ nữ </a></li>
                                    <li class="menu__item"><a href=""> Đồng hồ đôi </a></li>
                                    <li class="menu__item">
                                        <a href=""> Phụ kiện </a>
                                        <i class="PhuKien-toggle fa-solid fa-angle-down"></i>
                                        <div class="menu__box--child">
                                            <ul class="menu__list--child">
                                            <li class="menu__item--child"><a href="">Dây Da Hirsch</a></li>
                                            <li class="menu__item--child"><a href="">Dây Da ZRC</a></li>
                                            <li class="menu__item--child"><a href="">Hộp Đồng Hồ</a></li>
                                            <li class="menu__item--child"><a href="">D.Vụ In Logo Lên Đồng Hồ</a></li>
                                            <li class="menu__item--child"><a href="">Khắc Laser Lên Đồng Hồ</a></li>
                                        </ul>
                                        </div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        



                    </div>
                    <div class="mainContent col-lg-9">


                    </div>



                </div>
            </div>



    </main>

    

</body>
    <footer class="footer text-white p-5">
        <?php require_once "./partial/footer.php" ?>
    </footer>
</html>