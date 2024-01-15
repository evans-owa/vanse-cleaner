<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@include('header1')
    <div class="flex justify-center bg-black">
        <nav class="self-center w-full max-w-7xl ">
            <div class="flex flex-col lg:flex-row justify-around items-center text-white">
                <h1 class="uppercase pl-5 py-4 text-lg font-sans font-bold">hero</h1>
                <ul class="hidden lg:flex items-center text-[18px] font-semibold pl-32">
                    <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5">
                        <a href="#">Home</a> </li>
                    <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5"><a
                            href="#">Contact</a></li>
                    <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5"><a
                            href="#">Services</a></li>
                    <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5"><a
                            href="#">About</a></li>
                    <li class="hover:underline underline-offset-4 decoration-2 decoration-white py-2 rounded-lg px-5"><a
                            href="#">Pricing</a></li>
                </ul>
                <div class="text-white text-center text-base pr-5 inline-flex"> <a href="#"
                        class="w-8 h-8 inline-block rounded-full pt-[6px] hover:text-blue-500"><i
                            class="fa fa-twitter"></i></a> <a href="#"
                        class="w-8 h-8 inline-block rounded-full pt-[5px] hover:text-blue-500"><i
                            class="fa fa-instagram"></i></a> <a href="#"
                        class="w-8 h-8 inline-block rounded-full pt-[5px] hover:text-blue-500"><i
                            class="fa fa-facebook"></i></a> <a href="#"
                        class="w-8 h-8 inline-block rounded-full pt-[5px] hover:text-blue-500"><i
                            class="fa fa-google"></i></a> <a href="#"
                        class="w-8 h-8 inline-block rounded-full pt-[5px] hover:text-blue-500"><i
                            class="fa fa-linkedin"></i></a> </div>
            </div>
        </nav>
    </div>
    <div class="flex justify-center bg-black p-8 ">
        <div class="flex flex-col justify-center">
            <div class="flex flex-col lg:flex-row max-w-7xl justify-center items-center p-2 space-y-3 w-full">
                <div class="flex flex-col text-white md:items-start items-center justify-between space-y-3 px-8">
                    <div class="text-5xl md:text-7xl font-bold "> Hero Animation </div>
                    <div class="text-lg uppercase md:text-3xl "> Interactive Components</div>
                    <div class="text-xl md:text-3xl "> @tailblocks.org</div>
                </div>
                <div class="flex space-x-2 md:space-x-6 md:m-4">
                    <div class="md:w-20 w-10 h-60 md:h-96 overflow-hidden rounded-xl"> <img
                            src="https://source.unsplash.com/100x400/?man" class="h-full w-full" alt=""> </div>
                    <div class="md:w-60 w-28 h-60 md:h-96 overflow-hidden rounded-xl"> <img
                            src="https://source.unsplash.com/200x400/?girl" class="h-full w-full" alt=""> </div>
                    <div class="md:w-28 w-16 h-60 md:h-96 overflow-hidden rounded-xl"> <img
                            src="https://source.unsplash.com/100x400/?boy" class="h-full w-full" alt=""> </div>
                    <div class="md:w-20 w-10 h-60 md:h-96 overflow-hidden rounded-xl"> <img
                            src="https://source.unsplash.com/100x400/?women" class="h-full w-full" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
            scrolling="no"
            src="https://maps.google.com/maps?width=100%&amp;height=200&amp;
    hl=en&amp;q=-1.0690959761990673, 37.08574409735913+(Vanse%20soft%20limited)&amp;ie=UTF8&amp;
    t=&amp;z=14&amp;iwloc=B&amp;output=embed"
            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>

@include('footer');
</html>
