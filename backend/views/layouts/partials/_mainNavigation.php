<?php
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=Url::to('@web/resources/dist/img/user2-160x160.jpg', true)?>"class="img-circle" alt="User Image" >
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
        <li class="active">
            <a href="<?= Url::home()?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="">
            <a href="<?= Url::to(['item/index'])?>">
            <i class="fa fa-cart-arrow-down"></i> <span>Item Setting</span>
          </a>
        </li>
        <li class="">
            <a href="<?= Url::to(['trans-item/index'])?>">
            <i class="fa fa-truck"></i> <span>Stock Management</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="<?= Url::to(['company/index'])?>"><i class="fa fa-anchor"></i> Company</a></li>
              <li><a href="<?= Url::to(['branch/index'])?>"><i class="fa fa-sitemap"></i>Branch</a></li>
              <li><a href="<?= Url::to(['branch/index'])?>"><i class="fa fa-users"></i>User</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
