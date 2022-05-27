<?php include('../db.php'); ?>

<?php include('../fijos/header.php'); ?>

<?php include('../fijos/Pannel_right_header.php'); ?>
<!-- estas son las que se modifican -->

<?php include('../includes/user_basic/pannel_left_user_basic.php'); ?>

<?php include('../includes/user_basic/head_view_user_basic.php'); ?>
<!-- estas son las que se modifican -->



<?php


if (isset($_GET['id'])) {   // me traigo la informacion segun ID seleccionada. 
    $id = $_GET['id'];


    $query_carga = "SELECT * FROM carga where id = $id";
    $datos_carga = mysqli_query($conn, $query_carga);
    if (mysqli_num_rows($datos_carga) == 1) {
        $row = mysqli_fetch_array($datos_carga);
        $shipper = $row['shipper'];
        $booking = $row['booking'];
        $commodity = $row['commodity'];
        $Cliente = $row['Cliente'];
        $load_place = $row['load_place'];
        $load_date = $row['load_date'];
        $unload_place = $row['unload_place'];
        $cut_off_fis = $row['cut_off_fis'];
        $cut_off_doc = $row['cut_off_doc'];
        $oceans_line = $row['oceans_line'];
        $vessel = $row['vessel'];
        $voyage = $row['voyage'];
        $final_point = $row['final_point'];
        $ETA = $row['ETA'];
        $ETD = $row['ETD'];
        $consignee = $row['consignee'];
        $notify = $row['notify'];
        $custom_place = $row['custom_place'];
        $custom_agent = $row['custom_agent'];
        $ref_customer = $row['ref_customer'];
        $status = $row['status'];
        $observation_customer = $row['observation_customer'];
        //$retiro_place =$row ['retiro_place'];
    }
    $query_cantidad = "SELECT count(id_cntr) from cntr where `booking` = '$booking'";
    $result_cantidad = mysqli_query($conn, $query_cantidad);
    if (mysqli_num_rows($result_cantidad) == 1) {
        $row = mysqli_fetch_array($result_cantidad);
        $cantidad = $row['count(id_cntr)'];
    }
}

?>
<?php include('../includes/barra_status.php'); ?>
<!-- estas son las que se modifican -->

