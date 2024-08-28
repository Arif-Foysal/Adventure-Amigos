<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

    <div class="flex h-[80vh] md:h-[90vh] max-w-7xl mx-auto ">
        <section class=" w-1/3 px-3 pt-6  overflow-y-auto hidden md:block">
            
            <div class="flex justify-between">
                <h1 class="text-3xl font-semibold">Messages</h1>
                <button
                    class="flex px-3 py-2 items-center justify-around gap-2 bg-teal-600 hover:bg-teal-500 font-semibold text-white text-md rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                    <p>New Chat</p>
                </button>
            </div>
            <br>
            <!-- search bar -->

            <form class="max-w-md mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Find Messages"/>

                </div>
            </form>


<br>

    



            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md cursor-pointer">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-1 right-0 h-3 w-3 rounded-full bg-green-400 ring-2 ring-white">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>

            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-400 ">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Siuuuu</p>
                        <p class="">•</p>
                        <p>32m</p>
                    </section>
                </div>

            </div>


        </section>
        <section class="md:w-2/3 p-3">
            <section class = "flex justify-between">
            <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md cursor-pointer">
                <div class="relative w-fit">
                    <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                    <div class="absolute bottom-1 right-0 h-3 w-3 rounded-full bg-green-400 ring-2 ring-white">

                    </div>
                </div>
                
                <div>

                    <p class="text-md font-medium">Cristiano Ronaldo</p>
                    <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                        <p>Active now</p>
                    </section>
                </div>

            </div>
            <div class="flex items-center gap-8">

            <a href="profile-edit.php"
                        class="flex items-center underline h-6">
                        <p class="text-md font-semibold text-black">Report chat</p>
                    </a>

                <button class="p-2 bg-neutral-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                    </svg>
                </button>
            </div>
            </section>
            <hr>
            <br>
            <section class="flex flex-col justify-end gap-2 overflow-y-auto h-[75%]">
                <div class="flex flex-col p-3 rounded-md bg-neutral-50 w-fit max-w-lg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam vitae, sunt voluptates suscipit ratione ullam tempore id similique unde dolorum?</p>
                    <div class="flex items-center gap-2 text-neutral-400 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
</svg>

                        <p>3:09pm</p>

                    </div>
                </div>

                <div class="flex self-end flex-col p-3 rounded-md bg-blue-600 text-white w-fit max-w-lg">
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <div class="flex items-center gap-2 text-neutral-200 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
</svg>
                        <p>3:09pm</p>
                    </div>
                </div>
            </section>    
<br>

<form>
    <label for="chat" class="sr-only">Your message</label>
    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 ">
        <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
            </svg>
            <span class="sr-only">Upload image</span>
        </button>
        <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z"/>
            </svg>
            <span class="sr-only">Add emoji</span>
        </button>
        <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your message..."></textarea>
            <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100">
            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
            </svg>
            <span class="sr-only">Send message</span>
        </button>
    </div>
</form>
        </section>
    </div>
</body>
</html>