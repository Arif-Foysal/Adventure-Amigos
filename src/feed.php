<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

<div class="bg-gray-100">
    <div class="container mx-auto p-4 max-w-2xl">
    <h1></h1>

    <h1 class="text-lg font-medium">Create a post</h1>
<form>
   <div class="w-full mb-4 border-2 border-gray-200 rounded-lg bg-gray-50 ">
    
       <div class="px-4 py-2 bg-white rounded-t-lg">
           <!-- <label for="post" class="sr-only">Your review</label> -->
           <textarea name="post" id="post" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0  focus:ring-0  " placeholder="What's on your mind?" required ></textarea>
       </div>
       <div class="flex items-center justify-between px-3 py-2 border-t">
           <button id="post-submit" type="submit" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-green-800">
              Share post
           </button>
           <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
               <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                    </svg>
                   <span class="sr-only">Attach file</span>
               </button>
               <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                   <span class="sr-only">Set location</span>
               </button>
               <button type="submit" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                    </svg>
                   <span class="sr-only">Upload image</span>
               </button>
           </div>
       </div>
   </div>
</form>
        <section id="post_container">

            <div class="bg-white rounded-lg shadow-md mb-4 p-4">
                <div class="flex items-center mb-2">
                    <img src="https://via.placeholder.com/40" alt="Elon Musk" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h2 id="post_creator_fname" class="font-bold text-gray-900">Elon Musk</h2>
                        <p id="post_created_at" class="text-gray-500 text-sm">20 minutes ago</p>
                    </div>
                </div>
                <p id="post_content" class="text-gray-800 mb-3">Let's set an age limit after which you can't run for political office, perhaps a number just below 70 ...</p>
                <div class="flex items-center text-gray-500 text-sm mb-2">
                    <span id="like_count" class="mr-4"><i class="fas fa-heart text-red-500"></i> <span class="like-count">241</span>k</span>
                    <span id="comment_count">45 Comments</span>
                </div>
                <div class="flex justify-between border-t pt-3">
                    <button class="text-gray-500 hover:text-red-500 like-button"><i class="far fa-heart mr-2"></i>Like</button>
                    <button class="text-gray-500 hover:text-gray-700"><i class="fas fa-retweet mr-2"></i>Retweet</button>
                    <button class="text-gray-500 hover:text-gray-700 comment-button"><i class="far fa-comment mr-2"></i>Comment</button>
                </div>
                <div class="comment-section hidden mt-4">
                    <textarea class="w-full p-2 border rounded-md" rows="2" placeholder="Write a comment..."></textarea>
                    <button class="mt-2 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Post Comment</button>
                </div>
            </div>

            <button id="load_more" type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none ">
                            </svg>
                           Load more
                        </button>
        </section>
            
            
    </div>

    <script>
        // Add interactivity to like buttons
        document.querySelectorAll('.like-button').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                const likeCount = this.closest('.bg-white').querySelector('.like-count');
                let currentLikes = parseInt(likeCount.textContent);

                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.classList.add('text-red-500');
                    currentLikes += 1;
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.classList.remove('text-red-500');
                    currentLikes -= 1;
                }

                likeCount.textContent = currentLikes;
            });
        });

        // Add interactivity to comment buttons
        document.querySelectorAll('.comment-button').forEach(button => {
            button.addEventListener('click', function() {
                const commentSection = this.closest('.bg-white').querySelector('.comment-section');
                commentSection.classList.toggle('hidden');
            });
        });
    </script>
</div>


<?php
include_once 'partials/__footer.php';
?>

<script>
    // Function to get the 'id' parameter from the URL
function getQueryParam(param) {

const urlParams = new URLSearchParams(window.location.search);
return urlParams.get(param);

}
</script>

<script>
    document.getElementById('post-submit').addEventListener('click', function(event) {
    event.preventDefault();
    
    const postContent = document.getElementById('post').value;
    
    if (postContent.trim() === '') {
        alert('Please write something before sharing your post.');
        return;
    }

    const cityId = new URLSearchParams(window.location.search).get('city'); // Assuming city is passed as a query param in the URL like ?city=1

    fetch('create-post.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            post: postContent,
            city_id: cityId
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // alert('Post created successfully!');
            // // Optionally, clear the textarea and refresh posts
            // document.getElementById('post').value = '';
            window.location.reload();
        } else {
            alert('Error: ' + data.error);
        }
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});

</script>

<script>
    let currentPage = 1; // Current page number
const cityId = getQueryParam('city'); // Change this to the desired city ID

// Function to load posts
function loadPosts(page) {
    fetch(`get_posts.php?city_id=${cityId}&page=${page}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const postContainer = document.getElementById('post_container');
            data.forEach(post => {
                const postDiv = document.createElement('div');
                postDiv.className = 'bg-white rounded-lg shadow-md mb-4 p-4';
                postDiv.innerHTML = `
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/40" alt="${post.post_creator_fname}" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h2 class="font-bold text-gray-900">${post.post_creator_fname} ${post.post_creator_lname}</h2>
                            <p class="text-gray-500 text-sm">${new Date(post.post_created_at).toLocaleString()}</p>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-3">${post.post_content}</p>
                    <div class="flex items-center text-gray-500 text-sm mb-2">
                        <span class="mr-4"><i class="fas fa-heart text-red-500"></i> <span class="like-count">241</span>k</span>
                        <span>${post.comment_count || 0} Comments</span>
                    </div>
                    <div class="flex justify-between border-t pt-3">
                        <button class="text-gray-500 hover:text-red-500 like-button"><i class="far fa-heart mr-2"></i>Like</button>
                        <button class="text-gray-500 hover:text-gray-700"><i class="fas fa-retweet mr-2"></i>Retweet</button>
                        <button class="text-gray-500 hover:text-gray-700 comment-button"><i class="far fa-comment mr-2"></i>Comment</button>
                    </div>
                    <div class="comment-section hidden mt-4">
                        <textarea class="w-full p-2 border rounded-md" rows="2" placeholder="Write a comment..."></textarea>
                        <button class="mt-2 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Post Comment</button>
                    </div>
                `;
                postContainer.appendChild(postDiv);
            });

            // If no more posts are returned, hide the load more button
            if (data.length < 5) {
                document.getElementById('load_more').style.display = 'none'; // Hide button if no more posts
            }
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });
}

// Load initial posts
loadPosts(currentPage);

// Load more posts when the button is clicked
document.getElementById('load_more').addEventListener('click', () => {
    currentPage++;
    loadPosts(currentPage);
});

</script>



</body>
</html>