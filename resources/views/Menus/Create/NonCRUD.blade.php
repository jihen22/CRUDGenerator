<!DOCTYPE html>
<html>
<head>
	<title>Large Card Example</title>
	<style>
		.large-card {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
		}
		
		.large-card .card-content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 80%;
			height: 80%;
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
		}
		
		.large-card .card-header {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		
		.large-card .card-body {
			margin-bottom: 20px;
		}
		
		.large-card .form-group {
			margin-bottom: 20px;
		}
		
		.large-card .form-group label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		
		.large-card .form-group input[type="text"],
		.large-card .form-group select {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
		
		.large-card .form-group .input-icon {
			position: relative;
			display: inline-block;
			vertical-align: middle;
		}
		
		.large-card .form-group .input-icon i {
			position: absolute;
			top: 50%;
			left: 10px;
			transform: translateY(-50%);
			font-size: 20px;
			color: #ccc;
		}
		
		.large-card .form-group .input-icon select {
			padding-left: 35px;
		}
		
		.large-card .card-footer {
			text-align: center;
		}
		
		.large-card .card-footer button {
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		
		.large-card .card-footer button:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>

<div class="large-card">
	<div class="card-content">
		<div class="card-header">
			Settings
		</div>
		<div class="card-body">
			<div class="form-group">
				<label for="table-name">Table Name</label>
				<input type="text" id="table-name" name="table-name">
			</div>
			<div class="form-group">
				<label for="table-icon">Table Icon</label>
				<div class="input-icon">
					<i class="fa fa-table"></i>
					<select id="table-icon" name="table-icon">
						<option value="fa-table">Table</option>
						<option value="fa-list">List</option>
						<option value="fa-th-large">Grid</option>
					</select>
				</div>
			</div>
			
