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
       <th>Category</th>
       <th> Buttonlar </th>
     </tr>
     @forelse ($products as $product)
     <tr>
       <td>{{ $product->name }}</td>
       <td>{{ $product->description }}</td>
       <td>{{ $product->price }}$</td>
       <td>{{ $product->category->name }}</td>


       <td>
         <button>
           <a href='/delete_product/{{ $product->id }}'>Delete </a>
         </button>

         <button>
           <a href='/edit_product/{{ $product->id }}'>Update </a>
         </button>

         {{ $product->id }}

       </td>
     </tr>

     @empty

     @endforelse


   </table>
   <br><br>
   <div id="red">


     <a href='{{ route('add_product') }}'>Add New Product</a>
     <br><br>
     <a href='{{ route('home') }}'>Home</a>

   </div>


 </body>
 </html>
