<?php /*
standtalldev@gmail.com

kalesagrillcontract.php
data:image/png;base64,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

###################################
1. If you got this file from GitHub and its name is still contract.php, you should RENAME the file to something harder to guess.
The 4th line is a timestamp outputed by the online generator and an example of a more secure filename.

2. The 2nd and 3rd lines (the emails) are read by this PHP script (from itself).
When a signature is submitted, this script will send both parties an email with a link to the signed contract.

3. The 5th line ($lines[4] below) is the data for $DEV_SIGNATURE.
If you got this file from GitHub, the default developer signature just says "John Doe".
You can generate a new signature @ http://cdpn.io/JYpjvE and replace the data above.

4. The $CLIENT_SIGNATURE is received by this script from itself when Client signs the contract.
*/
$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? $_POST['client_signature'] : null;
if (substr( $CLIENT_SIGNATURE, 0, 22 ) === 'data:image/png;base64,') {
    $CLIENT_SIGNATURE = '<img id="hk" src="' . htmlspecialchars($CLIENT_SIGNATURE) . '" >';
} else {
  $CLIENT_SIGNATURE = null;
}

$lines = file(__FILE__);
$clientEmail = trim($lines[1]);
$devEmail = trim($lines[2]);
$DEV_SIGNATURE = trim($lines[4]);
$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { $selfDelete = 0; }
else { $selfDelete = 1; }

/**
The HTML code (and some PHP) is kept in PHP variables like $HEADER, $CONTRACT_HTML, $FOOTER_UNSIGNED, and $FOOTER_SIGNED_PHP.
**/
$HEADER ='<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Signed Contract</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="robots" content="noindex">
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body {
    font-family: "Libre Baskerville", serif;
    font-size:16px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:14px; }
}
@media print {
   .noprint { display:none !important; }
}
.hidden {
    display:none;
}
#content {
    max-width: 600px;
    margin: 0 auto;
    margin-bottom: 3em;
    padding: 0 2em;
    background: #fff;
}
h1 {
    font-size: 2em;
    line-height: 1.2em;
    letter-spacing: 0.15em;
    font-family: "Arapey", serif;
    font-weight: normal;
    margin: 1em 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    padding: .5em 0;
}
h2 {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:700;
}
#signature {
    width:auto;
    border:dashed 2px #53777A;
    margin:0;
    text-align:center;
}
#hk,
#dev_signature {
    max-width:333px;
    display:block;
}
#date-ip {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:400;
}
#print-pdf {
    text-align:center;
    padding:1.5em 0;
    margin-top:2em;
    border-top:solid 1px #ccc;
}
.buttons {
    text-align:center;
    margin:1.5em auto;
}
button {
    margin: 0 .5em;
    font-size:1.2em;
    line-height:1.5em;
    font-family: "Open Sans Condensed",sans-serif;
    font-weight: 700;
    text-transform:uppercase;
    color: #0a3666;
}
button:hover {
    color: #136fd2;
}
</style>
</head>

<body>

<div id="content">

';
$CONTRACT_HTML='<h1>Contract of work for website design and development</h1>
<p>Between <strong>Ben</strong>, referred to below as "Designer", and <strong>Gerry</strong>, referred to below as "Customer".</p>
<h2>1. Agreement of parties</h2>
<p>Customer hires Designer to redesign the current website, kalesagrill<strong>.com</strong>, for the estimated total price of <strong>$1575</strong>. Designer agrees to provide quality service and to answer to the Customers requests in a timely manner.</p>
<p>The agreed payment plan is at the end of the document.</p>
<h2>2. Legal matters and copyrights</h2>
<p>The Customer will guarantee to the Designer that any elements of text, graphics, photos, trademarks or other artwork that the Customer provides for inclusion in the website are either owned by him or that he has the permission to use them. When the Designer receives the final payment, copyright is automatically assigned as follows: Customer will own the graphics, virtual elements, text content photographs and other data provided, unless someone else owns them. The Designer owns the XHTML markup, CSS and other code and he licenses it to the Customer for use on only this project. Designer can reserve the right to display, with Customer\'s consent, the work as part of the portfolio.</p>
<h2>3. Term and termination</h2>
<ol style="list-style-type: lower-alpha;">
<li>This contract shall commence upon the first payment, as outlined in the payment plan and shall remain effective until the services are completed and delivered.</li>
<li>This contract may be terminated at any time by either party effective immediately upon notice, or the mutual agreement of the parties.</li>
<li>In the event of termination, Designer shall be compensated for the service performed through the date of termination in the amount (a) any advanced payment, (b) a prorated portion of the fees due, or (c) hourly fees for work performed by the Designer at the time of the termination, whichever is greater, together with any additional costs incurred trough and up to the date of cancellation.</li>
<li>This Contract may be modified by parties; any modification must be in writing.</li>
<li>All notices to be given hereunder shall be transmitted in writing by electronic mail and will only be effective upon return confirmation.</li>
</ol>
<h2>4. Force majeure</h2>
<p>Designer shall not be deemed in breach of this contract if Designer is unable to complete the services or any portion by reason of fire, earthquake, labor dispute, illness, internet breaches or any technical issues that may appear beyond Designer\'s control. Upon occurrence of any Force Majeure Event, Designer shall give notice to the Customer of his inability to perform or of delay in completing the services and shall propose revisions to the schedule for completion of the services.</p>
<h2>5. Payment plan</h2>
<p>Payment shall be done as follows:</p>
<ul>
<li>20% of total estimated fee will be required to commence work, after this contract has been approved and signed by both parties.</li>
<li>80% upon project closure.</li>
</ul>
<p>Any extra time required outside the project timeline/services mentioned at point 1 of this contract, will be billed at a rate of <strong>$35</strong>&nbsp;per hour.</p>
<h2>Both parties agree to the terms stipulated above:</h2>';
$FOOTER_UNSIGNED = '
  <form method="post" class="noprint" id="signature_form">
    <div id="signature">
      <!-- Client Signature Canvas -->
    </div>

    <div class="buttons">
      <button id="reset" type="button">Reset</button>
      <button id="submit" type="submit">Done &rarr;</button>
    </div>

    <input type="hidden" id="client_signature" name="client_signature" />
  </form>

