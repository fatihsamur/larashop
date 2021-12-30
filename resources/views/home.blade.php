<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Bazaar</title>
</head>
<body>
  <h1>Şahane Bazaar</h1>
  <div>
    <a href="/products">See Products</a>
  </div>
  <br>



  @auth
  // The user is authenticated...
  <div>
    <a href="/add_product">Add Products</a>
  </div>


  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>



  @endauth

  @guest
  // The user is not authenticated...
  <div>
    <a href="/login">Login</a>
  </div>


  @endguest




</body>
</html>
