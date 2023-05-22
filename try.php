<div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">
            <!---- slide start--->
            <div class="slide first">
                <img src="assets/img/advertisement/advertisement/promo/week3.jpg">
            </div>
            <div class="slide">
                <img src="assets/img/advertisement/advertisement/promo/week1.jpg">
            </div>
            <div class="slide">
                <img src="assets/img/advertisement/advertisement/promo/week.jpg">
            </div>
        </div>
            <!---- End of slide --->

            <!---- automatic navigation start--->
            <div class="navigation-auto">
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
            </div>
            <!---- end of automatic navigation start --->

            <!---- manual navigation --->
            <div class="navigation-manual">
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
                <label for="radio6" class="manual-btn"></label>
            </div>
            <!---- end of manual navigation --->
    </div>

    
        <!--- Java  image slider---->
    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 6){
        counter = 1;
      }
    }, 3000);
    </script>
    <!--- End --->