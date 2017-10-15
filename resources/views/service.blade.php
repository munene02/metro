@extends('layout')

@section('content')
@php $page='service'; @endphp

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
                                              <h2>Manage Services - {{ $cservice['title'] }} Section</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                <div class="mcb-wrap-inner">
                                   <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                             <form method="POST" action="/save1"> {!! csrf_field() !!}
                                                      @if(count($errors) > 0)
                                                       
                                                          <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                          </ul>
                                                       

                                                        @endif
                                                      <p>Edit the {{ $cservice['title'] }} text below:</p>
                                                      <div class="form-group">
                                                        <label for="title">Title:</label>
                                                        <input type="text" cols="100" name="title" id="title" class="form-control" style="width: 600px;" value="{{ $cservice['title'] }}" required>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="description">Description:</label>
                                                       <textarea name="description" class="form-control" id="textarea" required>
                                                       {!! $cservice['description'] !!}
                                                       </textarea>
                                                      </div>
                                                  <input type="submit" class="btn-edit" value="SAVE TEXT">
                                             </form>
                                          </div>
                                   </div>
                                </div>
                              </div>

                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a {{$cservice['title']}} image.(HINT:600px X 375px)</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/new1Image">
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
                                        <label for="slider">Image:</label>
                                        <input type="file" name="image" id="image" class="form-control" required/>
                                        <br/><br/>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="caption" value="{{$cservice['title']}}">
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">ADD IMAGE</button> 
                                        </div>
                                      </div>
                                    
                                     
                                  </form>
                                
                                </div>
                                        
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h3> Current {{$cservice['title']}} Images</h3>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($cimages as $cimage)
                                      <div class="column mcb-column one-fourth column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                              <img src="{{ asset($cimage->image) }}" alt="" width="200" height="125" style="padding-right:20px; " />
                                              <p >
                                               <input type="button" class="btn-remove" value="REMOVE" 
                                               onclick="location.href = '/remove1Image/{{$cimage->id}}';">
                                             </p>
                                               
                                              
                                          </div>
                                      </div>
                                    @endforeach  
                                  </div>         
                              </div>
                  </div>
                  <hr style="margin-bottom:50px;color: #2ac5cc;border-style: solid;border-width: 1px;">

                  <div class="section_wrapper mcb-section-inner">
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h2>Manage Services - {{ $pservice['title'] }} Section</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                <div class="mcb-wrap-inner">
                                   <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                             <form method="POST" action="/save2"> {!! csrf_field() !!}
                                                      @if(count($errors) > 0)
                                                       
                                                          <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                          </ul>
                                                       

                                                        @endif
                                                      <p>Edit the {{$pservice['title']}} text below:</p>
                                                      <div class="form-group">
                                                        <label for="title">Title:</label>
                                                        <input type="text" cols="100" name="title" id="title" class="form-control" style="width: 600px;" value="{{ $pservice['title'] }}" required>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="description">Description:</label>
                                                       <textarea name="description" class="form-control" id="textarea2" required>
                                                       {!! $pservice['description'] !!}
                                                       </textarea>
                                                      </div>
                                                  <input type="submit" class="btn-edit" value="SAVE TEXT">
                                             </form>
                                          </div>
                                   </div>
                                </div>
                              </div>

                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a {{$pservice['title']}} image.(HINT:600px X 375px)</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/new2Image">
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
                                        <label for="slider">Image:</label>
                                        <input type="file" name="image" id="image" class="form-control" required/>
                                        <br/><br/>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="caption" value="{{$pservice['title']}}">
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
                                              <h3> Current {{$pservice['title']}} Images</h3>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($pimages as $pimage)
                                      <div class="column mcb-column one-fourth column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                              <img src="{{ asset($pimage->image) }}" alt="" width="200" height="125" style="padding-right:20px; " />
                                              <p >
                                               <input type="button" class="btn-remove" value="REMOVE" 
                                               onclick="location.href = '/remove2Image/{{$pimage->id}}';">
                                             </p>
                                               
                                              
                                          </div>
                                      </div>
                                    @endforeach  
                                  </div>         
                              </div>
                  </div>

                  <hr style="margin-bottom:50px;color: #3f3f3f;border-style: solid;border-width: 1px;">

                  <div class="section_wrapper mcb-section-inner">
                              <div class="wrap mcb-wrap one valign-top clearfix">
                                 
                                      <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix">
                                              <h2>Manage Services - {{ $fservice['title'] }} Section</h2>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                <div class="mcb-wrap-inner">
                                   <div class="column mcb-column one column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                             <form method="POST" action="/save3"> {!! csrf_field() !!}
                                                      @if(count($errors) > 0)
                                                       
                                                          <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                          </ul>
                                                       

                                                        @endif
                                                      <p>Edit the {{$fservice['title']}} text below:</p>
                                                      <div class="form-group">
                                                        <label for="title">Title:</label>
                                                        <input type="text" cols="100" name="title" id="title" class="form-control" style="width: 600px;" value="{{ $fservice['title'] }}" required>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="description">Description:</label>
                                                       <textarea name="description" class="form-control" id="textarea3" required>
                                                       {!! $fservice['description'] !!}
                                                       </textarea>
                                                      </div>
                                                  <input type="submit" class="btn-edit" value="SAVE TEXT">
                                             </form>
                                          </div>
                                   </div>
                                </div>
                              </div>

                              <div class="wrap mcb-wrap one-second  valign-top clearfix" style="margin-top:-5px">
                                  <div class="mcb-wrap-inner">
                                      <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style="padding:0 10% 0 0">
                                        <h6>Upload a {{$fservice['title']}} image.(HINT:600px X 375px)</h6>  
                                  <form enctype="multipart/form-data" method="POST" action="/new3Image">
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
                                        <label for="slider">Image:</label>
                                        <input type="file" name="image" id="image" class="form-control" required/>
                                        <br/><br/>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="caption" value="{{$fservice['title']}}">
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
                                              <h3> Current {{$fservice['title']}} Images</h3>
                                          </div>
                                      </div>
                              </div>
                              <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                  <div class="mcb-wrap-inner">
                                    @foreach($fimages as $fimage)
                                      <div class="column mcb-column one-fourth column_column">
                                          <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                              <img src="{{ asset($fimage->image) }}" alt="" width="200" height="125" style="padding-right:20px; " />
                                              <p >
                                               <input type="button" class="btn-remove" value="REMOVE" 
                                               onclick="location.href = '/remove3Image/{{$fimage->id}}';">
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