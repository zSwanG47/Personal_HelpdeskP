<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php
    require_once("../MainHead/head.php");
    ?>
	<title>Amazon Experience - Mantenimiento Area</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php"); ?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php"); ?>

	<div class="page-content">
		<div class="container-fluid">

            <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Mantenimiento Area</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../../view/Home/">Home</a></li>
								<li class="active">Mantenimiento Area</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
				<button type="button" id="btnnuevo" class="btn btn-inline btn-primary">Nuevo Registro</button>
                <table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 15%;">Nombres</th>
							<th class="text-center" style="width: 5%;"></th>
							<th class="text-center" style="width: 5%;"></th> 
						</tr>
					</thead>
                    <tbody>

					</tbody>
				</table>
            </div>

		</div>
	</div>

	<?php require_once("modalmantenimiento.php");?>

    <?php require_once("../MainJs/js.php");?>
    <script type="text/javascript" src="mntarea.js"></script>
	<script type="text/javascript" src="../notificacion.js"></script>
</body>
</html>
<?php
    }else{  
        header("Location:".Conectar::ruta()."index.php");
    }
?>