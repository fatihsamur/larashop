 <!DOCTYPE html>
 <html>
 <head>
   <style>
     table {
       font-family: arial, sans-serif;
       border-collapse: collapse;
       width: 100%;
     }

     #red {
       padding: auto;
       text-align: center;
     }

     td,
     th {
       border: 1px solid #dddddd;
       text-align: left;
       padding: 8px;
     }

     tr:nth-child(even) {
       background-color: #dddddd;
     }

   </style>
 </head>
 <body>

   <h2>Products List</h2>

   <table>
     <tr>
       <th>Product Name</th>
       <th>Description</th>
       <th>Price</th>
       <th>Image Path</th>
       <th> Buttonlar </th>
     </tr>
     @forelse ($products as $product)
     <tr>
       <td>{{ $product->name }}</td>
       <td>{{ $product->description }}</td>
       <td>{{ $product->price }}$</td>
       <td>{{ $product->image_path }}</td>
       <td> Edit-Sil</td>

     </tr>

     @empty

     @endforelse


   </table>
   <br><br>
   <div id="red">


     <a href='{{ route('home') }}'>Home</a>

   </div>


 </body>
 </html>
