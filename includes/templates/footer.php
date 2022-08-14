<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-information titulo">
        <h3><span>sobre</span> GDLWEBCAMP</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, aperiam dolore atque blanditiis ex beatae aut nemo laudantium nam in totam impedit earum. Voluptate cumque optio molestias laborum facere corrupti.</p>
      </div>
      <div class="ultimos-tweets titulo">
        <h3><span>últimos</span> tweets</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio explicabo in quo quas perspiciatis. </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio explicabo in quo quas perspiciatis.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio explicabo in quo quas perspiciatis.</li>
        </ul>
      </div>
      <div class="menu titulo">
        <h3><span>redes</span> sociales</h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <p class="copyright">Todos los derechos reservados GDLWEBCAMP 2022</p>   
  </footer>

  
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    }else if($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
   ?>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <!--<script src="https://www.google-analytics.com/analytics.js" async></script>-->
  
</body>

</html>