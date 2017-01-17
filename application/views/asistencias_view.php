<?php $this->load->view("header");  ?>      
        <div class="container">
            <div class="row">                
                <div class="col-md-6">
                    <h1>Asistencia capacitaciones</h1>
                    <form method="post" action="<?=  base_url()?>asistencias/guardar_asistencia">
                        <label for="capacitacion">Capacitación</label>
                        <select class="form-control" name="capacitacion" id="capacitacion">
                            <option>--</option>
<?php
foreach ($capacitaciones as $capacitacion)
{
?>
                            <option value="<?=$capacitacion["id"]?>"><?=$capacitacion["titulo"]?></option>
<?php
}
?>
                        </select>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Empleado</th>
                                    <th>Asistio?</th>
                                </tr>
                            </thead>
                            <tbody id="asistencia">
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" id="guardar_asistencia">Guardar asistencia</button>                                         
                    </form>
                </div>
                <div class="col-md-6">
                    <h1>Reporte de Asistencia</h1>
                    <form>
                        <label for="reporte_capacitacion">Capacitación</label>
                        <select class="form-control" name="reporte_capacitacion" id="reporte_capacitacion">
                            <option>--</option>
<?php
foreach ($capacitaciones as $capacitacion)
{
?>
                            <option value="<?=$capacitacion["id"]?>"><?=$capacitacion["titulo"]?></option>
<?php
}
?>
                        </select>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Empleado</th>
                                    <th>Asistio?</th>
                                </tr>
                            </thead>
                            <tbody id="reporte">
                            </tbody>
                        </table>
                    </form>                    
                </div>                 
            </div>           
        </div>
<?php $this->load->view("footer");  ?> 
        <script>
            $(document).ready(function(){                    
                $("#capacitacion").on('change',function(){
                    var capacitacion=$("#capacitacion").val();
                    $.ajax({
                        method: "POST",
                        data:{capacitacion: capacitacion},
                        url: "<?php echo base_url(); ?>asistencias/traer_asistencia_capacitacion",
                        success: function(data)
                        {
                            var result= JSON.parse(data);
                            var tabla="";
                            $.each(result, function( llave, items) {
                               tabla=tabla+'<tr>'+
                                    '<td>'+items.nombre+'</td>'+
                                    '<td><input type="checkbox" name="asistentes[]" value="'+items.id+'"></td>'+
                                    '</tr>';
                            });
                            $("#asistencia").html(tabla);
                        }
                    });
                });
                
                $("#reporte_capacitacion").on('change',function(){
                    var capacitacion=$("#reporte_capacitacion").val();
                    $.ajax({
                        method: "POST",
                        data:{capacitacion: capacitacion},
                        url: "<?php echo base_url(); ?>asistencias/traer_reporte_capacitacion",
                        success: function(data)
                        {
                            var result= JSON.parse(data);
                            var tabla="";
                            $.each(result, function( llave, items) {
                               tabla=tabla+'<tr>'+
                                    '<td>'+items.nombre+'</td>'+
                                    '<td>'+items.asistencia+'</td>'+
                                    '</tr>';
                            });
                            $("#reporte").html(tabla);
                        }
                    });
                });
            });
        </script>