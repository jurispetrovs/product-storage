<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="/resources/css/app.css" rel="stylesheet">
    <title>Product Add</title>
</head>
<body>
    <div class="flex flex-col h-screen justify-between">
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-white py-4 mx-auto px-8 mt-8">
                <div class="text-2xl mx-auto ml-6 px-4 sm:px-8 py-2 text-center">
                    Product Add
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block pt-6 lg:pt-0" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center mr-12">
                        <li class="mr-3">
                            <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black
                            uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100
                            focus:outline-none" type="submit" form="product-add"
                            >
                                Save
                            </button>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black
                            uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100
                            focus:outline-none" href="/product/list"
                            >
                                Cancel
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="sm:px-20 divide-y-2 divide-gray-900 divide-solid">
                <div></div>
                <div></div>
            </div>
        </header>

        <main class="mb-auto">
            <form method="post" action="/product/add" name="product-add" id="product-add">
                <div class="p-5">
                    <div class="mt-2 ml-16">
                        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                            <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                <label for="sku">SKU</label>
                            </div>
                            <div class="flex-1 flex flex-col md:flex-row">
                                <div class="w-1/3 mx-2">
                                    <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                        <input type="text" id="sku" name="sku" placeholder="SKU"
                                               class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                            <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                <label for="name">Name</label>
                            </div>
                            <div class="flex-1 flex flex-col md:flex-row">
                                <div class="w-1/3 mx-2">
                                    <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                        <input type="text" id="name" name="name" placeholder="Name"
                                               class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                            <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                <label for="price">Price</label>
                            </div>
                            <div class="flex-1 flex flex-col md:flex-row">
                                <div class="w-1/3 mx-2">
                                    <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                        <input type="text" id="price" name="price" placeholder="Price"
                                               class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                            <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                <label for="type">Product type</label>
                            </div>
                            <div class="flex-1 flex flex-col md:flex-row">
                                <div class="w-1/3 mx-2">
                                    <div>
                                        <select name="type" id="type" class="input border my-2 flex-1 h-10 mt-2 form-select w-full">
                                            <option disabled selected>Select type</option>
                                            <option value="dvd">DVD</option>
                                            <option value="book">Book</option>
                                            <option value="furniture">Furniture</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dvd" style="display:none;">
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                    <label for="size">Size (MB)</label>
                                </div>
                                <div class="flex-1 flex flex-col md:flex-row">
                                    <div class="w-1/3 mx-2">
                                        <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input type="text" id="size" name="size" placeholder="Size"
                                                   class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="book" style="display:none;">
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                    <label for="weight">Weight (KG)</label>
                                </div>
                                <div class="flex-1 flex flex-col md:flex-row">
                                    <div class="w-1/3 mx-2">
                                        <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input type="text" id="weight" name="weight" placeholder="Weight"
                                                   class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="furniture" style="display:none;">
                            <div class="flex flex-col md:flex-row pb-4 mb-4">
                                <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                    <label for="height">Height (CM)</label>
                                </div>
                                <div class="flex-1 flex flex-col md:flex-row">
                                    <div class="w-1/3 mx-2">
                                        <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input type="text" id="height" name="height" placeholder="Height"
                                                   class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row pb-4 mb-4">
                                <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                    <label for="width">Width (CM)</label>
                                </div>
                                <div class="flex-1 flex flex-col md:flex-row">
                                    <div class="w-1/3 mx-2">
                                        <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input type="text" id="width" name="width" placeholder="Width"
                                                   class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-40 font-bold h-6 mx-2 mt-3 text-gray-800">
                                    <label for="length">Length (CM)</label>
                                </div>
                                <div class="flex-1 flex flex-col md:flex-row">
                                    <div class="w-1/3 mx-2">
                                        <div class="input my-2 p-1 bg-white flex border border-gray-200 rounded">
                                            <input type="text" id="length" name="length" placeholder="Length"
                                                   class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>

        <?php require_once 'resources/views/layouts/footer.view.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../resources/js/select.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../../resources/js/form-validation.js" type="text/javascript"></script>
</body>
</html>