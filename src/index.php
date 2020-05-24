<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my website!</title>
        <style type="text/css">
           body {background-color: #fff; color: #222; font-family: sans-serif;}
           pre {margin: 0; font-family: monospace;}
           a:link {color: #009; text-decoration: none; background-color: #fff;}
           table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
           .center {text-align: center;}
           .center table {margin: 1em auto; text-align: left;}
           .center th {text-align: center !important;}
           td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
           th {position: sticky; top: 0; background: inherit;}
           h1 {font-size: 150%;}
           h2 {font-size: 125%;}
           .e {background-color: #ccf; width: 300px; font-weight: bold;}
           .h {background-color: #99c; font-weight: bold;}
           .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
           .v i {color: #999;}
           img {float: right; border: 0;}
           hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
        </style>
</head>
<body>
        <h1>Kubernetes Infrastructure</h1>
	<table>
                <tr class="h"><th>Name</th><th>Node/Pod</th><th>Container</th></tr>
		<tr><td class="e">Pod:</td><td class="v"><?php echo getenv("POD_NAME"); ?></td><td class="v"><?php echo getenv("HOSTNAME"); ?></td></tr>
		<tr><td class="e">Node:</td><td class="v"><?php echo getenv("NODE_NAME"); ?></td><td class="v"><?php echo getenv("MYWEB_SERVICE_HOST"); ?></td></tr>
		<tr><td class="e">Namespace:</td><td class="v"><?php echo getenv("POD_NAMESPACE"); ?></td><td class="v">default</td></tr>
		<tr><td class="e">IP:</td><td class="v"><?php echo getenv("POD_IP"); ?></td><td class="v"><?php echo getenv("KUBERNETES_SERVICE_HOST"); ?></td></tr>
	</table>
        <a href="/phpinfo.php" target="_blank"><h2>PHP Information</h2></a>
</body>
</html>
