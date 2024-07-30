<?php
echo '
    <div class="mt-0 w-full flex justify-between px-8 text-white p-4 lg:mt-16">
        <!-- navigator -->
        <a
            class="inline-flex items-center gap-2 rounded border border-neutral-700 px-8 py-3 text-neutral-700 hover:bg-neutral-700 hover:text-white focus:outline-none focus:ring active:bg-neutral-700tral"
            href="#">
<svg
class="size-5 rtl:rotate-180"
xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
  <span class="text-sm font-medium"> Prev </span>
</a>

<a
  class="inline-flex items-center gap-2 rounded border border-neutral-700 bg-neutral-700 px-8 py-3 text-white hover:bg-transparent hover:text-neutral-700 focus:outline-none focus:ring active:text-neutral-700"
  href="create-listing-1-2.php"
>
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
</a>
    </div>
';

?>