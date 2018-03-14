 <?php
 session_start();
function menuGeneral() {
 ?>
 <meta charset="utf-8">
 <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
            <title>American Torres</title>
            <div class="pull-left info">
            <?php
              echo "
                <p>".$_SESSION['username']."</p>
                <p class='designation'>".$_SESSION['type']."</p>
              ";
            ?>
            </div>
          </div>
          <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
            <li class="treeview"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Abastecimiento</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="ab_registrar_contenedor.php" ><i class="fa fa-truck" aria-hidden="true"></i>Registrar Contenedor</a></li>
                <li><a href="ab_registrar_articulo.php" ><i class="fa fa-plus" aria-hidden="true"></i>Registrar Articulo</a></li>
              </ul>
            </li>           
           <li class="treeview"><a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Control de Inventario</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="ci_consultar_articulo.php"><i class="fa fa-search" aria-hidden="true"></i>Consultar Articulo</a></li>
                <li><a href="ci_modificar_articulo.php"><i class="fa fa-refresh" aria-hidden="true"></i>Modificar Articulo</a></li>
                <li><a href="widgets.php"><i class="fa fa-database" aria-hidden="true"></i> Catalago de Articulos</a></li>
              </ul>
            </li>
           <li class="treeview"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><span>Control de Ventas</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="cv_vender.php"><i class="fa fa-usd" aria-hidden="true"></i>Control Ventas</a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>Cierre de Caja</a></li>
              </ul>
            </li> 
             <li class="treeview"><a href="#"><i class="fa fa-money" aria-hidden="true"></i><span>Finazas</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="bootstrap-components.php"><i class="fa fa-history" aria-hidden="true"></i>Historial de Inversiones</a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-history" aria-hidden="true"></i>Historial de Ventas </a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>Consultar Cierre Diario</a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Consulta General Mensual</a></li>
              </ul>
            </li> 
          </a>
            <!--
              <ul class="treeview-menu">
                <li><a href="form-components.php"><i class="fa fa-circle-o"></i> Form Components</a></li>
                <li><a href="form-custom.php"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                <li><a href="form-samples.php"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.php"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.php"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.php"><i class="fa fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.php"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-lockscreen.php"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-user.php"><i class="fa fa-circle-o"></i> User Page</a></li>
                <li><a href="page-invoice.php"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.php"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.php"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                <li><a href="page-error.php"><i class="fa fa-circle-o"></i> Error Page</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
             -->
          </ul>
       
        </section>
      </aside>
      <?php
}
      ?>