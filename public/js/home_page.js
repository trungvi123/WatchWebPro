
// $(document).ready(function (){
//     var add_cart = $('.add_cart__icon ');
//     if(add_cart){
//         add_cart.each(function (elm){
//             elm.click = function (){
//                 console.log("hahaha")
//             }
//         });
//     }
// });

var btn__model= document.querySelectorAll('.btn__model');
var user = document.querySelector('.userName');
btn__model.forEach(function (elm){
    elm.onclick = function (){
        var item = elm.parentElement.parentElement;
        var item__name = item.querySelector('.product__name');
        if(!user){
            elm.setAttribute("data-toggle","modal");
        }else {
            elm.setAttribute("data-toggle","");
            elm.preventDefault();


        }
    }
})
 



