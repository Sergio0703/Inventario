<?php
include_once "../includes/header.php";
?>

<!-- Incluir la biblioteca jQuery y jQuery UI Autocomplete -->

<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
<script src="../js/jquery-ui.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h4 class="text-center">Datos del Cliente</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="post" name="form_new_cliente_venta" id="form_new_cliente_venta">

                        <div class="row" id="datosCliente">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="cliente" id="cliente" class="form-control" required>
                                </div>
                            </div>

                            <!-- este es el id del cliente oculto -->
                            <input type="hidden" name="id_cliente" id="id" class="form-control">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="number" name="telefono" id="telefono" class="form-control" disabled required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control" disabled required>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <br>

            <h4 class="text-center">Datos Venta</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label><i class="fas fa-user"></i> VENDEDOR</label>
                        <p style="font-size: 16px; text-transform: uppercase; color: blue;"><?php echo $_SESSION['usuario']; ?></p>
                    </div>
                </div>

            </div>
            <!-- BUSCADOR VENTA -->
            <form method="post" action="agregarAlCarrito.php" id="formBusqueda">
                <label for="codigo">Código de barras:</label>
                <input autocomplete="off" width="100%" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escanea o Escribe el código...">
            </form>
            <br>
            <div class="table-responsive">
                <table class="table table-striped" id="table_id" width="100%">
                    <thead>
                        <tr class="bg-dark" style="color: white;">
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Stock</th>
                            <th>Precio de venta</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody id="resultadoBusqueda">
                        <!-- Aquí se mostrarán los productos encontrados -->
                    </tbody>
                </table>
            </div>

           


            <br>
            <h3>Total General: $<span id="granTotal">0</span></h3>
            <form action="../includes/terminarVenta.php" method="POST">


                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#vender">
                    <span class="glyphicon glyphicon-plus"></span> PROCESAR - F5 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
                <a href="#" class="btn btn-danger btn-cancelar">CANCELAR <i class="fa fa-undo" aria-hidden="true"></i></a>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!--Aqui se obtiene el cliente-->
<script src="../js/searchcliente.js"></script>

<?php include "../includes/footer.php"; ?>
<?php include_once "ventana.php" ?>