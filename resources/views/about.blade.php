@extends('layouts.base',['title'=>"Artisan's map"])
@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h2>What is Laracarte ?</h2>
			<p >
				 laracarte is a clone app of laramap.com
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<p class="alert alert-warning">
				<i class="fa fa-exclamation-triangle"></i> This map has been built by <a href="https://twitter.com/etsmo" target="_blank">@etsmo </a> for learning purpose is a clone app of laramap.com
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<p>
				Feel free to help to improve the <a href="#">source code</a>
			</p>
		</div>			
	</div>
	<hr>

	<div class="row">
		<div class="col-12">
			<h2>What is laramap ?</h2>
			<p>
				Laramap is the web application that inspires laracarte</a>
			</p>
			<p>More info see <a href="laramap.com/about">laramap.com</a></p>
		</div>			
	</div>

	<div class="row">
		<div class="col-12">
			<h2>Which tools and servicies are used in laracarte ?</h2>
			<p>
				Basically it is built on laravel &amp; bootstrap frameworks. Other services for nailling forr instance are also used.
				<ul>
					<li>laravel</li>
					<li>bootstrap</li>
					<li>Amazon s3</li>
					<li>Mandrill</li>
					<li>Google maps </li>
					<li>gravatar</li>
					<li>Antony martin's Geolocation package</li>
					<li>Mickel fortin's Markdown parser package</li>
					<li>Heroku</li>

				</ul>
			</p>
			<p>More info see <a href="laramap.com/about">laramap.com</a></p>
		</div>			
	</div>

</div>


@endsection