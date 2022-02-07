<div>
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex  justify-center  sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center ">
            <a href="{{ route('home')}}">
              <img class="block lg:hidden  h-25  " src="images/logo.png" alt="Larashop">
              <img class="hidden lg:block  h-25  " src="images/logo.png" alt="Larashop">
            </a>
          </div>

          <div class=" sm:ml-6 flex items-center">
            <div class=" space-x-4 flex items-center  ">
              @auth
              <a href="{{ route('dashboard')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
              </form>
              @endauth
              @guest
              <div>
                <a href="{{ route('login')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
              </div>
              <button wire:click="$emit('postAdded')" class="group -m-2 p-2 flex items-center">
                <svg class="flex-shrink-0 h-6 w-6 text-white group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span class="ml-2 text-sm font-medium text-white group-hover:text-gray-500">
                  ( {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }} )
                </span>
              </button>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>


</div>
</nav>


</div>
