<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>BeeSurprised - Pago</title>
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
    <div class="checkout section">
      <h1 class="title">Información de envío y pago</h1>{!! Form::open(['url' => '/', 'class' => 'checkout-form']) !!}
      <div class="shipping">
        <h2 class="title">Información de envío</h2>
        <div class="group">
          {!! Form::label('shipping_name', 'Nombre', ['class' => 'label']) !!}
          {!! Form::text('shipping_name', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('shipping_address', 'Domicilio', ['class' => 'label']) !!}
          {!! Form::text('shipping_address', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('city', 'Ciudad', ['class' => 'label']) !!}
          {!! Form::text('city', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('zipcode', 'Código Postal', ['class' => 'label']) !!}
          {!! Form::text('zipcode', null, ['class' => 'input']) !!}
        </div>
      </div>
      <div class="payment">
        <h2 class="title">Información de pago</h2>
        <div class="group">
          {!! Form::label('card_name', 'Nombre del titular de la tarjeta', ['class' => 'label']) !!}
          {!! Form::text('card_name', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('card_number', 'Número de tarjeta', ['class' => 'label']) !!}
          {!! Form::text('card_number', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('card_exp', 'Fecha de caducidad', ['class' => 'label']) !!}
          {!! Form::text('card_exp', null, ['class' => 'input']) !!}
        </div>
        <div class="group">
          {!! Form::label('card_cvc', 'Código de seguridad', ['class' => 'label']) !!}
          {!! Form::text('card_cvc', null, ['class' => 'input']) !!}
        </div>
      </div>{!! Form::submit('Pagar', ['class' => 'btn']) !!}
      {!! Form::close() !!}
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