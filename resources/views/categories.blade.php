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

   <h2>Categories List</h2>

   <table>
     <tr>
       <th>Category Id</th>
       <th>Category Name</th>
       <th>Buttons</th>

     </tr>
     @forelse ($categories as $category)
     <tr>
       <td>{{$category->id}}</td>
       <td>{{ $category->name }}</td>
       <td>
         <button>
           <a href='/delete_category/{{ $category->id }}'>Delete </a>
         </button>

         <button>
           <a href='/edit_category/{{ $category->id }}'>Update </a>
         </button>

         {{ $category->id }}

       </td>
     </tr>

     @empty

     @endforelse


   </table>
   <br><br>
   <div id="red">


     <a href='{{ route('add_category') }}'>Add New Category</a>
     <br><br>
     <a href='{{ route('home') }}'>Home</a>

   </div>
 </body>
 </html>
