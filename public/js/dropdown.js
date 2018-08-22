$("#category").change(event => {
	$.get(`products/${event.target.value}`, function(res, sta){
		$("#product").empty();
		res.forEach(element => {
			$("#product").append(`<option value=${element.id}> ${element.description} </option>`);
		});
	});
});
