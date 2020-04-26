<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
/*Setup*/
html {
    height:100%; 
}
.head{
    min-height: 800px;
    height: auto;
    position: relative;
    background: url(../images/networking.jpg) no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;
    background-color: #464646;
}
.font{
    font: 14pt;
    color: #f2f2f2;
    font-style: none;
}
.font:hover{
    color: #F0E68C !important;
    font-style: none;
}
.toggler, .navbar-toggler{
    border-color: white !important;  
}
.toggler .navbar-toggler-icon { 
    background-image: url( 
"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); 
} 
.title-font{
    font-size: 10vw;
    top: 25%;
    color: white;
    left: 0;
    right: 0;
    position: absolute;
    margin: 0 auto;
    text-align: center;
    width: 80%; /* Set the width of the positioned div */
}
.half{
    color:#F0E68C;
    /*#ADFF2F*/
}
/* Setup footer */

body{
    display: flex;
    flex-direction: column;
    height: 100vh;
}
.page-body {
    flex-grow: 1 0 auto;
}
.footer {
    flex-shrink: 0;
}
.search{
    border-color: #F0E68C !important;
    color:#F0E68C !important;
}
.search:hover{
    background-color: #F0E68C !important;
    color: #464646 !important;
}
.fill-height-or-more {
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

.some-area > .back {
    min-height: 850px;
    overflow: hidden;
    width: 100%;
    height: auto;
}
.fill-height-or-more > .back  {
    flex: 1;
    display: flex;
    flex-direction: column;
}


</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ticketing</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('nav.navbar')
        <main class="page-body">
            @yield('content')             
        </main>
    </div>
   
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0b32798554.js" crossorigin="anonymous"></script>
</body>
</html>


