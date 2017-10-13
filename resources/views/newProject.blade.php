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
                                            <h2>Manage Projects - Add New Project</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-5px">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                                <p>Enter a Project Detials below;</p>
                                                <form method="POST" action="/addProject" enctype="multipart/form-data"> {!! csrf_field() !!}
                                                    @if(count($errors) > 0)
                                                        <ul style="color:#ff1e1e;">
                                                            @foreach($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif

                                                    <div class="form-group">
                                                        <label for="title">Project Title:</label>
                                                        <input type="text" cols="100" name="title" id="title" class="form-control" style="width: 600px;"  required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="details">Project Details:</label>
                                                        <textarea name="details" class="form-control" required>
                                                            
                                                        </textarea><br/>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="cover">Cover:</label>
                                                        <input type="file" name="cover" class="form-control" required/>
                                                        <br/><br/>
                                                    </div>
                                                    
                                                    <input type="submit" class="btn-add" value="ADD PROJECT">
                                                </form>  

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
    </div>
</body>
@endsection