<div class="container-fluid" style="padding-right: 5%; padding-left: 5%;">
    <div style="border-radius: 10px; background: #9EA5AA; " class="card">
        <div class="card-header" style="background:#ecf1f1;">
            <h4 style="text-align: center;">Detalles de la Carga</h4>
        </div>
        <div style="background: white; padding: 6% 5% 5% 10% !important; border-radius: 7px;" class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <h4>ID:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $id; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Booking</h4>
                </div>
                <div class="col">
                    <h4><?php echo $booking; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Referencia:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $ref_customer; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Lugar de Carga:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $load_place; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Puerto de Carga:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $unload_place; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Cut Off Físico:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $cut_off_fis; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Cut Off Físico:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $cut_off_fis; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Vessel:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $vessel . '-' . $voyage; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Cut Off Doc:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $cut_off_doc; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>ETA:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $ETA; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>ETD:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $ETD; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Lugar de Aduana:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $custom_place; ?></h4>
                </div>
            </div>
            <hr style="width: 60%; margin: 2% 2% 2% 0%;">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Despachante:</h4>
                </div>
                <div class="col">
                    <h4><?php echo $custom_agent; ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div id="detallecntr" style="border-radius: 10px; background: gainsboro; " class="card">
        <div class="card-header" style="text-align:center;">
            <h4 class="box-title">Detalles de Contentedores</h4>
        </div>
        <div style="background:white;padding: 3% 4% 2% 4%;;" class="card-body">
            <div class="dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite"></div>
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead style="text-align: center;">
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Precinto</th>
                        <th>Tipo</th>
                        <th>Lugar de Carga</th>
                        <th>Fecha</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user = $_SESSION['user'];

                    $query = "SELECT * FROM carga INNER JOIN `cntr` ON carga.booking = cntr.booking WHERE carga.booking = '$booking'";
                    $result_tasks = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result_tasks)) {

                        $cntr_number = $row['cntr_number'];
                        $id_cntr = $row['id_cntr'];

                        $query_asigancion = "SELECT * FROM asign INNER JOIN cntr ON asign.booking = cntr.booking WHERE cntr.id_cntr = '$id_cntr'";
                        $asignacion = mysqli_query($conn, $query_asigancion);
                        $rows = mysqli_fetch_assoc($asignacion);



                    ?>
                        <tr>
                            <td><?php echo $row['id_cntr']; ?></td>
                            <td><?php echo $row['cntr_number']; ?></td>
                            <td><?php echo $row['cntr_seal']; ?></td>
                            <td><?php echo $row['cntr_type']; ?></td>
                            <td><?php echo $row['load_place']; ?></td>
                            <td><?php echo $row['load_date']; ?></td>
                            <td style="text-align:center;">
                                <!--Button ASIGNADA CNTR-->
                                <a title="Asignar Unidad" type="button" data-toggle="modal" data-target="#asignar<?php echo $row['id_cntr']; ?>" style="color: #17A589; padding:2%;">
                                    <i class="fa fa-truck"></i>
                                </a>

                                <!--Modal ASIGNADA CNTR-->
                                <div class="modal fade" id="asignar<?php echo $row['id_cntr'] ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="text-align:center;" class="modal-title" id="scrollmodalLabel">Detalles de CNTR <strong><?php echo $row['cntr_number']; ?></strong></h4>

                                            </div>
                                            <div class="modal-body">
                                                <div class="card border border-secondary">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-8">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">id:</div>
                                                                    <div class="col-sm-6"><?php echo $row['id_cntr']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Precinto</div>
                                                                    <div class="col-sm-6"><?php echo $row['cntr_seal']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Seteo</div>
                                                                    <div class="col-sm-2"><?php echo 'T°: ' . $row['set_']; ?></div>
                                                                    <div class="col-sm-2"><?php echo 'H°: ' . $row['set_humidity']; ?></div>
                                                                    <div class="col-sm-2"><?php echo 'V°: ' . $row['set_vent']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Retiro</div>
                                                                    <div class="col-sm-6"><?php echo $row['retiro_place']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Aduana:</div>
                                                                    <div class="col-sm-6"><?php echo $row['custom_place']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Puerto de Carga:</div>
                                                                    <div class="col-sm-6"><?php echo $row['unload_place']; ?></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="../formularios/asignar_carga.php" method="POST">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Asignar Unidad
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="text">Transporte:</label>
                                                                        <select name="transport[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="0">.-Seleccionar Transporte.-</option>
                                                                            <?php



                                                                            $query_transport = $conn->query("SELECT * FROM `transporte`");
                                                                            while ($transport = mysqli_fetch_array($query_transport)) {
                                                                                echo '<option value="' . $transport['razon_social'] . '">' . $transport['razon_social'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="text">ATA:</label>
                                                                        <select name="transport_agent[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="0">.-Seleccionar ATA.-</option>
                                                                            <?php



                                                                            $query_ata = $conn->query("SELECT * FROM `ata`");
                                                                            while ($ata = mysqli_fetch_array($query_ata)) {
                                                                                echo '<option value="' . $ata['razon_social'] . '">' . $ata['razon_social'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Chofer:</label>
                                                                        <select name="driver[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="0">.-Seleccionar Chofer.-</option>
                                                                            <?php



                                                                            $query_driver = $conn->query("SELECT * FROM `choferes`");
                                                                            while ($driver = mysqli_fetch_array($query_driver)) {
                                                                                echo '<option value="' . $driver['nombre'] . '">' . $driver['nombre'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>

                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Camion:</label>
                                                                        <input type="text" name="truck">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Acoplado:</label>
                                                                        <input type="text" name="truck_semi">
                                                                        <input type="hidden" name="cntr_number" value="<?php echo $row['cntr_number']; ?>">
                                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                        <input type="hidden" name="booking" value="<?php echo $booking; ?>">
                                                                    </div>
                                                                </div>
                                                                <br>

                                                                <!--Button para enviar solicitud Asignación -->

                                                                <button class="btn btn-primary" type="submit" name="asignar">asignar unidad</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5"></div>
                                                <div class="col-sm-2 mb-3">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                </div>
                                                <div class="col-sm-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--Final Modal View CNTR-->
                                <!--Button Editar CNTR-->
                                <a title="Editar asignación" type="button" data-toggle="modal" data-target="#editar<?php echo $row['id_cntr']; ?>" style="color: #17A589; padding:2%;">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <!--Modal editar CNTR-->
                                <div class="modal fade" id="editar<?php echo $row['id_cntr'] ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="text-align:center;" class="modal-title" id="scrollmodalLabel">Detalles de CNTR <strong><?php echo $row['cntr_number']; ?></strong></h4>

                                            </div>

                                            <div class="modal-body">
                                                <div class="card border border-secondary">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-8">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">id:</div>
                                                                    <div class="col-sm-6"><?php echo $row['id_cntr']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Precinto</div>
                                                                    <div class="col-sm-6"><?php echo $row['cntr_seal']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Seteo</div>
                                                                    <div class="col-sm-2"><?php echo 'T°: ' . $row['set_']; ?></div>
                                                                    <div class="col-sm-2"><?php echo 'H°: ' . $row['set_humidity']; ?></div>
                                                                    <div class="col-sm-2"><?php echo 'V°: ' . $row['set_vent']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Retiro</div>
                                                                    <div class="col-sm-6"><?php echo $row['retiro_place']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Aduana:</div>
                                                                    <div class="col-sm-6"><?php echo $row['custom_place']; ?></div>
                                                                </div>
                                                                <hr style="margin: 0%;">
                                                                <div class="row">
                                                                    <div style="text-align:right;" class="col-sm-6">Puerto de Carga:</div>
                                                                    <div class="col-sm-6"><?php echo $row['unload_place']; ?></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="../formularios/editar_asignacion.php?cntr_number=<?php echo $row['cntr_number'] . '&chofer=' . $rows['driver']; ?>" method="POST">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Unidad Asignada.
                                                        </div>


                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">


                                                                    <div class="col">
                                                                        <label for="text">Transporte:</label>
                                                                        <select name="transport[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="<?php echo $rows['transport'] ?>"><?php echo $rows['transport'] ?></option>
                                                                            <?php



                                                                            $query_transport = $conn->query("SELECT * FROM `transporte`");
                                                                            while ($transport = mysqli_fetch_array($query_transport)) {
                                                                                echo '<option value="' . $transport['razon_social'] . '">' . $transport['razon_social'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="text">ATA:</label>
                                                                        <select name="transport_agent[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="<?php echo $rows['transport_agent'] ?>"><?php echo $rows['transport_agent'] ?></option>
                                                                            <?php



                                                                            $query_ata = $conn->query("SELECT * FROM `ata`");
                                                                            while ($ata = mysqli_fetch_array($query_ata)) {
                                                                                echo '<option value="' . $ata['razon_social'] . '">' . $ata['razon_social'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Chofer:</label>
                                                                        <select name="driver[]" id="selectSm" class="form-control-sm form-control">
                                                                            <option value="<?php echo $rows['driver'] ?>"><?php echo $rows['driver'] ?></option>
                                                                            <?php



                                                                            $query_driver = $conn->query("SELECT * FROM `choferes`");
                                                                            while ($driver = mysqli_fetch_array($query_driver)) {
                                                                                echo '<option value="' . $driver['nombre'] . '">' . $driver['nombre'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Camion:</label>
                                                                        <input type="text" name="truck" value="<?php echo $rows['truck'] ?>">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="text">Acoplado:</label>
                                                                        <input type="text" name="truck_semi" value="<?php echo $rows['truck_semi'] ?>">
                                                                        <input type="hidden" name="cntr_number" value="<?php echo $row['cntr_number']; ?>">
                                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                        <input type="hidden" name="booking" value="<?php echo $booking; ?>">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <button class="btn btn-success" type="submit" name="editar">Editar unidad</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5"></div>
                                                <div class="col-sm-2 mb-3">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                </div>
                                                <div class="col-sm-5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Final Modal View CNTR-->

                                <a title="Generar Instrucción" type="button" href="../formularios/formularioInstructivo.php?id_cntr=<?php echo $row['id_cntr'] . '&cntr_number=' . $row['cntr_number']; ?>" style="color: #17A589; padding:2%;">
                                    <i class="ri-file-line"></i>
                                </a>
                                <a title="Retiro de Vacio" type="button" href="../formularios/formularioderetiro.php?id_cntr=<?php echo $row['id_cntr'] . '&cntr_number=' . $row['cntr_number']; ?>" style="color: #17A589; padding:2%;">
                                    <i class="fa fa-barcode"></i>
                                </a>

                                <a title="Editar Satatus" href="../formularios/actualizar_status.php?id_cntr=<?php echo $row['id_cntr'] ?>" style="color: #17A589; padding:2%; ">
                                    <i class="fa fa-bullseye"></i>
                                </a>

                                <a title="Agregar Costos" href="../formularios/profit_carga.php?id_cntr=<?php echo $row['id_cntr'] ?>" style="color: #17A589; padding:2%; ">
                                    <i class="fa fa-dollar"></i>
                                </a>

                            </td>
                        </tr>
                        <!--Modal View CNTR-->
                        <div class="modal fade" id="largeModal<?php echo $row['id_cntr']; ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 style="text-align:center;" class="modal-title" id="scrollmodalLabel">Detalles de CNTR <strong><?php echo $row['cntr_number']; ?></strong></h4>

                                    </div>
                                    <div class="modal-body">
                                        <div class="card border border-secondary">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-8">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">id:</div>
                                                            <div class="col-sm-6"><?php echo $row['id_cntr']; ?></div>
                                                        </div>
                                                        <hr style="margin: 0%;">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">Precinto</div>
                                                            <div class="col-sm-6"><?php echo $row['cntr_seal']; ?></div>
                                                        </div>
                                                        <hr style="margin: 0%;">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">Seteo</div>
                                                            <div class="col-sm-2"><?php echo 'T°: ' . $row['set_']; ?></div>
                                                            <div class="col-sm-2"><?php echo 'H°: ' . $row['set_humidity']; ?></div>
                                                            <div class="col-sm-2"><?php echo 'V°: ' . $row['set_vent']; ?></div>
                                                        </div>
                                                        <hr style="margin: 0%;">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">Retiro</div>
                                                            <div class="col-sm-6"><?php echo $row['retiro_place']; ?></div>
                                                        </div>
                                                        <hr style="margin: 0%;">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">Aduana:</div>
                                                            <div class="col-sm-6"><?php echo $row['custom_place']; ?></div>
                                                        </div>
                                                        <hr style="margin: 0%;">
                                                        <div class="row">
                                                            <div style="text-align:right;" class="col-sm-6">Puerto de Carga:</div>
                                                            <div class="col-sm-6"><?php echo $row['unload_place']; ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 style="text-align: center;">Unidad Asignada</h3>
                                        <div class="card border border-secondary p-4">
                                            <div class="card-body">
                                                <div class="row" style="color:gray; text-align:center;">
                                                    <div class="col">Chofer:</div>
                                                    <div class="col">Camion:</div>
                                                    <div class="col">Semi:</div>
                                                    <div class="col">Transporte:</div>
                                                    <div class="col">ATA:</div>
                                                </div>
                                                <div class="row" style="text-align: center;">
                                                    <div class="col"><?php echo $rows['driver']; ?></div>
                                                    <div class="col"><?php echo $rows['truck']; ?></div>
                                                    <div class="col"><?php echo $rows['truck_semi']; ?></div>
                                                    <div class="col"><?php echo $rows['transport']; ?></div>
                                                    <div class="col"><?php echo $rows['transport_agent']; ?></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 mb-3">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                            <a class="btn btn-success" href="../formularios/formularioInstructivo.php?cntr_number=<?php echo $cntr_number; ?>">Instructivo</a>
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
        </div>
    <?php
                    }
    ?>
    </tbody>
    </table>
    </div>
</div>
</div>
<div style="background: white;">
</div>
<div class="container">
    <div style="border-radius: 10px; background: #9EA5AA; " class="card border border-secondary">
        <div class="card-header" style="text-align:center;">
            <h4 class="box-title">Documentos de la Carga.</h4>
        </div>

        <?php

        $query_doc = "SELECT id_cntr, document_invoice, document_packing, interchange, cntr_crt, cntr_micdta FROM cntr WHERE cntr_number = '$cntr_number'";
        $result_doc = mysqli_query($conn, $query_doc);
        $row = mysqli_fetch_array($result_doc);

        $id_cntr = $row['id_cntr'];
        $document_invoice = $row['document_invoice'];
        $document_packing = $row['document_packing'];
        $interchange = $row['interchange'];
        $cntr_crt = $row['cntr_crt'];
        $cntr_micdta = $row['cntr_micdta'];

        if ($interchange == null) {
            $estado_interchange  = 'disabled';
            $title_interchange  = 'No hay Documeto';
            $class_interchange  = 'secondary';
            $color_interchange = 'gray';
            $href_interchange = '';
            $down_interchange = '';
        } else {
            $estado_interchange  = '';
            $class_interchange  = 'primary';
            $color_interchange = 'blue';
            $title_interchange = $interchange;
            $href_interchange = 'href=' . '"../formularios/interchange/<?php echo $booking' . '/' . '$cntr_number' . '/' . '$interchange; ?>' . '"';
            $down_interchange = 'download = "$interchange"';
        };

        if ($document_packing == null) {
            $estado_document_packing  = 'disabled';
            $title_document_packing  = 'No hay Documeto';
            $class_document_packing  = 'secondary';
            $color_document_packing = 'gray';
            $href_packing = '';
            $down_packing = '';
        } else {
            $estado_document_packing  = '';
            $class_document_packing  = 'primary';
            $color_document_packing = 'blue';
            $title_document_packing = $document_packing;
            $href_packing = 'href=' . '"../formularios/archivos_packing/'.$booking . '/' . $id_cntr . '/' . $document_packing . '"';
            $down_packing = 'download = ' . $document_packing   ;
        };
        if ($document_invoice == null) {
            $estado_document_invoice  = 'disabled';
            $title_document_invoice  = 'No hay Documeto';
            $class_document_invoice  = 'secondary';
            $color_document_invoice = 'gray';
            $href_invoice = '';
            $down_invoice = '';
        } else {
            $estado_document_invoice  = '';
            $class_document_invoice  = 'primary';
            $color_document_invoice = 'blue';
            $title_document_invoice = $document_invoice;
            $href_invoice = 'href=' . '"../formularios/archivos_invoice/'. $booking . '/' . $id_cntr . '/' . $document_invoice . '"';
            $down_invoice = 'download = '.$document_invoice;
        };
        if ($cntr_crt == null) {
            $estado_cntr_crt  = 'disabled';
            $title_cntr_crt  = 'No hay Documeto';
            $class_cntr_crt  = 'secondary';
            $color_cntr_crt = 'gray';
            $href_cntr_crt = '';
            $down_cntr_crt = '';
        } else {
            $estado_cntr_crt  = '';
            $class_cntr_crt = 'primary';
            $color_cntr_crt = 'blue';
            $title_cntr_crt = $cntr_crt;
            $href_cntr_crt = 'href=' . '"../formularios/cntr_crt/<?php echo $booking' . '/' . '$cntr_number' . '/' . '$cntr_crt; ?>' . '"';
            $down_cntr_crt = 'download = "$cntr_crt"';
        };
        if ($cntr_micdta == null) {
            $estado_cntr_micdta  = 'disabled';
            $title_cntr_micdta  = 'No hay Documeto';
            $class_cntr_micdta  = 'secondary';
            $color_cntr_micdta = 'gray';
            $href_cntr_micdta = '';
            $down_cntr_micdta = '';
        } else {
            $estado_cntr_micdta  = '';
            $class_cntr_micdta = 'primary';
            $color_cntr_micdta = 'blue';
            $title_cntr_micdta = $cntr_micdta;
            $href_cntr_micdta = 'href=' . '"../formularios/cntr_micdta/<?php echo $booking' . '/' . '$cntr_number' . '/' . '$cntr_micdta; ?>' . '"';
            $down_cntr_micdta = 'download = "$cntr_micdta"';
        };



        ?>
        <div style="background: white;padding: 3% 7% 4% 7%; border-radius: 7px;" class="card-body">
            <div class="row" style="text-align: center;">
                <div class="col-sm-1"></div>
                <div class="col-sm-2 mr-2">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <a class="btn btn-outline-<?php echo $class_interchange; ?>" title="<?php echo $title_interchange; ?>" <?php echo $href_interchange; ?> <?php echo $down_interchange; ?> <?php echo $estado_interchange; ?>><i class="fa fa-file-o"></i></a>

                            <br>
                            <p style="margin-bottom: 0%;margin-top: 9%; color:<?php echo $color_interchange; ?>">Interchange</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 mr-2">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <a class="btn btn-outline-<?php echo $class_document_packing; ?>" title="<?php echo $title_document_packing; ?>" <?php echo $href_packing; ?> <?php echo $down_packing; ?> <?php echo $estado_document_packing; ?>><i class="fa fa-file-o"></i></a>

                            <br>
                            <p style="margin-bottom: 0%;margin-top: 9%; color:<?php echo $color_document_packing; ?>">Packing List</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 mr-2">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <a class="btn btn-outline-<?php echo $class_document_invoice; ?>" title="<?php echo $title_document_invoice; ?>" <?php echo $href_invoice; ?> <?php echo $down_invoice; ?> <?php echo $estado_document_invoice; ?>><i class="fa fa-file-o"></i></a>

                            <br>
                            <p style="margin-bottom: 0%;margin-top: 9%; color:<?php echo $color_document_invoice; ?>">Invoice</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 mr-2">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <a class="btn btn-outline-<?php echo $class_cntr_crt; ?>" title="<?php echo $title_cntr_crt; ?>" <?php echo $href_cntr_crt; ?> <?php echo $down_cntr_crt; ?> <?php echo $estado_cntr_crt; ?>><i class="fa fa-file-o"></i></a>

                            <br>
                            <p style="margin-bottom: 0%;margin-top: 9%; color:<?php echo $color_cntr_crt; ?>">CRT</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 mr-2">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <a class="btn btn-outline-<?php echo $class_cntr_micdta; ?>" title="<?php echo $title_cntr_micdta; ?>" <?php echo $href_cntr_micdta; ?> <?php echo $down_cntr_micdta; ?> <?php echo $estado_cntr_micdta; ?>><i class="fa fa-file-o"></i></a>

                            <br>
                            <p style="margin-bottom: 0%;margin-top: 9%; color:<?php echo $color_cntr_micdta; ?>">MIC DTA</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-1"></div>

            </div>
        </div>
    </div>
</div>


<?php include('../fijos/footerdirect.php'); ?>