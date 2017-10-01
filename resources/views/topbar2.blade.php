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
                          <li class="current-menu-item">
                              <a href="/home"><span>Admin Home</span></a>
                          </li>

                          <li>
                              <a href="#"><span>Sliders</span></a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="/">Add Slider</a>
                                  </li>
                                  <li>
                                    <a href="/">Remove Slider</a>
                                  </li>
                                </ul>      
                          </li>
                          <li>
                            <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><strong>Logout</strong></a>
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