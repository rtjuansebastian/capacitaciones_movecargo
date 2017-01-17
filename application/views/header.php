<!DOCTYPE html> 
<html lang="es">
    <head>
        <title>Capacitaciones Move Cargo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">        
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/bootstrap-journal.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/fullcalendar.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/datetimepicker.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/multi-select.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/estilos.css" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand" href="<?=  base_url()?>inicio"><img alt="Brand" src="<?=  base_url()?>assets/img/mcargo_logo.png"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=  base_url()?>calendario">Calendario<span class="sr-only">(current)</span></a></li>
                                <li><a href="<?=  base_url()?>capacitaciones">Capacitaciones</a></li>
                                <li><a href="<?=  base_url()?>proveedores">Proveedores</a></li>
                                <li><a href="<?=  base_url()?>empleados">Empleados</a></li>
                                <li><a href="<?=  base_url()?>asistencias">Asistencias</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>