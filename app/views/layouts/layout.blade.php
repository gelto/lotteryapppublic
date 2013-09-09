<?php $ruta = "/public/"; ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Lottery Popcorn</title>

	<link rel="stylesheet" href="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/css/normalize.css" />
	<link rel="stylesheet" href="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/css/foundation.css" />

	<link rel="stylesheet" href="{{ URL::to('/'); }}/{{ $ruta }}statics/css/estilos.css" />

	<script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/vendor/custom.modernizr.js"></script>

  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</head>

<body>
	@yield('content')
	
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.alerts.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.clearing.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.cookie.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.dropdown.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.forms.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.dropdown.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.joyride.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.magellan.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.orbit.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.placeholder.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.reveal.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.section.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.tooltips.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.topbar.js"></script>
  <script src="{{ URL::to('/'); }}/{{ $ruta }}statics/foundation/js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>