<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>
      La mejor conferencia de diseño web
    </h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni modi beatae maiores ad provident consequuntur possimus. Ipsum hic maxime, itaque illum tenetur nesciunt debitis! Cupiditate consequatur temporibus modi placeat! Atque.
    </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.ogv" type="video/ogg">
        <source src="video/video.webm" type="video/webm"> 
      </video>
    </div><!--contenedor-video-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>14:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
              <a href="#" class="button float-right">Ver Todos</a>
          </div><!--talleres-->
          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>14:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
              <a href="#" class="button float-right">Ver Todos</a>
          </div><!--talleres-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>14:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i>10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre</p>
            </div>
              <a href="#" class="button float-right">Ver Todos</a>
          </div><!--talleres-->    
        </div><!--programa-evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--programa-->

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Rafael Bautista">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Shari Herrera">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Gregorio Sanchez">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Susana Rivera">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Harold Garcia">
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Susan Sanchez">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul><!--lista-invitados-->
  </section><!--invitados-->

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">0</p>Invitados</li>
        <li><p class="numero">0</p>Talleres</li>
        <li><p class="numero">0</p>Dias</li>
        <li><p class="numero">0</p>Conferencias</li>
      </ul><!--resumen-evento-->
    </div><!--contenedor-->
  </div><!--parallax-->


  <section class="seccion precios">
    <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por día</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div><!--tabla-precio-->
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Todos los días</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 días</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul><!--lista-precios-->
      </div><!--contenedor-->
  </section><!--precios-->

  <div id="mapa" class="mapa">

  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, quaerat aspernatur. Unde eos officiis itaque perferendis, et in commodi, reiciendis facilis incidunt saepe eius voluptate, dolores corporis eum?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Testimonial">
            <cite>OSWALDO APONTE ESCOBEDO<span>Diseñador en @Prisma</span></cite>
          </footer>    
        </blockquote>
      </div><!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, quaerat aspernatur. Unde eos officiis itaque perferendis, et in commodi, reiciendis facilis incidunt saepe eius voluptate, dolores corporis eum?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Testimonial">
            <cite>OSWALDO APONTE ESCOBEDO<span>Diseñador en @Prisma</span></cite>
          </footer>    
        </blockquote>
      </div><!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, quaerat aspernatur. Unde eos officiis itaque perferendis, et in commodi, reiciendis facilis incidunt saepe eius voluptate, dolores corporis eum?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Testimonial">
            <cite>OSWALDO APONTE ESCOBEDO<span>Diseñador en @Prisma</span></cite>
          </footer>    
        </blockquote>
      </div><!--testimonial-->
    </div><!--testimoniales-->
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>registrate al newsletter:</p>
      <h3>GDLWEBCAMP</h3>
      <a href="#" class="button transparente">Registro</a>
    </div><!--contenido-->
  </div><!--newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p id="dias" class="numero"></p>DÍAS
        </li>
        <li>
          <p id="horas" class="numero"></p>HORAS
        </li>
        <li>
          <p id="minutos" class="numero"></p>MINUTOS
        </li>
        <li>
          <p id="segundos" class="numero"></p>SEGUNDOS
        </li>
      </ul>
    </div><!--cuenta-regresiva-->
  </section>

<?php include_once 'includes/templates/footer.php'; ?>
