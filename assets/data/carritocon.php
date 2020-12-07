<?php
    class Conexion1{
        var $conn;

        function conectar(){
            $conn = null;

            try{
                $conn = new PDO('mysql:host=localhost;dbname=id15575709_carta',
                                'id15575709_root',
                                'YULIOSyulios1#');
        
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                die( print_r('Error  conectando con la base de datos: '
                        . $e->getMessage()));
            }
            return $conn;
        }

        function buscarProducto(){
            $con = $this->conectar();

            $consulta = 'SELECT * FROM mis_productos';
        
        $stmt = $con->prepare($consulta);
        $stmt->execute();
        $registros1  = $stmt->fetchAll(PDO::FETCH_ASSOC);

        json_encode($registros1, JSON_FORCE_OBJECT);

        return $registros1;
        }

        function buscarUsuario($user, $pass){
            $con = $this->conectar();

            $consulta = 'SELECT user  
                        FROM clientes
                        WHERE user=:user
                        AND contrasena=:pass';
        
        $stmt = $con->prepare($consulta);
        $stmt->execute(array(':user' => $user, ':pass' => $pass));
        $registro  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numRegistros = count($registro);

        return $numRegistros;
        }

        function guardarUsuario($usuario, $contrasena, $nombre, $correo){
            $con = $this->conectar();
            
            $consulta  = "INSERT INTO clientes (user,contrasena,names,email,created,modified)
            VALUES (:usuario,:contrasena,:nombre,:correo, '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";

            $stmt = $con->prepare($consulta);
           
            $rows = $stmt->execute(array(':usuario' => $usuario,
                                        ':contrasena' => $contrasena,
                                        ':nombre' => $nombre,
                                        ':correo' => $correo));
            /*
            if($rows == 1){
                echo 'Inserción correcta';
            }
            */
            return $rows;
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

        
    }
?>