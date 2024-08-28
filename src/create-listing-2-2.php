<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php
    ob_start();
    include_once "partials/__nav.php";
    include_once 'partials/__save-exit-btn.php';
    ?>
    <form method="post" action="#">

        <section class=" p-6">
            <div class=" max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold">Highlight what your space offers</h1>
                <p>Additional amenities can be added after your listing goes live</p>
                <br>
                <section class="flex flex-wrap gap-2">
                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="hotel" id="option-hotel" class="hidden peer">
                        <label for="option-hotel"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-wifi" viewBox="0 0 16 16">
                                    <path
                                        d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049" />
                                    <path
                                        d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                </svg>

                                <p class="text-lg font-medium">Wifi</p>
                            </div>
                        </label>
                    </div>
                    <div class=" w-40 grow">
                        <input type="checkbox" name="options" value="house" id="option-house" class="hidden peer">
                        <label for="option-house"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-tv" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
                                </svg>
                                <p class="text-lg font-medium">TV</p>
                            </div>
                        </label>
                    </div>
                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="treehouse" id="option-treehouse"
                            class="hidden peer">
                        <label for="option-treehouse"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-snow" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z" />
                                </svg>
                                <p class="text-lg font-medium">Air Conditioning</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="kitchen" id="option-kitchen" class="hidden peer">
                        <label for="option-kitchen"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/fork.svg" alt="" height="22" width="22">
                                <p class="text-lg font-medium">Kitchen</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="parking" id="option-parking" class="hidden peer">
                        <label for="option-parking"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/steering-wheel.svg" height="22" width="25" alt="">
                                <p class="text-lg font-medium">Parking area</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="pool" id="option-pool" class="hidden peer">
                        <label for="option-pool"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                    viewBox="0 0 24 24" width="22" height="22">
                                    <path
                                        d="M2,2A1,1,0,0,1,3,1H7.916a5,5,0,0,1,4.1,2.136l5.114,7.317A1,1,0,1,1,15.489,11.6L12.016,6.63,3.593,12.807a1,1,0,0,1-1.184-1.614l8.461-6.2-.495-.707A3,3,0,0,0,7.916,3H3A1,1,0,0,1,2,2ZM22.333,20.49A1.991,1.991,0,0,1,21,21a2.248,2.248,0,0,1-2.057-1.333,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0A2.25,2.25,0,0,1,3,21a2,2,0,0,1-1.333-.511A1,1,0,0,0,.332,21.978,4,4,0,0,0,3,23a4.379,4.379,0,0,0,3-1.225,4.286,4.286,0,0,0,6,0,4.286,4.286,0,0,0,6,0A4.375,4.375,0,0,0,21,23a3.981,3.981,0,0,0,2.668-1.023,1,1,0,1,0-1.336-1.487ZM3,18a4.379,4.379,0,0,0,3-1.225,4.286,4.286,0,0,0,6,0,4.286,4.286,0,0,0,6,0A4.375,4.375,0,0,0,21,18a3.981,3.981,0,0,0,2.668-1.023,1,1,0,1,0-1.336-1.487A1.991,1.991,0,0,1,21,16a2.248,2.248,0,0,1-2.057-1.333,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0A2.25,2.25,0,0,1,3,16a2,2,0,0,1-1.333-.511A1,1,0,0,0,.332,16.978,4,4,0,0,0,3,18ZM18.5,8A2.5,2.5,0,1,0,16,5.5,2.5,2.5,0,0,0,18.5,8Z" />
                                </svg>

                                <p class="text-lg font-medium">Pool</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="workout" id="option-workout" class="hidden peer">
                        <label for="option-workout"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/workout.png" height="22" width="22" alt="">

                                <p class="text-lg font-medium">Workout</p>
                            </div>
                        </label>
                    </div>
                </section>
                <br><br>
                <h1 class="text-2xl font-bold">Do you have any of these safety features in your space?</h1>
                <br>

                <section class="flex flex-wrap gap-2">
                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="smoke" id="option-smoke" class="hidden peer">
                        <label for="option-smoke"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/smoke.png" alt="" height="22" width="22">

                                <p class="text-lg font-medium">Smoke alarm</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="fire" id="option-fire" class="hidden peer">
                        <label for="option-fire"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" id="Layer_1"
                                    data-name="Layer 1" viewBox="0 0 24 24">
                                    <path
                                        d="m12,3h-5v-1c0-.552-.448-1-1-1s-1,.448-1,1v1.046c-1.585.144-3.124.63-4.501,1.426-.478.277-.641.889-.365,1.367.186.32.521.499.867.499.17,0,.342-.043.5-.134,1.072-.621,2.266-1.011,3.499-1.148v2.028c-2.834.477-5,2.948-5,5.916v6.5c0,2.481,2.019,4.5,4.5,4.5h3c2.481,0,4.5-2.019,4.5-4.5v-6.5c0-2.968-2.166-5.439-5-5.916v-2.084h5c.552,0,1-.448,1-1s-.448-1-1-1Zm-2,10v6.5c0,1.378-1.122,2.5-2.5,2.5h-3c-1.207,0-2.217-.86-2.45-2h4.95c.552,0,1-.448,1-1s-.448-1-1-1H2v-5c0-2.206,1.794-4,4-4s4,1.794,4,4ZM23.189.463c-.515-.403-1.172-.542-1.848-.373l-4.408,1.293c-1.156.355-1.934,1.406-1.934,2.616s.78,2.265,1.946,2.62l4.434,1.317c.171.043.345.064.516.064.464,0,.917-.154,1.293-.448.515-.402.811-1.008.811-1.662v-3.766c0-.654-.295-1.259-.811-1.662Zm-1.189,5.428l-.092.117-4.386-1.303c-.312-.095-.522-.378-.522-.705s.209-.609.509-.701l4.449-1.26c.042.033.042.072.042.085v3.766Z" />
                                </svg>


                                <p class="text-lg font-medium">Fire estinguisher</p>
                            </div>
                        </label>
                    </div>

                    <div class="w-40 grow">
                        <input type="checkbox" name="options" value="firstAid" id="option-firstAid" class="hidden peer">
                        <label for="option-firstAid"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-bandaid" viewBox="0 0 16 16">
                                    <path
                                        d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242M12.293 8 8.027 3.734 3.738 8.031 8 12.293zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492z" />
                                    <path
                                        d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707M8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707" />
                                </svg>


                                <p class="text-lg font-medium">First aid</p>
                            </div>
                        </label>
                    </div>

                </section>


            </div>
        </section>

    <?php
    include_once 'partials/__prev-next-btn.php';
    ?>
    </form>

    <br>
    <br>
    <?php
        include_once 'partials/__footer.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # code...
            header("Location:$nextPage");
        }
        ob_end_flush();

    ?>

</body>

</html>