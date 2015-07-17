<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>BeeSurprised - Catálogo de productos</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  </head>
  <body>
    <div class="topbar"><a href="{{ url('/') }}" class="logo-topbar"><img src="{{ url('img/logo-topbar.png') }}" alt="BeeSurprised" class="img"></a>
      <nav class="menu">
        <ul class="list">
          <li class="option"><a href="{{ url('/') }}" class="link">Inicio</a></li>
          <li class="option"><a href="{{ url('cajas-de-beneficios') }}" class="link">Productos</a></li>
          <li class="option"><a href="{{ url('regalos') }}" class="link">Regalos</a></li>
          <li class="option"><a href="{{ url('como-funciona') }}" class="link">Cómo funciona</a></li>
          <li class="option"><a href="{{ url('blog') }}" class="link">Blog</a></li>
          <li class="option"><a href="{{ url('contacto') }}" class="link">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div class="catalog section">
      <h1 class="title">Catálogo de productos</h1>
      <ul class="products">
        <li class="product"><img src="{{ url('img/products/01.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/02.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/03.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/04.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/05.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/06.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/07.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/08.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/09.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/10.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/11.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/12.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/13.jpg') }}" class="img"></li>
        <li class="product"><img src="{{ url('img/products/14.jpg') }}" class="img"></li>
      </ul>
    </div>
    <footer class="footer">
      <div class="content">
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
        <div class="copy"><img src="{{ url('img/logo-footer.png') }}" class="logo-footer">
          <div class="text">&copy; 2015. BeeSurprised.</div>
        </div>
        <div class="social">
          <h3 class="title">Redes sociales</h3>
          <ul class="networks">
            <li class="network"><a href="#" class="link"><img src="{{ url('img/fb.png') }}" class="img"></a></li>
            <li class="network"><a href="#" class="link"><img src="{{ url('img/tw.png') }}" class="img"></a></li>
            <li class="network"><a href="#" class="link"><img src="{{ url('img/in.png') }}" class="img"></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="{{ url('js/min/magic.min.js') }}"></script>
  </body>
</html>