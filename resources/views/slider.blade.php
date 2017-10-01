<div class="mfn-main-slider" id="mfn-rev-slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>          
                @foreach($slides as $slide)
                    <li data-index="rs-{{$loop->iteration}}" data-transition="boxslide" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                      <img src="{{ asset($slide->image) }}" alt="" width="1920" height="815" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                      <div class="tp-caption mfnrsjetlargewhite tp-resizeme" id="slide-{{$loop->iteration}}-layer-1" data-x="left" data-hoffset="80" data-y="bottom" data-voffset="200" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 70px; line-height: 70px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Ubuntu';text-shadow: 2px 2px #000;">
                            {{ $slide->title }}
                      </div>
                      <div class="tp-caption mfnrsjetmediumwhite tp-resizeme" id="slide-{{$loop->iteration}}-layer-2" data-x="left" data-hoffset="80" data-y="bottom" data-voffset="160" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 30px; line-height: 35px; font-weight: 100; color: rgba(255, 255, 255, 1.00);font-family:'Ubuntu';text-shadow: 2px 1px #000;">
                          {{ $slide->caption }}
                      </div>                    
                  </li>
                @endforeach  
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>