<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/bulma.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	
	<script src="{{asset('js/jquery.min.js')}}"></script>
	
	<title>@yield('title')</title>
	<style>
		html{
			background: hsl(0, 0%, 96%)
		}

		span {
			transition: 0.5s ease;
		}

		.card-header-icon {
			transition: 0.5s ease;
			outline: none;
		}

		.rotate {
			transform: rotate(-90deg) !important;
		}




		.box {
			padding: 10px; 
			cursor: move;
			box-shadow: 0px 0px 9px -3px rgba(0,0,0,0.3);
		}

		.box.over {
			border: 3px dotted #666;
		}

	</style>
</head>

<body class="has-navbar-fixed-top">

	<div class="container has">

		@yield('content')

	</div>


	<script>
		$('.card-header').on('click',function(){
            let cardBody = $(this).next();
            cardBody.slideToggle();
		});

		$('.card-header-icon').on('click', function () {
		    $(this).toggleClass('rotate');
        })

        $('#expand').on('click',function (e) {
            e.preventDefault();
            $('.card-header-icon').addClass('rotate');
			$('.card-content').slideUp();
			navigator.vibrate([30]);
		})
		
        $('#collapse').on('click',function (e) {
            e.preventDefault();
            $('.card-header-icon').removeClass('rotate');
			$('.card-content').slideDown();
			// navigator.vibrate([100]);
			navigator.vibrate([500, 250, 100, 250, 500, 250, 500, 250, 500, 250, 500]);
        })



		// **************************************************
		
		





			document.addEventListener('DOMContentLoaded', (event) => {

			var dragSrcEl = null;

			function handleDragStart(e) {
			this.style.opacity = '0.4';
			
			dragSrcEl = this;

			e.dataTransfer.effectAllowed = 'move';
			e.dataTransfer.setData('text/html', this.innerHTML);
			}

			function handleDragOver(e) {
			if (e.preventDefault) {
				e.preventDefault();
			}

			e.dataTransfer.dropEffect = 'move';
			
			return false;
			}

			function handleDragEnter(e) {
			this.classList.add('over');
			}

			function handleDragLeave(e) {
			this.classList.remove('over');
			}

			function handleDrop(e) {
			if (e.stopPropagation) {
				e.stopPropagation(); // stops the browser from redirecting.
			}
			
			if (dragSrcEl != this) {
				dragSrcEl.innerHTML = this.innerHTML;
				this.innerHTML = e.dataTransfer.getData('text/html');
			}
			
			return false;
			}

			function handleDragEnd(e) {
			this.style.opacity = '1';
			
			items.forEach(function (item) {
				item.classList.remove('over');
			});
			}


			let items = document.querySelectorAll('.container .box');
			items.forEach(function(item) {
			item.addEventListener('dragstart', handleDragStart, false);
			item.addEventListener('dragenter', handleDragEnter, false);
			item.addEventListener('dragover', handleDragOver, false);
			item.addEventListener('dragleave', handleDragLeave, false);
			item.addEventListener('drop', handleDrop, false);
			item.addEventListener('dragend', handleDragEnd, false);
			});
			});


	</script>
</body>

</html>