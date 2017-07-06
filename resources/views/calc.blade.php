<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Calculation</title>
    <link rel="stylesheet" href="css/app.css"/>
	<link rel="stylesheet" href="css/calc.css"/>
    <script>
		window.Laravel = {
			csrfToken: "{{ csrf_token() }}"
		};
    </script>
</head>
<body>
	<div id="app">
		<router-view></router-view>
	</div>
	<script src="js/app.js"></script>
</body>
</html>