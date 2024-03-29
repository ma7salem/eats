<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:700");
html, body {
  background: #DD2911;
  color: #FFF;
}

html {
  height: 100%;
  display: flex;
}

body {
  margin: auto;
}

.alrazy-title {
  font-family: 'Open Sans', Helvetica, sans-serif;
  font-weight: 700;
  font-size: 6vw;
  font-size: calc( 100vw / var(--char-total) );
  position: relative;
  padding: 0.4em 0;
  overflow: hidden;
}
.alrazy-title:after {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  border-bottom: solid 0.2em;
  -webkit-animation: underline 1s cubic-bezier(0.8, 0, 0, 1);
          animation: underline 1s cubic-bezier(0.8, 0, 0, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
@-webkit-keyframes underline {
  from {
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
  }
}
@keyframes underline {
  from {
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
  }
}
.alrazy-title .word {
  display: inline-block;
  -webkit-animation: slide-up 1.25s cubic-bezier(0.5, 0.2, 0, 1);
          animation: slide-up 1.25s cubic-bezier(0.5, 0.2, 0, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: calc( .5s + (.1s * var(--word-index)) );
          animation-delay: calc( .5s + (.1s * var(--word-index)) );
}
@-webkit-keyframes slide-up {
  from {
    -webkit-transform: translateY(125%);
            transform: translateY(125%);
  }
}
@keyframes slide-up {
  from {
    -webkit-transform: translateY(125%);
            transform: translateY(125%);
  }
}
.splitting-mark {
  color: #FFF !important;
}

    </style>

    </head>
    <body>
    <div class="alrazy-title" data-splitting><a href="{{ url('login') }}" style="text-decoration: none; color: #FFF">Ultimate Eats Login Now</a></div>
        <script src="https://unpkg.com/splitting@1.0.0/dist/splitting.js"></script>
<script>
    Splitting();
</script>
    </body>
</html>




