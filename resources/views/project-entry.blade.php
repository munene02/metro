@extends('layout')

@section('content')
@php $page='project'; @endphp

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
                                            <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;">Projects</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wrap mcb-wrap one valign-top clearfix" >
                                
                                <div class="mcb-wrap-inner one valign-top clearfix" style="background-color:#fff; ">
                                    
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" >

                                            <div class="rev_slider_wrapper">
                                                  <div id="rev_slider" class="rev_slider" data-version="5.0">
                                                      <ul style="list-style: none;padding-top: 20px;">
                                                        @foreach($photos as $photo)
                                                          <li data-transition="fade" style="text-shadow:#000 1px 2px 2px;">
                                                              <img src="{{ asset($photo->photo) }}" alt="{{ $project['title'] }}" width="600" height="375" >
                                                          </li>
                                                          @endforeach
                                                      </ul>
                                                  </div>
                                                </div>
                                                <!-- Rev -->
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column" >
                                        <div class="column_attr clearfix">
                                            <h3 style="padding: 5px 20px 0px 40px; color: #02bbca;">{{$project['title']}}<br></h3>

                                            <div style="text-align: justify;padding: 0px 40px 0px 40px;line-height: 19px;color: #000;">

                                                {!! $project['details'] !!}
                                                <br>
                                                
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