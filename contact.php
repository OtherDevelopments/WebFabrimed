<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FABRIMED</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-primary navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">FABRIMED - Muebles Clínicos</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about.html">Nuestra Empresa</a>
                        </li>
                        <li>
                            <a href="historia.html">Historia</a>
                        </li>
                        <li>
                            <a href="services.html">Misión</a>
                        </li>
                        <li>
                            <a href="services.html">Productos</a>
                        </li>
                        <li class="active">
                            <a href="contact.html" >Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contáctenos

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">Contacto</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <a href='http://www.single-boersen.net/'>Neu verlieben</a> <script type='text/javascript' src='http://embedmaps.com/google-maps-authorization/script.js?id=d965093fe2a9e72ad371b8cddafa53b164c66334'></script><script type='text/javascript'> function init_map() {
                            var myOptions = {
                                zoom: 16, center: new google.maps.LatLng(-33.4715043, -70.63909999999998),
                                mapTypeId: google.maps.MapTypeId.ROADMAP};
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(-33.4715043, -70.63909999999998)});
                            infowindow = new google.maps.InfoWindow({
                                content: '<strong>Fabrimed - Muebles Clinicos</strong><br>' +
                                        'Arauco 592<br>' +
                                        ' Santiago de Chile<br>'+
                                        ' Telf: 2555-2436'
                            });
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Detalles de Contacto</h3>
                    <p>
                        Arauco 592 - 594<br>Santiago Centro, Santiago<br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Telefono">Telefóno</abbr>: (56 2) 2555-2436</p>
                    <p><i class="fa fa-fax"></i> 
                        <abbr title="Fax">Fax</abbr>: 2554-2105</p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Telefono">Celular </abbr>: (56 9) 9118-5996</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">Email</abbr>: <a href="mailto:fabrimed@fabrimed.cl">fabrimed@fabrimed.cl</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">Horario</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Mandanos un Mensaje</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nombre Contacto:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Por Favor ingrese su Nombre.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Número Teléfono:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Por Favor Ingrese un Número de Teléfono.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Por Favor Ingrese un Email Valido.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Mensaje:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Por Favor ingrese un Mensaje" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>

            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Eguaman 2015</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Contact Form JavaScript -->
        <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

    </body>

</html>
