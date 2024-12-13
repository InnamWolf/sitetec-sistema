<?php 

    class UsuariosControlador{
        //* ===============================================
        //* Login usuarios
        //* ===============================================
        public function login(){
            if(isset($_POST["loginEmail"])){
                //Validamos la sintaxys de los campos
                if(preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"]) && 
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPassword"])){
                    
                    $tabla = "usuarios"; //tabla
                    $item = "correo";  //columna
                    $valor = $_POST["loginEmail"]; // Dato a enviar

                    $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);                   

                    if(is_array($respuesta) && $respuesta["correo"] == $_POST["loginEmail"] && $respuesta["password"] == $_POST["loginPassword"]){

                        $_SESSION["credencial"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["apellido_paterno"] = $respuesta["apellido_paterno"];
                        $_SESSION["apellido_materno"] = $respuesta["apellido_materno"];
                        $_SESSION["correo"] = $respuesta["correo"];
                        $_SESSION["rol"] = $respuesta["rol"];
                        
                         echo'
                         <script>                        
                           window.location = "home";
                         </script>  
                         ';    

                    }else{

                        echo '<div class="alert alert-danger">Usuario / Constraseña incorrectos</div>';
                        
    
                    }
                }
            }
        }

        //* ===============================================
        //* MOSTRAR USUARIOS
        //* ===============================================

        static public function ctrMostrarUsuarios($item, $valor){

            $tabla = "usuarios";
            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

            return $respuesta;

        }
    }

?>