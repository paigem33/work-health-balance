<nav id="navbar" class="mnb navbar navbar-default navbar-fixed-top">
	<div class="d-flex justify-content-between w-100">
		<a href="#" id="menuToggle">click</a>
		<div class="d-flex justify-content-between">
			<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			@if(Route::has('register'))
			<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			@endif
		</div>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">En</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Draude Oba <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="#">Settings</a></li>
				<li><a href="#">Upgrade</a></li>
				<li><a href="#">Help</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Logout</a></li>
				</ul>
			</li>
			<li><a href="#">click</a></li>
			<li><a href="#">click</a></li>
		</ul>
		<form class="navbar-form navbar-right">
			<input type="text" class="form-control" placeholder="Search...">
		</form>
	</div>
</nav>