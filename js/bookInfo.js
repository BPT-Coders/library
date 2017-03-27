function showTagsForBook(){
	var idBook = $('#idBook').val();
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/showTagsForBook.php",
			data: 'idBook=' + idBook,
			dataType:"text",
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				$('#tagsForBook').html(response);
			}
	});
}

function getTagList(){
	var searchString = $('#searchString').val();
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/showTagList.php",
			dataType:"text",
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				$('#tagList').html(response);
			}
	});
}
function addRelationFT(){
	var idTag = $('#tagList').val();
	var idBook = $('#idBook').val();
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/addRelationFT.php",
			dataType:"text",
			data: 'idBook=' + idBook + '&idTag=' + idTag,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				showTagsForBook();
			}
	});
}