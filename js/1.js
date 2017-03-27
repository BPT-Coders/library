function onLoad(){
	searchBook();
	showTags();
}


function searchBook(){
	var searchString = $('#searchString').val();
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/showBooks.php",
			dataType:"text",
			data: 'searchString=' + searchString,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				$('#books').html(response);
			}
	});
}

function showTags(){
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/showTags.php",
			dataType:"text",
			error: function () {	
				alert( "Не смог напечататть меню" );
			},
			success: function (response) {
				$('#tags').html(response);
			}
	});
}

function showBooksOnTagId(id){
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/showBooks.php",
			dataType:"text",
			data: 'idTag=' + id,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				$('#books').html(response);
			}
	});
}