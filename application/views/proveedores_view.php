<?php $this->load->view("header");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Crear Proveedor</h1>
                    <form method="post" action="<?=base_url()?>proveedores/crear_proveedor">            
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="">
                        </div>                                                                             
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>              
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" required="">
                        </div>                       
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h1>Proveedores</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
foreach ($proveedores as $proveedor)
{
?>
                            <tr>
                                <td><?=$proveedor["nombre"]?></td>
                                <td><?=$proveedor["email"]?></td>
                                <td><?=$proveedor["telefono"]?></td>
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