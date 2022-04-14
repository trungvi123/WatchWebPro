<!-- Trang nay de tesst co so du lieu th -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>


* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
a {
    text-decoration: none !important;
}


html {
    --greyColor:#9FA4A4;
    --textColor: black;
    --hoverColor:#E2BA48;
    --titleColor:#3c3451;
}

header {
    position: relative;
}

.nav {
    background-color: transparent;
    height: 90px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    justify-content: space-evenly;
    display: flex;
}
/*-----------------NAV_LEFT---------------*/
.logo {
    height: 100px;
  
}

/*-----------------NAV_MID---------------*/

.nav__list {
    list-style: none;
    display: flex;
    align-items: center;
    margin-bottom: 0; /*Trinh duyet mr bt sẳn nên khử*/
}

.nav__list-item + .nav__list-item::before{
    content: "|";
    color: rgba(255,255,255,0.3) !important;
}

.nav__list-link{
    font-size: 0.9rem;
    font-weight: 600;
    color: white;
    padding: 8px;
    cursor: pointer;

}

.nav__list-link:hover {
    color: var(--hoverColor);
     text-decoration: none;
}
/*-----------------NAV_RIGHT---------------*/
.nav__box-icon {
    display: flex;
    align-items: center;
    color: white;
}

.nav__icon {
    padding: 8px 12px;
}
.nav__icon:hover{
    color: var(--hoverColor);
    cursor: pointer;
}

/*-----------------DROP-DOWN---------------*/
.custom__dropdown {
    position: relative;

}

.custom__dropdown:hover .custom__dropdown-menu {
    display: block;
}

.custom__search {
    --top__is: 40px;
    --right__is: -100px;
    --padding__is: 25px 25px;
    --width__is: 590px;
    --height__is: 90px;
    --top__row:-24px;
    --right__row:106px;
}

.custom__cart {
    --top__is: 40px;
    --right__is: -20px;
    --padding__is: 20px 20px;
    --width__is: 200px;
    --height__is: 90px;
    --top__row:-24px;
    --right__row:24px;
}

.custom__dropdown-menu::before {
    content: "";
    border-width: 12px;
    border-style: solid;
    border-color: transparent  transparent white transparent ;
    position: absolute;
    top: var(--top__row);
    right: var(--right__row);
}

.custom__dropdown-menu {
    position: absolute;
    top: var(--top__is);
    background-color: white; 
     border-radius: 10px;
    border: 3px solid var(--hoverColor);
    right: var(--right__is);
    width: var(--width__is);
    height: var(--height__is);
    padding: var(--padding__is);
    display: none;
}
.custom__dropdown-items{
    border: 1px solid #473F5A;
    border-radius: 20px;
    height: 100%;
    padding: 5px 10px;
}

.custom__dropdown-item{
    outline: none;
    border: none;
    height: 100%;
    width: 95%;
}

.custom__dropdown-text {
    font-size: 1rem;
    color: black;
}

/*-----------------SLIDER---------------*/
.carousel-item img {
    height: 600px;
    width: 100%;
}




/*************************************************************/

main {
    height: auto;
}

.carousel-control-prev {
    visibility: hidden;
    opacity: 0;
}

.carousel-control-next {
    visibility: hidden;
    opacity: 0;
}

.carousel:hover .carousel-control-prev,
.carousel:hover .carousel-control-next{
    visibility: visible !important;
    opacity: 1;
    transition: linear 0.8s ;
}
/*Thu hẹp độ dài của phạm vi mũi tên*/
.carousel-control-prev,
.carousel-control-next {
   width: 8% !important; 
}

/**********************************************************************************/
.carousel-item {
    position: relative;
}

.info-img {
    position: absolute;
    color: white;
    top: 10rem;
    left: 7rem;
    width: 40%;
}

.info-img__title {
    font-size: 3rem;
}

.info-img__text {
    font-size: 1.1rem;
}

.info-btn {
    padding: 15px 50px;
    border-color: var(--secondaryColor);
    border-radius: 5px;
    background-color: transparent;
}

.info-btn:hover {
    background-color: var(--secondaryColor);
}

.submit-text {
    font-weight: 700;
    color: white;
}

/*---------------------------------------------------------------------------*/
.row {
     margin-right: 0 !important; 
     margin-left: 0 !important;
}

.footer {
    background-color: black;
}

.h2_title::before {
    border-bottom: 4px double #e4e4e4;
    bottom: 3px;
    content: "";
    left: 0; 
    right: 0;
    margin: 0 auto;
    position: absolute;
    width: 50px;
    z-index: 1;
}

