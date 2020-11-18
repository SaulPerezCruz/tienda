<?php
    class Conexion{
        var $conn;

        function conectar(){
            $conn = null;

            try{
                $conn = new PDO('mysql:host=localhost;dbname=toysup',
                                'root',
                                '');
        
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                die( print_r('Error  conectando con la base de datos: '
                        . $e->getMessage()));
            }
            return $conn;
        }


        function guardarComentario($nombre, $correo, $asunto, $mensaje){
            $con = $this->conectar();
            
            $consulta  = "INSERT INTO comentario (nombre,correo,asunto,mensaje)
            VALUES (:nombre,:correo,:asunto,:mensaje)";

            $stmt = $con->prepare($consulta);
           
            $rows = $stmt->execute(array(':nombre' => $nombre,
                                        ':correo' => $correo,
                                        ':asunto' => $asunto,
                                        ':mensaje' => $mensaje));
            /*
            if($rows == 1){
                echo 'Inserción correcta';
            }
            */
            return $rows;
        }

        function buscarProducto(){
            $con = $this->conectar();

            $consulta = 'SELECT * FROM producto';
        
        $stmt = $con->prepare($consulta);
        $stmt->execute();
        $registros  = $stmt->fetchAll(PDO::FETCH_ASSOC);

        json_encode($registros, JSON_FORCE_OBJECT);

        return $registros;
        }

        function buscarUsuario($user, $pass){
            $con = $this->conectar();

            $consulta = 'SELECT nombre  
                        FROM usuario
                        WHERE usuario=:usuario
                        AND contrasena=:pass';
        
        $stmt = $con->prepare($consulta);
        $stmt->execute(array(':usuario' => $user, ':pass' => $pass));
        $registro  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numRegistros = count($registro);

        return $numRegistros;
        }
    }
?>