<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url()?>css/styles.css">
	<title>HTTP Analyzer</title>
</head>
<body>
	<div class="wrapper">
		<header>
			<h2>HTTP Analyzer</h2>
			<form action="/analyzer/parseUrl" method="post">
				<label for="url">URL to fetch by Ajax</label>
				<input type="url" name="url" id="url">
				<input type="submit" value="Analyze">
			</form>
		</header>
		<div class="results">
			<table>
				<thead>
					<tr>
						<th>HTML Tag</th>
						<th>Number of Appearances</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<div class="source">
				<h2>HTTP Response</h2>
				<div></div>
			</div>
		</div>
	</div>
	<script src="<?=base_url()?>js/index.js"></script>
</body>
</html>