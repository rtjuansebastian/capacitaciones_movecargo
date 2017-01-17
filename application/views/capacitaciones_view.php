<?php $this->load->view("header");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <h1>Crear Capacitacion</h1>
                    <form method="post" action="<?=base_url()?>capacitaciones/crear_capacitacion">
                        <div class="form-group">
                            <label for="titulo">Titulo de la capacitación</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Taller" required="">
                        </div>
                        <div class="form-group">
                            <label for="proveedor_capacitacion">Proveedor de la capacitación</label>
                            <select class="form-control" id="proveedor" name="proveedor">
<?php
foreach ($proveedores as $proveedor)
{
?>
                                <option value="<?=$proveedor["id"]?>"><?=$proveedor["nombre"]?></option>
<?php
}
?>
                            </select>                            
                        </div>                        
                        <div style="overflow:hidden;">
                            <div class="form-group">
                                <label> Fecha de la capacitación</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="datetimepicker12">
                                            <input type="hidden" name="fecha" id="fecha"/>    
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="duracion">Duración (horas)</label>
                            <input class="form-control" type="number" name="duracion" id="duracion" required="" value="1" min="1" max="6"/>
                        </div>                 
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h1>Capacitaciones</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Proveedor</th>
                                <th>Fecha</th>
                                <th>Duración</th>
                                <th>Inscritos</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
foreach ($capacitaciones as $capacitacion)
{
?>
                            <tr>
                                <td><?=$capacitacion["titulo"]?></td>
                                <td><?=$capacitacion["proveedor"]?></td>
                                <td><?=$capacitacion["fecha"]?></td>
                                <td><?=$capacitacion["duracion"]?></td>
                                <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-search ver_inscritos" data-toggle="modal" data-target="#myModal" data-capacitacion="<?=$capacitacion["id"]?>"></button></td>
                            </tr>
<?php                        
}
?>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Listado de empleados inscritos en el capacitacion</h4>
                    </div>
                    <div class="modal-body">
                        <ul id="inscritos">
                            
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>                
<?php $this->load->view("footer");  ?>  
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker12').datetimepicker({
                    inline: true,
                    sideBySide: true,
                    format:"YYYY-MM-DD HH:mm",
                    locale:"es",
                    defaultDate:moment({hour: 7}),
                    stepping: 30
                });
                
                $(document).on("click",".ver_inscritos", function(e){
                    e.preventDefault();
                    var capacitacion = $(this).attr('data-capacitacion');
                    $.ajax(
                    {
                        data:{capacitacion:capacitacion},
                        type: "POST",
                        url: "<?php echo base_url(); ?>capacitaciones/traer_inscritos",
                        success: function(data)
                        {
                            var result=JSON.parse(data);
                            var listado="";
                            $.each(result, function(llave, items){
                                listado=listado+"<li>"+items.nombre+"</li>";
                            });
                            $("#inscritos").html(listado);
                        }
                    });
                });
            });
        </script>        