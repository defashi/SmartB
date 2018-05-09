<div id="app">
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigatiob</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ action('PagesController@index')}}"> <img src="{{URL::asset('/image/logo4.png')}}" alt="SmartCityBus" height="34px" width="150px"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">login</a></li>
			<li><a href="#">Register</a></li>
		</ul>
		<div id="navbar" class="collapse navbar-collapse navbar-left">
			<ul class="nav navbar-nav">
				<li ><a href="{{ action('PagesController@addadmin') }}">Add admin</a></li>
				<li ><a href="{{ action('PagesController@reguser') }}">Register User</a></li>
				<li ><a href="{{action('PagesController@regbus')}}">Register Bus</a></li>
				<li ><a href="{{action('PagesController@regbusowner')}}">Register Bus Owner</a></li>
			</ul>
		</div>
	</div>
	
</nav>
</div>