.h2_title{
    color: var(--titleColor);
    font-size: 32px;
    font-weight: bold;
    line-height: 32px;
    margin-bottom: 16px;
    padding-bottom: 25px;
    position: relative;
    text-align: center;
    margin-top: 60px;
}

.old__price {
    text-decoration: line-through;
}
/*-------------------------------Product-----------------------------------*/

.row {
    margin: 20px !important;
    justify-content: space-evenly;
}
.product__box {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 30px;
    border-width: 2px;
    border-style: solid;
    border-color: transparent;
    padding: 15px;
    position: relative;
    overflow: hidden;
}
.product__box:hover {
    border-width: 2px;
    border-style: dashed;
    border-color: #E1E1E1;
    cursor: pointer;
}

.product__box:hover .product__img{
    transform: scale(1.1,1.1);
    transition: all 0.5s ease;
}

.product__box:hover .add_cart {
    display: block;
    opacity: 0;
    animation: cart_up 0.2s linear forwards ;
}

@keyframes cart_up {
    to {
       transform: translateY(-20px); 
       opacity: 1;
    }

}
.product__img {
    width: 290px;
    height: 290px;
    object-fit: contain;
    margin-bottom: 10px;   
}
.product__info {
    display: flex;
    flex-direction: column;
    flex: 1;
}

.type {
    font-size: 0.7rem;
    color: var(--greyColor);
    text-transform: uppercase;
    margin-bottom: 3px;
}

.product__name {
    color: var(--textColor);
    text-transform: uppercase;
    font-size: 0.9rem;
}
.product__name:hover {
    color: var(--hoverColor);
}
.old__price {
    color: var(--greyColor);
    font-size: 0.9rem;
}

.new__price {
    color: var(--textColor);
    font-size: 0.9rem;
}

.add_cart {
    position: absolute;
    bottom: 110px;
    left: 20px;
    width: 30px;
    height: 30px;
    display: none;
}

.add_cart__icon {
    color: black;
    font-size: 30px;
}

/*-------------------------------SERVICE---------------------------------------- */
.service{
    padding: 50px 0;
    background-image: url(http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/movement-gears-background.jpg); 
}
.service__item {
    height: 90px;
    display: flex;
    align-items: center;
    padding: 0 30px;
}

.service__icon{
    font-size: 40px;
    color: white;
}
.service__content {
    flex: 1;
    margin-left: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.service__content h3{
    font-size: 20px;
    font-weight: 700;
    color: white;
    margin: 0;
}

.service__content p{
    font-size: 14px;
    color: var(--greyColor);
    margin: 0;
}

.not-mr-lr{
    margin-left: 0 !important;
    margin-right: 0 !important;
}
/*-------------------------------Banner---------------------------------------- */

.banner__item:hover .banner__img{
    transform: scale(1.1,1.1);
    transition: all 0.8s ease;
}

.banner__img {
    object-fit: contain;
    width: 100%;
}

.banner__text {
    position: absolute;
    top: 50px;
    right: 40px;
    width: 210px;
    height: 200px;
}
.banner__text h3 {
    color: var(--hoverColor);
    text-align: right;
    font-size: 30px;
    font-weight: 700;
    
}

.banner__text h4 {
    color: white;
    font-size: 18px;
    text-align: right;
}

.banner__text a {
    color: var(--hoverColor);
    padding: 6px 18px;
    border: 2px solid var(--hoverColor);
    font-weight: 600;
    right: 0;
    position: absolute;
    margin-top: 10px;
}









</style>
</head>



<body>
    <section class="row">
    <?php 
        while ($row = mysqli_fetch_assoc($data['content'])){
            echo "
            
                <div class=\"col-lg-3 col-sm-6 product__box\">
                <img class=\"product__img\" src=\"{$row["img_source"]}\" alt=\"\">
                <div class=\"product__info\">
                    <p class=\"type\">{$row["type"]}</p>
                    <a class=\"product__name\" href=\"\">{$row["name"]}</a>
                    <div class=\"price__box\">
                    <span class=\"old__price\">{$row["old_price"]} đ</span>
                    <span class=\"new__price\">{$row["new_price"]} đ</span>
                    </div>
                </div>
                <div class=\"add_cart\">
                    <a href=\"\"><i class=\"add_cart__icon fa-solid fa-cart-plus\"></i></a>
                </div>
                </div>
            
            ";
        }
    
    ?>    
    </section>
    

</body>
</html>