
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  {{setting('site.number')}}</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://{{setting('site.facebook')}}"><i class="arrow-next-prev fa fa-facebook"></i></a></li>
                                <li><a href="https://{{setting('site.twitter')}}"><i class="arrow-next-prev fa fa-twitter"></i></a></li>
                                <li><a href="https://{{setting('site.linkedin')}}"><i class="arrow-next-prev fa fa-linkedin"></i></a></li> 
                                <li><a href="https://{{setting('site.skype')}}"><i class="arrow-next-prev fa fa-skype"></i></a></li>
                            </ul>
                            {{-- <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div> --}}
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
@php use \Illuminate\Support\Facades\Request; @endphp
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{url('front-end')}}/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                        
                        <li class="{{ (\Request::route()->getName() == 'about-us') ? 'active' : '' }}"><a href="{{route('about-us')}}">About Us</a></li>

                        <li class="{{ (\Request::route()->getName() == 'portfolio') ? 'active' : '' }}"><a href="{{route('portfolio')}}">Portfolio</a></li>

                        <li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
