
  
  <!-- Slider Section -->
  <div class="container-fluid no-left-padding no-right-padding slider-section">
            <div id="mm-slider-1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="mm-slider-1" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="mm-slider-1" class="rev_slider fullwidthabanner" data-version="5.4.1">
                    <ul>	
                    @foreach ($slider as $slide) 
                        <!-- SLIDE  -->
                        <li data-index="rs-26" data-transition="random-static,random-premium,random,boxslide,slotslide-horizontal,slotslide-vertical,boxfade,slotfade-horizontal,slotfade-vertical" data-slotamount="default,default,default,default,default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default,default,default,default,default,default,default" data-easeout="default,default,default,default,default,default,default,default,default,default" data-masterspeed="default,default,default,default,default,default,default,default,default,default"  data-rotate="0,0,0,0,0,0,0,0,0,0"  data-saveperformance="off"  class="slide-overlay" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('images/'.$slide->img)}}"  alt="" title="{{ $slide->enTitle }}"  width="1920" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                          

                            <!-- LAYER NR. 2 -->
                            <a class="slidecnt2 tp-caption tp-layer-selectable tp-resizeme post-title" href="#" target="_self" rel="nofollow" id="slide-26-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','-1','-1','-1']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['6','-5','-5','-5']" 
                                data-fontsize="['40','30','30','23']"
                                data-lineheight="['40','40','40','30']"
                                data-width="['601','601','601','435']"
                                data-height="['81','81','81','none']"
                                data-whitespace="normal"
                                 data-type="text" 
                                data-actions=''
                                data-responsive_offset="on" 
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]">{{ $slide->enTitle }}</a>

                            
                        </li>
                        @endforeach


                     
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- Slider Section /- -->


