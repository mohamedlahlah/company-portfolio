@include('layouts.head')

@include('layouts.header')


   <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Portfolio</h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class="portfolio-filter text-center">
            @php $Categories = \App\Category::get();@endphp
            
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                @foreach($Categories as $Category)    
                
                <li><a class="btn btn-default" href="#" data-filter=".{{$Category->id}}">{{$Category->name}}</a></li>
                
                @endforeach
                

            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
 
                @php $portfolios = \App\Portfolio::get();@endphp
                    @foreach($portfolios as $portfolio)
                    <div class="portfolio-item apps {{$portfolio->category_id}} col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ Voyager::image( $portfolio->image ) }}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">{{$portfolio->title}}</a></h3>
                                    <p>{{str_limit($portfolio->description,100)}}</p>
                                    <a class="preview" href="{{ Voyager::image( $portfolio->image ) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                @endforeach

                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
@include('layouts.bottom')

@include('layouts.footer')
</body>
</html>