var method = document.getElementById("method");
var buttonn = document.getElementById("shopping-cart");
var close = document.getElementsByClassName("close")[0];


var order = document.getElementsByClassName("order")[0];

buttonn.onclick = function () {
  modal.style.display = "block";
}
close.onclick = function () {
  method.style.display = "none";
}


order.onclick = function () {
  alert("thank you when choosing us, Horange luv u")
}
window.onclick = function (event) {
  if (event.target == buttonn) {
        modal.style.display = "0";
  }
}
var add_item = document.getElementsByClassName("clickcart");
    for (var i = 0; i < add_item.length; i++) {
        var add = add_item[i];
            add.addEventListener("click", function (event) {

    var button = event.target;
    var product = button.parentElement.parentElement;
    var img = product.parentElement.getElementsByClassName("item-photo")[0].src
    var title = product.getElementsByClassName("item-name")[0].innerText
    var price = product.getElementsByClassName("item-price")[0].innerText
    addItemToCart(title, price, img)
    
    modal.style.display = "block";
    
    updatecart()
  })
}

function addItemToCart(title, price, img) {
  var cartRow = document.createElement()
  cartRow.classList.add("table_list")
  var cartItems = document.getElementsByClassName("item-name")[0]
  var cart_title = cartItems.getElementsByClassName("item-name")
  
  for (var i = 0; i < cart_title.length; i++) {
    if (cart_title[i].innerText == title) {
      alert("youve got it")
      return
    }
  }

  
}