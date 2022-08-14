<?php if(isset($_POST['submit'])): 
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $regalo = $_POST['regalo'];
            $total = $_POST['total_pedido'];
            $fecha = date('Y-m-d H:i:s');
            //Pedidos
            $camisas = $_POST['camisa_evento'];
            $etiquetas = $_POST['etiquetas'];
            $boletos = $_POST['boletos'];
            include_once 'includes/funciones/funciones.php';
            $pedido =  productos_json($boletos, $camisas, $etiquetas);
            //eventos
            $eventos = $_POST['registro'];
            $registro = eventos_json($eventos);
            try{
                require_once("includes/funciones/bd_conexion.php");
                $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, ID_regalos, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                header('Location: validad_registro.php?exitoso=1');
            }catch(\Exception $e){
                echo $e->getMessage();
            }
?>
<?php endif; ?>
<?php include_once 'includes/templates/header.php';?>
    <section class="seccion contenedor">
        <h2>Resumen Pedido</h2>
            <?php
                if(isset($_GET['exitoso'])):
                    if($_GET['exitoso'] == "1"):
                        echo 'Gracias por registrarse.';
                    endif;
                endif;        
            ?>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>