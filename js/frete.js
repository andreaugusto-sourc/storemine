
    let randomNum = Math.floor(Math.random()*2)

    let alturaPacote = [10, 35, 45]
    let larguraPacote = [10,20,30]
    let comprimentoPacote = [15,30,60]

    let res= document.getElementById('res')
    let inputE = document.getElementById('enter')
    
    if (randomNum == 0) {
      pesoCubico = (comprimentoPacote[0] * larguraPacote[0]) * alturaPacote[0]/6000 +14
    }
    else if (randomNum == 1){
      pesoCubico = (comprimentoPacote[1] * larguraPacote[1]) * alturaPacote[1]/6000 +16
    }
    else {
      (comprimentoPacote[2] * larguraPacote[2]) * alturaPacote[2]/6000 +18
    }
    inputE.addEventListener('keyup', function(e) {
        var key = e.which || e.keycode;
      
        if (key == 13) {
        
            res.innerHTML = `R$ ${pesoCubico.toFixed(2)} reais estimados de frete`
       
         
            
          }
        
        });
        let curtida = document.getElementById('texto-coracao')
        curtida.addEventListener('onclick',curtir)

        function addPergunta () {
          
          let pergunta = document.createElement('div')
          let texto_pergunta = String(document.getElementById('input-pergunta').value)
           
          if (texto_pergunta.length < 8 || texto_pergunta.length > 500) {
            alert("Faça uma pergutna de no mínimo 8 caracteres e no máximo 500 caracteres")
          }

         
          
          
         

        }
    
