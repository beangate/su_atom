$(document).ready(function() {

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

	$(".buy-btn").click(function(){

			$.ajax({
			    type: "POST",
			    url: '/cart',
			    data: {product_id: $(this).data('id')},
			    success: function (data) {
			    	alert("cart updated.");
			    	console.log(data);
			    },
			    error: function (data) {
			      alert("failed");
			      console.log(data);
			    },
			});
	});


});