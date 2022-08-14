<?php include_once 'includes/templates/header.php'; ?>

<?php
      try{
        require_once("includes/funciones/bd_conexion.php");
        $sql = " SELECT * FROM invitados ";
        $resultado = $conn->query($sql);
      }catch(\Exception $e){
        echo $e->getMessage();
      }
    ?>

<section class="invitados contenedor seccion">
    <h2>
      Invitados
    </h2>
    <ul class="lista-invitados clearfix">
    <?php 
        while($invitados = $resultado->fetch_assoc()) { 
    ?>
        
        <li>
            <div class="invitado">
                <a class="info-invitado" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                    <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="<?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?> ">
                    <p> <?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?> </p>
                </a>
            </div>
        </li>
        <div style="display:none;">
            <div class="info-invitado" id="invitado<?php echo $invitados['invitado_id']; ?>">
                <h2><?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?></h2>
                <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="<?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?> ">
                <p><?php echo $invitados['descripcion']; ?></p>
            </div>
        </div>
          
    <?php }  //End while ?>   

    <?php $conn->close(); ?>
    
    </ul><!--lista-invitados-->
</section><!--invitados--> 

<?php include_once 'includes/templates/footer.php'; ?>