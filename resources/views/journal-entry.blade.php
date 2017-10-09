@extends('layout')

@section('content')
@php $page='journal'; @endphp

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
                                            <h2 style="text-shadow:#000 1px 2px 2px;color: #fff;">Journal</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wrap mcb-wrap one valign-top clearfix" >
                                
                                <div class="mcb-wrap-inner one valign-top clearfix" style="background-color:#fff; ">
                                    
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" >
                                            
                                            <img src="{{ asset($journal['cover']) }}" alt="{{ $journal['title'] }}" style="padding-top: 10px;" />

                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column" >
                                        <div class="column_attr clearfix">
                                            <h3 style="padding: 5px 20px 0px 40px; color: #02bbca;">{{$journal['title']}}<br>
                                                <small style="font-size: 11px;padding-top: 0px;margin-top: 0px;margin-left: 0x;color: #999;">{{ Carbon\Carbon::parse($journal['created_at'])->format('D jS, M, Y') }}</small></h3>

                                            <p style="text-align: justify;padding: 0px 40px 0px 40px;line-height: 19px;color: #333;">

                                                {!! $journal['details'] !!}
                                                <br>
                                                
                                            </p>

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