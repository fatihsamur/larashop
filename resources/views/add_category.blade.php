<!DOCTYPE html>
<html>
<body>

  <h1>Add New Category</h1>

  <form method="post" action="/save_category">

    <fieldset>
      <legend>Add Product:</legend>
      <label for="name">Category Name:</label>
      <input type="text" name="name"><br><br>
      <input type="submit" value="Submit">
    </fieldset>
  </form>

  <a href='{{ route('home') }}'>Home</a>

</body>
</html>
