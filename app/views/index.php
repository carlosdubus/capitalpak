<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario - Capital Pak</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
     <link href="css/datepicker.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
</head>

<body id="page-top" class="index" ng-app="form" >

    <!-- Header -->
    <header id="bg1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" alt="" style="width: 85%;">
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section>
        <div class="container">
           <div class="col-md-6">

           </div>
           <div class="col-md-6">
                <div class="col-sm-12">
                    <p>ESTAMOS AQUI CUANDO NOS NECESITES. </br>ESCRIBENOS O SIMPLEMENTE LLAMANOS</p>
                </div>
                <div class="col-sm-12">
                    <ul class="list-inline">
                        <li> <a href="mailto:"><img class="img-responsive icon" src="img/gmail.png" style="margin-right:5px"><p class="left">capitalpak.rd@gmail.com</p></a>
                        </li>
                        <li><a href="callto:"><img class="img-responsive icon" src="img/Celular.png"><p class="left">829-638-2111</p></a></li>
                        <li><a href="whatsapp:"><img class="img-responsive icon2" src="img/whatsapp.png"></a></li>
                        <li><a href="hangouts:"><img class="img-responsive icon2" src="img/hangout.png"></a></li>
                        <li><a href="hangouts:"><img class="img-responsive icon2" src="img/instagram.png"></a></li>
                        <li><a href="hangouts:"><img class="img-responsive icon2" src="img/facebook.png"></a></li>
                        <li><a href="hangouts:"><img class="img-responsive icon2" src="img/google.png"></a></li>
                    </ul>
                </br>
                    <p class="subtext">Si deseas ser un cliente preferencial, contáctanos</p>
                </div>
           </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form ng-controller="FormCtrl"  name="form" id="contactForm" method="POST" action="/"  novalidate ng-submit="$event.preventDefault()">
                        
                        <div class="col-lg-12" style="margin-bottom:30px">
                            <div class="col-lg-6"> 
                                <h5 class="text-center subtext">Datos del solicitante</h5>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/name.png" >
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[name]')">
                                        <input name="solicitante[name]" required ng-model="solicitante.name" type="text" class="form-control" placeholder="Nombre y apellido" id="name" required data-validation-required-message="Por favor introduzca su nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/empresa.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls"  ng-class="errorClass(form,'solicitante[company]')">
                                        <input name="solicitante[company]" required ng-model="solicitante.company" type="text" class="form-control" placeholder="Nombre de la empresa" id="company">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/telefono.png"/>
                                    </div>
                                    <div class="form-group col-xs-6 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[phone]')">
                                        <input name="solicitante[phone]" ng-model="solicitante.phone" type="tel" class="form-control" placeholder="Teléfono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group col-xs-3 floating-label-form-group controls">
                                        <input name="solicitante[ext]" type="tel" class="form-control" placeholder="Ext." id="ext" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/celular.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls">
                                        <input name="solicitante[celular]" type="tel" class="form-control" placeholder="Celular" id="cellphone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/email.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[email]')">
                                        <input name="solicitante[email]" type="email" ng-model="solicitante.email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <textarea name="solicitante[comentarios]" rows="5" class="form-control" placeholder="Comentarios" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group" ng-class="errorClass(form,'solicitante[fecha_recogida]')">
                                    <input required ng-model="solicitante.fecha_recogida" name="solicitante[fecha_recogida]" type="text" id="datepicker-13" placeholder="Fecha recogida"  class="col-sm-12 date form-group col-xs-12 floating-label-form-group controls">
                                </div>   
                        </div>
                            <!-- 

                            2do line

                        -->
                            <div class="col-lg-6"> 
                                <h5 class="text-center subtext">Dirección donde sea recogida</h5>
                                <div class="row control-group">
                                    <div class="dropdown">
					                   <input class="dropdown-field"  type="text" ng-model="solicitante.recogida_en" required value="" name="solicitante[recogida_en]" dropdown />
                                      <button ng-class="errorClass(form,'solicitante[recogida_en]')" class="btn btn-default dropdown-toggle col-sm-12" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Recogida en
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu col-sm-12" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation" value="Empresa"><a role="menuitem" tabindex="-1" >Empresa</a></li>
                                        <li role="presentation" value="Residencia"><a role="menuitem" tabindex="-1" >Residencia</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/Calles.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[calles]')">
                                        <input type="text" class="form-control" name="solicitante[calles]" required ng-model="solicitante.calles" placeholder="Calles" id="calle" required data-validation-required-message="Introduzca la calle.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/numero.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[domicilio]')">
                                        <input type="tel" class="form-control" name="solicitante[domicilio]" ng-model="solicitante.domicilio" placeholder="Número y datos de domicilio" id="numero" required data-validation-required-message="Introduzca los datos requeridos.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="col-xs-2 azul">
                                        <img class="" src="img/calles.png"/>
                                    </div>
                                    <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'solicitante[sector]')">
                                        <input type="text" class="form-control" name="solicitante[sector]" ng-model="solicitante.sector"  placeholder="Sector" id="sector" required data-validation-required-message="Introduzca los datos requeridos.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="dropdown">
					<input type="text" class="dropdown-field" value="" name="solicitante[division]" ng-model="solicitante.division" required dropdown />
                                      <button ng-class="errorClass(form,'solicitante[division]')" class="btn btn-default dropdown-toggle col-sm-12" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                        Santo Domingo - División
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu col-sm-12" role="menu" aria-labelledby="dropdownMenu2">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" >Distrito Nacional</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Santo Domingo Norte</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1">Municipio Santo Domingo Este</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Santo Domingo Oeste</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Los alcarrizos</a></li>
                                           <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Pedro Brand</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Guerra</a></li>
                                             <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Boca Chica</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <textarea name="solicitante[referencia]" rows="5" class="form-control" placeholder="¿Alguna referencia para ubicarse más fácil?" id="referencia" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 
                        
                        ~~~~~~~~~~~~~ 2do formulario ~~~~~~~~~~~~~~
        
                        -->
                        <div class="col-lg-12 linea" > 
                            <div class="col-sm-12 bg-azul">
                                <p class="text-center">CapitalPak</p>
                            </div>
                            <div class="col-md-12 bordes">
                                <div class="col-md-4">
                                    <div class="col-sm-6">
                                        <p style="font-size: 13px;">Cantidad de envios</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="borde">
                                            <div style="background-color: #00b0f0!important; width:49%; float: left;height: 27px;padding-top: 1px;text-align: center;"><img class="" src="img/dropbox.png"/></div>
                                            <div style="width:49%; float: left;"><input style="width:100%" type="number" name="quantity" min="1" max="15" placeholder="#" ng-model="enviosCount"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <ul style="display: inline" class="pedido">
                                        <a style="cursor:pointer;" ng-repeat="i in getEnvios() track by $index" ng-click="selectEnvio($index+1)"><li class="borde" ng-class="{azul:$index+1==currentEnvio}">{{$index+1}}</li></a>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 border2" ng-repeat="i in getEnvios() track by $index" ng-show="$index+1==currentEnvio" style="transition:1s" >
                                <div class="col-lg-6">
                                    <h5 class="text-center subtext" style="margin-bottom: 9%;">Datos de envio #{{$index+1}}</h5>
                                    <div class="row control-group">
                                        <div class="col-xs-2 azul">
                                            <img class="" src="img/name.png" >
                                         </div>
                                        <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[name]['+$index+']')">
                                            <input data-envio="{{$index}}" required name="envios[name][{{$index}}]" ng-model="envios.name[$index]"   type="text" class="form-control" placeholder="Nombre y apellido de entrega" id="name2" required data-validation-required-message="Por favor introduzca su nombre.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="col-xs-2 azul">
                                            <img class="" src="img/empresa.png" >
                                         </div>
                                        <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[company]['+$index+']')">
                                            <input data-envio="{{$index}}" required name="envios[company][{{$index}}]" ng-model="envios.company[$index]" type="text" class="form-control" placeholder="Nombre empresa" id="company2" required data-validation-required-message="Por favor introduzca los datos requeridos.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                       <div class="col-xs-2 azul">
                                            <img class="" src="img/telefono.png" >
                                         </div>
                                        <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[tel]['+$index+']')">
                                            <input data-envio="{{$index}}" required name="envios[tel][{{$index}}]" ng-model="envios.tel[$index]" type="tel" class="form-control" placeholder="Teléfono" id="numero2" required data-validation-required-message="Por favor introduzca los datos requeridos.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" >
                                            <textarea data-envio="{{$index}}" name="envios[comentarios][{{$index}}]" rows="5" class="form-control" placeholder="Comentarios" id="message2" data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="dropdown">
					    <input type="text" class="dropdown-field" value="" data-envio="{{$index}}" name="envios[require_cobro][{{$index}}]" ng-model="envios.require_cobro[$index]" dropdown />
                                          <button class="btn btn-default dropdown-toggle col-xs-6" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            ¿Requiere cobro?
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu col-xs-6" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1">Si</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1">No</a></li>
                                          </ul>
                                        </div>
                                        <p class="col-xs-3 margin" style="padding: 4.4%;">Monto:</p>
                                        <div class="form-group col-xs-3 floating-label-form-group controls">
                                            <input name="envios[monto][]" type="tel" class="form-control col-sx-6" placeholder="RD$" id="cobro">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input name="envios[sdo_nombre][]" type="text" class="form-control" placeholder="Nombre completo segundo contacto" id="sdo-nombre" required data-validation-required-message="Por favor introduzca los datos requeridos.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-azul text-center">
                                                <p>DETALLES DEL ENVIO</p>
                                            </div>
                                     <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" style="border-bottom-right-radius: 0px;border-top-right-radius: 0px;">
                                            <p class="text-center">Seleccione su embalaje y la cantidad.</p>
                                            <div class="col-sm-12">
                                                <div class="col-sm-3" style="padding-left: 0px;">
                                                    <p class="text-center" style="margin-left: 30%;">Sobre</p>
                                                    <div style="width:49%; float: left;height: 27px;padding-top: 1px;text-align: center;margin-bottom: 48%;"><img class="" src="img/Sobre.png"/></div>
                                                    <input name="envios[sobre][]" type="number" class="form-control col-sx-12" placeholder="Cantidad" id="sobre" style="width: 100%;">
                                                </div>
                                                <div class="col-sm-3" style="padding-left: 0px;">
                                                    <p class="text-center" style="margin-left: 30%;">Funda</p>
                                                    <div style="width:49%; float: left;height: 27px;padding-top: 1px;text-align: center;margin-bottom: 48%;"><img class="" src="img/Funda.png"/></div>
                                                    <input name="envios[funda][]" type="number" class="form-control col-sm-12" placeholder="Cantidad" id="funda" style="width: 100%;">
                                                </div>
                                                <div class="col-sm-3" style="padding-left: 0px;">
                                                    <p class="text-center">Paquete</p>
                                                    <div style="width:49%; float: left;height: 27px;padding-top: 1px;text-align: center;margin-bottom: 48%;"><img class="" src="img/Paquete.png"/></div>
                                                    <input name="envios[paquete][]" type="number" class="form-control col-sx-12" placeholder="Cantidad" id="paquete" style="width: 100%;">
                                                </div>
                                                <div class="col-sm-3" style="padding-left: 0px;">
                                                    <p class="text-center" style="margin-left: 30%;">Otro</p>
                                                    <div style="width:49%; float: left;height: 27px;padding-top: 1px;text-align: center;margin-bottom: 48%;"><img class="" src="img/Otro.png"/></div>
                                                        <input name="envios[otro][]" type="number" class="form-control col-sx-12" placeholder="Cantidad" id="otro" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="text-center subtext">Dirección donde desea el envío</h5>
                                    <div class="col-sm-12 bg-azul" style="padding: 1%;">
                                       <img src="img/casa.png" class="img-responsive" style="display: block;     margin: auto auto;">
                                    </div>
                                    <div class="col-lg-12 bordes">
                                        <div class="row control-group">
                                            <div class="dropdown">
						<input type="text" class="dropdown-field" value="" data-envio="{{$index}}" required name="envios[entrega_en][{{$index}}]" ng-model="envios.entrega_en[$index]" dropdown />
                                              <button ng-class="errorClass(form,'envios[entrega_en]['+$index+']')" class="btn btn-default dropdown-toggle col-sm-12" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Entrega en
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu col-sm-12" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" >Empresa</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" >Residencia</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="col-xs-2 azul">
                                                <img class="" src="img/Calles.png"/>
                                            </div>
                                            <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[calle]['+$index+']')">
                                                <input data-envio="{{$index}}" required name="envios[calle][{{$index}}]" ng-model="envios.calle[$index]" type="text" class="form-control" placeholder="Calles" id="calle2" required data-validation-required-message="Introduzca la calle.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="col-xs-2 azul">
                                                <img class="" src="img/numero.png"/>
                                            </div>
                                            <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[numero]['+$index+']')">
                                                 <input data-envio="{{$index}}" required name="envios[numero][{{$index}}]" ng-model="envios.numero[$index]" type="text" class="form-control" placeholder="Números y datos del domicilio..." id="numero3" required data-validation-required-message="Introduzca los datos.">
                                                 <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="col-xs-2 azul">
                                                <img class="" src="img/Calles.png"/>
                                            </div>
                                            <div class="form-group col-xs-9 floating-label-form-group controls" ng-class="errorClass(form,'envios[sector]['+$index+']')">
                                                 <input data-envio="{{$index}}" required name="envios[sector][{{$index}}]" ng-model="envios.sector[$index]" type="text" class="form-control" placeholder="Sector..." id="sector2" required data-validation-required-message="Introduzca los datos.">
                                                 <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            
                                            <div class="dropdown">
                                            
						<input type="text" class="dropdown-field" required ng-model="envios.division[$index]"  value="" name="envios[division][{{$index}}]" dropdown />
                                              <button ng-class="errorClass(form,'envios[division]['+$index+']')" class="btn btn-default dropdown-toggle col-sm-12" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Santo Domingo - División
                                                <span class="caret"></span>
                                              </button>
                                                <ul class="dropdown-menu col-sm-12" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Distrito Nacional</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Santo Domingo Norte</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Santo Domingo Este</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Santo Domingo Oeste</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Los alcarrizos</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Pedro Brand</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Guerra</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Municipio Boca Chica</a></li>
                                                </ul>
                                            </div>
                                         </div>
                                         <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <textarea name="envios[referencia][]" rows="5" class="form-control" placeholder="¿Alguna referencia para ubicarse más fácil?" id="referencia2" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-lg-12 row control-group" style="margin-top: 20px">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                 <input name="envios[contenido_paquetes][]" type="text" class="form-control" placeholder="Contenido de los paquetes..." id="paquetes" required data-validation-required-message="Introduzca los datos.">
                                                 <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                </div>
                            </div>        
                        </div>
                        <br>
                        <div id="success"></div>
                            <div class="form-group col-xs-6 pull-left">
                                <h1 class="monto">$</h1>
                                <div class="col-sm-6 text-center">
                                    <p class="borde-monto">{{monto()}}</p>
                                    <p>TARIFA APROXIMADA DEL SERVICIO</p>
                                    <p class="sm-p">($RD pesos dominicanos)</p>
                                </div>
                            </div>
                            <div class="form-group col-xs-6 pull-left">
                                <button type="button" class="btn btn-success btn-lg" id="popup" ng-click="submit($event,form)">Enviar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </section>
    
    <!-- jQuery -->
    
     <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript"  src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/angular.min.js"></script>

      <!-- Javascript -->
      <script>
         $(function() {
            
            $( "#datepicker-13" ).datepicker();
            //$( "#datepicker-13" ).datepicker("setDate", "10w+1");
         });
	 
	 angular.module("form",[])
		 .controller("FormCtrl",function($scope){
		    $scope.envios = {};
		    $scope.enviosCount = 1;
		    $scope.currentEnvio = 1;
		    
		    $scope.$watch('enviosCount',function(){
			if($scope.currentEnvio > $scope.enviosCount){
			    $scope.currentEnvio = $scope.enviosCount;
			}
		    });

            function getMontoExtra(division){
                if(!division || !division.toLowerCase){
                    return 0;
                }
                division = division.toLowerCase();
                if(division.indexOf("distrito")>=0){
                    return 0;
                }
                if(division.indexOf("santo domingo")>=0){
                    return 50;
                }

                return 100;
            }

            $scope.monto = function(){
                
                var v = 150 * $scope.enviosCount;

                if($scope.envios.division){
                    for(var i in $scope.envios.division){
                        v += getMontoExtra($scope.envios.division[i]);
                    }
                }

                return v.toFixed(2);
            };
		    $scope.getEnvios = function(){
			return new Array($scope.enviosCount);   
		    };
		    $scope.selectEnvio = function(num){
			 $scope.currentEnvio = num;
		    };
            $scope.submit = function(e,form){
                

                form.$submitted = true;

                if(form.$invalid){
                    // e.preventDefault();
                    var $first = $("#contactForm").find(".ng-invalid").first();
                    if($first.is("[data-envio]")){
                        $scope.selectEnvio(parseInt($first.attr("data-envio"))+1);
                    }
                    if($first.is(".dropdown-field")){
                        $first = $first.next();
                    }
                    setTimeout(function(){
                        $first.focus();    
                    },0);
                    
                    return;
                }
                
                window.open('/gracias','popUpWindow','height=500,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
                $("#contactForm")[0].submit();
            };
            $scope.errorClass = function(form,name){
                var dirty = form.$submitted || form[name].$dirty;
                return {'error-border':dirty && form[name].$invalid};
            }
		 })
		 .directive("dropdown",function(){
		     return {
                scope:{
                    ngModel:'='
                },
			 link:function(scope,element){
			     element.parent().find("a").click(function(e){
				 
				 var value = $.trim($(this).text());
				 var text = $.trim($(this).text());
				 //element.val(value);
                scope.ngModel = value;
                scope.$apply();          //
				 element.parent().find("button").html(text);;
				 
				 //return false;
			     });
			 }
		     };
		 });
      </script>

</body>

</html>
