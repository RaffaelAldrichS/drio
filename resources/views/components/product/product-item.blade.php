<div class=" rounded-lg">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
        <div class="flex flex-col items-center py-4">
            <img class="w-20 h-20 mb-3 rounded-full shadow-xl" src="/img/products/{{ $product->img }}"
                alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $product->name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product->purchase_price }} |
                {{ $product->selling_price }}</span>
        </div>
    </div>
</div>
