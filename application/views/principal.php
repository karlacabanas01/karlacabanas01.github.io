<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.min.css">
    <link href="<?php echo base_url()?>assets/css/icon.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/css.css" rel="stylesheet">
    
    <title>Pagina AlertLife</title>

    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');
        h3 {
            color: #212121;
            background-color: transparent;
            font-size: 45px;
        }

        h5{
            color: #212121;
            background-color: transparent;
            font-size: 25px; 
        }
		
        #targeta{
            
            background-color: #fff;
            width: 350px;
            height: 450px;
            padding: 10px 20px;
            box-sizing: border-box;
        }
        #nav{
            font-family: 'Caveat', cursive;
            font-size: 26px;
        }
        #cardcaract {
            font-family: 'Caveat', cursive;
            background-image: url("assets/img/clean.png");
            margin: 0 auto;
       }

       #comofunciona{
            font-family: 'Caveat', cursive;
            margin: 0 auto;
       }
       #abril{
        font-family: 'Abril Fatface', cursive;
       }

       #caveat{
        font-family: 'Caveat', cursive;
       }
    
    </style>



</head>
<body >


    <!---------------NAV------------------------------>
<nav>
    <div class="nav-wrapper cyan"  id="nav">
    
      <a href="#" class="brand-logo center">AlertLife: No estás sola.</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">¿Quienes somos?</a></li>
        <li><a href="badges.html">¿Que es AlertLife?</a></li>
        <li><a href="collapsible.html">Redes de apoyo</a></li>
      </ul>
    </div>
  </nav>
   <!-------------------------FIN.NAV------------------------------>



    
  

 
  
   <!--------------------------Pagina-------------------------------------------->
  
<main>
        <div class="col l12">
<!-----------------------------------------Sidenav--------------------------------------------------->
        <div class="carousel section">

            <div class="row">
                <div class="col l12">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                            <img src="<?php echo base_url()?>assets/img/Affiche.png "  > <!-- random image -->
                                <div class="caption center-align">
                                    
                                    
                                </div>
                            </li>

                          

                            <li>
                            <img src="<?php echo base_url()?>assets/img/img1.png" >
                                <div class="caption center-aling">
                                    <h3></h3>
                                    <h5 class="light"></h5>

                                </div>
                            </li>


                            <li>
                            <img src="<?php echo base_url()?>assets/img/tipos de violencia.png" >
                                <div class="caption center-aling">
                                    <h3></h3>
                                    <h5 class="light"></h5>

                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        

        </div>
<!-----------------------------------------Fin.Sidenav--------------------------------------------------->
           

<!-----PONER LAS CARD EN VES DE ESO! ADEMÁS AGREGAR EL MENSAJE DE WHATSAAP Y CREAR UN GRUPO--->
        <div class="card-panel" id="comofunciona">
                <h3 class = "abril center text"> <b>¿Como funciona?</b> </h3>
                    <div class="row"  >

                <!-----------------------Uno------------------------------>
                  
                        <div class="col l3 " id="targeta">
                            <div class="card-panel center " style="background: #f7e7ec">
                                <img src="<?php echo base_url()?>assets/img/icons_app.png" class="responsive-img circle center" height="100px" width="100px">
                                <h4 class="center pink-text">Primer paso</h4>
                                <h6 class="center">Debes conectar el dispositivo externo con la APP.</h6>
                            </div>
                        </div>
                <!---------------------------------Dos-------------------->
                 

                        <div class="col l3 hide-on-med-only hide-on-small-only" id="targeta">
                             <div class="card-panel center " style="background: #f7e7ec">
                                <img src="<?php echo base_url()?>assets/img/icons_alert.png"  class="responsive-img circle center" height="100px" width="100px">
                                <h4 class="center pink-text">Segundo paso</h4>
                                <h6 class="center">Cuando estes en una situacion que usted considere de peligro ¡Presiona el botón! </h6>
                            </div>
                        </div>
    <!-------------------------------------Tres------------------------------------------------------------------------->

                        <div class="col l3 hide-on-med-only hide-on-small-only " id="targeta">
                            <div class="card-panel center" style="background: #f7e7ec">
                                <img src="<?php echo base_url()?>assets/img/icons_reloj.png"  class="responsive-img circle center" height="100px" width="100px">
                                <h4 class="center pink-text">Tercer paso</h4>
                                <h6 class="center">Se enviaran registros de que presionó la alerta
                                                a sus contactos de emergencia</h6>
                            </div>
                        </div>
   
    <!-------------------------------------IMG ----------------------------------------------------------------------------->
                    <div class="col l3">
                            <img 
                                class="materialboxed"  
                                src="<?php echo base_url()?>assets/img/logo2.png" 
                                height="350px" 
                                width="350px"
                            >
                    </div>
                    
          
        </div>
        
        
    </div>

