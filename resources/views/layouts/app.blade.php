<!DOCTYPE html>
<html>
	<head>
		<title>PHP App Sample</title>
		<link rel="stylesheet" href="https://appsforoffice.microsoft.com/fabric/1.0/fabric.css">
		<link rel="stylesheet" href="https://appsforoffice.microsoft.com/fabric/1.0/fabric.components.css">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body class="ms-Grid">
		<div class="content">
			<div class="ms-Grid">
				<div class="ms-Grid-row">
					<div class="ms-NavBar">
						<ul class="ms-NavBar-items">
							<li class="navbar-header">
								Microsoft Graph sample
							</li>
						</ul>
					</div>
					<div class="ms-Grid-col ms-u-mdPush1 ms-u-md9 ms-u-lgPush1 ms-u-lg6">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</body>
</html>