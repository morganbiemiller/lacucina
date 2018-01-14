@extends('master')

@include('templates.header-dark')

@section('content')

<div class="container menu horsdoeuvres">
	<div class="page__title">BUFFETS</div>
	<div class="row">
		<small>Please keep in mind that these are just a few of our most popular menus. We are able to do a much greater variety of food than what is listed. 
		Please don't hesitate to contact us with any ideas you may have.</small>
		<div class="col-xs-12 col-md-4">
			<div class="lc-section-title">Lunch style</div>
			<small>15 person minimum</small>
			
			<div class="menu__item">
				<div class="menu__item-desc">
					Choice of 1 entree:
					Grilled chicken salad
					White albacore tuna salad
					Fusilli pasta salad with chicken and artichoke hearts
					Cheese tortellini with grilled vegetables				
				</div>
				+
				<div class="menu__item-desc">
					Choice of 1 salad:
					House salad
					Caesar salad
					Spinach salad				
				</div>
				+
				<div class="menu__item-desc">
					Assorted rolls
				</div>
				+
				<div class="menu__item-desc">
					Cookies
				</div>
				<div class="menu__item-price">$12 per person</div>
			</div>
			<div>
				Plates, napkins, and plastic silverware<br>
				$1 per person
			</div>
		</div>
			
		<div class="col-xs-12 col-md-4">
			<div class="lc-section-title">Barbeque</div>
			<small>15 person minimum</small>
		
			<div class="menu__item">
				<div class="menu__item-name">Basic</div>
				<div class="menu__item-desc">
					Award winning pulled pork
				</div>
				+
				<div class="menu__item-desc">
					Choice of 2 sides:
					Creamy coleslaw
					Macaroni salad
					Baked beans
					Salt potatoes
					Corn bread
					Cheesy corn casserole
				</div>
				+
				<div class="menu__item-desc">
					Rolls
				</div>
				<div class="menu__item-price">$14 per person</div>
			</div>

			<div class="menu__item">
				<div class="menu__item-name">Deluxe</div>
				<div class="menu__item-desc">
					Award winning pulled pork
				</div>
				+
				<div class="menu__item-desc">
					Barbeque chicken
				</div>
				+
				<div class="menu__item-desc">
					Choice of 3 sides:
					Creamy coleslaw
					Macaroni salad
					Baked beans
					Salt potatoes
					Corn bread
					Cheesy corn casserole
				</div>
				+
				<div class="menu__item-desc">
					Rolls
				</div>
				<div class="menu__item-price">$18 per person</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="lc-section-title">Italian</div>
				<small>15 person minimum</small>

				<div class="menu__item">
					<div class="menu__item-name">Basic</div>
					<div class="menu__item-desc">
						Choice of 1 meat:
						Chicken piccata
						Chicken french
						Chicken parmesan
					</div>
					+
					<div class="menu__item-desc">
						Choice of 2 side:
						Penne with Sunday sauce
						Farfalle with pesto cream sauce
						Petite rigatoni with 7 cheese sauce
						Rice pilaf
						Garlic mashed potatoes
						Mac & cheese
					</div>
					+
					<div class="menu__item-desc">
						Choice of 1 salad:
						House salad
						Caesar salad
					</div>
					+
					<div class="menu__item-desc">
						Bread and butter
					</div>
					<div class="menu__item-price">$15 per person</div>
				</div>

				<div class="menu__item">
					<div class="menu__item-name">Deluxe</div>
					<div class="menu__item-desc">
						Choice of 1 entrée:
						Chicken saltimbocca
						Chicken florentine
						Stuffed chicken breasts with pesto
						Chicken marsala
						Breaded chicken pesto parmesan
						Stuffed peppers
						Eggplant parmesan
					</div>
					+
					<div class="menu__item-desc">
						Choice of 3 sides:
						Penne with Sunday sauce
						Farfalle with pesto cream sauce
						Petite rigatoni with 7 cheese sauce
						Rice pilaf
						Garlic mashed potatoes
						Mixed vegetables
						Mac & cheese
					</div>
					+
					<div class="menu__item-desc">
						Choice of 1 salad:
						House salad
						Caesar salad
					</div>
					+
					<div class="menu__item-desc">
						Bread and butter
					</div>
					<div class="menu__item-price">$18 per person</div>
				</div>
			</div>			
		</div>
	</div>
</div>

@endsection
