<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/favicon_axon.jpg" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
     

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="../css/estilo_registrar_asistencia.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="../GPS/fun_gps.js"></script>
    


    <title>REGISTRAR</title>
  </head>
  <body class="bg-info">

  <nav class="navbar navbar-expand navbar-light bg-light">
  <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="view/inicio.php"> <img src="../images/axon_logo.png" alt="" width="30"> AXON 360<span class="visually-hidden">(current)</span></a>
          <a class="nav-item nav-link" href="registrar_asistencia.php"><i class="fas fa-edit"></i> REGISTRAR</a>
          <a class="nav-item nav-link" href="info_pvc.php"><i class="fas fa-info-circle"></i> PVC</a>
          <a class="nav-item nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> ADMINISTRADOR</a>
          <!--<a class="nav-item nav-link" href="view/turnos_registrados.php"><i class="fas fa-file-alt"></i> Registros</a>
          <a class="nav-item nav-link" href="view/administrar_personas.php"><i class="fas fa-users"></i> Personas</a>-->
      </div>
  </nav>
      

     
      
      

      <?php
      
     
      include '../reloj/reloj.php';
      
      ?>



<center>
<p><button onclick="geoFindMe()" class="btn btn-success pb-1"><h4><i class="fa-solid fa-location-dot"></i> OBTENER MI UBICACIÓN</h4></button></p>  
<div id="out"></div>


</center>

<form action="" method="post" enctype="multipart/form-data">

<input type="hidden" name="latitud" id="latitud" >
<input type="hidden" name="longitud" id="longitud" >

