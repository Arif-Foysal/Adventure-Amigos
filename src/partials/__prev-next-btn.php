<?php
// ToDo
// - [ ]handle current file variable in all pages as session

// Start the session
include_once 'partials/__session.php';

// Store the current filename in a session variable

// echo $_SESSION['current_file'];

// Define the page flow
$pages = [
    'create-listing-1-1.php' => ['prev' => 'create_listing.php', 'next' => 'create-listing-1-2.php'],
    'create-listing-1-2.php' => ['prev' => 'create-listing-1-1.php', 'next' => 'create-listing-1-3.php'],
    'create-listing-1-3.php' => ['prev' => 'create-listing-1-2.php', 'next' => 'create-listing-1-4.php'],
    'create-listing-1-4.php' => ['prev' => 'create-listing-1-3.php', 'next' => 'create-listing-1-5.php'],
    'create-listing-1-5.php' => ['prev' => 'create-listing-1-4.php', 'next' => 'create-listing-2-1.php'],
    'create-listing-2-1.php' => ['prev' => 'create-listing-1-5.php', 'next' => 'create-listing-2-2.php'],
    'create-listing-2-2.php' => ['prev' => 'create-listing-2-1.php', 'next' => 'create-listing-2-3.php'],
    'create-listing-2-3.php' => ['prev' => 'create-listing-2-2.php', 'next' => 'create-listing-2-4.php'],
    'create-listing-2-4.php' => ['prev' => 'create-listing-2-3.php', 'next' => 'create-listing-2-5.php'],
    'create-listing-2-5.php' => ['prev' => 'create-listing-2-4.php', 'next' => 'create-listing-2-6.php'],
    'create-listing-2-6.php' => ['prev' => 'create-listing-2-5.php', 'next' => 'create-listing-3-1.php'],
    'create-listing-3-1.php' => ['prev' => 'create-listing-2-6.php', 'next' => 'create-listing-3-2.php'],
    'create-listing-3-2.php' => ['prev' => 'create-listing-3-1.php', 'next' => 'create-listing-3-3.php'],
    'create-listing-3-3.php' => ['prev' => 'create-listing-3-2.php', 'next' => 'create-listing-3-4.php'],
    'create-listing-3-4.php' => ['prev' => 'create-listing-3-3.php', 'next' => 'create-listing-3-5.php']
];

// Get the current page
// $_SESSION['current_file'] = basename(__FILE__);
$prevPage = $pages[$_SESSION['current_file']]['prev'];
$nextPage = $pages[$_SESSION['current_file']]['next'];

echo '
    <div class="mt-0 w-full flex justify-between px-8 text-white p-4 lg:mt-16">
        <!-- navigator -->
        <a
            class="inline-flex items-center gap-2 rounded border border-neutral-700 px-8 py-3 text-neutral-700 hover:bg-neutral-700 hover:text-white focus:outline-none focus:ring active:bg-neutral-700tral"
            href="'.$prevPage.'">
            <svg
            class="size-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
          <span class="text-sm font-medium"> Prev </span>
        </a>

        <button
                id = "next"
                type="submit"
                class="inline-flex items-center gap-2 rounded border border-neutral-700 bg-neutral-700 px-8 py-3 text-white hover:bg-transparent hover:text-neutral-700 focus:outline-none focus:ring active:text-neutral-700">
                <span class="text-sm font-medium"> Next </span>
                <svg
                  class="size-5 rtl:rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  />
                </svg>
            </button>
        
                    
    </div>
';



if ($_SESSION['current_file'] == 'create-listing-1-2.php') {

  echo '
    <script>
    document.getElementById("next").addEventListener("click", function(event) {
       
        event.preventDefault();

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

        const apiUrl = `../src/api/set-property-type.php?prop_type=${selectedOption}`;

     
        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                console.log("API response:", data);
                
              
                window.location.href = "create-listing-1-3.php";
            })
            .catch(error => {
                console.error("There was a problem with the fetch operation:", error);
            });

    } else {
      console.log("No option selected");
    }
    

      
    });
</script>
  
  ';
}

if ($_SESSION['current_file'] == 'create-listing-1-3.php') {
  echo '
  <script>
  document.getElementById("next").addEventListener("click", function(event) {
     
      event.preventDefault();

// Get all radio buttons with the name \'option\'
  const option = document.querySelectorAll("input[name=\'option\']");
  
  let selectedOption = null;
  option.forEach((opt) => {
    if (opt.checked) {
      selectedOption = opt.value;
    }
  });
  
  // Log the result based on whether an option was selected
  if (selectedOption) {
    console.log("Selected option: " + selectedOption);

      const apiUrl = `../src/api/set-accom-type.php?accom_type=${selectedOption}`;

   
      fetch(apiUrl)
          .then(response => {
              if (!response.ok) {
                  throw new Error("Network response was not ok");
              }
              return response.json();
          })
          .then(data => {
              console.log("API response:", data);
              
            
              window.location.href = "create-listing-1-4.php";
          })
          .catch(error => {
              console.error("There was a problem with the fetch operation:", error);
          });

  } else {
    console.log("No option selected");
  }
  

    
  });
</script>

';

}


// <a
//             class="inline-flex items-center gap-2 rounded border border-neutral-700 bg-neutral-700 px-8 py-3 text-white hover:bg-transparent hover:text-neutral-700 focus:outline-none focus:ring active:text-neutral-700"
//             href="'.$nextPage.'">
//             <span class="text-sm font-medium"> Next </span>
//             <svg
//               class="size-5 rtl:rotate-180"
//               xmlns="http://www.w3.org/2000/svg"
//               fill="none"
//               viewBox="0 0 24 24"
//               stroke="currentColor"
//             >
//               <path
//                 stroke-linecap="round"
//                 stroke-linejoin="round"
//                 stroke-width="2"
//                 d="M17 8l4 4m0 0l-4 4m4-4H3"
//               />
//             </svg>
//         </a>

?>
