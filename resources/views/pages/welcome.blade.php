@extends('master')

@include('templates.header')

@section('content')
<div class="welcome">
	<div class="welcome__landing">
		<div class="welcome__image"></div>
		<div class="welcome__overlay"></div>

		<div class="welcome__landing-content">
			<div class="welcome__logo">
				<img src="/img/new-logo.png">
			</div>
			<div class="welcome__tagline">
				You plan the <span class="welcome__event" id="eventType">party</span>,<br>we'll feed your guests. 
			</div>
		</div>
		
	</div>

	<div class="welcome__section">
		<div class="welcome__header">
			We believe
		</div>
		<div class="welcome__wrapper">
			<div class="welcome__container">
				<div class="welcome__icon">
					<img src="/img/icons/banner-dark.png">
				</div>
				<h4>in serving every type of occasion</h4>
			</div>
			<div class="welcome__container">
				<div class="welcome__icon">
					<img src="/img/icons/tomato-dark.png">
				</div>
				<h4>food is best made from scratch</h4>
			</div>
			<div class="welcome__container">
				<div class="welcome__icon">
					<img src="/img/icons/heart-dark.png">
				</div>
				<h4>a dash of love is the best seasoning</h4>
			</div>
		</div>
	</div>
</div>


@endsection