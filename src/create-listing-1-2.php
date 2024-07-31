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
ob_start();
include_once "partials/__nav.php";
include_once 'partials/__save-exit-btn.php';

?>
        <h1 class="text-4xl font-bold text-center">Which of these best describes your place</h1>
        <br>
    <?php
    // echo $err;
    if (isset($_SESSION['err'])) {
        # code...
        echo $_SESSION['err'];
    }


    echo '
    <form method="post" action="#">
    ';
    ?>
<div class= "flex justify-center">


    <section class=" w-80 lg:w-[50vw] flex flex-wrap">
        
        <!-- <div class= "grow w-1/2 lg:w-1/3 p-2 ">
        <label class=" border-2 border-gray-800 rounded-md p-4 hover:bg-zinc-300  cursor-pointer inline-flex w-full h-full">
    <input type="radio" name="options" class="hidden ">
    <div class="flex flex-col justify-start ">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
        </svg>
        <p class="text-lg font-medium">House</p>
    </div>
</label>
        </div>   -->        

        <div class="grow w-1/2 lg:w-1/3 p-2">
                <input type="radio" name="options" value="house" id="option-house" class="hidden peer">
                <label for="option-house" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                    <div class="flex flex-col justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                        </svg>
                        <p class="text-lg font-medium">House</p>
                    </div>
                </label>
        </div>

        <div class="grow w-1/2 lg:w-1/3 p-2">
                <input type="radio" name="options" value="hotel" id="option-hotel" class="hidden peer">
                <label for="option-hotel" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                    <div class="flex flex-col justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                    </svg>

                        <p class="text-lg font-medium">Hotel</p>
                    </div>
                </label>
        </div>

        <div class="grow w-1/2 lg:w-1/3 p-2">
                <input type="radio" name="options" value="treehouse" id="option-treehouse" class="hidden peer">
                <label for="option-treehouse" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                    <div class="flex flex-col justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                    <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507"/>
                    </svg>
                        <p class="text-lg font-medium">Treehouse</p>
                    </div>
                </label>
        </div>

        <div class="grow w-1/2 lg:w-1/3 p-2">
                <input type="radio" name="options" value="yacht" id="option-yacht" class="hidden peer">
                <label for="option-yacht" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                    <div class="flex flex-col justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16">
                    <path d="M.036 3.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 3.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 6.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 9.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65"/>
                    </svg>
                        <p class="text-lg font-medium">Yacht</p>
                    </div>
                </label>
        </div>

        <div class="grow w-1/2 lg:w-1/3 p-2">
                <input type="radio" name="options" value="tent" id="option-tent" class="hidden peer">
                <label for="option-tent" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                    <div class="flex flex-col justify-start">
                    <img src="../images/vectors/tent.png" height="auto" width="25" alt="">
                        <p class="text-lg font-medium">Tent</p>
                    </div>
                </label>
        </div>
     

    </section>
</div>

<div class="lg:h-36"></div>

    <?php
    include_once 'partials/__prev-next-btn.php';
    ?>    

    </form>

<?php
include_once 'partials/__footer.php';
    //form handling

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['options'])) {
            $_SESSION['err'] = "Please select an option";
        }
        else {
            # code...
            //todo: put selected option to db
            header("Location:$nextPage");
            unset($_SESSION['err']);
        }
        // var_dump($_SESSION);
        exit;
    }
    ob_end_flush();//learn more about this piece of shit
?>


</body>
</html>