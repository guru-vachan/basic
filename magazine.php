<html>
<script type="text/javascript" src="extras/all.js"></script>
<script type="text/javascript" src="lib/hash.js"></script>
<script type="text/javascript" src="lib/turn.min.js"></script>
<script type="text/javascript" src="lib/zoom.min.js"></script>
<script type="text/javascript" src="lib/bookshelf.js"></script>
<body>
<div id="flipbook">
	<div class="hard"> Turn.js </div>
	<div class="hard"></div>
	<div> Page 1 </div>
	<div> Page 2 </div>
	<div> Page 3 </div>
	<div> Page 4 </div>
	<div class="hard"></div>
	<div class="hard"></div>
</div>
</body>
<script type="text/javascript">
	$("#flipbook").turn({
		width: 400,
		height: 300,
		autoCenter: true
	});
</script>
</html>