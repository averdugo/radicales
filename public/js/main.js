$(function(){
	$('[data-toggle="popover"]').popover()

	$('body').on('click','.evento',function(){
		var id = $(this).data('id');
		location.href="event/"+id;
	})	
	
	$('body').on('click','.ticket',function(){
		var id = $(this).data('id');
		location.href="../ticket/"+id;
	})	
	$('body').on('click','.link',function(){
		var id = $(this).data('id');
		var url = '../client/'+id;

		$.get(url, {id: id}, function(res){

			$('#linkModal').modal('show');
			console.log(res);
		})
	})	
	
	$('body').on('click','.qr',function(){
		var id = $(this).data('id');
		var url = '../client/'+id;

		$.get(url, {id: id}, function(res){

			$('#linkModal').modal('show');
			console.log(res);
		})
	})	


	$('body').on('click','.pActivity',function(){
		var id = $(this).data('id');
		location.href="eventDestroy/"+id;			
	})

	$('.evento').mouseover(function(){$(this).removeClass('john');});
	$('.evento').mouseleave(function(){$(this).addClass('john');});
})