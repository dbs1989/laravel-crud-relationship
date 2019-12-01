<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Tutorial</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <style>
    #menu ul {
      padding:0px;
      margin:0px;
      background-color:#EDEDED;
      list-style:none;
    }
    #menu ul li { display: inline; }
    #menu ul li a {
      padding: 2px 10px;
      display: inline-block;

      /* visual do link */
      background-color:#EDEDED;
      color: #333;
      text-decoration: none;
      border-bottom:3px solid #EDEDED;
    }
    #menu ul li a:hover {
      background-color:#D6D6D6;
      color: #6D6D6D;
      border-bottom:3px solid #EA0000;
    }
  </style>
  
</head>
<body>
<nav id="menu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/users">Users</a></li>
    </ul>
</nav>
    
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>