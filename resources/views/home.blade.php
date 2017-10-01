@extends('layout')

@section('content')

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
                  <div class="section mcb-section equal-height-wrap" style="padding-top:110px; padding-bottom:60px">
                      <div class="section_wrapper mcb-section-inner">
                          <div class="wrap mcb-wrap three-fifth  valign-middle clearfix" style="padding:0 5% 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-30px">
                                    <div class="column_attr clearfix">
                                        <h2 style="display:inline-block">Manage Sliders - Add A Slider</h2>
                                        <h6>Upload a Slider image below;</h6>
                                    </div>
                                </div>
                              <div class="column mcb-column column_column">
                                <div class="column_attr clearfix" style="padding:0 10% 0 0">
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

                                      <div class="form-group">
                                        <label for="slider">Slider:</label>
                                        <input type="file" name="slider" id="slider" class="form-control" required/>
                                        <br/><br/>
                                      </div>

                                      <div class="form-group">
                                        <label for="title">Slider Title:</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                                      </div>

                                      <div class="form-group">
                                        <label for="caption">Slider Caption:</label>
                                        <input type="text" name="caption" id="caption" class="form-control" value="{{ old('caption') }}" required>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add SLIDER</button> 
                                        </div>
                                      </div>
                                    
                                     
                                  </form>
                                  <hr class="no_line" style="margin:0 auto 20px">
                                
                                </div>
                              </div>

                            </div>
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