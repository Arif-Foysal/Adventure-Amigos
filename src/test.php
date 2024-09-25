<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panorama Pitch and Yaw with Click</title>
    <style>
        /* Styling for the image container */
        #imageContainer {
            position: relative;
            display: inline-block;
        }

        /* Styling for the dot */
        .dot {
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        /* Container for the dynamic entries */
        .entry {
            margin-top: 10px;
        }

        .entry input {
            margin-right: 10px;
        }

        .entry button {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div id="imageContainer">
    <img id="myImage" src="pano.jpg" alt="Image" style="width: 600px; height: 400px;">
</div>

<!-- Container where the pitch/yaw entries will appear -->
<div id="entryContainer"></div>

<script>
    let clickCounter = 0;  // Initialize a counter for the sequence of letters

    // Function to handle the click event on the image
    document.getElementById('myImage').addEventListener('click', function(event) {
        // Ensure the sequence doesn't go beyond 'Z' (26 clicks)
        if (clickCounter >= 26) return;

        // Get the position of the image relative to the page
        const imageRect = this.getBoundingClientRect();

        // Get the click coordinates relative to the image
        const clickX = event.clientX - imageRect.left;
        const clickY = event.clientY - imageRect.top;

        // Image width and height
        const imageWidth = imageRect.width;
        const imageHeight = imageRect.height;

        // Normalize the X and Y coordinates to range from 0 to 1
        const normalizedX = clickX / imageWidth;
        const normalizedY = clickY / imageHeight;

        // Map normalizedX and normalizedY to Pannellum pitch and yaw:
        // Yaw ranges from -180 (left) to 180 (right) degrees
        const yaw = (normalizedX * 360) - 180;

        // Pitch ranges from -90 (top) to 90 (bottom) degrees
        const pitch = 90 - (normalizedY * 180);

        // Create a new dot element
        const dot = document.createElement('div');
        dot.classList.add('dot');

        // Set the dot's position at the click coordinates
        dot.style.left = `${clickX}px`;
        dot.style.top = `${clickY}px`;

        // Convert the clickCounter to a letter (A = 65 in ASCII)
        const letter = String.fromCharCode(65 + clickCounter); // A, B, C...
        dot.textContent = letter;

        // Add the dot to the image container
        document.getElementById('imageContainer').appendChild(dot);

        // Create a new entry div
        const entryDiv = document.createElement('div');
        entryDiv.classList.add('entry');
        entryDiv.id = `entry-${clickCounter}`;  // Give a unique ID to the entry

        // Add pitch and yaw text
        const pitchYawText = document.createElement('span');
        pitchYawText.textContent = `Dot ${letter}: Pitch = ${pitch.toFixed(2)}, Yaw = ${yaw.toFixed(2)}`;

        // Add input field for name
        const nameInput = document.createElement('input');
        nameInput.type = 'text';
        nameInput.placeholder = 'Name of the entry';

        // Add file input for image upload
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*';

        // Add delete button
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.onclick = function() {
            // Remove the dot and entry when the delete button is clicked
            dot.remove();
            entryDiv.remove();
        };

        // Append elements to the entry div
        entryDiv.appendChild(pitchYawText);
        entryDiv.appendChild(nameInput);
        entryDiv.appendChild(fileInput);
        entryDiv.appendChild(deleteButton);

        // Append the entry div to the entryContainer
        document.getElementById('entryContainer').appendChild(entryDiv);

        // Increment the clickCounter
        clickCounter++;
    });
</script>

</body>
</html>
