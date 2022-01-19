<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Products</h2>
    @if(session("message"))
    <div>
      {{ session("message") }}

    </div>
    @endif

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">


      @forelse ($products as $product)

      <div>


        <div class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="{{ $product->image_path }}" onerror="this.src='images/default.jpg'" alt="Product image" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ $product->name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">
                {{ $product->description }}
              </p>
            </div>
            <p class="text-sm font-medium text-gray-900">$
              {{ $product->price }}
            </p>
          </div>
        </div>

        <div>
          <form action=" {{ route("storeCart") }} " method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
              Add to cart
            </button>
          </form>

        </div>

      </div>

      @empty
      @endforelse
    </div>
  </div>
</div>
