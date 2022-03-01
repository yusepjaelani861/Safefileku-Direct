<?php 
error_reporting(0);
function getDriveID($url) {
    $filter1 = preg_match('/safefileku\.com\/download\/(.*)/', $url, $match1);
    $filter2 = preg_match('/mkomsel\.com\/download\/(.*)/', $url, $match2);
    if ($filter1) {
        $match = $match1[1];
    } else if ($filter2) {
        $match = $match2[1];
    } else {
        $match = null;
    }

    return ($match);
}

if ($_POST['submit'] != "") {
    $url = $_POST['url'];
    $driveID = getDriveID($url);
} 

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title> - Google Drive</title>
<link rel="stylesheet" href="./css/style.css">
<meta name="referrer" content="no-referrer">
<link rel="shortcut icon" type="image/png" href="https://go.mitefansub.us/img/favicon.png" />
<meta name="robots" content="noindex" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="notification"></div>
<div class="navbar">
<div class="container">
<div id="nav_toggle"><i class="material-icons">menu</i></div>
<div class="brand"><a href="/">SafeFileku</a></div>
<nav id="navbar">
<ul>
<li><a href="/">Home</a></li>
</ul>
</nav>
    </div></div>

    <div class="container">
<div class="left">
<div class="card">
<div class="card-head"><span>Link Download Generator</span> <div class="button-group" data_tab="link_generate"><a class="active" tab_select="batch_tab"><i class="material-icons">code</i></a></div></div>
<div class="card-body" tab_id="link_generate">
<div id="batch_tab" class="active">
<form action="" method="POST">
			<input type="text" size="80" name="url" value="<?php echo $url; ?>" placeholder="https://safefileku.com/download/6DyV60lirlUufT2"/>
			<button class="button" input type="submit" value="Generate" name="submit" >Generate </button>
		</form>
</div>
</div>
</div>
<!-- <div class="card" id="supported">
<div class="card-head">Result Link</div>
<div class="card-body">
<textarea class="form-control" readonly>
<?php 
    if ($driveID != null) {
        $link = 'https://server1.safefileku.com/get/' . $driveID . '';
        echo $link;
    }
    ?>
</textarea>
</div>
</div> -->
<?php if ($driveID != null) {
echo '<div class="card">';
echo     '<div class="card-head">Download File</div>';
echo     '<div class="card-body"><center>';
echo       '<a href="https://server1.safefileku.com/get/';
echo ''. $driveID . '">';
echo '<button class="button">Download</button> </a></center>';    
echo '</div>';
echo '</div>';
} ?>

</div>
<div class="right">
<div class="card" id="howtouse">
<div class="card-head">How to use</div>
<div class="card-body">
<ol>
<li>Input your Original Link to link Generator</li>
<li>Select the link Type you want to Generate</li>
<li>Click Generate, done</li>
</ol>
</div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" type="6eb81c39c0396284308c29f0-text/javascript"></script>
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js" type="6eb81c39c0396284308c29f0-text/javascript"></script>
<script src="https://rawcdn.githack.com/yusepjaelani861/Library-JS/e657f9b60072a7edf8be8f1eeb29f8042202a1cb/lib/script.js" type="6eb81c39c0396284308c29f0-text/javascript"></script>
</body>
</html>
