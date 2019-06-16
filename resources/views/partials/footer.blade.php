{{--
	resources/views/partials/footer.blade.php
	 --}}

<div id="main-container-footer">

	<div class="container-footer">

					<div id="row-1f">
						<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Platz</span><br>Platz is a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
					</div>

					<div id="row-2f">
						<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Platz offers you all the latest freebies found all over the fourth corners without to pay.</div>
					</div>

					<div id="row-3f">
						<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
					</div>

					<div id="row-4f">
						<div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>



			<div id="main_tip_newsletter">

					<form id="form" method="post" action="{{url('/newsletter')}}">
						@csrf
					<input type="email" name="email" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
				</form>
			</div>
					</div>

	</div>


</div>


<div id="wrapper-copyright">

<div class="copyright">
		<div class="copy-text object">Copyright © 2016. Template by <a style="color:#D0D1D4;" href="https://dcrazed.com/">Dcrazed</a></div>

		<div id="administration">
			<a href="{{route('voyager.login')}}">
		Administration
			</a>
		</div>


	<div class="wrapper-navbouton">
			<div class="google object">g</div>
			<div class="facebook object">f</div>
			<div class="linkin object">i</div>
			<div class="dribbble object">d</div>
		</div>
	</div>
</div>

<style>
	#administration {
		width: auto;
		position:absolute;
		height:100%;
		left: 47%;
	}

	#administration a {
		font-family: Helvetica, sans-serif;
		text-align:center;
	  font-size: 15px;
		height:70px;
		line-height:70px;
		opacity:0.5;
		cursor:pointer;
		color:#666;
		opacity:1;
	}

	#administration a:hover {
		color: white;
	}

</style>
