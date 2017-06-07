<?php


function NavItem($name, $url, $subtitle, $icon = 'home') {
    
    $subtitleReturned;
    
    if(is_array($subtitle)) {
        $randomizedSubtitles = array_rand($subtitle);
        $subtitleReturned = $subtitle[$randomizedSubtitles];
    } else {
        $subtitleReturned = $subtitle;
    }
    
    
    return array(
        'name'=>$name,
        'subtitle'=>$subtitleReturned,
        'url'=>$url,
        'icon'=>$icon
    );    
}


function NavItemMediaRow($item) {
    ?>

    <li>
        <a href="<?php echo $item['url']; ?>" data-panel="left" class="item-link item-content close-panel">
            <div class="item-media"><i class="icon material-icons size-50 menu-icon"><?php echo $item['icon']; ?></i></div>
            <div class="item-inner">
                <div class="item-title-row">
                    <div class="item-title"><?php echo $item['name']; ?></div>
                </div>
                <div class="item-subtitle"><?php echo $item['subtitle']; ?></div>
            </div>
        </a>
    </li>

<?php
}

?>