<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>
      Calendario de eventos
    </h2>

    <?php
      try{
        require_once("includes/funciones/bd_conexion.php");
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, ";
        $sql .= " nombre_invitado, apellido_invitado FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ON eventos.id_categoria = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ON eventos.invitado_id = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);
      }catch(\Exception $e){
        echo $e->getMessage();
      }
    ?>

    <div class="calendario clearfix">
      <?php 
        $calendario = array();
        while($eventos = $resultado->fetch_assoc()) { ?>
        <?php 

          $fecha = $eventos['fecha_evento'];        

          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['cat_evento'],
            'icono' => $eventos['icono'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
          );

          $calendario[$fecha][] = $evento;
        ?>
          
      <?php }  //End while ?>

      <?php 
      
          foreach($calendario as $dia => $lista_eventos){
      
      ?>

      <h3>
            <i class="fa fa-calendar"></i>
            <?php
              //Para Linux
              setlocale(LC_TIME, 'es_ES.UTF-8');

              //Para Windows
              setlocale(LC_TIME, 'spanish');

              echo strftime('%d de %B del %Y', strtotime($dia)); 
            ?>
      </h3>
      <?php foreach($lista_eventos as $evento){ ?>
        <div class="dia">
          <p class="titulo"> <?php echo $evento['titulo']; ?> </p>
          <p class="hora"> <i class="fa fa-clock" aria-hidden="true"></i> <?php echo $evento['fecha'] . ' ' . $evento['hora']; ?> </p>
          <p> <i class= "fa <?php echo $evento['icono']; ?>" aria-hidden="true"></i> <?php echo $evento['categoria']; ?> </p>
          <p> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['invitado']; ?> </p>
        </div>
      <?php } ?>
      <?php } //end foreach $calendario ?>

      
      
    </div>

    <?php $conn->close(); ?>
    
  </section>

  

<?php include_once 'includes/templates/footer.php'; ?>