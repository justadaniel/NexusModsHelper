<?php


include(GetSiteRootURI('lib/numbers.php'));

function CreateCard($name) {
    return array(
        'name'=>$name
    );
}



function GetTopSongs($title = 'GetTopSongs()') {
    
                             
    $topSongsJSON = GetJSON('http://localhost/centracore-api/lastfm/getTopSongs.php?limit=3');
    $songsList = $topSongsJSON->tracks->track;


?>
<div class="card">
    <div class="card-header"><?php echo $title; ?></div>
    <div class="card-content">
        <div class="list-block media-list">
            <ul>
                <?php foreach($songsList as $track) : ?>
                <li>
                    <a href="#" class="item-link item-content">
                        <div class="item-media">
                            <img src="<?php echo $track->image[1]->{'#text'}; ?>"/>
                        </div>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <div class="item-title"><?php echo $track->name; ?></div>
                            </div>
                            <div class="item-subtitle"><?php echo $track->artist->name; ?></div>
                            <div class="item-text"><?php echo NumberCommaGrouping($track->listeners); ?> Listeners</div>
                        </div>
                    </a>
                </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="card-footer">
        <span>Updated: 42 Seconds Ago</span>
        <a href="#" class="link">View More</a>
    </div>
</div>

<?php
}
?>