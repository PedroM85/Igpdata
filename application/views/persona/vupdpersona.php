<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario');?></h3>
                     
            <form action="<?php echo base_url();?>cpersona/actualizar" method="POST" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                        <input type="text"  name="Nombre" class="form-control" id="inputEmail3" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
                        <div class="col-sm-10">
                        <input type="text"   name="Apellido" class="form-control" id="inputPassword3" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email"  name="email" class="form-control" id="inputPassword3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </div>
            </form>

            <form action="<?php echo base_url();?>cpersona/eliminar" method="POST" class="form-horizontal">
                <div class="box-body">                
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                        <input type="text" name="txteliminar" class="form-control" id="inputEmail3" placeholder="Nombre">
                        </div>
                    </div>            
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div> 
               </div>
            </form>
            </div>
        </div>
    </div>
</div>

