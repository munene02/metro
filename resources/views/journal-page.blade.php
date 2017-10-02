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
                                            <h2 style="text-shadow:#000 1px 2px 2px;color: #8ac854;">Journal</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wrap mcb-wrap one valign-top clearfix" >
                                @foreach($journals as $journal)
                                <div class="mcb-wrap-inner one valign-top clearfix" style="background-color:#fff; margin-bottom: 20px;padding-top:25px;">
                                    
                                    <div class="column mcb-column one-third column_column">
                                        <div class="column_attr clearfix" >
                                            
                                            <img src="{{ asset($journal->cover) }}" alt="{{$journal->title}}" style="padding-left: 20px;" />

                                        </div>
                                    </div>
                                    <div class="column mcb-column two-third column_column" >
                                        <div class="column_attr clearfix">
                                            <h3 style="padding:  0px 20px 0px 20px; color: #02bbca;">{{$journal->title}}<br>
                                                <small style="font-size: 11px;padding-top: 0px;margin-top: 0px;margin-left: 5px;color: #999;">{{ Carbon\Carbon::parse($journal->created_at)->format('D jS, M, Y') }}</small></h3>

                                            <p style="text-align: justify;padding: 0px 20px 0px 20px;line-height: 19px;color: #333;">

                                                {!! $journal->description !!}
                                                <br>
                                                <a href="/journal/{{$journal->id}}" target="_blank">READ MORE...</a>
                                            </p>

                                        </div>
                                    </div>
                                        
                                </div>@endforeach
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