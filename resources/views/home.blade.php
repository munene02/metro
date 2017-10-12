@extends('layout')

@section('content')
@php $page='home'; @endphp

<body class="home template-slider color-custom style-simple layout-full-width button-flat if-zoom no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-content">

    <div id="Wrapper">
      <div id="Header_wrapper">
        <header id="Header">
          <div class="header_placeholder"></div>
          @include('topbar2')
        </header>  
      </div>
      <div id="Content">
        <div class="content_wrapper clearfix">
          <div class="sections_group">
              <div class="entry-content">

                  <div class="section mcb-section" style="padding-top:110px; padding-bottom:60px;">
                          <div class="section_wrapper mcb-section-inner">
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h2>Add Slider</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a Slider image.(HINT:1440px X 900px)</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/newSliders">
                                      {!! csrf_field() !!}
                                      @if(count($errors) > 0)
                                      <div class="alert alert-danger">
                                        <ul>
                                          @foreach($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                          @endforeach
                                        </ul>
                                      </div>

                                      @endif

                                      <div class="form-group ">
                                        <label for="slider">Slider Image:</label>
                                        <input type="file" name="slider" id="slider" class="form-control" required/>
                                        <br/><br/>
                                      </div>

                                      <div class="form-group">
                                        <label for="title">Slider Title:</label>
                                        <input type="text" name="title" id="title" class="form-control" style="width: 600px;" value="{{ old('title') }}" required>
                                      </div>

                                      <div class="form-group">
                                        <label for="caption">Slider Caption:</label>
                                        <input type="text" cols="100" name="caption" id="caption" class="form-control" style="width: 600px;" value="{{ old('caption') }}" required>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">ADD SLIDER</button> 
                                        </div>
                                      </div>
                                    
                                     
                                  </form>
                                  <hr class="no_line" style="margin:0 auto 20px">
                                
                                </div>
                                        
                                      </div>
                                  </div>
                              </div>
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h2>Current Sliders</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($slides as $slide)
                                      <div class="column mcb-column one-third column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">

                                                 <form method="post" action="/saveSlider" style="display: inline-block;vertical-align:top;padding-right: 20px;"> {!! csrf_field() !!}
                                                        Slide Title<input type="text" name="title" value="{{ $slide->caption }}">

                                                        Slide Caption
                                                        <input type="text" name="caption" value="{{ $slide->caption }}">
                                                
                                                        <input type="hidden" name="id" value="{{$slide->id}}">  
                                                       <button type="submit" class="btn-edit">SAVE</button> 
                                                 
                                                 </form>
                                                 <p style="display: inline-block;vertical-align:top;">
                                                 <img src="{{ asset($slide->image) }}" alt="" width="200" height="125" style="padding-right:20px;" /><br>
                                                 <input type="button" class="btn-remove" value="DELETE IMAGE" onclick="location.href = '/removeSlider/{{$slide->id}}';">
                                                 </p>
                                                 

                                          </div>
                                      </div>
                                      
                                    @endforeach  
                                  </div>         
                          </div>
                  </div>
              </div>
          </div>
      </div>
        @include('footer2')  
      </div>  
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