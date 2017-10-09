@extends('layout')

@section('content')
@php $page='service'; @endphp

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
                                            <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;">Services</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">

                                    <div class="column mcb-column one-third column_column" style="padding-bottom:20px;">
                                        <div class="column_attr clearfix" style="background-color:#ffffff; ">
                                            <h3 style="padding: 20px 20px 0px 20px; color: #02bbca;"">{{ $cservice['title'] }}</h3>
                                            <p style="text-align: justify;padding: 0px 20px 5px 20px;line-height: 19px;color: #333;">
                                                {!! $cservice['description'] !!}
                                            </p>

                                                <div class="rev_slider_wrapper">
                                                  <div id="construction" class="rev_slider" data-version="5.0">
                                                      <ul style="list-style: none;">
                                                        @foreach($cimages as $cimage)
                                                          <li data-transition="fade" style="text-shadow:#000 1px 2px 2px;">
                                                              <img src="{{ asset($cimage->image) }}" alt="" width="600" height="375">
                                                             
                                                          </li>
                                                          @endforeach
                                                      </ul>
                                                  </div>                                                  
                                                </div>
                                                <!--End -->
                                        </div>
                                    </div>

                                    <div class="column mcb-column one-third column_column" style="padding-bottom:20px;">
                                        <div class="column_attr clearfix" style="background-color:#ffffff; ">
                                            <h3 style="padding: 20px 20px 0px 20px; color: #02bbca;"">{{ $pservice['title'] }}</h3>
                                            <p style="text-align: justify;padding: 0px 20px 5px 20px;line-height: 19px;color: #333;">
                                                {!! $pservice['description'] !!}
                                            </p>

                                                <div class="rev_slider_wrapper">
                                                  <div id="plumbing" class="rev_slider" data-version="5.0">
                                                      <ul style="list-style: none;">
                                                        @foreach($pimages as $pimage)
                                                          <li data-transition="fade" style="text-shadow:#000 1px 2px 2px;">
                                                              <img src="{{ asset($pimage->image) }}" alt="" width="600" height="375">
                                                             
                                                          </li>
                                                          @endforeach
                                                      </ul>
                                                  </div>                                                  
                                                </div>
                                                <!--End -->
                                        </div>
                                    </div>

                                    <div class="column mcb-column one-third column_column" style="padding-bottom:20px;">
                                        <div class="column_attr clearfix" style="background-color:#ffffff; ">
                                            <h3 style="padding: 20px 20px 0px 20px; color: #02bbca;"">{{ $fservice['title'] }}</h3>
                                            <p style="text-align: justify;padding: 0px 20px 5px 20px;line-height: 19px;color: #333;">
                                                {!! $fservice['description'] !!}
                                            </p>

                                                <div class="rev_slider_wrapper">
                                                  <div id="furniture" class="rev_slider" data-version="5.0">
                                                      <ul style="list-style: none;">
                                                        @foreach($fimages as $fimage)
                                                          <li data-transition="fade" style="text-shadow:#000 1px 2px 2px;">
                                                              <img src="{{ asset($fimage->image) }}" alt="" width="600" height="375">
                                                             
                                                          </li>
                                                          @endforeach
                                                      </ul>
                                                  </div>                                                  
                                                </div>
                                                <!--End -->
                                        </div>
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