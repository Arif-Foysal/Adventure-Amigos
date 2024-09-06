<?php
// ToDo
// - [ ]handle current file variable in all pages as session

// Start the session
include_once 'partials/__session.php';

// Store the current filename in a session variable

// echo $_SESSION['current_file'];

// Define the page flow
// $pages = [
//     'create-listing-1-1.php' => ['prev' => 'create_listing.php', 'next' => 'create-listing-1-2.php'],
//     'create-listing-1-2.php' => ['prev' => 'create-listing-1-1.php', 'next' => 'create-listing-1-3.php'],
//     'create-listing-1-3.php' => ['prev' => 'create-listing-1-2.php', 'next' => 'create-listing-1-4.php'],
//     'create-listing-1-4.php' => ['prev' => 'create-listing-1-3.php', 'next' => 'create-listing-1-5.php'],
//     'create-listing-1-5.php' => ['prev' => 'create-listing-1-4.php', 'next' => 'create-listing-2-1.php'],
//     'create-listing-2-1.php' => ['prev' => 'create-listing-1-5.php', 'next' => 'create-listing-2-2.php'],
//     'create-listing-2-2.php' => ['prev' => 'create-listing-2-1.php', 'next' => 'create-listing-2-3.php'],
//     'create-listing-2-3.php' => ['prev' => 'create-listing-2-2.php', 'next' => 'create-listing-2-4.php'],
//     'create-listing-2-4.php' => ['prev' => 'create-listing-2-3.php', 'next' => 'create-listing-2-5.php'],
//     'create-listing-2-5.php' => ['prev' => 'create-listing-2-4.php', 'next' => 'create-listing-2-6.php'],
//     'create-listing-2-6.php' => ['prev' => 'create-listing-2-5.php', 'next' => 'create-listing-3-1.php'],
//     'create-listing-3-1.php' => ['prev' => 'create-listing-2-6.php', 'next' => 'create-listing-3-2.php'],
//     'create-listing-3-2.php' => ['prev' => 'create-listing-3-1.php', 'next' => 'create-listing-3-3.php'],
//     'create-listing-3-3.php' => ['prev' => 'create-listing-3-2.php', 'next' => 'create-listing-3-4.php'],
//     'create-listing-3-4.php' => ['prev' => 'create-listing-3-3.php', 'next' => 'create-listing-3-5.php']
// ];


$steps = [
  'step-1' => [
      'create-listing-1-1.php' => ['prev' => 'create_listing.php', 'next' => 'create-listing-1-2.php'],
      'create-listing-1-2.php' => ['prev' => 'create-listing-1-1.php', 'next' => 'create-listing-1-3.php'],
      'create-listing-1-3.php' => ['prev' => 'create-listing-1-2.php', 'next' => 'create-listing-1-4.php'],
      'create-listing-1-4.php' => ['prev' => 'create-listing-1-3.php', 'next' => 'create-listing-1-5.php'],
      'create-listing-1-5.php' => ['prev' => 'create-listing-1-4.php', 'next' => 'create-listing-2-1.php']
  ],
  'step-2' => [
      'create-listing-2-1.php' => ['prev' => 'create-listing-1-5.php', 'next' => 'create-listing-2-2.php'],
      'create-listing-2-2.php' => ['prev' => 'create-listing-2-1.php', 'next' => 'create-listing-2-3.php'],
      'create-listing-2-3.php' => ['prev' => 'create-listing-2-2.php', 'next' => 'create-listing-2-4.php'],
      'create-listing-2-4.php' => ['prev' => 'create-listing-2-3.php', 'next' => 'create-listing-2-5.php'],
      'create-listing-2-5.php' => ['prev' => 'create-listing-2-4.php', 'next' => 'create-listing-2-6.php'],
      'create-listing-2-6.php' => ['prev' => 'create-listing-2-5.php', 'next' => 'create-listing-3-1.php']
  ],
  'step-3' => [
      'create-listing-3-1.php' => ['prev' => 'create-listing-2-6.php', 'next' => 'create-listing-3-2.php'],
      'create-listing-3-2.php' => ['prev' => 'create-listing-3-1.php', 'next' => 'create-listing-3-3.php'],
      'create-listing-3-3.php' => ['prev' => 'create-listing-3-2.php', 'next' => 'create-listing-3-4.php'],
      'create-listing-3-4.php' => ['prev' => 'create-listing-3-3.php', 'next' => 'create-listing-3-5.php']
  ]
];




