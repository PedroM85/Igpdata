<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Persona</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>cpersona/"><i class="fa fa-circle-o"></i> Registro Persona</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>cpersona/sa2"><i class="fa fa-circle-o"></i> Actualizar datos </a></li>
            <li class="active"><a href="<?php echo base_url(); ?>cciudad/index"><i class="fa fa-circle-o"></i> Mesa </a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Circuitos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>ccircuitos/"><i class="fa fa-circle-o"></i> Registro de Circuito</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>cpuntos/"><i class="fa fa-circle-o"></i> Ingresar puntos</a></li>
          </ul>
        </li> 

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>cupload/"><i class="fa fa-circle-o"></i> Subir y Bajar Archivo</a></li>
         
          </ul>
        </li>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<div class="content">