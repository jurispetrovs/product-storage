<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Product List</title>
</head>
<body>

    <nav class="flex items-center justify-between flex-wrap bg-white py-4 mx-auto px-8 mt-8">
        <div class="text-2xl mx-auto ml-6 px-4 sm:px-8 py-2 text-center">
            Product Add
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block pt-6 lg:pt-0" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center mr-12">
                <li class="mr-3">
                    <a class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black
                    uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100
                    focus:outline-none" href="/product/add"
                    >
                        Add
                    </a>
                </li>
                <li class="mr-3">
                    <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black
                    uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100
                    focus:outline-none" type="submit" form="mass-delete"
                    >
                        MASS DELETE
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sm:px-20 divide-y-2 divide-gray-900 divide-solid">
        <div></div>
        <div></div>
    </div>

    <form method="post" id="mass-delete" action="/product/list/delete">
        <input type="hidden" name="_method" value="DELETE">
    </form>

    <div class="mx-auto px-4 sm:px-8 py-2 text-center">
        <div class="grid grid-cols-8 gap-4 items-start mt-8 mx-auto px-8">

            <?php foreach ($products as $product): ?>
                <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">
                    <div class="bg-white shadow-lg rounded-lg px-4 py-6 mx-4 my-4">
                        <div class="mx-auto h-40 bg-gray-200 rounded-md">
                            <div class="text-left -inset-y-1">

                                <label for="vehicle1"></label>
                                <input class="m-3" form="mass-delete" type="checkbox"
                                       id="<?php echo $product->sku(); ?>"
                                       name="products[<?php echo $product->sku(); ?>]">
                            </div>
                            <div class=""><?php echo $product->sku(); ?></div>
                            <div class=""><?php echo $product->name(); ?></div>
                            <div class=""><?php echo $product->price(); ?> $</div>
                            <?php if($product->type() === 'dvd'): ?>
                                <div class="">Size: <?php echo $product->size() ?> MB</div>
                            <?php elseif ($product->type() === 'book'): ?>
                                <div class="">Weight: <?php echo $product->weight() ?> KG</div>
                            <?php else: ?>
                                <div class="">Dimension:
                                    <?php echo $product->height() ?> x
                                    <?php echo $product->width() ?> x
                                    <?php echo $product->length() ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>
</html>