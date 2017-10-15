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
                          <li @php if($page=='home') echo 'class="current-menu-item"'; @endphp >
                              <a href="/home"><span>SLIDERS</span></a>
                                     
                          </li>
                          <li @php if($page=='about') echo 'class="current-menu-item"'; @endphp >
                              <a href="/about"><span>ABOUT</span></a>
                                     
                          </li>
                          <li @php if($page=='service') echo 'class="current-menu-item"'; @endphp >
                              <a href="/service"><span>SERVICE</span></a>
                                     
                          </li>
                          <li @php if($page=='project') echo 'class="current-menu-item"'; @endphp >
                              <a href="/project"><span>PROJECT</span></a>
                                     
                          </li>
                          <li @php if($page=='journal') echo 'class="current-menu-item"'; @endphp >
                              <a href="/journal"><span>JOURNAL</span></a>
                                     
                          </li>
                          <li @php if($page=='contact') echo 'class="current-menu-item"'; @endphp >
                              <a href="/contact"><span>CONTACT</span></a>
                                     
                          </li>
                          <li>
                            <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><span>LOGOUT</span></a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                          </li>
                      </ul>
                  </nav>
                  <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
              </div>
          </div>
      </div>
                  </div>
              </div>