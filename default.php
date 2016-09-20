<?php
  if (!isset($_GET["table"])) {
    header("Location: http://orar10emoisil.esy.es/?table=1");
  }
?>

<html manifest="orar9e.appcache">
	<head>
		<?php
			require '/home/u567331873/public_html/index/head.php';
		?>
	</head>
	<body style="font-family: 'Ubuntu', sans-serif;">
		<div id="wrapper">
			<div id="header">
				<script language="php">
					require '/home/u567331873/public_html/index/header.php';
				</script>
			</div>
			<div id="content" style="color:black;">
				<script language="php">
					if ($_GET["table"]==1) require '/home/u567331873/public_html/index/tabel1.php';
				</script>
			</div>
			<div id="footer">
				<script language="php">
					require '/home/u567331873/public_html/index/footer_index.php';
				</script>
			</div>
		</div>
	</body>
</html>
