<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Your chat application UI here -->
    <div id="chatBox">

    </div>



    <script>
    function pollMessages(lastReceivedTime) {
        const senderId = 2; // Replace with actual sender_id
        const receiverId = 3; // Replace with actual receiver_id
    
        $.ajax({
            url: 'get-messages-poll.php',
            type: 'GET',
            data: {
                sender_id: senderId,
                receiver_id: receiverId,
                last_received_time: lastReceivedTime
            },
            success: function(data) {
                // Process the response
                processMessages(data);
    
                // If there are messages, update the lastReceivedTime
                if (data.length > 0) {
                    lastReceivedTime = data[data.length - 1].sent_at;
                }
    
                // Continue polling immediately
                pollMessages(lastReceivedTime);
            },
            error: function(xhr, status, error) {
                console.error("Polling error: ", error);
    
                // Retry polling after a short delay in case of error
                setTimeout(function() {
                    pollMessages(lastReceivedTime);
                }, 5000);
            }
        });
    }
    
    function processMessages(messages) {
        messages.forEach(function(message) {
            console.log("Message ID: " + message.message_id);
            console.log("Message Text: " + message.message_text);
            if (message.photo_url) {
                console.log("Photo URL: " + message.photo_url);
            }
            console.log("Sent At: " + message.sent_at);
            console.log("------------------------");
        });
    
        // Update your chat UI here with new messages
        messages.forEach(function(message) {
            document.getElementById("chatBox").innerHTML=message.message_text;
        });

    }
    
    // Start the polling
    pollMessages(null);
    </script>

</body>
</html>






