// Attend que le document soit chargé avant d'exécuter le code JavaScript
document.addEventListener("DOMContentLoaded", function () {
  const minusBtn = document.querySelector(".minus");
  const plusBtn = document.querySelector(".plus");
  const qtyInput = document.querySelector(".qty");


  minusBtn.addEventListener("click", function () {
    let qty = parseInt(qtyInput.value);
    qty = qty > 1 ? qty - 1 : 1;
    qtyInput.value = qty;
  });
  plusBtn.addEventListener("click", function () {
    let qty = parseInt(qtyInput.value);
    qtyInput.value = qty + 1;
  });

});
function thumbchange(num) {
  var thumb = 'photo' + num + '.webp';
  document.getElementById("ProductImg").src = thumb;

}


const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const paragraphe1 = document.getElementById("paragraphe1");
const paragraphe2 = document.getElementById("paragraphe2");

btn1.addEventListener("click", function () {
  // Utilise la propriété "display" pour afficher le paragraphe 1 et masquer le paragraphe 2
  paragraphe1.style.display = "block";
  paragraphe2.style.display = "none";

});

btn2.addEventListener("click", function () {
  // Utilise la propriété "display" pour afficher le paragraphe 2 et masquer le paragraphe 1
  paragraphe2.style.display = "block";
  paragraphe1.style.display = "none";
});
