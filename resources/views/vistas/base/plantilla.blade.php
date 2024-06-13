<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo web god</title>
</head>
<style>
    nav{
        width: 100%;
        display: flex;
        justify-content: space-between;
        position: sticky;
        top:0;
        background: beige;
    }
    nav ul{
        display: flex;
        list-style: none;
    }
    nav ul li{
        margin-right: 5px;
        text-decoration: none;
    }
    nav ul li a{
        text-decoration: none;
        color:green;
    }
</style>
<body>
    <nav>
 
        <ul>
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}">panel</a>
            </li>
        </ul>

        <ul>
             @auth 
               <li>
                <a href="{{ route('dashboard') }}">panel</a>
              </li>
             @else 
              <li>
                <a href="{{ route('login') }}">login</a>
              </li>
             @endauth
              <li>
                <input type="search">
              </li>
        </ul>
    </nav>
</body>
</html>
@yield('content')