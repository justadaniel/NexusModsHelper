<?php
include('../lib/appearance.php');
header("Content-type: text/css", true);
?>


.navbar {
    height:<?php echo $navbarHeight; ?>px;
}
.page-content {
    padding-top:<?php echo ($navbarHeight); ?>px !important;
}

.panel .content-block,
.panel .list-block,
.content-block.transparent,
.list-block.transparent {
    background-color:transparent;
}

.warning-block {
    margin:0px auto;
}
.warning-block .content-block-inner {
    margin:0px auto;
    max-width:<?php echo $bannerMaxWidth; ?>px;
}
.max-width-wrapper {
    position:relative;
    max-width:<?php echo $maxWidth; ?>px;
    margin:0px auto;
    padding:0px;
}
.warning-block.software-update {
    text-align:center;
}





/*** SPLITVIEW ***/
.view.view-sideview {
    float: left;
    width: <?php echo $splitviewPanelSize; ?>px;
    border-right: 1px solid #b2b2b2;
}
.view.detailview {
    width: -webkit-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
    width: -moz-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
    width: -ms-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
    width: calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
}
@media (max-width: 768px) {
    .view.view-sideview {
        width: <?php echo $splitviewPanelSize; ?>px;
    }
    .view.detailview {
        width: -webkit-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
        width: -moz-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
        width: -ms-calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
        width: calc(100% - <?php echo $splitviewPanelSize + 1; ?>px);
    }
}









/*** DARK THEME ***/
.backdropfilter .popover,
.backdropfilter .modal .modal-inner,
.backdropfilter .modal .modal-button {
    background-color:<?php echo HexToRgbaCSS($lightColor, $lightThemeBlurOverlayOpacity); ?>;
}
.no-backdropfilter .popover {
    background-color:<?php echo $lightColor; ?>;
}
.backdropfilter .popup {
    background-color:<?php echo HexToRgbaCSS($backgroundColor, $lightThemeBlurOverlayOpacity); ?>;
}
.no-backdropfilter .popup {
    background-color:<?php echo $backgroundColor; ?>;
}
.backdropfilter .layout-dark .popup,
.backdropfilter .layout-dark .modal .modal-inner,
.backdropfilter .layout-dark .modal .modal-button {
    background-color:<?php echo HexToRgbaCSS($darkColor, $darkThemeBlurOverlayOpacity); ?> !important;
}
.no-backdropfilter .layout-dark .popup,
.no-backdropfilter .layout-dark .modal .modal-inner,
.no-backdropfilter .layout-dark .modal .modal-button {
    background-color:<?php echo $darkColor; ?> !important;
}
.backdropfilter .preloader-indicator-modal {
    background-color:<?php echo HexToRgbaCSS('#000', $darkThemeBlurOverlayOpacity); ?> !important;
}
.no-backdropfilter .preloader-indicator-modal {
    background-color:<?php echo HexToRgbaCSS('#000', 0.8); ?> !important;
}
.no-backdropfilter .panel {
    background-color:<?php echo $backgroundColor; ?> !important;
}
.backdropfilter .panel {
    background-color:<?php echo HexToRgbaCSS($backgroundColor, $lightThemeBlurOverlayOpacity); ?> !important;
}
.no-backdropfilter .layout-dark .panel {
    background-color:<?php echo $darkColor; ?> !important;
}
.backdropfilter .layout-dark .panel {
    background-color:<?php echo HexToRgbaCSS($darkColor, $darkThemeBlurOverlayOpacity); ?> !important;
}
.backdropfilter .panel .list-block,
.backdropfilter .panel .content-block {
    background-color:transparent !important;
}
.list-block ul:before,
.list-block ul:after,
.content-block ul:before,
.content-block ul:after,
.item-input-field:after,
.splitivew-panel-left .seperator {
    background-color:rgba(0,0,0,0.25) !important;
}
.layout-dark .list-block ul:before,
.layout-dark .list-block ul:after,
.layout-dark .content-block ul:before,
.layout-dark .content-block ul:after,
.layout-dark .item-input-field:after,
.splitivew-panel-left .seperator {
    background-color:rgba(255,255,255,0.1) !important;
}
.warning-block.color-white p,
.warning-block.color-white h1,
.warning-block.color-white h2 {
    color:white;
}
.warning-block.color-black p,
.warning-block.color-black h1,
.warning-block.color-black h2 {
    color:<?php echo HexToRgbaCSS('#000', $darkThemeBlurOverlayOpacity); ?>;
}
.warning-block.color-white .button {
    background-color: white;
    border-color: white;
}
.warning-block.color-black .button {
    background-color: <?php echo HexToRgbaCSS('#000', $darkThemeBlurOverlayOpacity); ?>;
    border-color: <?php echo HexToRgbaCSS('#000', $darkThemeBlurOverlayOpacity); ?>;
}
.layout-dark .modal .modal-inner {
    color:white !important;
}


<?php if(IsColorLight($navBarColor)) : ?>
.backdropfilter .navbar {
    background-color:<?php echo HexToRgbaCSS($navBarColor, $darkThemeBlurOverlayOpacity); ?>;
}
.navbar {
    background-color:<?php echo $navBarColor; ?>;
}
.navbar,
.navbar a {
    color:<?php echo $darkColor; ?> !important;
}
<?php else : ?>
.backdropfilter .navbar {
    background-color:<?php echo HexToRgbaCSS($navBarColor, $lightThemeBlurOverlayOpacity); ?>;
}
.navbar {
    background-color:<?php echo $navBarColor; ?>;
}
.navbar,
.navbar a {
    color:<?php echo $lightColor; ?> !important;
}
<?php endif; ?>






/*** COLORS ***/
body:not(.layout-dark) .page {
    background:<?php echo $backgroundColor; ?> !important;
}

.accent-color {
    color:<?php echo $accentColor; ?> !important;
}
i.icon.f7-icons.focus {
    color:<?php echo $accentColor; ?> !important;
}
.item-inner.focus-state .item-input-field:after {
    background-color:<?php echo $accentColor; ?> !important;
}
.item-inner.focus-state .item-title {
    color:<?php echo $accentColor; ?> !important;
}
.warning-block .content-block-inner,
.warning-block .content-block-inner:before,
.warning-block .content-block-inner:after {
    background:transparent;
}




/*** GRAPHICS ***/
.backdropfilter .navbar,
.backdropfilter .panel,
.backdropfilter .popover,
.backdropfilter .modal .modal-inner,
.backdropfilter .popup,
.backdropfilter .preloader-indicator-modal,
.warning-block .button {
    -webkit-backdrop-filter: saturate(180%) blur(<?php echo $blurAmount; ?>px);
    -moz-backdrop-filter: saturate(180%) blur(<?php echo $blurAmount; ?>px);
    backdrop-filter: saturate(180%) blur(<?php echo $blurAmount; ?>px);
}
.navbar {
    box-shadow:0px 0px 15px <?php echo HexToRgbaCSS('#000', $boxShadowIntensity/2); ?> !important;
}
.panel {
    box-shadow:0px 0px 25px <?php echo HexToRgbaCSS('#000', $boxShadowIntensity); ?> !important;
}