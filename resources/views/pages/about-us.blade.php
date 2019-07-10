@include('layouts.head')

@include('layouts.header')



    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About Corlate</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					@php $teamsimages = \App\TeamsImage::get(); 
					$counts=$teamsimages->count();
					@endphp
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    @foreach($teamsimages as $key =>	$count)
					    <li data-target="#carousel-slider" data-slide-to="{{$key}}" class="{{$loop->first ? 'active' : ''}}"></li>
					     @endforeach 
					   
				  	</ol>

					<div class="carousel-inner">
					
						@foreach($teamsimages as $teamsimage)
						<div class="item {{$loop->first ? 'active' : ''}}">
							<img src="{{ Voyager::image( $teamsimage->image ) }}" class="img-responsive" alt=""> 
					   </div>
					   @endforeach 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			
			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Team of Corlate</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row clearfix">
					@php $teams = \App\Team::get();
						
 							@endphp
					@foreach($teams as $team)
					<div class="col-md-4 col-sm-6 ">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="row justify-content-center">
									<img class="img-circle media-object" src="{{ Voyager::image( $team->image ) }}" alt="">
								</div>

								<div class="media-body">
									<div class="justify-content-center">
									<h4 class="paragraph-for-team m">{{$team->name}}&nbsp;/<h5 > &nbsp;{{$team->job}}</h5></h4>
									</div>
									
								</div>
							</div><!--/.media -->
							<p class="paragraph-for-team">{{$team->description}}</p>
						</div>
					</div>
					@endforeach
					


				</div> <!--/.row -->
				
				
					
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	




    
@include('layouts.bottom')

@include('layouts.footer')
</body>
</html>