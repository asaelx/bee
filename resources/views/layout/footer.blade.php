
<footer class="footer">
  <div class="sitemap">
    <h3 class="title">Sitio</h3>
    <ul class="sites">
      <li class="site"><a href="{{ url('/') }}" class="link">Inicio</a></li>
      <li class="site"><a href="{{ url('productos') }}" class="link">Productos</a></li>
      <li class="site"><a href="{{ url('como-funciona') }}" class="link">Cómo funciona</a></li>
      <li class="site"><a href="{{ url('blog') }}" class="link">Blog</a></li>
      <li class="site"><a href="{{ url('contacto') }}" class="link">Contacto</a></li>
    </ul>
  </div>
  <div class="copy"><img src="{{ url('img/logo-footer.png') }}" class="logo-footer"/>&copy; 2015. BeeSurprised.</div>
  <div class="social">
    <h3 class="title">Redes sociales</h3>
    <ul class="netwoks">
      <li class="network"><a href="#" class="link"><img src="{{ url('img/fb.png') }}" class="img"/></a></li>
      <li class="network"><a href="#" class="link"><img src="{{ url('img/tw.png') }}" class="img"/></a></li>
      <li class="network"><a href="#" class="link"><img src="{{ url('img/in.png') }}" class="img"/></a></li>
    </ul>
  </div>
</footer>