</div> <!-- #content -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- https://github.com/brinley/jSignature/blob/master/README.md -->
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>
<script>
$(document).ready(function() {
  $("#signature").jSignature();
  var $sigdiv = $("#signature");
  var datapair = $sigdiv.jSignature("getData", "svgbase64");

  $("#signature").bind("change", function(e) {
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val(data);
  });

  $("#reset").click(function(e){
    $("#signature").jSignature("clear");
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val("");
    e.preventDefault();
  });

  $("#submit").click(function(e) {
    $("#signature_form").slideUp(200);
    //$(".buttons").slideUp(300);
    $("#signature_form").after("<img id=\"hk\" class=\"hidden\" />");
    var data = $("#signature").jSignature("getData");
    $("#hk").attr("src", data );
    $("#hk").slideDown(200);
    // Loading text
    $("#dev_signature").css("opacity",".625")
    $("#content").css({"color":"#aaa","list-style-color":"#aaa !important"}).append("<div id=\"loading_area\"></div>");
    $("#loading_area").append("<h2 id=\"loading\" style=\"text-align:center; color:green; display:none;\">Saving Contract…</h2>");
    $("#loading_area").append("<p id=\"loading2\" style=\"text-align:center; color:#222; display:none;\">This shouldn\'t take more than a minute.</p>");
    $("#loading").slideDown(300, function() {
		 		$("#loading2").delay(2000).slideDown(300);
  	});
	});
});
</script>
</body>
</html>';

if ($CLIENT_SIGNATURE) { $FOOTER_SIGNED_PHP ='
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";
  ?>

  <div id="date-ip">
    <strong>Signed on:</strong> <?php echo date("j F Y"); ?>
    <br><strong>IP address:</strong>
    <?php echo get_client_ip_env(); ?><br>
  </div>

  <?php // Function to get the client ip address
  function get_client_ip_env() {
  	$ipaddress = "";
  	if (getenv("HTTP_CLIENT_IP"))
  		$ipaddress = getenv("HTTP_CLIENT_IP");
  	else if(getenv("HTTP_X_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_X_FORWARDED_FOR");
  	else if(getenv("HTTP_X_FORWARDED"))
  		$ipaddress = getenv("HTTP_X_FORWARDED");
  	else if(getenv("HTTP_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_FORWARDED_FOR");
  	else if(getenv("HTTP_FORWARDED"))
  		$ipaddress = getenv("HTTP_FORWARDED");
  	else if(getenv("REMOTE_ADDR"))
  		$ipaddress = getenv("REMOTE_ADDR");
  	else
  		$ipaddress = "UNKNOWN";
  	return $ipaddress;
  } ?>

  <div class="noprint" id="print-pdf">
    <button id="print" type="button" class="button-secondary" onclick="printContract()">
    Print contract
    </button>
    <button id="pdf" type="button" class="button-secondary" onclick="generatePdf()">
    Download as PDF
    </button>
  </div>

</div> <!--#content-->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
function printContract() {
  window.print();
}
function generatePdf() {
  // http://pdfcrowd.com/save-to-pdf/
  window.location.href = "//pdfcrowd.com/url_to_pdf/?use_print_media=1&height=-1&pdf_name=<?php echo $pdfName; ?>";
}
</script>

</body>
</html>';
} else $FOOTER_SIGNED_PHP = null;


if($CLIENT_SIGNATURE==null) {
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }
  /** Waiting for Client to sign: include signature elements and javascript **/
  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER_UNSIGNED .'<?php ');
}
else {
  /** Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file **/
  file_put_contents($htmlName, $HEADER);
  file_put_contents($htmlName, $CONTRACT_HTML, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $DEV_SIGNATURE, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $CLIENT_SIGNATURE, FILE_APPEND | LOCK_EX);
  ob_start();
  eval($FOOTER_SIGNED_PHP); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  $FOOTER_SIGNED_COMPILED = ob_get_contents();
  ob_end_clean();
  file_put_contents($htmlName, $FOOTER_SIGNED_COMPILED, FILE_APPEND | LOCK_EX);

  // Email client & dev, delete php, redirect to html
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.';
    mail($clientEmail,'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.</p>';
    $msg.= 'The contract was signed by: ' .$clientEmail;
    mail($devEmail,'Contract signed!', $msg, $headers);
  }
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}

// Get the current file URL and replaces the .php extension with .html
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}
?>
