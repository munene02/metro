@extends('layout')

@section('content')
@php $page='contact'; @endphp

<body class="home template-slider color-custom style-simple layout-full-width button-flat if-zoom no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-content">

    <div id="Wrapper">
      <div id="Header_wrapper">
        <header id="Header">
          <div class="header_placeholder"></div>
          @include('topbar')
        </header>  
      </div>
      
      <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        
                        <div class="section mcb-section" style="padding-top:120px; padding-bottom:120px;" data-parallax="3d">
                            <div class="section_wrapper mcb-section-inner">
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;">Contact Us</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_map ">
                                            <div class="google-map-wrapper no_border">
                                                <div class="google-map" id="google-map-area-58feedaf52c82" style="width:100%; height:500px">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            {{-- <div class="map" id="map-1" style="width:100%; height:500px"></div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                          <h3>Contact Info</h3>
                                          <div style="text-align: justify;padding-right: 15px; line-height: 19px;color: #fff;">
                                            {!! $text['text'] !!}
                                          </div>
                                        </div>
                                            
                                      </div>
                               </div> 
                                <div class="wrap mcb-wrap two-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">

                                      <h3>Get in Touch</h3>
                                        <div id="contactWrapper">
                                            <form id="contactform">
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" rows="50" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one-fourth">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                          </div>
                                      </div>
                               </div> 
                            </div>
                        </div>                    
                        

                    </div>
                </div>

            </div>
        </div>

      @include('footer')    
    </div>

    <div id="Side_slide" class="right dark">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

  </body>
  @endsection