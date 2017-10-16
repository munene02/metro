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
                                              <h2>Manage About Us</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                <div class="mcb-wrap-inner">
                                   <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                             <form method="POST" action="/saveAbout"> {!! csrf_field() !!}
                                                      @if(count($errors) > 0)
                                                       
                                                          <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                          </ul>
                                                       

                                                        @endif
                                                      <p>Edit the ABOUT US text below:</p>
                                                       <textarea name="text" class="form-control" id="textarea" required>
                                                       {!! $text['text'] !!}
                                                       </textarea>
                                                  
                                                  <input type="submit" class="btn-edit" value="SAVE TEXT">
                                             </form>
                                          </div>
                                   </div>
                                </div>
                              </div>

                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a About Us image.(HINT:600px X 375px)</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/newAboutImage">
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
                                        <label for="slider">About Us Image:</label>
                                        <input type="file" name="image" id="image" class="form-control" required/>
                                        <br/><br/>
                                      </div>

                                      <div class="form-group">
                                        <input type="hidden"  name="caption" value="About">
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">ADD IMAGE</button> 
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
                                              <h3>Current Images</h3>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($images as $image)
                                      <div class="column mcb-column one-fourth column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                              <img src="{{ asset($image->image) }}" alt="" width="200" height="125" style="padding-right:20px; " />
                                              <p >
                                               <input type="button" class="btn-remove" value="REMOVE" 
                                               onclick="location.href = '/removeAboutImage/{{$image->id}}';">
                                             </p>
                                               
                                              
                                          </div>
                                      </div>
                                    @endforeach  
                                  </div>         
                              </div>
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h2>Our Team <br><input type="button" class="btn-add" value="ADD TO THE TEAM" 
                                               onclick="location.href = '/newTeamMate';"></h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($teams as $team)
                                      <div class="column mcb-column one-third column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">

                                              <img src="{{ asset($team->photo) }}" alt="" width="400" height="400" />
                                              
                                             <form method="POST" action="/saveTeamMate"> {!! csrf_field() !!}
                                                      @if(count($errors) > 0)
                                                       
                                                          <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                          </ul>
                                                        @endif
                                                      <input type="text" name="name" value="{{$team->name}}" >
                                                       <textarea name="details" class="form-control" id="textarea" required>
                                                       {!! $team->details !!}
                                                       </textarea>
                                                  <input type="hidden" name="id" value="{{$team->id}}">
                                                  <input type="submit" class="btn-edit" value="SAVE INFO">
                                             </form>
                                              <p >
                                               <input type="button" class="btn-warning" value="REMOVE TEAM MEMBER" 
                                               onclick="location.href = '/removeTeamMate/{{$team->id}}';">

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