<input type="text" name="nombre" id="input_start" placeholder="INGRESA TU NOMBRE" required>

  
<!--<select name="nombre" id="input_start" required>
    <option value="" disabled selected hidden>SELECCIONA TU NOMBRE</option>
    <option value="Nombre Persona 1">Nombre Persona 1</option>
    <option value="Nombre Persona 2">Nombre Persona 2</option>
    <option value="Nombre Persona 3">Nombre Persona 3</option>
  </select>-->
  <br>
  <select name="codigo_punto" id="input_start" required>
    <option value="" disabled selected hidden>SELECCIONA PUNTO DE VACUNACIÓN</option>
    <option value="PVC0003 - COLMEDICA CHAPINERO">PVC0003 - COLMEDICA CHAPINERO</option>
    <option value="PVC0004 - COLMEDICA SALITRE">PVC0004 - COLMEDICA SALITRE</option>
    <option value="PVC0005 - COLMEDICA SEDE PLAZA CENTRAL">PVC0005 - COLMEDICA SEDE PLAZA CENTRAL</option>
    <option value="PVC0006 - COLMEDICA SEDE LA TORRE 122">PVC0006 - COLMEDICA SEDE LA TORRE 122</option>
    <option value="PVC0025 - CAPS VISTA HERMOSA">PVC0025 - CAPS VISTA HERMOSA</option>
    <option value="PVC0031 - UNIDAD DE SERVICIOS DE SALUD OLAYA (CAPS)">PVC0031 - UNIDAD DE SERVICIOS DE SALUD OLAYA (CAPS)</option>
    <option value="PVC0037 - CAYETANO ACOPIO PUENTE ARANDA">PVC0037 - CAYETANO ACOPIO PUENTE ARANDA</option>
    <option value="PVC0040 - CAPS BOSA LAURELES">PVC0040 - CAPS BOSA LAURELES</option>
    <option value="PVC0041 - USS LORENCITA VILLEGAS DE SANTOS">PVC0041 - USS LORENCITA VILLEGAS DE SANTOS</option>
    <option value="PVC0046 - CAPS SAN BENITO">PVC0046 - CAPS SAN BENITO</option>
    <option value="PVC0047 - USS SANTA LIBRADA">PVC0047 - USS SANTA LIBRADA</option>
    <option value="PVC0048 - HOSPITAL FONTIBON CAMI2">PVC0048 - HOSPITAL FONTIBON CAMI2</option>
    <option value="PVC0049 - CAPS SUBA">PVC0049 - CAPS SUBA</option>
    <option value="PVC0058 - COMPENSAR CUR 68 JUBILEO">PVC0058 - COMPENSAR CUR 68 JUBILEO</option>
    <option value="PVC0070 - COMPENSAR FONTIBON (CEDI)">PVC0070 - COMPENSAR FONTIBON (CEDI)</option>
    <option value="PVC0071 - COMPENSAR CORFERIAS">PVC0071 - COMPENSAR CORFERIAS</option>
    <option value="PVC0075 - COMPENSAR AEROPUERTO">PVC0075 - COMPENSAR AEROPUERTO</option>
    <option value="PVC0097 - SINERGIA LOURDES - COOSALUD">PVC0097 - SINERGIA LOURDES - COOSALUD</option>
    <option value="PVC0103 - ECOPETROL LIH TOBERIN">PVC0103 - ECOPETROL LIH TOBERIN</option>
    <option value="PVC0109 - COLSUBSIDIO CALLE 63">PVC0109 - COLSUBSIDIO CALLE 63</option>
    <option value="PVC0115 - CAFAM FLORESTA">PVC0115 - CAFAM FLORESTA</option>
    <option value="PVC0119 - GRAN ESTACION IPS">PVC0119 - GRAN ESTACION IPS</option>
    <option value="PVC0137 - DISPENSARIO MEDICO ESTABLECIMIENTO DE SANIDAD MILITAR CENTRO DE REHABILITACION HOSPITALARIA">PVC0137 - DISPENSARIO MEDICO ESTABLECIMIENTO DE SANIDAD MILITAR CENTRO DE REHABILITACION HOSPITALARIA</option>
    <option value="PVC0140 - ESTABLECIMIENTO DE SANIDAD MILITAR ARC-FAC PUENTE ARANDA">PVC0140 - ESTABLECIMIENTO DE SANIDAD MILITAR ARC-FAC PUENTE ARANDA</option>
    <option value="PVC0141 - CANTON NORTE">PVC0141 - CANTON NORTE</option> 
    <option value="PVC142 -  DISSAN">PVC142 - DISSAN</option> 
    <option value="PVC0143 - ESTABLECIMIENTO DE SANIDAD MILITAR 1982 CATAM (ESM1982)">PVC0143 - ESTABLECIMIENTO DE SANIDAD MILITAR 1982 CATAM (ESM1982)</option> 
    <option value="PVC0144 - ESTABLECIMIENTO DE SANIDAD MILITAR ARC-FAC">PVC0144 - ESTABLECIMIENTO DE SANIDAD MILITAR ARC-FAC</option> 
    <option value="PVC0151 - EQUILIBRIUM">PVC0151 - EQUILIBRIUM</option> 
    <option value="PVC0167 - CORVESALUD KENNEDY">PVC0167 - CORVESALUD KENNEDY</option> 
    <option value="PVC0169 - CORVESALUD TEUSAQUILLO">PVC0169 - CORVESALUD TEUSAQUILLO</option> 
    <option value="PVC0173 - HOSPITAL UNIVERSITARIO SAN IGNACIO">PVC0173 - HOSPITAL UNIVERSITARIO SAN IGNACIO</option> 
    <option value="PVC0178 - VIVA MARLY">PVC0178 - VIVA MARLY</option> 
    <option value="PVC0194 - ESTABLECIMIENTO DE SANIDAD POLICIAL EDGAR YESID DUARTE VALERO">PVC0194 - ESTABLECIMIENTO DE SANIDAD POLICIAL EDGAR YESID DUARTE VALERO</option> 
    <option value="PVC0199 - VIRREY SOLIS IPS TOMA DE MUESTRAS AMERICAS">PVC0199 - VIRREY SOLIS IPS TOMA DE MUESTRAS AMERICAS</option> 
    <option value="PVC0200 - VIRREY SOLIS IPS 98 UAB">PVC0200 - VIRREY SOLIS IPS 98 UAB</option> 
    <option value="PVC0202 - SINERGIA LOURDES">PVC0202 - SINERGIA LOURDES</option> 
    <option value="PVC0209 - CENTRO MEDICO CLINITAS 108">PVC0209 - CENTRO MEDICO CLINITAS 108</option> 
    <option value="PVC0211 - CENTRO MEDICO PEDIATRICO CALLE 100">PVC0211 - CENTRO MEDICO PEDIATRICO CALLE 100</option> 
    <option value="PVC0228 - NEUROMEDICA SAS">PVC0228 - NEUROMEDICA SAS</option> 
    <option value="PVC0230 - SURA DE LA 100">PVC0230 - SURA DE LA 100</option> 
    <option value="PVC0239 - UNISALUD - HEMEROTECA">PVC0239 - UNISALUD - HEMEROTECA</option> 
    <option value="PVC0248 - SINERGIA LOURDES COOMEVA">PVC0248 - SINERGIA LOURDES COOMEVA</option> 
    <option value="PVC0258 - CUIDARTE TU SALUD SAS">PVC0258 - CUIDARTE TU SALUD SAS</option> 
    <option value="PVC0271 - FORJA EMPRESAS SAS">PVC0271 - FORJA EMPRESAS SAS</option> 
    <option value="PVC0276 - HOME SALUD">PVC0276 - HOME SALUD</option> 
    <option value="PVC0283 - INNOVAR SALUD">PVC0283 - INNOVAR SALUD</option> 
    <option value="PVC0290 - PROYECTAR SALUD">PVC0290 - PROYECTAR SALUD</option> 
    <option value="PVC0297 - SINERGIA GLOBAL EN SALUD SAS">PVC0297 - SINERGIA GLOBAL EN SALUD SAS</option> 
         
  </select>
  <br>
  <div id="instruccion">
  <h1><i class="fas fa-camera"></i> ADJUNTA EVIDENCIA FOTOGRAFICA</h1>
  </div>
  <br>
  
  
  <input type="file" name="foto" id="input_start">
  <br>
  <input type="text" name="observaciones" id="input_start" placeholder="OBSERVACIONES (OPCIONAL)">
  <br>
  
  <input type="submit" name="registrar" id="btn_iniciar" value="REGISTRAR">

  
  </form>

  <br>
  <br>

      <?php
      include '../model/Model_Turnos.php';
      $model = new Model_Turnos();
      $create = $model->registrarTurno();
      ?>
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   
    <footer>
      <img src="../images/logosds.jpeg" alt="" id="logo_sds">
    </footer>
  </body>
</html>

