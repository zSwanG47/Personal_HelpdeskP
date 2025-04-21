<?php
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
  <?php require_once("../MainHead/head.php");?>
  <title>Amazon Experience - Home Usuario</title>
  <style>
    .incidence-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 20px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      height: 250px;
      background: white;
    }

    .incidence-card:hover {
      transform: scale(1.02);
    }

    .incidence-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .card-description {
      padding: 15px;
      text-align: center;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      color: black;
      justify-content: center;
    }

    .card-description h3 {
      margin-top: 0;
      margin-bottom: 5px;
      color: black;
      font-size: 1.2em;
    }

    .card-description p {
      font-size: 0.9em;
      color: black;
      margin-bottom: 0;
    }

    .contact-box {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: left;
      font-size: 1em;
      height: 100%;
      background: white;
    }

    .contact-box h2 {
      margin-top: 0;
      margin-bottom: 15px;
      color: black;
      text-align: left;
      font-size: 1.2em;
    }

    .contact-box p {
      margin-bottom: 10px;
      color: black;
      font-size: 0.95em;
    }

    .contact-box ul {
      list-style: none;
      padding: 0;
      color: black;
      margin-bottom: 15px;
    }

    .contact-box ul li {
      margin-bottom: 5px;
      font-size: 0.9em;
      color: black;
    }

    .contact-box strong {
      color: black;
    }
  </style>
</head>
<body class="with-side-menu">

  <?php require_once("../MainHeader/header.php");?>

  <div class="mobile-menu-left-overlay"></div>

  <?php require_once("../MainNav/nav.php");?>

  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-9">
          <h2>Algunas incidencias</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/reserva.png" alt="Problema de Reserva">
                <div class="card-description">
                  <h3><strong>Problemas de reservas</strong></h3>
                  <p>No pude llegar a tiempo a mi reserva.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/transporte.png" alt="Problema de trasnporte">
                <div class="card-description">
                  <h3><strong>Problemas de transporte</strong></h3>
                  <p>Hubo algún tipo de retraso en su transporte.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/seguridad.png" alt="Problema de seguridad">
                <div class="card-description">
                  <h3><strong>Problemas de seguridad</strong></h3>
                  <p>Robo, violencia, terrorismo, etc.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/salud.png" alt="Problema de salud">
                <div class="card-description">
                  <h3><strong>Problemas de salud</strong></h3>
                  <p>Retrasos en su reserva por problemas de salud.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/infraestructura.png" alt="Problema de infraestructura">
                <div class="card-description">
                  <h3><strong>Problemas de infraestructura</strong></h3>
                  <p>Problemas con la infraestructura.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incidence-card">
                <img src="../../public/img/tecnico.png" alt="Problema de tecnologia">
                <div class="card-description">
                  <h3><strong>Problemas técnicos</strong></h3>
                  <p>No tengo conexión a internet o la conexión es inestable.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="contact-box">
            <h2><strong>Contácta con nosotros</Strong></h2>
            <p>Si no encuentras tu problema en la lista o necesitas ayuda inmediata, puedes contactarnos a través de los siguientes medios:</p>
            <ul>
              <li><strong>&#x260E;</strong> +51 123 456 789</li>
              <li><strong>&#x2709;</strong> soporte@tuempresa.com</li>
            </ul>
            <p><strong>Horario de atención telefónica</strong></p>
            <ul>
              <li><strong>Lunes a viernes:</strong> 8 am - 6 pm</li>
              <li><strong>Sábado:</strong> 8 am - 3 pm</li>
            </ul>
            <p><a href="../../public/docs/SLA.pdf" target="_blank">Acuerdo de Nivel de Servicio (SLA)</a></p>
          </div>
        </div>
      </div>

      <section class="card">
        <header class="card-header">
          Mis Tickets Recientes
        </header>
        <div class="card-block">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Asunto</th>
                <th>Estado</th>
                <th>Fecha de Creación</th>
              </tr>
            </thead>
            <tbody id="tabla_mis_tickets">
            </tbody>
          </table>
        </div>
      </section>

      <section class="card">
        <header class="card-header">
          Información Adicional para el Usuario
        </header>
        <div class="card-block">
          <p>Aquí puedes mostrar información relevante para los usuarios no soporte.</p>
        </div>
      </section>
    </div>
  </div>
  <?php require_once("../MainJs/js.php");?>
  <script type="text/javascript" src="homeUsuario.js"></script> <script type="text/javascript" src="../notificacion.js"></script>

</body>
</html>
<?php
  }else{
    header("Location:".Conectar::ruta()."index.php");
  }
?>