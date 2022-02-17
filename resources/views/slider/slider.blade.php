<div class="cont">
	<div class="mouse"></div>
	<div class="app">
		<div class="app__bgimg">
			<div class="app__bgimg-image app__bgimg-image--1">
			</div>
			<div class="app__bgimg-image app__bgimg-image--2">
			</div>
		</div>
		<div class="app__img">
			<img onmousedown="return false" src="{{asset('assets')}}/slider/lan.png" alt="city" />
		</div>
		
		<!--	<div class="app__text app__text--1">
		<div class="app__text-line app__text-line--4" >MARFİL </div>
			<div class="app__text-line app__text-line--3">ÖZEL ÜRETİM</div>
			<div class="app__text-line app__text-line--2">Subscribe now </div> 
			 
		</div>
		
		<div class="app__text app__text--2">
			<div class="app__text-line app__text-line--4">Creative </div>
			<div class="app__text-line app__text-line--3">parallax</div>
			<div class="app__text-line app__text-line--2">Subscribe now</div>
			 
		</div>
	-->
	</div>
	<div class="pages">
		<ul class='pages__list'>
			<li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
			<li data-target='2' class='pages__item pages__item--2'></li>
		
		</ul>
	</div>
</div>
 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  ></script>
  <script>
     'use strict';

$(document).ready(function () {
	var $app = $('.app');
	var $img = $('.app__img');
	var $pageNav1 = $('.pages__item--1');
	var $pageNav2 = $('.pages__item--2');
	var animation = true;
	var curSlide = 1;
	var scrolledUp = void 0,
	    nextSlide = void 0;

	var pagination = function pagination(slide, target) {
		animation = true;
		if (target === undefined) {
			nextSlide = scrolledUp ? slide - 1 : slide + 1;
		} else {
			nextSlide = target;
		}

		$('.pages__item--' + nextSlide).addClass('page__item-active');
		$('.pages__item--' + slide).removeClass('page__item-active');

		$app.toggleClass('active');
		setTimeout(function () {
			animation = false;
		}, 3000);
	};

	var navigateDown = function navigateDown() {
		if (curSlide > 1) return;
		scrolledUp = false;
		pagination(curSlide);
		curSlide++;
	};

	var navigateUp = function navigateUp() {
		if (curSlide === 1) return;
		scrolledUp = true;
		pagination(curSlide);
		curSlide--;
	};

	setTimeout(function () {
		$app.addClass('initial');
	}, 1500);

	setTimeout(function () {
		animation = false;
	}, 4500);

	$(document).on('mousewheel DOMMouseScroll', function (e) {
		var delta = e.originalEvent.wheelDelta;
		if (animation) return;
		if (delta > 0 || e.originalEvent.detail < 0) {
			navigateUp();
		} else {
			navigateDown();
		}
	});

	$(document).on("click", ".pages__item:not(.page__item-active)", function () {
		if (animation) return;
		var target = +$(this).attr('data-target');
		pagination(curSlide, target);
		curSlide = target;
	});
});
    
    
    
    
    </script>