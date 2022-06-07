<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="background">
        <img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">
</div>
    
    <!-- Declaração do formulário -->
    <div class="form-content">  
    
        <form class="form-pagamento" method="post" target="pagseguro"  
        action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
          
        <!-- Campos obrigatórios  -->
        <input name="receiverEmail" type="hidden" value="brennda.g.p.s@gmail.com">  
        <input name="currency" type="hidden" value="BRL">  
  
         <!-- Itens do pagamento (ao menos um item é obrigatório)  -->
        <input name="itemId1" type="hidden" value="0001">   
        <input name="itemDescription1" type="hidden" value="Caneca">  
        <input name="itemAmount1" type="hidden" value="49.90">  
        <p class="quantidade-caneca-p">Quantidade de canecas:<input class="quantidade-caneca input-form" name="itemQuantity1" type="number" value=""></p>
        <input  name="itemWeight1" type="hidden" value="400">  
  
          
        <!-- Informações de frete (opcionais)  -->
        <div class="forma-pagamento">
        <p>Forma de envio:</p>
        <div>
        <input type="radio" name="shippingType" value="1">PAC
        <input type="radio" name="shippingType" value="2">SEDEX 
        </div>
      
        </div>

        <div class="form-endereço">

        <div class="endereco-div">
        <input placeholder="Endereço" class="input-form endereco"  name="shippingAddressStreet" type="text" value=""> -
        <input  placeholder="numero"  class="input-form numero" name="shippingAddressNumber" type="number" value=""> -
        <input  placeholder="Complemento"  class="input-form complemento" name="shippingAddressComplement" type="text" value="">
        </div>

        <div class="complemento-div">
        <input  placeholder="CEP"  class="input-form cep" name="shippingAddressPostalCode" type="number" value="">
        <input  placeholder="Bairro"  class="input-form" name="shippingAddressDistrict" type="text" value="">  
        </div>

        <div class="estado-div">
        <input placeholder="São Paulo" class="input-form destrito" name="shippingAddressState" type="text"> -
        <input placeholder="SP" class="input-form estado" name="shippingAddressCity estado" type="text" value="">
        
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
        </div>  

        </div>
          <div class="quantidade-caneca-p dado">Dados do Comprador </div>
        <div class="fomr-comprador">


        <div class=" nome-form">
        <input placeholder="Nome" class="input-form" name="senderName" type="text" value="">
        <input placeholder="Email"  class="input-form"  name="senderEmail" type="text" placeholder="Seu Email">  
        </div>

        <div class="numero-form">
        (<input placeholder="DDD" class="input-form ddd" name="senderAreaCode" type="number" value="">) 
        <input placeholder="Numero" class="input-form" name="senderPhone" type="number" value=""> 
        </div>
        </div>
         
        <!--  submit do form (obrigatório)  -->
        <div  class="bota-pague" >
            
            <input   alt="Pague com PagSeguro" name="submit"  type="image"  
            src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>
            <a class="voltar" href="/home">Voltar</a>
         </div>
        </form> 

            </div> 
        </div> 
    </div>
    

<footer class="footer-login">
        <div class="footer-login-container">

                <p>Teles D.A</p>
            <div class="teles-da">      
                <a href="https://www.instagram.com/teles_d.a/?igshid=YmMyMTA2M2Y%3D "  target=”_blank” >
                <img src="img/instagram.svg"  alt="Instagram">
                </a>
                <a href=" https://telesda.com" target=”_blank”>
                <img src="img/web.svg" alt="Web">
                </a>
                <a href="mailto:victor00007567@gmail.com sub?subject=Interesse em contato" target=”_blank”>
                <img src="img/email.svg" alt="Email">
                </a>
            </div>
            


            <div class="icones-apresentacao">
                <a href="https://www.flaticon.com/br/icones-gratis/instagram" target="_blank" title="instagram ícones">Instagram ícones criados por Freepik - Flaticon</a>
                <a href="https://www.flaticon.com/br/icones-gratis/whatsapp" target="_blank" title="whatsapp ícones">Whatsapp ícones criados por Freepik - Flaticon</a>
                <a href="https://www.flaticon.com/br/icones-gratis/facebook" target="_blank" title="facebook ícones">Facebook ícones criados por Freepik - Flaticon</a>  
                <a href="https://www.flaticon.com/br/icones-gratis/tiktok" target="_blank" title="tiktok ícones">Tiktok ícones criados por Freepik - Flaticon</a>  
                <a href="https://www.flaticon.com/br/icones-gratis/o-email" target="_blank" title="o email ícones">O email ícones criados por Freepik - Flaticon</a>
                <a href="https://www.flaticon.com/br/icones-gratis/pagina-da-web" title="página da web ícones">Página da web ícones criados por Freepik - Flaticon</a>
            </div>
        </div>
    </footer>




</body>
</html>