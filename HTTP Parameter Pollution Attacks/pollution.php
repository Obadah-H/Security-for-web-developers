<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script>
function setName(){
	var str = $("#name").val();
	$.ajax({
		type: "GET",
		url: "worst_case.php",
		data: "name="+str,
		dataType: "HTML",
		success: function(putp) {
		alert(putp);
		$("#name").hide();
		}
	});
}
</script>
<form>
Please type your name: 
	<input id="name" type="text" />
</form>
<button onclick="setName()" />Set name</button>