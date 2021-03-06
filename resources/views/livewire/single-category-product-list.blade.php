<div>
  <div class="bg-white">
    @if(session('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1500)" x-show="show" class="fixed right-0 mr-3 top-2 mt-3 h-16 w-50 p-4  text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
      {{ session('message') }}
    </div>
    @endif

    {{-- search box start --}}
    <div class="flex justify-center mt-3">
      <div class=" xl:w-96">
        <input wire:model="search" type="search" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      " id="exampleSearch" placeholder="Search Products" />
      </div>
    </div>
    {{-- search box end --}}




    <div class="max-w-2xl mx-auto py-4 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Products - {{ $category->name }}</h2>



      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">



        @forelse ($products as $product)


        <div>

          <div class="group relative">

            <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="{{ $product->image_path }}" onerror="this.onerror=null; this.src='/images/default.jpg'" alt="Product image" class="w-full h-full object-center object-cover lg:w-full lg:h-full">



            </div>

            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $product->name }}
                  </a>

                </h3>
                <p class="mt-1 text-sm text-gray-500">
                  {{ $product->description }}
                </p>
              </div>
              <div>
                <p class="text-sm font-medium text-gray-900">${{ $product->price }}
                </p>

              </div>



            </div>
          </div>

          <div>
            <form action=" {{ route("storeCart") }} " method=" POST">

              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <button type="submit" class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">

                Add to cart
              </button>
            </form>

          </div>

        </div>




        @empty
        <div class="text-center">
          <h1 class="text-gray-900">No Products Available</h1>
          @endforelse
        </div>


        <div class="flex justify-center mt-6">
          {{ $products->links() }}


        </div>



      </div>
    </div>


  </div>

</div>
