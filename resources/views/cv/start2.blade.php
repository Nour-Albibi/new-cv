@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom_css')
    <link rel="stylesheet" id="elementor-post-23-css" href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css" href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-343-css"
          href="{{asset('assets/uploads/elementor/css/post-343.css?ver=1696528672')}}"
          media="all">
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor-pro/assets/css/widget-animated-headline.min.css')}}"
          defer>
    <link rel="stylesheet" href="{{asset('assets/css/cv.css')}}" defer/>
    <style>
        .text-center{
            text-align:center;
        }
    </style>
@endsection
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="343" class="elementor elementor-343"
         data-elementor-post-type="page">
        <form name="choose_cv_language" action="{{route('cv.create')}}" method="post" id="choose_cv_language">
            @csrf
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-3a3919a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="3a3919a9" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7dce4499 exad-glass-effect-no exad-sticky-section-no"
                     data-id="7dce4499" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-56b1a08f elementor-headline--style-highlight exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-animated-headline"
                             data-id="56b1a08f" data-element_type="widget"
                             data-settings="{&quot;highlighted_text&quot;:&quot;want to start?&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                             data-widget_type="animated-headline.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                      href="https://projects.datatime4it.com/chtml/wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css">
                                <h2 class="elementor-headline">
                                    <span class="elementor-headline-plain-text elementor-headline-text-wrapper">How do you </span>
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
					<span class="elementor-headline-dynamic-text elementor-headline-text-active">want to start?</span>
				</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-6ff27780 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="6ff27780" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6362502 exad-glass-effect-no exad-sticky-section-no"
                     data-id="6362502" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-6fc36c68 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="6fc36c68" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5f986b4 exad-glass-effect-no exad-sticky-section-no"
                                     data-id="5f986b4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-34275e84 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                             data-id="34275e84" data-element_type="widget"
                                             data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>/*! elementor - v3.16.0 - 20-09-2023 */
                                                    .elementor-heading-title {
                                                        padding: 0;
                                                        margin: 0;
                                                        line-height: 1
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                                        color: inherit;
                                                        font-size: inherit;
                                                        line-height: inherit
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                        font-size: 15px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                        font-size: 19px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                        font-size: 29px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                        font-size: 39px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                        font-size: 59px
                                                    }</style>
                                                <h4 class="elementor-heading-title elementor-size-default">{{__('Please Choose CV Language')}}</h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-12222de0 exad-glass-effect-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
                                 data-id="12222de0" data-element_type="section"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78120a91 exad-glass-effect-no exad-sticky-section-no"
                                     data-id="78120a91" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5738a9bb exad-glass-effect-no exad-sticky-section-no"
                                     data-id="5738a9bb" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8120b65 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                             data-id="8120b65" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="96px"
                                                             height="99px" viewbox="0 0 96 99" version="1.1"><title>
                                                                AFD80254-8D3B-41C8-B7E0-D44A96B24E07</title>
                                                            <g id="SEM-UK" stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g id="JT-LC-SEM1"
                                                                   transform="translate(-150.000000, -2498.000000)">
                                                                    <g id="Group-28"
                                                                       transform="translate(150.000000, 2228.000000)">
                                                                        <g id="Group-38"
                                                                           transform="translate(0.000000, 270.000000)">
                                                                            <g id="Group-29">
                                                                                <path d="M44.7692434,0 C45.610849,6.95082693e-15 46.425856,0.29486239 47.0726417,0.833349228 L66.4148912,16.9369004 C67.2364203,17.6208713 67.7114931,18.6345676 67.7114931,19.7035513 L67.7111567,67.9555599 C67.7018102,74.0174423 67.4457137,74.5365398 60.9683777,74.5503129 L17.9399502,74.5506087 C11.2783445,74.5506087 10.9258384,74.1193646 10.9079425,68.2194158 L10.9079425,6.33119288 C10.9255753,0.518008029 11.2680491,0.0138663276 17.6501301,0.000295807208 L44.7692434,0 Z M42.5897016,55.9129565 L28.4548757,55.9129565 C27.1293923,55.9129565 26.0548756,56.9874731 26.0548756,58.3129566 L26.0548756,58.3129566 L26.0548756,60.9680173 C26.0548756,62.2935007 27.1293923,63.3680174 28.4548757,63.3680174 L28.4548757,63.3680174 L42.5897016,63.3680174 C43.9151851,63.3680174 44.9897017,62.2935007 44.9897017,60.9680173 L44.9897017,60.9680173 L44.9897017,58.3129566 C44.9897017,56.9874731 43.9151851,55.9129565 42.5897016,55.9129565 L42.5897016,55.9129565 Z M57.7375625,41.0028348 L28.4548757,41.0028348 C27.1293923,41.0028348 26.0548756,42.0773514 26.0548756,43.4028349 L26.0548756,43.4028349 L26.0548756,46.0578955 C26.0548756,47.383379 27.1293923,48.4578956 28.4548757,48.4578956 L28.4548757,48.4578956 L57.7375625,48.4578956 C59.063046,48.4578956 60.1375626,47.383379 60.1375626,46.0578955 L60.1375626,46.0578955 L60.1375626,43.4028349 C60.1375626,42.0773514 59.063046,41.0028348 57.7375625,41.0028348 L57.7375625,41.0028348 Z"
                                                                                      id="Combined-Shape-Copy"
                                                                                      fill="#006370"></path>
                                                                                <rect id="Rectangle" fill="#006370"
                                                                                      x="1.23478328" y="34.870446"
                                                                                      width="48.1595984"
                                                                                      height="33.6680168"></rect>
                                                                                <path d="M37.5939454,7.01416917 C38.4363785,7.01416917 39.2521334,7.30961077 39.8991944,7.84906021 L59.2133839,23.9511427 C60.0338079,24.6351235 60.5081351,25.6481108 60.5081351,26.7162518 L60.5081351,74.4203445 C60.5081351,81.0006392 60.432968,81.5503039 53.7741879,81.564482 L7.02244671,81.5647778 C0.36989837,81.5647778 0.0178715512,81.1335338 -1.10072812e-12,75.233585 L-1.10074645e-12,13.3453621 C0.0176087343,7.5321772 0.359616905,7.0280355 6.73302066,7.01446498 L37.5939454,7.01416917 Z M24.0717878,55.4720648 L9.96270628,55.4720648 C8.63722283,55.4720648 7.56270619,56.5465815 7.56270619,57.8720649 L7.56270619,57.8720649 L7.56270619,60.5271256 C7.56270619,61.852609 8.63722283,62.9271257 9.96270628,62.9271257 L9.96270628,62.9271257 L24.0717878,62.9271257 C25.3972713,62.9271257 26.4717879,61.852609 26.4717879,60.5271256 L26.4717879,60.5271256 L26.4717879,57.8720649 C26.4717879,56.5465815 25.3972713,55.4720648 24.0717878,55.4720648 L24.0717878,55.4720648 Z M39.1990533,40.5619431 L9.96270628,40.5619431 C8.63722283,40.5619431 7.56270619,41.6364597 7.56270619,42.9619432 L7.56270619,42.9619432 L7.56270619,45.6170038 C7.56270619,46.9424873 8.63722283,48.0170039 9.96270628,48.0170039 L9.96270628,48.0170039 L39.1990533,48.0170039 C40.5245367,48.0170039 41.5990533,46.9424873 41.5990533,45.6170038 L41.5990533,45.6170038 L41.5990533,42.9619432 C41.5990533,41.6364597 40.5245367,40.5619431 39.1990533,40.5619431 L39.1990533,40.5619431 Z"
                                                                                      id="Combined-Shape"
                                                                                      fill="#B1CFD3"></path>
                                                                            </g>
                                                                            <path d="M68.5119575,87.6762357 L57.5020744,98.6682481 C57.1784029,98.9918217 56.6911222,99.0889144 56.2676605,98.9142102 C55.8441987,98.7395061 55.5678386,98.3274495 55.5678386,97.8703593 L55.5678386,47.2279867 C55.5659622,46.7800924 55.8293679,46.3732587 56.2395248,46.1909436 C56.6496817,46.0086286 57.1290929,46.0852797 57.4615721,46.3863318 L94.7119016,80.1956074 C95.0469193,80.4988105 95.1688787,80.9718064 95.0220893,81.3986104 C94.8752999,81.8254145 94.4879292,82.124127 94.0368628,82.1583465 L78.8484894,83.3248801 L72.1470415,83.7951433 L68.5119575,87.6762357 Z"
                                                                                  id="Combined_Shape" fill="#FFA019"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8120b65 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                                             data-id="8120b65" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
{{--                                                    <input type="hidden" name="item_hash" value="{{$addedItem->get('hash')}}"/>--}}
                                                <select class="form-control text-center" name="cv_language">
                                                    <option value="en" selected>{{__('English')}}</option>
                                                    <option value="ar">{{__('Arabic')}}</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7075ea33 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading"
                                             data-id="7075ea33" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">We will help you
                                                    create a CV
                                                </h5></div>
                                        </div>
                                        <div class="elementor-element elementor-element-ee49ed5 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading"
                                             data-id="ee49ed5" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">– step by
                                                    step.</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-14183686 exad-glass-effect-no exad-sticky-section-no"
                                     data-id="14183686" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-59952e99 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="59952e99" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9763259 exad-glass-effect-no exad-sticky-section-no"
                     data-id="9763259" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-1b1acc28 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="1b1acc28" data-element_type="section" style="direction: ltr">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c353033 exad-glass-effect-no exad-sticky-section-no"
                                     data-id="2c353033" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3cb37a32 elementor-align-left exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                             data-id="3cb37a32" data-element_type="widget"
                                             data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       href="{{url('cv-builder')}}">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('Back')}}</span>
		                                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6089421 exad-glass-effect-no exad-sticky-section-no"
                                     data-id="6089421" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-129ebaea exad-glass-effect-no exad-sticky-section-no"
                                     data-id="129ebaea" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2e747db0 elementor-align-right exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                             data-id="2e747db0" data-element_type="widget"
                                             data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <button class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       type="submit">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('Next')}}</span>
		                                                </span>
                                                    </button>
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
        </form>
    </div>
@endsection
@section('custom_js')

@endsection
