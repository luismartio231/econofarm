@props(['category'])

<div class="grid grid-cols-4 p-4">

    <div>
        <p class=" text-lg font-bold text-center text-trueGray-500 md-3">Subcategoria</p>
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a href=""
                        class="text-trueGray-500 inline-block font-semibold py-1 px-4 hover:text-blue-500">
                        {{ $subcategory->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-span-3">

        <img class="h-64 w-full object-cover object-center" src="{{Storage::url($category->image)}}" alt="">

    </div>
</div>
