@extends('layouts.default')
@section('content')

<div class="flex justify-between mb-2 mt-2  ">



  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
    <a href='{{ route('add_product') }}'>Add New Product</a>
  </button>

  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
    <a href='{{ route('categories') }}'>Categories</a></button>


  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
    <a href='{{ route('home') }}'>Home Page</a></button>


</div>


<!-- component -->
<table class="mt-2 min-w-full border-collapse block md:table">
  <thead class="block md:table-header-group">
    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
      <th class="bg-gray-600 p-1 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Product Name</th>
      <th class="bg-gray-600 p-1 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Description</th>
      <th class="bg-gray-600 p-1 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Price</th>
      <th class="bg-gray-600 p-1 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
    </tr>
  </thead>

  <tbody class="block md:table-row-group">

    @forelse($products as $product)
    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
      <td class=" text-center p-1 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3  font-bold">{{ $product->name }}</span></td>

      <td class=" text-center p-1 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 font-bold">{{ $product->description }}</span></td>


      <td class="text-center p-1 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3  font-bold">

          {{ $product->price }}$</span></td>

      <td class=" text-center p-1 md:border md:border-grey-500 text-left block md:table-cell">

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
          <a href='/edit_product/{{ $product->id }}'>Update </a>
        </button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
          <a href='/delete_product/{{ $product->id }}'>Delete </a>
        </button>
      </td>
    </tr>




    @empty

    @endforelse

  </tbody>


</table>
<div class="mb-4 mt-4">

  {{ $products->links() }}
</div>


@stop
