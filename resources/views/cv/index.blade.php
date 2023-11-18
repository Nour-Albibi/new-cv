@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom_css')
    <link rel="stylesheet" id="elementor-post-293-css" href="{{asset('assets/uploads/elementor/css/post-293.css?ver=1696740455')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-23-css" href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css" href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}" media="all" defer>
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor-pro/assets/css/widget-animated-headline.min.css')}}"
          defer>
    <link rel="stylesheet" href="{{asset('assets/css/cv.css')}}" defer/>
    <style>
        /*.exad-card:hover.yes .exad-card-thumb  c{*/
        /*    */
        /*}*/
        .exad-card-thumb div.Home{
            transition: all 0.3s ease;
        }
        .exad-card:hover.yes .exad-card-thumb  div.Home{
            transform:scale(1.15);
        }
    </style>
@endsection
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="293" class="elementor elementor-293"
         data-elementor-post-type="page">
        <form name="start-cv-template" method="post" id="start-cv-template" action="">
            @csrf
            <input type="hidden" name="cvColor" value="{{$cvTemplates[0]->default_color ?? ''}}"/>
            <input type="hidden" name="cvTemplate" value="{{$cvTemplates[0]->id ?? ''}}" />
        </form>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-9b56a60 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="9b56a60" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4aff163f exad-glass-effect-no exad-sticky-section-no"
                    data-id="4aff163f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-6b7ccf0a elementor-headline--style-highlight exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-animated-headline"
                            data-id="6b7ccf0a" data-element_type="widget"
                            data-settings="{&quot;highlighted_text&quot;:&quot; CV to look like?&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                            data-widget_type="animated-headline.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-headline">
                                    <span class="elementor-headline-plain-text elementor-headline-text-wrapper">What do you want your</span>
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
				                	<span class="elementor-headline-dynamic-text elementor-headline-text-active"> CV to look like?</span>
				                </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-58c584cd elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="58c584cd" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11e6eb66 exad-glass-effect-no exad-sticky-section-no"
                    data-id="11e6eb66" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-4454493c elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="4454493c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div
                                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2f23c0b4 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="2f23c0b4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-468cab25 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="468cab25" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Scroll to
                                                    view all styles and click to select a specific style.</h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-9f7d3ef elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="9f7d3ef" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-9a5df53 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="9a5df53" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-205b2cc exad-glass-effect-no exad-sticky-section-no"
                                    data-id="205b2cc" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-0ed9f90 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="0ed9f90" data-element_type="widget" color="default"
                                            data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="active elementor-icon" style="color: #fff;border-color:#ccc !important;">
                                                        <i aria-hidden="true" class="fas fa-circle" style="color: #fff;border-color:#ccc !important;"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-9c6a0d3 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="9c6a0d3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-9a139a1 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="9a139a1" data-element_type="widget"
                                            data-widget_type="icon.default" color="#4A4A4A">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-4d1cc50 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="4d1cc50" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-92a143c elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="92a143c" data-element_type="widget"
                                            data-widget_type="icon.default" color="#102A73">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-76c0e9c exad-glass-effect-no exad-sticky-section-no"
                                    data-id="76c0e9c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-6db4b45 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="6db4b45" data-element_type="widget"
                                            data-widget_type="icon.default" color="#496267">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-eac9126 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="eac9126" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-7cefe40 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="7cefe40" data-element_type="widget"
                                            data-widget_type="icon.default" color="#C28E56">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-e8ee68f exad-glass-effect-no exad-sticky-section-no"
                                    data-id="e8ee68f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-a8aca47 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="a8aca47" data-element_type="widget"
                                            data-widget_type="icon.default" color="#B9481F">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-205b2cc exad-glass-effect-no exad-sticky-section-no"
                                    data-id="205b2cc" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-0ed9f90 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="0ed9f90" data-element_type="widget" color="#944150"
                                            data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-eab12b8 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="eab12b8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-color elementor-element elementor-element-2176bb8 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="2176bb8" data-element_type="widget"
                                            data-widget_type="icon.default" color="#69727d">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-bb1feae exad-glass-effect-no exad-sticky-section-no"
                                    data-id="bb1feae" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-36d6db7 exad-glass-effect-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
                                 data-id="36d6db7" data-element_type="section"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-custom">
                                @php $i=0; @endphp
                                @foreach($cvTemplates as $template)
                                <div
                                    class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-04e57a2 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="04e57a2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="cv-template @if($i==0) active @endif elementor-element elementor-element-1223de4 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-exad-exclusive-card"
                                            data-id="1223de4" data-element_type="widget"
                                            data-widget_type="exad-exclusive-card.default" cv-template-id="{{$template->id}}" default_color="{{$template->default_color}}">
                                            <div class="elementor-widget-container">
                                                <div class="exad-card left text_on_image yes">
                                                    <div class="exad-card-thumb">
                                                        @if(!empty($template->template_data))
{{--                                                            <x-cv-templates.template1></x-cv-templates.template1>--}}
                                                            {!! $template->template_data !!}
                                                        @else
                                                        <img width="700" height="990"
                                                             src="{{asset('files/'.$template->image)}}"
                                                             class="attachment-full size-full wp-image-211" alt=""
                                                             decoding="async"
                                                             srcset="{{asset('files/'.$template->image)}} 700w, {{asset('files/'.$template->image)}} 212w"
                                                             sizes="(max-width: 700px) 100vw, 700px" loading="lazy">
                                                            @endif
                                                    </div>
                                                    <div class="exad-card-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-a06dfae exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading"
                                            data-id="a06dfae" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">{{$template->{"name_".$lang} }}</h5></div>
                                        </div>
                                    </div>
                                </div>
                                    @php $i++ @endphp
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-75234121 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="75234121" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72abd3c9 exad-glass-effect-no exad-sticky-section-no"
                    data-id="72abd3c9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-1b83ef17 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="1b83ef17" data-element_type="section" style="direction:ltr">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3ffa9b50 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="3ffa9b50" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-b855a7f elementor-align-left exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="b855a7f" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       href="{{url()->previous()}}">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">{{__('Back')}}</span>
	                                                	</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4912e3c exad-glass-effect-no exad-sticky-section-no"
                                    data-id="4912e3c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-5beb53d exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="5beb53d" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default"><a href="#">Skip
                                                        For Now</a></h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3041769a exad-glass-effect-no exad-sticky-section-no"
                                    data-id="3041769a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-79aad79 elementor-align-right exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="79aad79" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       href="javascript:void(0)" onclick="$('form#start-cv-template').submit()">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">{{__('Choose This Template')}}</span>
		                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('custom_js')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62e3f93cf0ce683fcdd5ff7d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        var cv_color='';
        $('.cv-color').on('click',function (){
            cv_color=$(this).attr('color');
            $('.cv-color').find('.elementor-icon').removeClass('active');
            $(this).find('.elementor-icon').addClass('active');
            if(cv_color!=="default"){
                $('path#sidebar_color').attr('style','fill: '+cv_color +' !important');
                $('.sidebar_color').attr('style','fill: '+cv_color +' !important');
                $('.sidebar_color').attr('stroke',cv_color);
                // $('.ps01').css('fill',cv_color+ ' !important');
                // $('.ps03').css('fill',cv_color+' !important');
                $('.ps01').attr('style','fill: '+cv_color +' !important');
                $('.ps03').attr('style','fill: '+cv_color +' !important');
                $('.header_color').attr('style','background-color: '+cv_color +' !important');
                $('h5.section-title').css('color',cv_color);
                $('.bordered').css('border-color',cv_color);
                $('input[name=cvColor]').val(cv_color);
            }else{
                $('.cv-template').each(function(){
                    default_color=$(this).attr('default_color');
                    $(this).find('path#sidebar_color').attr('style','fill: '+default_color +' !important');
                    $(this).find('.sidebar_color').attr('style','fill: '+default_color +' !important');
                    $(this).find('.sidebar_color').attr('stroke',default_color);
                    $(this).find('.ps01').attr('style','fill: '+default_color +' !important');
                    $(this).find('.ps03').attr('style','fill: '+default_color +' !important');
                    $('.header_color').attr('style','background-color: '+default_color +' !important');
                    $('h5.section-title').css('color',default_color);
                    $('.bordered').css('border-color',default_color);
                   if($(this).hasClass('active')){
                      $('input[name=cvColor]').val(default_color);
                   }
                });
            }
        });
        $('.cv-template').on('click',function(){
           $('.cv-template').removeClass('active');
           $(this).addClass('active');
           $('input[name=cvTemplate]').val($(this).attr('cv-template-id'));

        });
    </script>
@endsection
