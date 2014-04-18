<?php include './header.php'; ?>
<div class="main-content">
  <div class="line main-section">
    <div class="unit size1of1 header">
      <h1>UI Library</h1>
    </div>
    <div class="lastUnit size1of1">
      <p>The Blaine Report UI Library is designed to help implement the design of the website.</p>
      <ul>
        <li><a href="#headings">Headings</a></li>
        <li><a href="#grids">Grid System</a></li>
        <li><a href="#paragraphs">Paragraphs</a></li>
        <li><a href="#buttons">Buttons</a></li>
      </ul>
    </div>
  </div>
  <div class="line main-section" id="headings">
  <div class="sub-section lastUnit size1of1">
      <h2>Headings</h2>
      <p>Use the <code class="cm-string">h1</code>, <code class="cm-string">h2</code>, <code class="cm-string">h3</code>, and <code class="cm-string">h4</code> tags for your headings.</p>
    </div>
    <div class="sub-section lastUnit size1of1">
      <div class="unit size1of2">
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
      </div>
      <div class="lastUnit size1of2">
        <code class="code-snippet">
          <div>&lt;<span class="cm-tag">h1</span>&gt;Heading 1&lt;/<span class="cm-tag">h1</span>&gt;</div>
          <div>&lt;<span class="cm-tag">h2</span>&gt;Heading 2&lt;/<span class="cm-tag">h2</span>&gt;</div>
          <div>&lt;<span class="cm-tag">h3</span>&gt;Heading 3&lt;/<span class="cm-tag">h3</span>&gt;</div>
          <div>&lt;<span class="cm-tag">h4</span>&gt;Heading 4&lt;/<span class="cm-tag">h4</span>&gt;</div>
        </code>
      </div>
    </div>
  </div>
  <div class="line main-section" id="grids">
    <div class="sub-section unit size1of1">
      <h2>Grid Stystem</h2>
      <p>This is the structure of the responsive element of this website. Each grid size has <code class="cm-string">15px</code> of padding on all sides, which creates a <code class="cm-string">30px</code> gutter between other sizes. Below are all the <code class="cm-string">size1of#</code>.</p>
    </div>
    <div class="sub-section unit size1of1 below48">
      <h4>Size 1 of 1</h4>
      <div class="lastUnit size1of1 bg-b1"><p class="grid-filler">1/1</p></div>
    </div>
    <div class="sub-section unit size1of1 below48">
      <h4>Size 1 of 2</h4>
      <div class="unit size1of2 bg-b1"><p class="grid-filler">1/2</p></div>
      <div class="lastUnit size1of2 bg-b1"><p class="grid-filler">1/2</p></div>
    </div>
    <div class="sub-section unit size1of1 below48">
      <h4>Size 1 of 3</h4>
      <div class="unit size1of3 bg-b1"><p class="grid-filler">1/3</p></div>
      <div class="unit size1of3 bg-b1"><p class="grid-filler">1/3</p></div>
      <div class="lastUnit size1of3 bg-b1"><p class="grid-filler">1/3</p></div>
    </div>
    <div class="sub-section unit size1of1 below48">
      <h4>Size 1 of 4</h4>
      <div class="unit size1of4 bg-b1"><p class="grid-filler">1/4</p></div>
      <div class="unit size1of4 bg-b1"><p class="grid-filler">1/4</p></div>
      <div class="unit size1of4 bg-b1"><p class="grid-filler">1/4</p></div>
      <div class="lastUnit size1of4 bg-b1"><p class="grid-filler">1/4</p></div>
    </div>
    <div class="sub-section lastUnit size1of1 below48">
      <h4>Size 1 of 8</h4>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="unit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
      <div class="lastUnit size1of8 bg-b1"><p class="grid-filler">1/8</p></div>
    </div>
    <div class="sub-section group size1of1">
      <div class="unit size1of2">
        <h4>Notes</h4>
        <p>When using the grid system, wrap the columns using a <code class="cm-string">line</code> and use <code class="cm-string">lastUnit</code> for the last column. Refer to <a href="http://oocss.org/grids_docs.html">OOCSS base classes</a> for more details on grid layout.</p>
      </div>
      <div class="lastUnit size1of2">
        <code class="code-snippet">
        <div><span class="">&lt;<span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"line"</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;<span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"unit size1of3"</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;/<span class="cm-tag">div</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;<span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"unit size1of3"</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;/<span class="cm-tag">div</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;<span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"lastUnit size1of3"</span>&gt;</span></div>
        <div>&nbsp;&nbsp;<span class="">&lt;/<span class="cm-tag">div</span>&gt;</span></div>
        <div><span class="">&lt;/<span class="cm-tag">div</span>&gt;</span></div>
        </code>
      </div>
    </div>
  </div>
  <div class="line main-section" id="paragraphs">
    <div class="lastUnit size1of1">
      <h2>Paragraphs</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="line main-section" id="buttons">
    <div class="lastUnit size1of1">
      <h2>Buttons</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="sub-section">
        <button class="p0">Primary</button>
        <button class="">Standard</button>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php'; ?>