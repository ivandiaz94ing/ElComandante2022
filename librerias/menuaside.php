<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/user.png" width="50" height="50" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php echo $_SESSION['rol']; ?></p>
      <p class="app-sidebar__user-designation"><?php echo $_SESSION['usuario']; ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-home fa-lg"></i><span class="app-menu__label">Inicio</span></a></li>
    <?php
    if ($_SESSION['rol'] == "Cliente") {
    ?>
      <li><a class="app-menu__item" href="ReporteUsuarios.php"><i class="app-menu__icon fa fa fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
      <li><a class="app-menu__item" href="ReporteClientes.php"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Registro Cliente</span></a></li>
      <li><a class="app-menu__item" href="ReporteVehiculos.php"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Gestionar Vehiculo</span></a></li>
      <li><a class="app-menu__item" href="ReporteAgenda.php"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Agendar Servicio</span></a></li>
    <?php } ?>

    <?php
    if ($_SESSION['rol'] == "Administrador") {
    ?>
      <li><a class="app-menu__item" href="ReporteUsuarios.php"><i class="app-menu__icon fa fa fa-users"></i><span class="app-menu__label">Gestionar Usuario</span></a></li>
      <li><a class="app-menu__item" href="ReporteCategorias.php"><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Gestionar Categorias</span></a></li>
      <li><a class="app-menu__item" href="ReporteServico.php"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label">Gestionar Servicios</span></a></li>
      <li><a class="app-menu__item" href="ReporteEmpleado.php"><i class="app-menu__icon  fa fa-id-badge"></i><span class="app-menu__label">Gestionar Empleados</span></a></li>
      <li><a class="app-menu__item" href="ReporteClientes.php"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Gestionar Clientes</span></a></li>
      <li><a class="app-menu__item" href="ReporteVehiculos.php"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Gestionar Vehiculos</span></a></li>
      <li><a class="app-menu__item" href="ReporteAgenda.php"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Agendar Servicio</span></a></li>
      <li><a class="app-menu__item" href="ReportePdf.php"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Reportes</span></a></li>
      <!--<li><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Gestionar Utilidades</span></a></li>-->
    <?php } ?>
  </ul>
</aside>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ayuda en línea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Preguntas Frecuentes</h5>
        <?php
        if ($_SESSION['rol'] == "Administrador") {
        ?>
        <p>Gestionar usuario <a class="alert-link" href="https://www.youtube.com/watch?v=hxPX9xUWRmk&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=6" target="_blank"> Ver video. </a></p>
        <p>Gestionar Categorias <a class="alert-link" href="https://www.youtube.com/watch?v=-sLWxjWas5w&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=3" target="_blank"> Ver video. </a></p>
        <p>Gestionar servicios <a class="alert-link" href="https://www.youtube.com/watch?v=x9HZOrv2yGk&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=5" target="_blank"> Ver video. </a></p>
        <p>Gestionar Empleados <a class="alert-link" href="https://www.youtube.com/watch?v=v_tLn51Mz_k&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=2" target="_blank"> Ver video. </a></p>
        <p>Gestionar Clientes <a class="alert-link" href="https://www.youtube.com/watch?v=19K4Zjsu38Y&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=4" target="_blank"> Ver video. </a></p>
        <p>Gestionar Vehiculos <a class="alert-link" href="https://www.youtube.com/watch?v=3VfQJ6uLVsg&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=7" target="_blank"> Ver video. </a></p>
        <p>Agendar Servicio <a class="alert-link" href="https://www.youtube.com/watch?v=2KGt9XFl_MI&list=PL4-rJjScYGsUvQ7rhuBZ_sfu-xtwi5NFs&index=1" target="_blank"> Ver video. </a></p>
        <?php } ?>
        <?php
        if ($_SESSION['rol'] == "Cliente") {
        ?>
          <p>Pestaña usuario <a class="alert-link" href="https://www.youtube.com/watch?v=cKpStcyywLQ&list=PL4-rJjScYGsWvNqo3lvj9KYAt4-O-nyqf&index=3" target="_blank"> Ver video. </a></p>
          <p>Agendar Servicio <a class="alert-link" href="https://www.youtube.com/watch?v=9evNIC7hOYw&list=PL4-rJjScYGsWvNqo3lvj9KYAt4-O-nyqf&index=1" target="_blank"> Ver video. </a></p>
          <p>Gestor de Vehiculos <a class="alert-link" href="https://www.youtube.com/watch?v=KYA_ZWNgTtU&list=PL4-rJjScYGsWvNqo3lvj9KYAt4-O-nyqf&index=2" target="_blank"> Ver video. </a></p>
          <p>Registro de Clientes <a class="alert-link" href="https://www.youtube.com/watch?v=pJ1xOIXsfDk&list=PL4-rJjScYGsWvNqo3lvj9KYAt4-O-nyqf&index=4" target="_blank"> Ver video. </a></p>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>