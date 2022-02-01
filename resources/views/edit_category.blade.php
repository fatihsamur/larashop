<!DOCTYPE html>
<html>
<body>

  <h1>Edit Category</h1>

  <form method="post" action="/update_category/{{ $category->id }}">

    <fieldset>
      <legend>Edit Category</legend>
      <label for="name">Category Name:</label>
      <input type="text" name="name" value={{ $category->name }}><br><br>




      <input type="submit" value="Submit">

    </fieldset>
  </form>

  <a href='{{ route('categories') }}'>Categories</a>

</body>
</html>