// Get the current page
// $_SESSION['current_file'] = basename(__FILE__);
// $prevPage = $pages[$_SESSION['current_file']]['prev'];
// $nextPage = $pages[$_SESSION['current_file']]['next'];

// Identify the current step by checking which step contains the current page
$current_page =$_SESSION['current_file'];
$current_step = null;
foreach ($steps as $step => $pages) {
    if (isset($pages[$current_page])) {
        $current_step = $step;
        break;
    }
}

$prevPage = null;
$nextPage = null;
if ($current_step !== null) {
  // Get the current page's prev and next values
  $prevPage = $steps[$current_step][$current_page]['prev'];
  $nextPage = $steps[$current_step][$current_page]['next'];
}
else {
  echo "current step is null";

}

// <section class="flex justify-center items-center">
//     <div class="h-10 w-10 rounded-full flex items-center justify-center font-semibold bg-blue-500 text-white">
//       1
//     </div>
//     <div class="h-0.5 w-20 bg-slate-200"></div>
    
    // <div class="h-10 w-10 rounded-full flex items-center justify-center font-semibold bg-blue-100 text-black border-blue-500 border-2">
    //   2
    // </div>
//     <div class="h-0.5 w-20 bg-slate-200"></div>

    // <div class="h-10 w-10 rounded-full flex items-center justify-center font-semibold bg-blue-100 text-black">
    //   3
    // </div>
// </section>

$stepper = '
<section class="flex justify-center items-center mt-8 lg:mt-16">
';

$last_page = array_key_last($steps[$current_step]); // Get the last page of the current step

$pages_in_order = array_keys($steps[$current_step]); // Get all page names in an array
$current_page_index = array_search($current_page, $pages_in_order); // Get index of the current page
$last_page_index = array_search($last_page, $pages_in_order); // Get index of the last page
foreach ($steps[$current_step] as $page => $prevNext) {
    $page_index = array_search($page, $pages_in_order); // Get index of this page in the loop
    if ($page_index < $current_page_index) {
        // The page is completed (its index is before the current page)
        $stepper .= '
        <div class="h-8 w-8 rounded-full flex items-center justify-center font-semibold bg-blue-500 text-white">
        '. $page_index+1 .'
        </div>
        ';
        if ($page_index != $last_page_index) {
          $stepper .= '
          <div class="h-0.5 w-10 lg:w-20 bg-slate-200"></div>
          ';
        }
    } elseif ($page_index == $current_page_index) {
        // The page is in progress (this is the current page)
       $stepper .= '
       <div class="h-8 w-8 rounded-full flex items-center justify-center font-semibold bg-blue-100 text-black border-blue-500 border-2">
       '.$page_index + 1 .'
     </div>
       ';

       if ($page_index != $last_page_index) {
        $stepper .= '
        <div class="h-0.5 w-10 lg:w-20 bg-slate-200"></div>
        ';
      }

    } else {
        // The page is incomplete (its index is after the current page)
       $stepper .= '
       <div class="h-8 w-8 rounded-full flex items-center justify-center font-semibold bg-blue-100 text-black">
       '.$page_index + 1 .'
     </div>
       ';

        if ($page_index != $last_page_index) {
          $stepper .= '
          <div class="h-0.5 w-10 lg:w-20 bg-slate-200"></div>
          ';
        }
    }
}

$stepper .= '</section>';

echo $stepper;

echo '
    <div class="mt-0 w-full flex justify-between px-8 text-white p-4 ">
        
        <a
            class="inline-flex items-center gap-2 rounded border border-neutral-700 px-8 py-3 text-neutral-700 hover:bg-neutral-700 hover:text-white focus:outline-none focus:ring active:bg-neutral-700tral"
            href="'.$prevPage.'">
            <svg
            class="size-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
          <span class="text-sm font-medium"> Prev </span>
        </a>';

        echo '<button
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

?>




