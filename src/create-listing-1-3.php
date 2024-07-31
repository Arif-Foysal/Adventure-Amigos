<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Listing | Amigos</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<?php
    include_once "partials/__nav.php";
    include_once 'partials/__save-exit-btn.php';
?>
        <h1 class="text-4xl font-bold text-center">What type of place will guests have?</h1>
        <br>
        <form action="">
        <div class="flex justify-center">
            <section class="w-[90vw] lg:w-[40vw]">
                <div class= "flex flex-col gap-3">
                    <section>
                        <input type="radio" name="option" value="entire" id="option-entire" class="hidden peer">
                        <label for="option-entire" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300 ">
                            <div class="flex items-center justify-between w-full">
                                <div>
                                    <h1 class="text-xl font-semibold">An entire place</h1>
                                    <p>Guests will have an entire place for themselves</p>
                                </div>
                                &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                </svg>
                            </div>
                        </label>
                    </section>

                    <section>
                        <input type="radio" name="option" value="room" id="option-room" class="hidden peer">
                        <label for="option-room" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                            <div class="flex items-center justify-between w-full">
                                <div>
                                    <h1 class="text-xl font-semibold">A room</h1>
                                    <p>Guests have a private room and shared access to common areas.</p>
                                </div>
                                &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z"/>
                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0"/>
                                </svg>
                            </div>
                        </label>
                    </section>

                    <section>
                        <input type="radio" name="option" value="shared" id="option-shared" class="hidden peer">
                        <label for="option-shared" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                            <div class="flex items-center justify-between w-full">
                                <div>
                                    <h1 class="text-xl font-semibold">A shared room</h1>
                                    <p>Guests may share a room with the host or other guests.</p>
                                </div>
                                &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                                </svg>
                            </div>
                        </label>
                    </section>
                </div>
            </section>
        </div>

        <div class="lg:h-20"></div>

        <?php
        include_once 'partials/__prev-next-btn.php';
        ?>    

    </form>

<?php
include_once 'partials/__footer.php';
?>


</body>
</html>