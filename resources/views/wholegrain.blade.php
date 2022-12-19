<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Whole Grain</title>
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite('resources/css/app.css')
</head>

<body class="w-full">
    <header class="mb-5">
        <nav class="px-8 pt-10">
            <div class="grid grid-rows-3 grid-flow-col gap-4 relative">
                <div class="row-span-3 ...">
                    <div class="col-start-1">
                        <img src="{{ URL('images/logo.png') }}" alt="logo" class="col-span-5 ml-2">
                    </div>
                </div>
                <div class="col-span-2 ...">
                    <a href="#">info@company.com</a>
                    <a href="#">EN</a>
                    <a href="#">GR</a>
                </div>
                <div class="row-span-2 col-span-2 relative right-0">
                    <div class="col-start-2 grid grid-cols-7">
                        <a href="#" class="col-start-3 ">ABOUT US</a>
                        <a href="#" class="col-start-4 ">PRODUCTS</a>
                        <a href="#" class="col-start-5 ">SERVICES</a>
                        <a href="#" class="col-start-6 ">CONTACT US</a>
                        {{-- <div class="col-start-7 absolute right-0 mr-5">
                                <x-bi-search class=" rounded-full w-10 h-10 bg-golden" />
                            </div> --}}
                    </div>
                </div>

            </div>

        </nav>
        <hr style="border-top: 1px solid gold" class="ml-[180px]">
    </header>
    <main>

        <div class="w-screen">
            <img src="{{ URL('images/image1.png') }}" alt="wheat-field" class="w-screen">
        </div>


        {{-- ---------------------------------------------------------------------------------------------  --}}

        <div class="w-full bg-full bg-no-repeat bg-contain bg-right" style="background-image: url('images/image2.png')">

            <div class="w-1/3 ml-10 ">
                <h3 class="font-bold mt-10">ABOUT US</h3>
                <br>
                <label for="aboutus" class="text-golden">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum vitae imperdiet nulla. Duis vehicula quis nisi id iaculis. Etiam iaculis nulla ex, eu
                    ultrices augue condimentum id.
                </label>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae imperdiet nulla. Duis
                    vehicula quis nisi id iaculis. Etiam iaculis nulla ex, eu ultrices augue condimentum id. Nulla
                    imperdiet orci nec sem tincidunt, ut venenatis leo blandit. Vivamus feugiat risus a nulla
                    iaculis, et volutpat diam feugiat. Integer vel purus ut mauris accumsan ornare. Praesent
                    tincidunt magna mi. Aenean porta tristique posuere.
                </p>
                <br>
                <p>
                    Integer lobortis neque massa. Nulla sit amet arcu finibus, mattis magna in, semper nibh. Donec
                    et quam convallis, interdum felis et, commodo odio. Cras rutrum eros eu nisl maximus efficitur.
                    Quisque odio dui, bibendum et aliquet id, maximus sit amet augue. Nam vel tempus nulla. Ut quis
                    tellus id nulla aliquet dictum. Curabitur mattis justo at purus lobortis, nec interdum dui
                    consequat. In congue in neque eu maximus.
                </p>
                <br>
                <p>
                    Nulla tincidunt ac dolor nec lobortis. Proin congue est a eleifend hendrerit. Phasellus eget
                    sollicitudin massa, in consectetur nisl. Mauris ac ligula non diam iaculis tristique. Donec
                    vestibulum interdum turpis in aliquam. Aenean interdum fermentum enim, quis posuere mi ultricies
                    nec. Donec at lacinia tortor, quis placerat eros. Sed facilisis odio eros, non commodo risus
                    pellentesque vel. Proin facilisis placerat ipsum in sodales. Sed eu lorem ac elit venenatis
                    vulputate at eu nibh. Proin massa mauris, volutpat sit amet ornare id, imperdiet vitae velit.
                </p>

            </div>

        </div>
        <div class="bg-gray-100">
            <h3 class="font-bold pt-10 mx-10">SERVICES</h3>
            <div class="grid grid-cols-12 mt-10 mx-10">
                <div class="col-start-1">
                    <img src="{{ URL('images/icon1.svg') }}" alt="like-logo" class="object-fit h-[80px] w-[80px] ">

                </div>
                <div class="col-start-2 col-end-11">
                    <hr style="border-top: dotted" class="mx-5">

                </div>
                <div class="col-start-12">
                    <img src="{{ URL('images/icon2.svg') }}" alt="like-logo" class="object-fit h-[80px] w-[80px] ">
                </div>

            </div>
            <div class="grid grid-cols-3">
                <div class="col-start-1 mx-10 mt-10">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis ullam
                        voluptas
                        nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero temporibus
                        aperiam, dolor corrupti corporis.
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusamus deleniti facere ratione
                        ducimus quibusdam temporibus nemo fugit itaque. Quisquam sint sequi expedita excepturi error
                        amet. Expedita laborum nobis ducimus.
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est accusamus suscipit in natus
                        quibusdam facilis obcaecati modi illum architecto minima voluptatibus laboriosam assumenda
                        officiis adipisci rem quas, cupiditate, sed sequi?
                    </p>

                </div>
                <div class="col-start-2 mx-10 mt-10">
                    <ul class="list-disc">
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                        <br>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                        <br>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                    </ul>




                </div>
                <div class="col-start-3 mx-10 mt-10">
                    <ul class="list-disc">
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                        <br>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                        <br>
                        <li>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consectetur blanditiis
                                ullam
                                voluptas
                                nam, laborum, voluptatem placeat quae eligendi et non! Suscipit expedita ipsum libero
                                temporibus
                                aperiam, dolor corrupti corporis.
                            </p>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mb-[50px]">
            <h3 class="font-bold pt-10 mx-10">PRODUCTS</h3>
            <div class="grid grid-cols-3 mt-[50px] mx-10 ">
                <div class="mx-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit ad saepe, distinctio sequi
                    voluptate, itaque beatae numquam qui mollitia dolor? Sunt mollitia labore voluptatum facere
                    praesentium ad magnam rerum!
                </div>
                <div class="mx-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste asperiores molestias dolores
                    corporis cum vel cupiditate deserunt impedit veniam sint commodi, corrupti veritatis praesentium
                    optio natus repellendus fugiat quae!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum reiciendis blanditiis cum
                    officia incidunt, nesciunt quasi vero alias ratione, illo obcaecati dolores quo eaque deserunt ut
                    omnis dicta. Cupiditate, officiis!
                </div>
                <div class="mx-5">
                    <img src="{{ URL('images/image2.png') }}" alt="image2" class="w-[300px] h-50">
                    <div class="text-center bg-gray-100">Barley</div>
                </div>
            </div>
        </div>


    </main>

    <footer class="">
        <div class="gird grid-cols-2 w-full ">
            <div class="col-start-1 w-1/2 bg-gray-100 px-10">

                <h3 class="font-bold text-xl pt-10 ">CONTACT US</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <i class="fa-solid fa-location my-5"></i> my location 5, 1234, Cyprus
                <br>
                <i class="fa-solid fa-phone my-5"></i> +00 99 123 321
                <br>
                <i class="fa-solid fa-fax my-5"></i> +00 22 123 321
                <br>
                <i class="fa-solid fa-envelope my-5"></i>info@company.com
            </div>
            <div class="col-start-2 w-1/2 px-10">
                <h3 class="font-bold text-xl pt-10 mx-10">GET IN TOUCH</h3>
                <input type="text" placeholder="Your Name" class="my-5"> <i class="fa-solid fa-user"></i>
                <br>
                <input type="email" placeholder="Email"  class="my-5"> <i class="fa-solid fa-envelope"></i>
                <br>
                <input type="text" placeholder="Message"  class="my-5"> <i class="fa-solid fa-message"></i>
                <br>
                <input type="button" value="SEND A MESSAGE" class=" border-solid border-2 border-yellow-500">
            </div>
        </div>
    </footer>


</body>

</html>
