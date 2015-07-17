<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>BeeSurprised</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  </head>
  <body>
    <div class="topbar"><a href="{{ url('/') }}" class="logo-topbar"><img src="{{ url('img/logo-topbar.png') }}" alt="BeeSurprised" class="img"></a>
      <nav class="menu">
        <ul class="list">
          <li class="option"><a href="{{ url('/') }}" class="link">Inicio</a></li>
          <li class="option"><a href="{{ url('productos') }}" class="link">Productos</a></li>
          <li class="option"><a href="{{ url('regalos') }}" class="link">Regalos</a></li>
          <li class="option"><a href="{{ url('como-funciona') }}" class="link">Cómo funciona</a></li>
          <li class="option"><a href="{{ url('blog') }}" class="link">Blog</a></li>
          <li class="option"><a href="{{ url('contacto') }}" class="link">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div class="slider">
      <ul class="list">
        <li class="slide"><img src="{{ url('img/slide1-bg.jpg') }}" class="bg"><img src="{{ url('img/logo-slide.png') }}" alt="BeeSurprised" class="logo-slider">
          <div class="legend">
            <div class="text">Sorpréndete con los beneficios que ofrece la miel directo a tu casa.</div><a href="{{ url('/') }}" class="btn">Conoce más</a>
          </div>
        </li>
        <li class="slide"><img src="{{ url('img/slide2-bg.jpg') }}" class="bg">
          <div class="legend">
            <div class="text">Sorpréndete con los beneficios que ofrece la miel directo a tu casa.</div><a href="{{ url('/') }}" class="btn">Conoce más</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="how section">
      <h2 class="title">Cómo funcionan las cajas de subscripción</h2>
      <ul class="steps">
        <li class="step"><img src="{{ url('img/step1.png') }}" class="icon">
          <div class="text">Escoge un tema</div>
        </li>
        <li class="step"><img src="{{ url('img/step2.png') }}" class="icon">
          <div class="text">Escoge un plan</div>
        </li>
        <li class="step"><img src="{{ url('img/step3.png') }}" class="icon">
          <div class="text">Recíbelo en tu casa</div>
        </li>
      </ul>
    </div>
    <div class="boxes section">
      <h2 class="title">Las cajas mensuales</h2>
      <ul class="plans">
        <li class="plan"><img src="{{ url('img/plan1.png') }}" class="img">
          <h3 class="title">Salud y belleza</h3><a href="{{ url('/') }}" class="btn">Saber más</a>
        </li>
        <li class="plan"><img src="{{ url('img/plan1.png') }}" class="img">
          <h3 class="title">Consumo</h3><a href="{{ url('/') }}" class="btn">Saber más</a>
        </li>
        <li class="plan"><img src="{{ url('img/plan1.png') }}" class="img">
          <h3 class="title">Mix</h3><a href="{{ url('/') }}" class="btn">Saber más</a>
        </li>
      </ul>
    </div>
    <div class="locals section">
      <h2 class="title">Aliados locales</h2>
      <ul class="brands">
        <li class="brand"><img src="{{ url('img/brand1.png') }}" class="img">
          <div class="text">Queenbee Honey</div>
        </li>
        <li class="brand"><img src="{{ url('img/brand2.png') }}" class="img">
          <div class="text">Iik Cheén</div>
        </li>
        <li class="brand"><img src="{{ url('img/brand3.png') }}" class="img">
          <div class="text">Honey Tree</div>
        </li>
        <li class="brand"><img src="{{ url('img/brand4.png') }}" class="img">
          <div class="text">Honey</div>
        </li>
      </ul>
    </div>
    <div class="cta section">
      <div class="text">Del productor hasta tu casa</div><a href="{{ url('/') }}" class="btn">Conoce más</a>
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