<div>

    <x-jet-dropdown width="96">

        <x-slot name="trigger">

            <span class="relative inline-block cursor-pointer">
                <x-cart color="white" size="30" />

                @if (Cart::count())
                    <span
                        class="absolute top-0 bottom-50 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-trueGray-500 rounded-full">{{ Cart::count() }}</span>
                @else
                    <span
                        class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
            </span>
            @endif




        </x-slot>

        <x-slot name="content">

            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-trueGray-500">
                        <img class=" w-20 h-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">

                        <article class="flex-1">

                            <h1 class="font-bold">{{ $item->name }}</h1>

                            <p>cant: {{ $item->qty }}</p>

                            <p>$ {{ $item->price }}</p>

                        </article>
                    </li>

                @empty
                    <div class="py-6 px-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ningun item en el carrito
                        </p>
                    </div>
                @endforelse
            </ul>

            @if (Cart::count())
                <div class="p-2">

                    <p class="text-lg text-gray-700 mt-2 py-2 px-3"><span class="font-bold">Total:</span> $
                        {{ Cart::subtotal() }}</p>


                    <x-button-enlace href="{{ route('shoping-cart') }}" color="blue" class="w-full">
                        ir al carrito de compras
                    </x-button-enlace>


                </div>
            @endif





        </x-slot>

    </x-jet-dropdown>

</div>
