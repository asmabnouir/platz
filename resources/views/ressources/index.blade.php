{{--
	resources/views/ressources/index.blade.php
	 --}}

@extends('templates/homepage')

@section('titre')

Accueil

@stop


@section('content')
<div id="wrapper-container">

 <div class="container object">

	 <div id="main-container-image ">

			 <section class="work" id="ressource">
					 		@include('ressources.liste')
			</section>


	</div>
	</div>

</div>

@stop
