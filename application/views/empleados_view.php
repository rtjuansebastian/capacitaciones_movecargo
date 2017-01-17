<?php $this->load->view("header");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Crear empleado</h1>
                    <form method="post" action="<?=base_url()?>empleados/crear_empleado">            
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="">
                        </div>                                                                             
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <select class="form-control" name="cargo" id="cargo">
<?php
foreach ($cargos as $cargo)
{
?>
                                <option value="<?=$cargo["id"]?>"><?=$cargo["nombre"]?></option>
<?php
}
?>                                 
                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <select class="form-control" name="ciudad" id="ciudad">
<?php
foreach ($sedes as $sede)
{
?>
                                <option value="<?=$sede["id"]?>"><?=$sede["nombre"]?></option>
<?php
}
?>                                
                            </select>
                        </div>                         
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h1>Inscribir empleados</h1>
                    <form method="post" action="<?=base_url()?>empleados/inscribir_empleados">
                        <label for="capacitacion">Seleccione el capacitacion</label>
                        <select class="form-control" name="capacitacion" id="capacitacion">
<?php
foreach ($capacitaciones as $capacitacion)
{
?>
                            <option value="<?=$capacitacion["id"]?>"><?=$capacitacion["titulo"]?></option>
<?php
}
?>
                        </select>
                        <label for="empleados">Seleccione los empleados</label>
                        <a href='#' id='select-all'>selecccionar todos</a>
                        <select multiple="multiple" id="empleados" name="empleados[]">
<?php
foreach ($empleados as $empleado)
{
?>
                            <option value="<?=$empleado["id"]?>"><?=$empleado["nombre"]?></option>
<?php
}
?>
                        </select>
                        <br>                        
                        <button type="submit" class="btn btn-primary">Inscribir</button>
                    </form>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Empleados</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Ciudad</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
foreach ($empleados as $empleado)
{
?>
                            <tr>
                                <td><?=$empleado["nombre"]?></td>
                                <td><?=$empleado["cargo"]?></td>
                                <td><?=$empleado["ciudad"]?></td>
                            </tr>
<?php                        
}
?>
                        </tbody>
                    </table>                    
                </div>               
            </div>
        </div>
<?php $this->load->view("footer");  ?>  
        <script>
        $('#empleados').multiSelect();
        
        $('#select-all').click(function(){
            $('#empleados').multiSelect('select_all');
            return false;
          });
        </script>
