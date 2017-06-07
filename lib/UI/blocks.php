<?php
include(GetSiteRootURI('lib/color.php'));
include(GetSiteRootURI('lib/appearance.php'));




function ErrorBlock($bgColor = '#f44336') {
    ?>
    
    <div class="content-block warning-block <?php echo 'color-',(IsColorLight($bgColor)) ? 'black' : 'white' ; ?>" style="background-color:<?php echo $bgColor; ?>;">
        <div class="content-block-inner">
            <div class="max-width-wrapper">
                <p>Error Block</p>
                <p>BackgroundColor: <?php echo($bgColor); ?> - IsColorLight(<?php var_dump(IsColorLight($bgColor)); ?>)</p>
            </div>
        </div>
    </div>
    

    <?php
}

function WarningBlock($bgColor = '#ffeb3b') {
    ?>
    
    <div class="content-block warning-block <?php echo 'color-',(IsColorLight($bgColor)) ? 'black' : 'white' ; ?>" style="background-color:<?php echo $bgColor; ?>;">
        <div class="content-block-inner">
            <div class="max-width-wrapper">
                <p>Warning Block</p>
                <p>BackgroundColor: <?php echo($bgColor); ?> - IsColorLight(<?php var_dump(IsColorLight($bgColor)); ?>)</p>
            </div>
        </div>
    </div>
    

    <?php
}

function AvailableSoftwareUpdateBlock($bgColor = '#673ab7') {
    ?>
    
    <div class="content-block warning-block software-update <?php echo 'color-',(IsColorLight($bgColor)) ? 'black' : 'white' ; ?>" style="background-color:<?php echo $bgColor; ?>;">
        <div class="content-block-inner">
            <div class="max-width-wrapper">
                <h2>New Software Update Available!</h2>
                <p>Go into "Settings" to update your software and find out what has been updated.</p>
                <p class="buttons-row"><a href="settings.php" class="button" style="margin:10px auto;width:250px;color:<?php echo $bgColor; ?>;">Open Settings</a></p>
            </div>
        </div>
    </div>
    

    <?php
}




?>