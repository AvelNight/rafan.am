<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rafan — {{$title}}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!--[if lte IE 8]>
        <link href="/css/ie/v8.css" rel="stylesheet">
    <![endif]-->
</head>
<body class="landing">
<!-- Header -->
<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark bg-opacity-75" id="header">
        <div class="container container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/images/rafan_logo_gb.svg" class="img-logo" alt="logo">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse navbar-collapse collapse d-md-flex justify-content-end" id="mainMenu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">{!!__('main.menuHome')!!}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">{!!__('main.menuTeam')!!}</a></li>
                    <li class="nav-item"><a class="nav-link" aria-disabled="true" href="#technologies">{!!__('main.menuTechnologies')!!}</a></li>
                </ul>
                {{--<div class="lang-wrapper ms-2 ms-md-5 position-relative">
                    <div class="lang-caption">
                        <div class="lang-caption-text nav-link" data-bs-toggle="collapse"
                             data-bs-target="#langMenu" aria-controls="langMenu" aria-expanded="false"
                             aria-label="Toggle navigation"> {{ $languageList[$currentLang]['name'] }}
                        </div>
                    </div>
                    <div class="lang-switcher collapse position-absolute bg-dark bg-opacity-75 w-100 ps-1" id="langMenu">
                        <ul class="alt m-0">
                            @foreach ($languageList as $code => $lang)
                                @if($code == $currentLang)
                                    @continue
                                @endif
                                <li class="change-lang pb-0" data-lang="{{$code}}">{{$lang['name']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>--}}
                <div class="lang-wrapper ms-2 ms-md-5 position-relative">
                    <div class="lang-caption change-lang" data-lang="{{$switchTo['code']}}" style="cursor: pointer;">
                        <span class="switchto-text">{{ $activeLang['name'] }}</span>
                        <span class="switchto-flag">{{ $activeLang['flag'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
