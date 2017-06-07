<?php
include('lib/lib.php');
include(GetSiteRootURI('lib/appearance.php'));


include(GetSiteRootURI('lib/test.php'));




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo GetSiteName(); ?></title>
<link rel="stylesheet" href="<?php echo GetSiteRootURI('css/framework7/framework7.ios.min.css'); ?>">
<link rel="stylesheet" href="<?php echo GetSiteRootURI('css/framework7/framework7.ios.colors.min.css'); ?>">
<link rel="stylesheet" href="<?php echo GetSiteRootURI('css/static.css'); ?>">
</head>
<body<?php if($userTestData['darktheme']) : ?> class="layout-dark"<?php endif; ?>>
<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>

<div class="views">
    <div class="view view-main">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="center sliding"><?php echo GetSiteName(); ?></div>
            </div>
        </div>
        
        <?php include('dashboard-include.php'); ?>
    </div>
</div>
<script type="text/javascript" src="<?php echo GetSiteRootURI('javascript/framework7.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo GetSiteRootURI('javascript/modernizr-custom.js'); ?>"></script>
<script type="text/javascript" src="<?php echo GetSiteRootURI('javascript/my-app.js'); ?>"></script>
</body>
</html>