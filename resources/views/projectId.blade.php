@extends('layout')

@section('content')
@php $page='project'; @endphp

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
                                            <h2>Manage Projects</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                                <form method="POST" action="/saveProject"> {!! csrf_field() !!}
                                                    @if(count($errors) > 0)
                                                        <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <p>Edit the project details below:</p>
                                                    <div class="form-group">
                                                        <label for="title">Project Title:</label>
                                                        <input type="text" cols="100" name="title" id="title" class="form-control" style="width: 600px;" value="{{$project['title']}}" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="details">Project Details:</label>
                                                        <textarea name="details" class="form-control" id="textarea" required>
                                                            {!! $project['details'] !!}
                                                        </textarea>
                                                    </div>
                                                    <input type="hidden" name="id" value="{{$project['id']}}">
                                                    <input type="submit" class="btn-edit" value="SAVE PROJECT">
                                                </form>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-25px">
                                    <div class="mcb-wrap-inner">
                                        <h3>Current Project Photos</h3>
                                    @foreach($photos as $photo)
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                                <img src="{{ asset($photo->photo) }}" alt="" width="200" height="125" style="padding-right:20px; " />
                                                <p>
                                                    <input type="button" class="btn-remove" value="REMOVE" 
                                               onclick="location.href = '/removePhoto/{{$photo->id}}';">
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
    </div>
</body>
@endsection