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
                                @foreach($projects as $project)
                                <div class="wrap mcb-wrap one-second valign-top journal" style="margin-top: 20px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column column_column clearfix">
                                            <div class="column_attr clearfix" style="background-color:#ffffff;margin-bottom: 50px;">
                                                <a href="/projects/{{$project->id}}" target="_blank" style="text-decoration-line: none;">
                                                  <img src="{{ asset($project->cover) }}" alt="{{$project->title}}" /><br/><br/>
                                                  <h3 style="padding-left:20px; color: #fff;margin-top:-120px;text-shadow:#000 2px 1px 1px;">
                                                    {{ $project->title }}</h3></a>
                                                
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