<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="sortcut icon" href="assets/images/icone1.png" type="image/x-icon" >
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>imagens/fundo.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/footer.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/home.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/sobre.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/clientes.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/contato.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/produtos.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/custo.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/menu_mobile.css">

	<title>Associação finesc</title>
</head>
<body>
 

 <div class="container-fluid menu_ban">
      <p><img height="20" src="assets/images/phone.png">(11) 9 6898-9875 / <img height="20" src="assets/images/email.png"> e-mail: contato@finesc.com</p>   
 </div>
 
 <div class="container-fluid topo">
    <div class="row">
   <div class="col-sm-6 img"> 
   	<img height="70" src="assets/images/logo.png">
   </div>

    
  
   <div class="col-6 menu_a">
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>home">Inicial</a></div>
   	   <div class="menu_a_div"> <a href="<?php echo BASE_URL;?>sobre">Sobre nós</a></div>
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>produtos">professores</a></div>
   	   <div class="menu_a_div"> <a href="<?php echo BASE_URL;?>servicos">Novidades</a></div>
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>clientes">Parceiros</a></div>
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>contato">Contato</a></div>
   </div> 

  




    </div> 
 </div>
 <div class="container menu_m">
    <div class="menu_icone menu_meio">
      <img height="25" src="assets/images/menu.png">
       
     </div> 
       
          
           <div class="menu_top">
     <div class="menu_a_d"><a href="<?php echo BASE_URL;?>home">Inicial</a></div>
       <div class="menu_a_d"> <a href="<?php echo BASE_URL;?>sobre">Sobre nós</a></div>
        <div class="menu_a_d"><a href="<?php echo BASE_URL;?>produtos">Professores</a></div>
       <div class="menu_a_d"> <a href="<?php echo BASE_URL;?>servicos">Novidades</a></div>
        <div class="menu_a_d"><a href="<?php echo BASE_URL;?>clientes">Parceiros</a></div>
        <div class="menu_a_d"><a href="<?php echo BASE_URL;?>contato">Contato</a></div>

  </div>


    </div>  

 
<?php  $this->loadViewInTemplate($viewName,$viewData);   ?>

<footer class="container-fluid footer">

  <div class="row">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-3">
      <ul>
        <li><strong>Atendimento</strong></li>
        <li>Fone:(11) 9 68989875</li>
        <li>E-mail: contato@finesc.com.br</li>
        
        <li><strong>Horários de Atendimento</strong></li>
        <li>08h00 12h00 - 13h30 ás 18h</li>
         
      </ul>
    </div>
    <div class="col-sm-6 img_rodape">
      <img class="img-fluid" src="assets/images/alunos.png">
    </div>
  

    
  </div>
  <div class="autor">
    <div class="row">
      <div class="col-sm-6">
        Copyright 2020 - Desenvolvimento de Sistemas | Salto sp
      </div>
      <div class="col-sm-6 aut">
       <a target="_blank" href="https://r7webdesign.com/"><img height="50"  src="assets/images/logo_oficial.png"></a>
      </div>
      
    </div>
    
  </div>
</footer>




    	<script type="text/javascript" src="<?php BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>
    		<script type="text/javascript" src="<?php BASE_URL?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php BASE_URL?>assets/js/script.js"></script>

</body>
</html>