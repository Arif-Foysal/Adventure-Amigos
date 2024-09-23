// Function to log selected option or notify if none selected
document.getElementById("submitBtn").addEventListener("click", function() {
    // Get all radio buttons with the name \'options\'
    const options = document.querySelectorAll("input[name=\'options\']");
    
    let selectedOption = null;
    options.forEach((option) => {
      if (option.checked) {
        selectedOption = option.value;
      }
    });
    
    // Log the result based on whether an option was selected
    if (selectedOption) {
      console.log("Selected option: " + selectedOption);
    } else {
      console.log("No option selected");
    }
  });