<div class="inline-flex rounded-md shadow-sm" role="group">
  <button type="button" class="flex items-center gap-1 px-2 py-3" onclick="showPanel(0)">
    <p>Anywhere</p>
  </button>
  <button type="button" class="flex items-center gap-2 px-2 py-3" onclick="showPanel(1)">
    <p>Any week</p>
  </button>
  <button type="button" class="flex items-center gap-1 px-2 py-3" onclick="showPanel(2)">
    <p>Any price</p>
  </button>
</div>

<!-- Content Panels -->
<div class="content-panel" id="panel0" style="display: none;">
  <p>Content for Anywhere</p>
  <button onclick="closePanel(0)">Close</button>
</div>
<div class="content-panel" id="panel1" style="display: none;">
  <p>Content for Any week</p>
  <button onclick="closePanel(1)">Close</button>
</div>
<div class="content-panel" id="panel2" style="display: none;">
  <p>Content for Any price</p>
  <button onclick="closePanel(2)">Close</button>
</div>

<script>
  function showPanel(panelIndex) {
    const panels = document.querySelectorAll(".content-panel");
    panels.forEach((panel, index) => {
      panel.style.display = (index === panelIndex) ? "block" : "none";
    });
  }

  function closePanel(panelIndex) {
    document.getElementById('panel' + panelIndex).style.display = 'none';
  }
</script>
