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
                                                <input type="button" class="btn-add" value="ADD A PROJECT" onclick="location.href = '/addProject';">
                                                <p>
                                                    Select a Project below;
                                                </p>
                                                <ul style="list-style: none;">
                                                    @foreach($projects as $project)
                                                        <li>
                                                            {{$loop->iteration}}. {{$project->title}}
                                                            <input type="button" class="btn-edit" value="EDIT" onclick="location.href = '/project/{{$project->id}}';"> 
                                                            <input type="button" class="btn-remove" value="ADD PHOTO" onclick="location.href = '/addProject';">
                                                        </li>
                                                    @endforeach
                                                </ul> 
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