<!----------------------------------------------------------------------------------------------------------------------------------->
    <div class="row" >
        <div class="col l12">
            <div class="card-panel " id="cardcaract">
            <h3 class="center text abril"><b>Caracteristicas</b> </h3>
            <hr>
            <br>
                <div class="row" >
                    <div class="col l6">
               
                    
                        <h5> 
                            <img src="<?php echo base_url()?>assets/img/icons_circulo.png" height="10px" width="10px">
                            Tiene una pulsera que en ella tiene un botón integrado<<br>/h5>

                        <h5> 
                            <img src="<?php echo base_url()?>assets/img/icons_circulo.png" height="10px" width="10px">
                             Podrás registrar a tus contactos de emergencia, personas en las cuales confies</h5>

                      
                    </div>
                     <div class="col l6">
                        <h5> 
                             <img src="<?php echo base_url()?>assets/img/icons_circulo.png" height="10px" width="10px">
                            Podrás camuflar la aplicacion móvil para mayor seguridad</h5>
                        <h5> 
                             <img src="<?php echo base_url()?>assets/img/icons_circulo.png" height="10px" width="10px">
                            Podrás encontrar en ella las grabaciones después de sufrir una agresión 
                            ya que estará conectada directamente con el microfono de tu dispositivo móvil.
                        </h5>
                
                        </div>
             
                </div>
            </div>
        </div>
        
        
    </div>
    <!---------------------------------------------------------------------------------------------------------------------------------->
    <div class="row" id="row">
        <div class="col l12">
            <div class="card-panel">
            <h3 class="center text abril"><b>Descarga</b> </h3>
                <div class="row" >
                    <div class="col l6 center caveat">
                        <h5 class="center text">AlertLife está diseñada para ayudar a las victimas de agresiones tanto fisica como psicologicas,
                            ya que más del 80% de las mujeres del mundo lo a vivido alguna vez en su vida, además en ella están los 
                            números de emergencia que son Carabineros de Chile y el número que entrega el gobierno para ayudar y orientar
                            a las mujeres que lo necesiten, anexo a esto usted podrá ingresar sus propios contactos que considere confiables.
                        </h5>
                        <a href="#"> Pulse aquí para iniciar la descarga de la app</a>

                    </div>
                    <div class="col l6 center">
                    <img src="<?php echo base_url()?>assets/img/AlertLife.gif" height="500px" width="250px" >
                    </div>
                </div>
                
                
             

            </div>
        </div>
        </div>
    </div>
    </main>
	<!--------------------------Fin-Pagina-------------------------------------------->

    <div class="fixed-action-btn">
    <a href="https://chat.whatsapp.com/K4ryVj76A5R8s9XAenq8PI" class="btn-floating btn-large white">
    <img src="<?php echo base_url()?>assets/img/whatsapp.png" alt="Whatsapp"  height="50px" width="50px">


    </a>

  </div>
  <div class="row" id="row">
	 <!-------------------------FOOTER------------------------------>
	 <footer class="page-footer  cyan lighten-1">
    <div class="container caveat">
        <div class="row" >
            <div class="col l4 s12">
                 <h5 class="white-text">Alert Life</h5>

                <p class="white-text">App para ayudar a las mujeres</p>
                <p class="white-text"><i class="material-icons" style="vertical-align: -6px;">thumb_up</i>
                    Facebook: AlertLife</p>
                    <p class="white-text"><i class="material-icons" style="vertical-align: -6px;">room</i> Avenida
                    Los Alamos
                    #1122</p>
                <p class="white-text"> <i class="material-icons" style="vertical-align: -6px;">call</i>
                    +5693568596</p>
                
            </div>
            <div class="col l4 offset-l2">
                <div class="footer-info__secret small-12 medium-3 large-3 columns">
                
                <p class="white-text"> <b>Estaremos apoyandote las 24 horas y los 7 dias de la semana</b> </p>
    			<p class="white-text"> <b>No dudes en escribirnos por tus dudas en el grupo de whatsapp</b> </p>	 
                <p class="white-text"> <i class="material-icons" style="vertical-align: -6px;">call</i></p>   
                </div></div>

            
		</div>
		</div>
    <div class="footer-copyright">
        <div class="container center">
            © Proyecto AlertLife 2020
            <a class="grey-text text-lighten-4 right" href="#!">Desarrollado por Karla Cabañas</a>
        </div>
    </div>
</footer>



<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        indicators:true,
        interval:3000,
        height:360
    });

    
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
 
  });

</script>

</body>
</html>
