<head>
<link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<div class="slider"> 
		<div class="slides">
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<!---- slide start--->
			<div class="slide first">
				<div class="first-ads-dev">
					<a href="login.php?id=packagedeals"><img src="assets/img/advertisement/advertisement/combo/drip.jpg" alt=""></a>
					<button class="x-btn" onClick="firstadshide()"><i class="fa fa-times"></i></button>
				</div>
				<img src="assets/img/gluta.jpg">
			</div>
			<div class="slide">
				<div class="ads-dev">
					<a href="login.php?id=packagedeals"><img src="assets/img/advertisement/advertisement/new/barbie.jpg" alt=""></a>
					<button class="x-btn" onClick="firstadshide()"><i class="fa fa-times"></i></button>
				</div>
				<img src="assets/img/gluta-1.jpg">
			</div>
			<div class="slide">
				<div class="ads-dev">
					<div class="last_adds">
						<a href="login.php?id=packagedeals"><img src="assets/img/advertisement/advertisement/new/lip.jpg" alt=""></a>
						<button class="x-btn" onClick="firstadshide()"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<img src="assets/img/gluta-2.jpg">
		</div>
			<!---- End of slide --->

			<!---- automatic navigation start--->
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
			</div>
			<!---- end of automatic navigation start --->

			<!---- manual navigation --->
			<div class="navigation-manual">
				<label for="radio1" class="manual-btn"></label>
				<label for="radio2" class="manual-btn"></label>
				<label for="radio3" class="manual-btn"></label>
			</div>
			<!---- end of manual navigation --->
	</div>

	<script>
		let first_ads = document.querySelector('.first-ads-dev');
		let adds = document.querySelector('.ads-dev');
		let last_adds = document.querySelector('.last_adds');

		let firstadshide  = function(){
    	first_ads.style.display = 'none';
		adds.style.display = 'none';
		last_adds.style.display = 'none';
		}
	</script>
		<!--- Java  image slider---->
	<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 3000);
    </script>
    <!--- End --->