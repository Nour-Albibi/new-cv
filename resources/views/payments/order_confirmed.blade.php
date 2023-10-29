@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom2Css')
    <link rel="stylesheet" id="elementor-post-646-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-646.css?ver=1696706091"
          media="all">
    <link rel="stylesheet" id="elementor-post-23-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-23.css?ver=1696667947"
          media="all">
    <link rel="stylesheet" id="elementor-post-55-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-55.css?ver=1695921314"
          media="all">
    <link rel="stylesheet" id="wp-block-library-css"
          href="https://projects.datatime4it.com/chtml/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1"
          media="all">
    <link rel="stylesheet" id="elementor-post-36-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-36.css?ver=1695906899"
          media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset('assets/css/payments.css')}}" rel="stylesheet"/>
@stop
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="646" class="elementor elementor-646"
         data-elementor-post-type="page">
    <h1 class="mb-2">{{ __("Thank you") }}</h1>
    <h4 class="text-muted mb-5">{!! __("Your Order sent successfully") !!} </h4>
    </div>
@endsection
