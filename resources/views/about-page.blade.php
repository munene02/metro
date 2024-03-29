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
                        <div class="section mcb-section" style="padding-top:120px; padding-bottom:120px;" data-parallax="3d">
                            <div class="section_wrapper mcb-section-inner">
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;">About Us</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column" style="background-color: #fff;">
                                            <div class="column_attr clearfix">
                                                
                                                <div style="text-align: justify;padding: 39px;line-height: 19px;color: #333;">
                                                {!! $text['text'] !!}
                                              </div>
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
                                                              <div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="100" data-y="top" data-voffset="650" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="font-size:60px;line-height:55px; color:#fff">
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
            @if(!$teams->isEmpty())
            <div class="content_wrapper clearfix" style="background-color: #48c7f4">
                <div class="sections_group">
                    <div class="entry-content">                       
                         <div class="section mcb-section" style="padding-top:60px; padding-bottom:120px;" data-parallax="3d">
                              <div class="section_wrapper mcb-section-inner">
                                   <div class="wrap mcb-wrap one valign-top clearfix">
                                        <div class="mcb-wrap-inner">
                                             <div class="column mcb-column one column_column">
                                                 <div class="column_attr clearfix">
                                                     <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;padding-bottom: 15px;">Our Team</h2>
                                                 </div>
                                                 @foreach($teams as $team)
                                                  <div class="column mcb-column one-third column_column" style="margin-right:10px;">
                                                      <div class="column_attr clearfix">
                                                            <div style="line-height: 19px;color: #333;">
                                                                 <img src="{{ asset($team->photo) }}" alt="" width="400" height="400"><br>
                                                                 <h4 style="color: #000;">{{$team->name}}</h4>
                                                                 <div style="   line-height: 19px;color: #333;">
                                                                    {!! $team->details !!}
                                                                 </div>
                                                            </div>
                                                      </div>
                                                  </div>
                                                  @endforeach
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              
                         </div>
                    </div>
               </div>
          </div>
          @endif
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