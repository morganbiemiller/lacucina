@extends('master')

@include('templates.header-dark')

@section('content')

<div class="container-fluid services">
	<div class="col-md-6">
		<img class="events-photo" src="/img/LC_events.jpg">
	</div>
	<div class="col-md-6">
		<div class="page__title">EVENTS</div>
		<ul class=events-services>
			<li>Corporate luncheons</li>
			<li>Bridal showers</li>
			<li>Wedding receptions</li>
			<li>Baby showers</li>
			<li>Fundraising events</li>
			<li>Baptisms</li>
			<li>Graduation parties</li>
			<li>Holiday parties</li>
			<li>Medical office luncheons</li>
			<li>We will serve any type of occasion!</li>
		</ul>

		<div class="page__title">SERVICES</div>

		<ul class=events-services>
			<li>Delivery fee depending on location</li>
			<li>Set-up (with option of deluxe dinnerware rental)</li>
			<li>Full service (set-up, serving, breakdown and cleanup)</li>
			<li>$50 an hour for Maria</li>
			<li>$20-25 an hour for any additional servers</li>
			<li>Bartenders & additional staff available if needed</li>
		</ul>
	</div>
</div>

@endsection
