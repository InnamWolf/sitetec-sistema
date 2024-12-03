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

                        $_SESSION["credencial"] = "respuesta";                      
                        
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
    }

?>