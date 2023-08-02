<?php
session_start();
include "../user/dashboard/connection.php";
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();
$today = date("F j, Y");   
$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$username=$_SESSION['username'];

//PHP INSERT DATA OF PAYMENT IN DATABASE START

$query="insert into payment_user(order_id,customer_id,customer_name,date,amount,user_id)
		values('$ORDER_ID','$CUST_ID','$username','$today','$TXN_AMOUNT',".$_SESSION['user'].")";
$result=mysqli_query($conn,$query);
if($result){
// 	echo "insert successfully";

}
else{
	echo "insert not successfully";
}

////PHP INSERT DATA OF PAYMENT IN DATABASE END

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = 'CiZmlT41550268237801';
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = "WEBSTAGING";


$paramList["CALLBACK_URL"] = "http://localhost/Hackathon/SMS/user/dashboard/user_dashboard.php";
/*
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,'2mVSLlwvl_QGjNl7');

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>