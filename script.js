const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');



  
function showProduct(brand, name, image, price) {
    
    document.getElementById('cart-product-image').src = image;
    document.getElementById('cart-product-name').textContent = brand + ' ' + name;
    document.getElementById('cart-product-price').textContent = 'Rs.' + price;
  
    window.location.href = 'order.php';
  }


  

function toggleDropdown() {
          const loginDropdown = document.getElementById("loginDropdown");
          loginDropdown.style.display = (loginDropdown.style.display === "block") ? "none" : "block";
      }
      window.addEventListener("click", function(event) {
          const loginDropdown = document.getElementById("loginDropdown");
          const lgBag = document.getElementById("lg-bag");
          if (event.target !== lgBag && !lgBag.contains(event.target)) {
              loginDropdown.style.display = "none";
          }
  });