<!DOCTYPE html>
<html>
<body>

  <h1>Add New Product</h1>

  <form method="post" action="/save_product">

    <fieldset>
      <legend>Add Product:</legend>
      <label for="name">Product Name:</label>
      <input type="text" name="name"><br><br>

      <label for="description">Description:</label>
      <input type="text" name="description"><br><br>

      <label for="price">Price:</label>
      <input type="text" name="price"><br><br>

      <label for="image_path">Image Path:</label>
      <input type="text" name="image_path"><br><br>


      <input type="submit" value="Submit">
    </fieldset>
  </form>

  <a href='{{ route('home') }}'>Home</a>

</body>
</html>
