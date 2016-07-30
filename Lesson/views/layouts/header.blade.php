<!doctype html>
<html class="no-js" lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    <link href='{{ Asset('assets/css/style.css') }}' rel='stylesheet' type='text/css'>

</head>

<body>

    <div class="top-bar">
        <div class="row">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text">
                      <a href="{{ Url('/') }}"><span class="black">SOLT.Inc </span><small><span class="black">make</span> <span class="text-red">Enjoy!</span></small></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @if(isset($view_name))
      <div class="row columns">
          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs">
                  <li><a href="{{ Url('/') }}">Home</a></li>
                  <li>{{ $view_name }}</li>
              </ul>
          </nav>
      </div>
    @endif
