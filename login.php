<?php include "dbConfig.php";

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
	 if ($name == '' || $password == '') {
        $msg = "You must enter all fields";
    } else {
        $sql = "SELECT * FROM members WHERE name = '$name' AND password = '$password'";
        $query = mysql_query($sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }

        if (mysql_num_rows($query) > 0) {
         
            header('Location: YOUR_LOCATION');
            exit;
        }

        $msg = "Username and password do not match";
    }
}
?>

<head>
<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="manifest" href="/img/site.webmanifest">
<link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="img/favicon.ico?v=2" type="image/x-icon">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/img/browserconfig.xml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SnowyYT07</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<form name="frmregister"action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
		<table class="form" border="0">

			<tr>
			<td></td>
				<td style="color:red;">
				<?php echo $msg; ?></td>
			</tr> 
			
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>
			<tr>
				<th><label for="name"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="50" /></td>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
				
			</tr>
		</table>
	</form>
</body>
</html>


<style>
* { margin: 0; padding: 0; }html { height: 100%; font-size: 62.5% }body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }/* ==================== Form style sheet ==================== */table.form { margin-left: 250px; margin-top: 100px; border-collapse: collapse; border: 1px solid #DDDDDD; }table.form th, table.form td { padding: 4px 5px 10px; text-align: left; font-weight: normal; }table.form label { font-family: Verdana, Arial, Helvetica, sans-serif; color: #181818; margin-right: 12px; }table.form td span { font-size: 0.9em; color: #181818; margin-left: 8px; }table.form td samp { font: 1em Verdana, Arial, Helvetica, sans-serif; color: #000000; }table.form input { width: 340px; }table.form input.answer { width: 53px; }table.form textarea { width: 400px; height: 160px; }table.form input.inp-text, table.form input.answer, table.form textarea{ border: 1px solid #909090; padding: 2px; }table.form th.message-up { vertical-align: top !important; }table.form label.invisible { visibility: hidden; }table.form td.submit-button-right { text-align: right !important; }table.form input.submit-text { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; width: auto; }table.form label.email { border-bottom: 1px dotted #000000; }/* ==================== Form style sheet END ==================== */.thanks-text{margin-left: 250px; margin-top: 100px;}.tut{padding:60px 0 0 0; font: 1.4em Georgia, "Times New Roman", Times, serif; }.send_btn {    background: none repeat scroll 0 0 #0D92E1;    border: medium none;    color: #FFFFFF;    cursor: pointer;    font: bold 15px/43px Arial,Helvetica,sans-serif;    height: 35px;    width: 100px !important;	padding: 5px 15px 5px 15px;}

</style>
