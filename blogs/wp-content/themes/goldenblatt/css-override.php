<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#B07C4B";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#1a243f";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "PT Serif";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "PT Serif";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['buttonFont'] ) ) {
	$buttonFont = $boldthemes_crush_vars['buttonFont'];
} else {
	$buttonFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "70";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor." -35" );$accentColorVeryVeryDark = CssCrush\fn__l_adjust( $accentColor." -42" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );$accentColorLighter = CssCrush\fn__a_adjust( $accentColor." -50" );$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -15" );$alternateColorVeryDark = CssCrush\fn__l_adjust( $alternateColor." -25" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -20" );$alternateColorLighter = CssCrush\fn__a_adjust( $alternateColor." -50" );$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
input[type='submit']{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
input[type='submit']:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.fancy-select ul.options li:hover{color: {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
blockquote{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    color: {$alternateColor};}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btPreloader{
    background-color: {$accentColor};}
body.error404 .btErrorPage .port .bt_bb_button.bt_bb_style_filled a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
body.error404 .btErrorPage .port .bt_bb_button.bt_bb_style_filled a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btBreadCrumbs{
    color: {$accentColor};}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']:hover{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btNoSearchResults .bt_bb_port .bt_bb_button.bt_bb_style_filled a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btNoSearchResults .bt_bb_port .bt_bb_button.bt_bb_style_filled a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.mainHeader{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.menuPort{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.menuPort nav > ul > li > a:before{
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btTextLogo{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-item > a{color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li:not(.btMenuWideDropdown) > ul > li.menu-item-has-children > a:after{
    color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
html:not(.touch) body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:after{
    background: {$accentColor};}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btMenuVertical.btTransparentAlternateHeader .mainHeader{background-color: {$alternateColor};}
.btTransparentAlternateHeader .topBar{
    background: {$alternateColorLight};}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btAlternateLightHeader .btBelowLogoArea,
.btAlternateLightHeader .topBar{background-color: {$alternateColor};}
.btAlternateLightHeader .btBelowLogoArea a:hover,
.btAlternateLightHeader .topBar a:hover{color: {$accentColor};}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .logo img{height: -webkit-calc({$logoHeight}px*0.8);
    height: -moz-calc({$logoHeight}px*0.8);
    height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .btTextLogo{
    line-height: -webkit-calc({$logoHeight}px*0.8);
    line-height: -moz-calc({$logoHeight}px*0.8);
    line-height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > a,
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > .subToggler{line-height: -webkit-calc({$logoHeight}px*0.8);
    line-height: -moz-calc({$logoHeight}px*0.8);
    line-height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .topBarInMenu{height: -webkit-calc({$logoHeight}px*0.8);
    height: -moz-calc({$logoHeight}px*0.8);
    height: calc({$logoHeight}px*0.8);}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btSiteFooter .btFooterMenu .menu li{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before{background-color: {$accentColor};}
.sticky .headline:before{
    color: {$accentColor};}
.btContent .btArticleListItem .bt_bb_headline a:hover{color: {$accentColor};}
.btContent .btArticleListItem .bt_bb_headline .bt_bb_headline_superheadline{color: {$accentColor};}
.btContent .btArticleListItem .bt_bb_headline .bt_bb_headline_superheadline a{color: {$accentColor};}
.btContent .btArticleListItem .bt_bb_headline .bt_bb_headline_superheadline a.btArticleComments:before{color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a{color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a:before{background-color: {$accentColor};}
.btPortfolioSingle.btPostSingleItemStandard .btArticleContent .btArticleSuperMeta dl dt{
    color: {$accentColor};}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background-color: {$accentColor};}
.articleSideGutter .date{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.articleSideGutter .asgItem.title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.post-password-form p:first-child{color: {$alternateColor};}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.post-password-form p:nth-child(2) input[type=\"submit\"]:hover{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btPagination{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btPagination .paging a:hover{color: {$accentColor};}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.btPrevNextNav .btPrevNext:hover .btPrevNextTitle{color: {$accentColor};}
.btLinkPages{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btArticleCategories a:hover{color: {$accentColor};}
.btArticleAuthor a:hover{color: {$accentColor};}
.btArticleComments:hover{color: {$accentColor};}
.bt-comments-box .vcard .posted{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt-comments-box .commentTxt p.edit-link,
.bt-comments-box .commentTxt p.reply{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt-comments-box .comment-navigation a,
.bt-comments-box .comment-navigation span{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.comment-awaiting-moderation{color: {$accentColor};}
a#cancel-comment-reply-link{
    color: {$accentColor};}
a#cancel-comment-reply-link:hover{color: {$alternateColor};}
.btCommentSubmit{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btCommentSubmit:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor} !important;}
body:not(.btNoDashInSidebar) .btBox > h4:after,
body:not(.btNoDashInSidebar) .btCustomMenu > h4:after,
body:not(.btNoDashInSidebar) .btTopBox > h4:after{
    border-bottom: 3px solid {$accentColor};}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.btBox .btImageTextWidget .btImageTextWidgetImage a img,
.btCustomMenu .btImageTextWidget .btImageTextWidgetImage a img,
.btTopBox .btImageTextWidget .btImageTextWidgetImage a img{
    -webkit-box-shadow: 0 0 0 0 {$accentColor};
    box-shadow: 0 0 0 0 {$accentColor};}
.btBox .btImageTextWidget .btImageTextWidgetImage a:hover img,
.btCustomMenu .btImageTextWidget .btImageTextWidgetImage a:hover img,
.btTopBox .btImageTextWidget .btImageTextWidgetImage a:hover img{-webkit-box-shadow: 0 0 0 2px {$accentColor};
    box-shadow: 0 0 0 2px {$accentColor};}
.btBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btCustomMenu .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btTopBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover{color: {$accentColor};}
.widget_calendar table caption{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.widget_calendar table tbody tr td#today{color: {$accentColor};}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btTopBox.widget_text .textwidget p{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .buttons .button{
    background: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background-color: {$alternateColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background-color: {$alternateColor};
    font: normal 10px/1 \"{$menuFont}\";}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler{
    background-color: {$accentColor};}
.widget_recent_reviews{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_recent_reviews .reviewer{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background-color: {$accentColor};}
.widget_top_rated_products ul.product_list_widget .btImageTextWidgetText p.posted,
.widget_products ul.product_list_widget .btImageTextWidgetText p.posted,
.widget_recently_viewed_products ul.product_list_widget .btImageTextWidgetText p.posted{font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.btBox .tagcloud a,
.btTags ul a{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btBox .tagcloud a:before,
.btTags ul a:before{
    color: {$accentColor};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{color: {$accentColor};}
.btIconWidget .btIconWidgetText{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.topTools .btIconWidget .btIconWidgetIcon,
.topBarInMenu .btIconWidget .btIconWidgetIcon{
    color: {$accentColor};}
.btAccentDarkHeader .topTools .btIconWidget:hover,
.btAccentDarkHeader .topBarInMenu .btIconWidget:hover{color: {$alternateColor};}
.topTools a.btIconWidget:hover,
.topBarInMenu a.btIconWidget:hover{color: {$accentColor};}
.btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
a.btAccentIconWidget.btIconWidget:hover{color: {$accentColor};}
.btSiteFooterWidgets .btSearch button,
.btSidebar .btSearch button,
.btSidebar .widget_product_search button{
    background: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$accentColorDark};}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor};}
div.btButtonWidget .btButtonWidgetLink{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget .btButtonWidgetLink:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget .btButtonWidgetLink .btButtonWidgetIcon{
    background: {$accentColor};}
div.btButtonWidget .btButtonWidgetLink .btButtonWidgetContent span.btButtonWidgetText{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
div.btButtonWidget.btLightAccentButton.btOutlineButton .btButtonWidgetLink{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btLightAccentButton.btOutlineButton .btButtonWidgetLink:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btLightAccentButton.btFilledButton .btButtonWidgetLink{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btLightAccentButton.btFilledButton .btButtonWidgetLink:hover{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton.btOutlineButton .btButtonWidgetLink{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton.btOutlineButton .btButtonWidgetLink:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton.btFilledButton .btButtonWidgetLink{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton.btFilledButton .btButtonWidgetLink:hover{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btStickyHeaderActive.btStickyHeaderOpen .btButtonWidget.btLargeButton .btButtonWidgetLink .btButtonWidgetContent .btButtonWidgetText{line-height: -webkit-calc({$logoHeight}px*0.8);
    line-height: -moz-calc({$logoHeight}px*0.8);
    line-height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btStickyHeaderOpen .btButtonWidget.btLargeButton .btButtonWidgetLink .btButtonWidgetIcon{width: -webkit-calc({$logoHeight}px*0.8);
    width: -moz-calc({$logoHeight}px*0.8);
    width: calc({$logoHeight}px*0.8);
    height: -webkit-calc({$logoHeight}px*0.8);
    height: -moz-calc({$logoHeight}px*0.8);
    height: calc({$logoHeight}px*0.8);}
@media (min-width: 993px){.bt_bb_column.bt_bb_border_color_accent,
.bt_bb_column_inner.bt_bb_border_color_accent{border-color: {$accentColorLight};}
}.bt_bb_separator.bt_bb_color_accent{border-color: {$accentColor};}
.bt_bb_headline .bt_bb_headline_superheadline{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline h1 b,
.bt_bb_headline h2 b,
.bt_bb_headline h3 b,
.bt_bb_headline h4 b,
.bt_bb_headline h5 b,
.bt_bb_headline h6 b{color: {$accentColor};}
.bt_bb_headline h1 strong,
.bt_bb_headline h2 strong,
.bt_bb_headline h3 strong,
.bt_bb_headline h4 strong,
.bt_bb_headline h5 strong,
.bt_bb_headline h6 strong{color: {$accentColor};}
.bt_bb_dash_bottom.bt_bb_dash_top.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_bottom.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_bottom.bt_bb_dash_top_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_bottom.bt_bb_dash_light_alternate.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_bottom.bt_bb_dash_gray.bt_bb_headline .bt_bb_headline_content:before{background: {$accentColor};}
.bt_bb_dash_top_bottom.bt_bb_dash_top.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_dash_top_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_dash_light_alternate.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_dash_gray.bt_bb_headline .bt_bb_headline_content:before{background: {$accentColorLight};}
.bt_bb_dash_light_alternate.bt_bb_dash_top.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_light_alternate.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_light_alternate.bt_bb_dash_top_bottom.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_light_alternate.bt_bb_dash_light_alternate.bt_bb_headline .bt_bb_headline_content:before,
.bt_bb_dash_light_alternate.bt_bb_dash_gray.bt_bb_headline .bt_bb_headline_content:before{background: {$alternateColorLight};}
.bt_bb_button .bt_bb_button_text{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_button.bt_bb_style_clean a:hover{color: {$accentColor};}
.bt_bb_button.bt_bb_style_clean a:hover:before{background: {$accentColor};}
.bt_bb_button.bt_bb_style_clean a:hover:after{background: {$accentColor};}
.bt_bb_button.btWithIcon a .bt_bb_icon{
    background: {$accentColor};}
.bt_bb_style_clean.bt_bb_button.btWithIcon a:hover .bt_bb_icon{color: {$accentColor};}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_service:hover .bt_bb_service_content_title a{color: {$accentColor};}
.slick-dots li{
    background: {$accentColor};}
.bt_bb_dots_shape_line .slick-dots li button{background: {$accentColor};}
.bt_bb_progress_bar .bt_bb_progress_bar_text_above span{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_color_scheme_accent.bt_bb_progress_bar .bt_bb_progress_bar_bg{background-color: {$accentColorLighter};}
.bt_bb_color_scheme_alternate.bt_bb_progress_bar .bt_bb_progress_bar_bg{background-color: {$alternateColorLighter};}
.bt_bb_color_scheme_accent.bt_bb_progress_bar .bt_bb_progress_bar_bg .bt_bb_progress_bar_inner{background-color: {$accentColor};}
.bt_bb_color_scheme_alternate.bt_bb_progress_bar .bt_bb_progress_bar_bg .bt_bb_progress_bar_inner{background-color: {$alternateColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_content_box .bt_bb_latest_posts_item_date{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_content_box .bt_bb_latest_posts_item_date .bt_bb_latest_posts_item_date_day{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_content_box .bt_bb_latest_posts_item_date .bt_bb_latest_posts_item_date_month{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_content_box .bt_bb_latest_posts_item_title a{color: {$alternateColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_content_box .bt_bb_latest_posts_item_title a:hover{color: {$accentColor};}
.bt_bb_custom_menu div ul a:hover{color: {$accentColor};}
.bt_bb_style_simple ul.bt_bb_tabs_header li.on{border-color: {$accentColor};}
ul.bt_bb_tabs_header li span{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_counter_holder .bt_bb_counter_icon{
    color: {$accentColor};}
.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btCounterHolder .btCountdownHolder span[class$=\"_text\"]{
    color: {$accentColor};}
.btCounterHolder .btCountdownHolder span[class$=\"_text\"] > span{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active{
    background: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover{
    background: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta .bt_bb_grid_item_category ul li a{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta .bt_bb_grid_item_category ul li a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta .bt_bb_grid_item_category ul li:not(:last-child) a:after{
    background: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta .bt_bb_grid_item_item_author a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:not(:last-child):after{
    background: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_post_grid_loader{
    border-top: 2px solid {$accentColor};}
.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box .bt_bb_card_icon{
    background: {$accentColor};}
.bt_bb_card .bt_bb_card_content .bt_bb_card_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_card .bt_bb_card_content .bt_bb_card_title a:hover{color: {$accentColor};}
.bt_bb_card .bt_bb_card_content .bt_bb_card_title strong{color: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_post_grid_filter{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active{
    background: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover{
    background: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_icon{
    background: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover{color: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_item_read_more{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_item_read_more a{
    color: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_item_read_more a:before{
    background: {$accentColor};}
.bt_bb_masonry_portfolio_grid .bt_bb_post_grid_loader div{
    background: {$accentColor};}
.bt_bb_link .bt_bb_link_content .bt_bb_link_text{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_link .bt_bb_link_content .bt_bb_link_text:before{
    color: {$accentColor};}
.bt_bb_link .bt_bb_link_content .bt_bb_link_text:after{
    color: {$accentColor};}
.bt_bb_link .bt_bb_link_content:after{
    background: {$accentColor};}
.bt_bb_link:hover .bt_bb_link_content .bt_bb_link_text{color: {$accentColor};}
.bt_bb_link.bt_bb_style_arrow .bt_bb_link_content .bt_bb_link_text{color: {$accentColor};}
.bt_bb_link.bt_bb_style_arrow:hover .bt_bb_link_content .bt_bb_link_text:before{
    color: {$accentColor};}
.bt_bb_link.bt_bb_style_arrow:hover .bt_bb_link_content .bt_bb_link_text:after{
    color: {$accentColor};}
.bt_bb_link.bt_bb_style_arrow:hover .bt_bb_link_content:after{
    background: {$accentColor};}
.wpcf7-form .wpcf7-submit{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.wpcf7-form .wpcf7-submit:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor} !important;}
div.wpcf7-validation-errors,
div.wpcf7-acceptance-missing{border: 1px solid {$accentColor};}
span.wpcf7-not-valid-tip{color: {$accentColor};}
.btForm.btStyleOpacity .btFormButton input:hover{
    color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline a:hover,
ul.products li.product .btWooShopLoopItemInner .bt_bb_headline a:hover{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .price,
ul.products li.product .btWooShopLoopItemInner .price{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;
    color: {$accentColor};}
.products ul li.product .onsale,
ul.products li.product .onsale{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
div.product .onsale{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
div.product div.images .woocommerce-product-gallery__trigger:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    color: {$accentColor};}
table.shop_table .coupon .input-text{
    color: {$accentColor};}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul li a{
    border-bottom: 2px solid {$accentColor};}
.woocommerce-error,
.woocommerce-info,
.woocommerce-message{
    border-color: {$alternateColor};}
.btDarkSkin .woocommerce-error,
.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin .woocommerce-info,
.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin .woocommerce-message,
.btLightSkin .btDarkSkin .woocommerce-message,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-message{border-top: 4px solid {$accentColor};}
.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button){color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before{
    color: {$accentColor};}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.woocommerce .btSidebar a.button:hover,
.woocommerce .btContent a.button:hover,
.woocommerce-page .btSidebar a.button:hover,
.woocommerce-page .btContent a.button:hover,
.woocommerce .btSidebar input[type=\"submit\"]:hover,
.woocommerce .btContent input[type=\"submit\"]:hover,
.woocommerce-page .btSidebar input[type=\"submit\"]:hover,
.woocommerce-page .btContent input[type=\"submit\"]:hover,
.woocommerce .btSidebar button[type=\"submit\"]:hover,
.woocommerce .btContent button[type=\"submit\"]:hover,
.woocommerce-page .btSidebar button[type=\"submit\"]:hover,
.woocommerce-page .btContent button[type=\"submit\"]:hover,
.woocommerce .btSidebar input.button:hover,
.woocommerce .btContent input.button:hover,
.woocommerce-page .btSidebar input.button:hover,
.woocommerce-page .btContent input.button:hover,
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
div.woocommerce a.button:hover,
div.woocommerce input[type=\"submit\"]:hover,
div.woocommerce button[type=\"submit\"]:hover,
div.woocommerce input.button:hover,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.star-rating span:before{
    color: {$accentColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[data-selected]{background-color: {$accentColor};}
.btQuoteBooking .btContactNext{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btQuoteBooking .btQuoteItem label{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);
    box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);}
.btQuoteBooking .ui-slider .ui-slider-handle{background: {$accentColor};}
.btQuoteBooking .btQuoteSliderValue{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal .btQuoteTotalText{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{border: 2px solid {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btQuoteBooking .btContactSubmit{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btQuoteBooking .btContactSubmit:hover{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btContactNext:hover{
    -webkit-box-shadow: 0 0 0 4em {$accentColor} inset;
    box-shadow: 0 0 0 4em {$accentColor} inset;}
.btDatePicker .ui-datepicker-header{background-color: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_item .bt_bb_cost_calculator_item_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount{background-color: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_column.btWithIcon .bt_bb_column_content .bt_bb_column_icon{
    background: {$accentColor};}
.bt_bb_column_inner.btWithIcon .bt_bb_column_inner_content .bt_bb_column_inner_icon{
    background: {$accentColor};}
.wp-block-button__link:hover{color: {$accentColor} !important;}
", array() );