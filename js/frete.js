let res = document.getElementById('res')
let inputE = document.getElementById('enter')
let pesoCubico = null
let frete = 20
inputE.addEventListener('keyup', function(e) {
    var key = e.which || e.keycode;
  
    if (key == 13) {
    
        res.innerHTML = `R$ ${pesoCubico.toFixed(2)} reais estimados de frete`
   
     
        
      }
    });