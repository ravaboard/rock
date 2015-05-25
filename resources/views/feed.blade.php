<html>
	<head>
		<title>Laravel</title>
		<meta http-equiv="refresh" content="300">
        <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lilita+One|Passion+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<style>
		
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
				overflow-x: hidden;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
				padding-right: 0px;
				padding-left: 0px;
			}

			.content {
				  text-align: center;
				  display: inline-block;
				  width: 100%;
				  margin-left: 20px;
				}
			
			.content h2 {
				  font-family: "Open Sans";
				  text-align: left;
				  font-size: 18px;
				  color: #007196;
				  padding-bottom: 0px;
				  word-spacing: -1px;
				}
			
			.content h2 a  {
				color: #007196;
				float: left;
				text-decoration: underline;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
			
			.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			  margin-left: 0px;	
			  color: white;
			}
			
			.navbar {
				background: #333333;
				border: 0px solid transparent;
				border-radius: 0px;
				min-height: 10px;
			}
			
			#desc {
				text-align: left;
				color: #000000;
				font-size: 15px;
			}
			
			#created {
			  color: #666666;
			  font-size: 14px;
			  position: relative;
			  top: 1px;
			  left: 8px;
			}
			
			.navbar {
				background: #333333;
				border: 0px solid transparent;
				border-radius: 0px;
			}
			
			.navbar-brand {
			  position: relative;
			  top: 10px;
			  font-family: 'Lilita One', cursive;
			  letter-spacing: -1px;
			  text-shadow: 3px 2px 1px #000000;
			  color: #ffffff;
			  font-size: 44px;
			  margin-bottom: 20px;
			}
			
			#base {
			  float: left;
			  color: white;
			  font-size: 14px;
			  position: relative;
			  top: 0px;
			  left: 8px;
			  background: black;
			  padding: 5px;
			  margin-right: 22px;
			}
			
	
		</style>
	</head>
	<body>

		<div class="container">
		
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NEWSFEED</a>
    </div>
  </div>
</nav>
		
			<div class="content">
			
			@foreach ($feed->get_items() as $item)
		
			<h2><p id="base">{{ parseBaseUrl($item->get_base()) }}</p><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }} </a><div id="created"> - posted {{ Carbon::parse($item->get_date())->diffForHumans() }}</div></h2>
			
			@endforeach
			
			</div>
		</div>
	</body>
</html>
