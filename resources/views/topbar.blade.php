<div id="Top_bar">
  <div class="container">
      <div class="column one">
          <div class="top_bar_left clearfix">
              <div class="logo">
                <a id="logo" href="/" title="Metromech LTD">
                <img class="logo-main scale-with-grid" src="../images/metromech.png" alt="Metromech Limited">
                <img class="logo-sticky scale-with-grid" src="../images/metromech.png" alt="Metromech Limited">
                <img class="logo-mobile scale-with-grid" src="../images/metromech.png" alt="Metromech Limited">
                <img class="logo-mobile-sticky scale-with-grid" src="../images/metromech.png" alt="Metromech Limited">
                </a>
              </div>
              <div class="menu_wrapper">
                  <nav id="menu" class="menu-main-menu-container">
                      <ul id="menu-main-menu" class="menu">
                          <li  @php if($page=='home') echo 'class="current-menu-item"'; @endphp >
                              <a href="/"><span>HOME</span></a>
                          </li>
                          <li  @php if($page=='about') echo 'class="current-menu-item"'; @endphp >
                              <a href="/aboutUs"><span>ABOUT US</span></a>
                          </li>
                          <li  @php if($page=='service') echo 'class="current-menu-item"'; @endphp >
                              <a href="/services"><span>SERVICES</span></a>
                          </li>
                          <li  @php if($page=='project') echo 'class="current-menu-item"'; @endphp >
                              <a href="/projects"><span>PROJECTS</span></a>
                          </li>
                          <li  @php if($page=='journal') echo 'class="current-menu-item"'; @endphp >
                              <a href="/journal"><span>JOURNAL</span></a>
                          </li>
                          <li  @php if($page=='contact') echo 'class="current-menu-item"'; @endphp >
                              <a href="/contact"><span>CONTACT</span></a>
                          </li>
                      </ul>
                  </nav>
                  <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
              </div>
          </div>
      </div>
                  </div>
              </div>