@extends('layout')

@section('content')
@php $page='about'; @endphp

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
                        
                        <div class="section mcb-section" style="padding-top:260px; padding-bottom:260px;" data-parallax="3d">
                        <img class="mfn-parallax" src="{{ asset($background['background']) }}" alt="" style="opacity:0">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style="background-color:#ffffff; ">
                                                <h3 style="padding: 25px 25px 0px 25px; 22px;color: #333;">About Us</h3>
                                                <p style="text-align: justify;padding: 0px 25px 25px 25px;line-height: 22px;color: #333;">
                                                {!! $text['text'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <div class="rev_slider_wrapper">
                            <div id="rev_slider" class="rev_slider" data-version="5.0">
                                <ul style="list-style: none;">
                                  @foreach($images as $image)
                                    <li data-transition="fade" style="text-shadow:#000 1px 2px 2px;">
                                        <img src="{{ asset($image->image) }}" alt="" width="600" height="375">
                                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="100" data-y="top" data-voffset="650" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="font-size:60px;line-height:55px; color:#fff">{{ $image->caption}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- END REVOLUTION SLIDER -->
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