const price = document.querySelector('#price')
const output = document.querySelector('.price-output')

output.textContent = price.value

price.addEventListener('input', function() {
  output.textContent = price.value
});
function tabla(){
  window.location="tabla.php";//pagina donde tienes tus consultas para borrar 
};