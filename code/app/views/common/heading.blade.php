<div class="container">
	<div class="row">
		<div class="span4"><img src="{{URL::to('assets/img/raven_logo.png')}}"></div>
		<div class="span8 topnav">{{isset($topnav)?$topnav:HTML::to('login','Login')}}</div>
	</div>
	
</div>