<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario');?></h3>

                <form action="<?php echo base_url();?>ccircuitos/guardar" method="POST" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre Circuito</label>
                            <div class="col-sm-10">                            
                            <input type="text"  name="Circuito" class="form-control" id="inputEmail3" placeholder="Nombre Circuito">
                            </div>
                        </div>    
                    </div>
                    <!--inicio combobox -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Ciudad Circuito</label>
                            <div class="col-sm-10">                        
                            <td><select id="cbociudad" class="form-control">
                                    <option value="">Elija</option>
                                </select></td>
                            </div>
                        </div>    
                    </div>
                    <!--Fin combobox -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Vueltas</label>
                            <div class="col-sm-10">
                            <input type="text"  name="Vueltas" class="form-control" id="inputEmail3" placeholder="Vueltas">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Suspencion</label>
                            <div class="col-sm-10">
                            <input type="text"  name="Suspencion" class="form-control" id="inputEmail3" placeholder="Suspencion">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">altura</label>
                            <div class="col-sm-10">
                            <input type="text"  name="altura" class="form-control" id="inputEmail3" placeholder="altura">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">alerones</label>
                            <div class="col-sm-10">
                            <input type="text"  name="alerones" class="form-control" id="inputEmail3" placeholder="alerones">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">pits</label>
                            <div class="col-sm-10">
                            <input type="text"  name="pits" class="form-control" id="inputEmail3" placeholder="pits">
                            </div>
                        </div>    
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">compatibildiad</label>
                            <div class="col-sm-10">
                            <input type="text"  name="compatibildiad" class="form-control" id="inputEmail3" placeholder="compatibildiad">
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

                <br><br><br><br>
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                <div class="col-sm-8"> 
                    <div class="box box-primary"> 
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Task</th>
                                <th>Progress</th>
                                <th>Progress</th>
                                <th>Progress</th>
                                <th>Progress</th>
                                <th>Progress</th>
                                <th>Progress</th>
                                <th>Progress</th>
                            </tr>
                                                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
