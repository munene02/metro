@extends('layout')

@section('content')
@php $page='about'; @endphp
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
                                              <h2>Add Project Photo</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a {{$project['title']}} Photo;</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/savePhoto">
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
                                        <label for="slider">Photo:</label>
                                        <input type="file" name="photo" class="form-control" required/>
                                        <br/><br/>
                                      </div>
                                      <input type="hidden" name="id" value="{{$project->id}}">

                                      <div class="col-md-12">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">ADD PHOTO</button> 
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