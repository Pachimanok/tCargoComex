 <!-- Widgets  -->

 <?php 

$user = $_SESSION['user'];

        $query_activas = "SELECT count(main_status) from cntr WHERE main_status != 'NO ASIGNADA' AND main_status != 'ON BOARD'AND main_status != 'TERMINADA'";
        $result_activas= mysqli_query($conn, $query_activas);
        if (mysqli_num_rows($result_activas) == 1) {
        $row = mysqli_fetch_array($result_activas);
        $cantidad_activas =  $row['count(main_status)'];}

        $query_no_asigned = "SELECT count(main_status) from cntr WHERE main_status = 'NO ASIGNADA'";
        $result_no_asigned= mysqli_query($conn, $query_no_asigned);
        if (mysqli_num_rows($result_no_asigned) == 1) {
        $row = mysqli_fetch_array($result_no_asigned);
        $cantidad_no_asigned = $row['count(main_status)'];}

        $query_on_board = "SELECT count(main_status) from cntr where main_status = 'ON BOARD'";
        $result_on_board= mysqli_query($conn, $query_on_board);
        if (mysqli_num_rows($result_on_board) == 1) {
            $row = mysqli_fetch_array($result_on_board);
            $cantidad_on_board =  $row['count(main_status)'];}
        
        

        $query_problem = "SELECT count(main_status) from cntr where  main_status = 'CON PROBLEMA'";
        $result_problem = mysqli_query($conn, $query_problem);
        if (mysqli_num_rows($result_problem) == 1) {
            $row = mysqli_fetch_array($result_problem);
            $cantidad_problem =  $row['count(main_status)'];}
        
        $query_assigned = "SELECT count(main_status) from cntr where main_status = 'ASIGNADA'";
        $result_assigned= mysqli_query($conn, $query_assigned);
        if (mysqli_num_rows($result_assigned) == 1) {
            $row = mysqli_fetch_array($result_assigned);
            $cantidad_assigned =  $row['count(main_status)'];}

        $query_go_to_load = "SELECT count(main_status) from cntr where main_status = 'YENDO A CARGAR'";
        $result_go_to_load = mysqli_query($conn, $query_go_to_load);
        if (mysqli_num_rows($result_go_to_load) == 1) {
            $row = mysqli_fetch_array($result_go_to_load);
            $cantidad_go_to_load =  $row['count(main_status)'];}

        $query_loading = "SELECT count(main_status) from cntr where main_status = 'CARGANDO'";
        $result_loading= mysqli_query($conn, $query_loading);
        if (mysqli_num_rows($result_loading) == 1) {
            $row = mysqli_fetch_array($result_loading);
            $cantidad_loading =  $row['count(main_status)'];}

        $query_custom_place = "SELECT count(main_status) from cntr where  main_status = 'CUSTOM PLACE'";
        $result_custom_place= mysqli_query($conn, $query_custom_place);
        if (mysqli_num_rows($result_custom_place) == 1) {
            $row = mysqli_fetch_array($result_custom_place);
            $cantidad_custom_place =  $row['count(main_status)'];}
        
        $query_go_to_unload = "SELECT count(main_status) from cntr where main_status = 'YENDO A DESCARGAR'";
        $result_go_to_unload= mysqli_query($conn, $query_go_to_unload);
        if (mysqli_num_rows($result_go_to_unload) == 1) {
            $row = mysqli_fetch_array($result_go_to_unload);
            $cantidad_go_to_unload =  $row['count(main_status)'];}
        
        $query_staking = "SELECT count(main_status) from cntr where main_status = 'STAKING'";
        $result_staking= mysqli_query($conn, $query_staking);
        if (mysqli_num_rows($result_staking) == 1) {
            $row = mysqli_fetch_array($result_staking);
            $cantidad_staking =  $row['count(main_status)'];}
  
        $query_detalles_activas = "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking WHERE cntr.main_status != 'NO ASIGNADA' AND cntr.main_status != 'ON BOARD' AND cntr.main_status != 'TERMINADA' ORDER BY cntr.created_at DESC limit 10";
        $result_detalles_activas= mysqli_query($conn, $query_detalles_activas);

        $query_detalles_sin_asignar = "SELECT * from cntr INNER JOIN carga ON cntr.booking = carga.booking WHERE cntr.main_status = 'NO ASIGNADA'";
        $result_detalles_sin_asignar = mysqli_query($conn, $query_detalles_sin_asignar);
        
        $query_detalles_on_board = "SELECT * from cntr INNER JOIN carga ON carga.booking = cntr.booking where cntr.main_status = 'ON BOARD'";
        $result_detalles_on_board= mysqli_query($conn, $query_detalles_on_board);

        $query_detalles_asignadas = "SELECT cntr.booking, cntr.cntr_number, carga.unload_place, carga.custom_place, cntr.status_cntr, asign.transport, carga.Empresa from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'ASIGNADA'";
        $result_detalles_asignadas= mysqli_query($conn, $query_detalles_asignadas);

        
        $query_detalles_con_problema = "SELECT cntr.booking, cntr.cntr_number, carga.unload_place, carga.custom_place, cntr.status_cntr, asign.transport, carga.Empresa from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'CON PROBLEMA'";
        $result_detalles_con_problema= mysqli_query($conn, $query_detalles_con_problema);

        $query_detalles_go_to_load = "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'YENDO A CARGAR'";
        $result_detalles_go_to_load = mysqli_query($conn, $query_detalles_go_to_load);

        $query_detalles_loading = "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'CARGANDO'";
        $result_detalles_loading = mysqli_query($conn, $query_detalles_loading);

        $query_detalles_custom_place = "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'CUSTOM PLACE'";
        $result_detalles_custom_place = mysqli_query($conn, $query_detalles_custom_place);

        $query_detalles_go_to_unload = "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'YENDO A DESCARGAR'";
        $result_detalles_go_to_unload = mysqli_query($conn, $query_detalles_go_to_unload);

        $query_detalles_stacking= "SELECT * from cntr INNER JOIN asign INNER JOIN carga ON cntr.cntr_number = asign.cntr_number AND cntr.booking = carga.booking where cntr.main_status = 'STACKING'";
        $result_detalles_stacking = mysqli_query($conn, $query_detalles_stacking);

        
        $date= date('l jS \of F Y') ;
?>
 

<div class="breadcrumbs">
    <div  class="breadcrumbs-inner">  
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div  data-toggle="modal" data-target="#noticias" class="stat-icon dib flat-color-3">
                                <i class="ti-announcement"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="text"><?php echo $date;?></span></div>
                                    <div class="stat-heading">NOTICIAS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 pt-2">
                <div class="card">
                    <img src="../images/ttl/rail.png"  alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 ">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div  data-toggle="modal" data-target="#clima" class="stat-icon dib flat-color-3">
                                <i class="fa fa-sun-o"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="text">Paso Fronterizo</span></div>
                                    <div class="stat-heading">CLIMA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        <!-- /Widgets -->