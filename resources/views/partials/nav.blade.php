<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/')}}">Blog</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">

				<li><a href="{{ url('articles')}}">Articles</a></li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>{!! link_to_action('ArticlesController@show',$latest->title,[$latest->id]) !!}</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<div class="container">
	<!--	@include('partials.flash') -->