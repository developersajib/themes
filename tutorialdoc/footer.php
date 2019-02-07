
<style>
body {
	background-color: #006495;
}
h2 {
	margin:0;
}
section.chapter {
	background-color: #fff;
	padding:20px;
	margin-bottom: 20px;
}
article:after {
  content: '';
  display: block;
  clear: both;
}
h3.titulo {
	color:#006495;
}
a.botton {
	color:#fff;
	background-color:#006495;
	float:right;
	font-family: arial, helvetica, sans-serif;
	text-decoration: none;
	padding: 5px 20px;
	margin-top: 20px;
	border-radius: 10px;
	font-size: 12px;
	text-transform: uppercase;
}

</style>

<script>
	$(document).ready(function() {
		$( ".video" ).append( "<a data-scroll href='#toc' class='botton'>Go to Top</a>" );
		smoothScroll.init();
	});
</script>
</body>


</html>