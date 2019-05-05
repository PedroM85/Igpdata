<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario');?></h3>

                <form action="<?php echo base_url();?>cpersona/guardar" method="POST" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text"  name="Nombre" class="form-control" id="inputEmail3" placeholder="Nombre">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
                            <div class="col-sm-10">
                            <input type="text"  name="Apellido" class="form-control" id="inputEmail3" placeholder="Apellido">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">email</label>
                            <div class="col-sm-10">
                            <input type="email"  name="email" class="form-control" id="inputEmail3" placeholder="email">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">user</label>
                            <div class="col-sm-10">
                            <input type="text"  name="user" class="form-control" id="inputEmail3" placeholder="user">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">pass</label>
                            <div class="col-sm-10">
                            <input type="text"  name="pass" class="form-control" id="inputEmail3" placeholder="pass">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">fecha</label>
                            <div class="col-sm-10">
                            <input type="date"  name="fecha" class="form-control" id="inputEmail3" placeholder="fecha">
                            </div>
                        </div>    
                    </div>
                    <div class="form-group">
                            <div class="col-sm-10 pull-right">
                                <button type="submit" class="btn btn-primary pull-right">Agregar</button>
                            </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

