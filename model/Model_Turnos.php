<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

class Model_Turnos{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "conteo_axon";
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "error en la conexion" . $e->getMessage();
        }
    }

    public function registrarTurno(){

        if(isset($_POST['registrar'])){
            
                    date_default_timezone_set('America/Bogota'); 
                    $nombre = $_POST['nombre'];
                    $codigo_punto = $_POST['codigo_punto'];
                    
                    $foto=$_FILES['foto']['name'];
                    $archivo=$_FILES['foto']['tmp_name'];
                    $ruta="../imagenes_evidencia";
                    $ruta=$ruta."/".$foto;
                    move_uploaded_file($archivo, $ruta);
                     
                    $fecha=date("Y-m-d");
                    $hora=date("H:i:s");
                    $latitud=$_POST['latitud'];
                    $longitud=$_POST['longitud'];
                    $observaciones = $_POST['observaciones'];

                    
                    

                    
                    
                    
                    

                    $query = "INSERT INTO turnos_registrados (nombre, codigo_punto, foto, fecha, hora, latitud, longitud, observaciones) 
                              VALUES ('$nombre', '$codigo_punto', '$ruta', '$fecha', '$hora', '$latitud', '$longitud', '$observaciones')";

                    if($sql = $this->conn->query($query)){
                        //echo "<script>alert('REGISTRO EXITOSO')</script>";
                        echo "<script>swal('¡REGISTRO EXITOSO!', 'GRACIAS', 'success');</script>";
                        

                        
                    }else{
                        //echo "<script>alert('ERROR AL REGISTRAR')</script>";
                        echo "<script>swal('¡HA OCURRIDO UN ERROR!', 'VUELVE A INTENTARLO', 'error');</script>";
                        
                    }
                
                
             
        }

    }

    public function verTurnosRegistrados(){
        $data = null;

        $query = "SELECT * FROM turnos_registrados";
        if ($sql = $this->conn->query($query)){
            while ($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
  
        return $data;



    }


    public function fetch_single($id){


        $data=null;
        $query= "SELECT * FROM turnos_registrados WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()){
                 $data = $row;
            }
        }
         return $data;
    }

    

    


}






?>