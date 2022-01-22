<!DOCTYPE html>
<html>
<body>

  <h1>Add New Product</h1>

  <form method="post" action="/update_product/{{ $product->id }}">

    <fieldset>
      <legend>Add Product:</legend>
      <label for="name">Product Name:</label>
      <input type="text" name="name" value={{ $product->name }}><br><br>

      <label for="description">Description:</label>
      <input type="text" name="description" value={{ $product->description }}><br><br>

      <label for="price">Price:</label>
      <input type="text" name="price" value={{ $product->price }}><br><br>

      <label for="image_path">Image Path:</label>
      <input type="text" name="image_path" value={{ $product->image_path }}><br><br>

      <input type="submit" value="Submit">

    </fieldset>
  </form>

  <a href='{{ route('home') }}'>Home</a>

</body>
</html>