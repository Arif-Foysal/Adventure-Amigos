<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* From Uiverse.io by satyamchaudharydev */ 
.loader {
  display: block;
  --height-of-loader: 4px;
  --loader-color: #0071e2;
  width: 200px;
  height: var(--height-of-loader);
  border-radius: 30px;
  background-color: rgba(0,0,0,0.2);
  position: relative;
}

.loader::before {
  content: "";
  position: absolute;
  background: var(--loader-color);
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  border-radius: 30px;
  animation: moving 1s ease-in-out infinite;
  ;
}

@keyframes moving {
  50% {
    width: 100%;
  }

  100% {
    width: 0;
    right: 0;
    left: unset;
  }
}
    </style>
</head>

<body>
    <?php
    include_once "partials/__nav.php";
    ?>

    <div class="flex h-[80vh] md:h-[90vh] max-w-7xl mx-auto ">
        <section class=" w-1/3 px-3 pt-6  overflow-y-auto hidden md:block relative">
            <div class="sticky top-0 left-0 right-0 bg-white z-40">


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
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="message-search" name="message-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Find Messages" />
                    </div>
                </form>
            </div>

            <br>
<section id="chatList">
          
</section>


        </section>
        <section id="chatBody" class="md:w-2/3 overflow-y-auto relative">
            <section class="flex justify-between sticky top-0 left-0 right-0 bg-slate-50">
                <div class="hover:bg-gray-100 p-2 flex gap-2 rounded-md cursor-pointer">
                    <div class="relative w-fit">
                        <img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full">
                        <div class="absolute bottom-1 right-0 h-3 w-3 rounded-full bg-green-400 ring-2 ring-white">

                        </div>
                    </div>

                    <div>
                        <p id="name" class="text-md font-medium">Cristiano Ronaldo</p>
                        <section class="flex gap-1 items-center text-sm text-neutral-400 ">
                            <p>Active now</p>
                        </section>
                    </div>

                </div>
                <div class="flex items-center gap-8">

                    <a href="profile-edit.php" class="flex items-center underline h-6">
                        <p class="text-md font-semibold text-black">Report chat</p>
                    </a>

                    <button class="p-2 bg-neutral-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                        </svg>
                    </button>
                </div>
            </section>
            <hr>
            <br>
            <section id="chatBox" class="flex flex-col justify-end gap-2 p-3 h-full">
 
            <div id="loader" class="loader mb-[30vh] self-center "></div>


            </section>
            <br>

            <form method="post" class="pl-2 pr-2 sticky bottom-0 left-0 right-0">
                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 ">
                    <button type="button"
                        class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 18">
                            <path fill="currentColor"
                                d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                        </svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                    <button type="button"
                        class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z" />
                        </svg>
                        <span class="sr-only">Add emoji</span>
                    </button>
                    <textarea id="message_text" name="message_text" rows="1"
                        class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Your message..."></textarea>
                    <button type="button" onclick="sendMessage()"
                        class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100">
                        <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                        </svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
            </form>
        </section>
    </div>
    <script>

let receiverId = 8;

let prevLastMsgId = -1;

// setting user-info---------------
// Define a global variable to hold the user ID
let userId = null;

fetch('api/get-user-info.php')  // Replace with the actual path to your PHP script
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        userId = data.user_id;  // Save the fetched user ID to the global variable
        console.log('User ID inside fetch:', userId);  // Log the user ID to the console
        // Now you can call a function that uses the userId
        // useUserId();
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });


        function ajaxRequest(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    callback(null, xhr.responseText);  // Call the callback function with the response data
                } else {
                    callback('Error: ' + xhr.status);  // Call the callback function with the error
                }
            };

            xhr.onerror = function () {
                callback('Network Error');
            };

            xhr.send();
        }

        function updateChatBox(error, data) {
            if (error) {
                console.error(error);
                console.log("there is an error retriving the messages from API");
                return;
            }
            const msg = JSON.parse(data);
            
            if (msg.lastMsgId != prevLastMsgId) {
                document.getElementById('name').innerHTML = msg.name;
                document.getElementById('chatBox').innerHTML = msg.chatbody;
                autoScroll();
                prevLastMsgId = msg.lastMsgId;
            }
            else if (document.getElementById("loader")) {
                document.getElementById("loader").remove();
                document.getElementById('chatBox').innerHTML = msg.chatbody;

            }
        }

        function autoRefreshChatBox() {
            if (userId && receiverId) {
                ajaxRequest("api/get-messages.php?sender_id="+userId+"&receiver_id="+receiverId, updateChatBox);
            }
            setTimeout(autoRefreshChatBox, 2000);
        }
//chat list update
function updateChatList(error,data){
    if (error) {
                console.error(error);
                console.log("there is an error retriving the messages from API");
                return;
            }
            const msg = JSON.parse(data);
            document.getElementById('chatList').innerHTML = msg.body;
}   

function autoRefreshChatList(){
            ajaxRequest("api/get-chat-list.php", updateChatList);
            setTimeout(autoRefreshChatList, 5000);
        }

        autoRefreshChatList();
        autoRefreshChatBox();

function autoScroll(){
    var chatBox = document.getElementById("chatBody");  
    chatBox.scrollTop = chatBox.scrollHeight;
}



//Sending messages-------------



function sendMessage() {
    // Get the textarea element by its ID
    var messageText = document.getElementById("message_text").value;
    
    // Check if the message text is not empty
    if (messageText.trim() === "") {
        alert("Please enter a message.");
        return;
    }

    // URL to which the POST request will be sent
    var url = "api/send-message.php"; // Replace with your actual URL

    // Data to send in the request body
    var data = {
        message_text: messageText,
        receiver_id:receiverId//replace this with your receiver id
    };

    // Send a POST request using the fetch API
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log("Message sent successfully:", data);
        // Clear the textarea after the message is sent
        document.getElementById("message_text").value = "";
    })
    .catch((error) => {
        console.error("Error sending message:", error);
    });
}





    </script>
</body>

</html>

