<?php
$conn=new PDO('mysql:host=fdb22.awardspace.net; dbname=2845625_files', '2845625_files', 'pcgxq333') or die(mysql_error());
?>
<html>
<head>
<title>Files-Alienasi</title>
<link href='https://www.alienasi.com/favicon.ico' rel='shortcut icon'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<style></style>
<body>
<div class="row-fluid">
	<div class="span12">
		<div class="container"> <br />
			<br />
			<br />
			<br />
			<div align="center"><font size="5"><b>Files of ALIENASI dot COM</b></font></div>
			<br />
			<hr/>
			<br /><br />
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th width="90%" align="center">Files</th>
						<th align="center" colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
				<tr>
					<td> &nbsp;<?php echo $name ;?> </td>
					<td>
					<button class="alert-success"><a href="/c0k/<?php echo $name;?>">Read</a></button>
					</td>
					<td>
						<button class="alert-success">
						<a href="download.php?filename=<?php echo $name;?>">Download</a>
						</button>
					</td>
				</tr>
				<?php }?>
			</table>
			<br/>
			<br/>
			<br/>
			<hr/>
			<br/>
			<div align="center"><font size="3"><i><b>Copyright ©2018 Files-Alienasi | Protected By Allah SWT</b></i></font></div>
		</div>
	</div>
</div>
</body>
</html>