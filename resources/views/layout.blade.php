
{{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
{{-- @include('sweetalert::alert', ['cdn' => "https://unpkg.com/sweetalert/dist/sweetalert.min.js"]) --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/bulma.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('css/fficon.css')}}">
	<script src="{{asset('js/jquery.min.js')}}"></script>
	{{-- @include('sweetalert::alert') --}}
	{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
	
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
		integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ=="
		crossorigin="anonymous"></script> --}}
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
			/* border: 3px solid #666;
			background-color: #ddd;
			border-radius: .5em; */
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
	{{-- @inject('carbon', '\Carbon\Carbon') --}}

	<div class="container has">

		@yield('content')

	</div>


	<script>
		// function example1() {
		// Vibrate for 500ms
		// navigator.vibrate([500]);
		// }


		// $('.card-header').on('click',function(){
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





// ****************************************************************


// $('#expand').on('click',function(){

// 	swal({
// 	  title: "Are you sure?",
// 	  text: "Once deleted, you will not be able to recover this imaginary file!",
// 	  icon: "warning",
// 	  buttons: true,
// 	  dangerMode: true,
// 	})
// 	.then((willDelete) => {
// 	  if (willDelete) {
// 		swal("Poof! Your imaginary file has been deleted!", {
// 		  icon: "success",
// 		});
// 	  } 
// 	  else {
// 	    swal("Your imaginary file is safe!");
// 	  }
// 	});
// })





// $(document).on('click', '#delete', function (e) {
//     e.preventDefault();
//     var id = $(this).data('id');
//     swal({
//             title: "Are you sure!",
//             type: "error",
//             confirmButtonClass: "btn-danger",
//             confirmButtonText: "Yes!",
//             showCancelButton: true,
//         },
//         function() {
//             $.ajax({
//                 type: "POST",
//                 url: "{{url('/destroy')}}",
//                 data: {id:id},
//                 success: function (data) {
//                               //
//                     }         
//             });
//     });
// });




	</script>
</body>

</html>