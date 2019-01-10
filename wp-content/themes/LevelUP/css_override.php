<?php
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Raleway";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Raleway";
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#3ea2e0";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -54" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#e6361e";
}
$css_override = "input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus,textarea:not([type='checkbox']):not([type='radio']):focus{-webkit-box-shadow:0 0 4px 0 {$accentColor};box-shadow:0 0 4px 0 {$accentColor};}
a{color:{$accentColor};}
select,input{font-family:{$bodyFont};}
body{font-family:\"{$bodyFont}\",Arial,sans-serif;}
h1,h2,h3,h4,h5,h6{font-family:\"{$headingFont}\";}
.btContentHolder table thead th{background-color:{$accentColor};}
.btHighlight>.rowItemContent{border:3px solid {$accentColor};}
.btAccentColorBackground{background-color:{$accentColor}!important;}
.btLightSkin .btText a,.btDarkSkin .btLightSkin .btText a,.btDarkSkin .btText a,.btLightSkin .btDarkSkin .btText a{color:{$accentColor};}
.menuPort{font-family:\"{$menuFont}\";}
.menuPort nav ul li a:hover{color:{$accentColor}!important;}
.btMenuHorizontal .menuPort nav>ul>li.current-menu-ancestor>a,.btMenuHorizontal .menuPort nav>ul>li.current-menu-item>a{border-bottom:2px solid {$accentColor};}
.btMenuHorizontal .menuPort nav>ul>li>ul li.current-menu-ancestor>a,.btMenuHorizontal .menuPort nav>ul>li>ul li.current-menu-item>a{color:{$accentColor}!important;}
.subToggler:before{color:{$accentColor};}
body.btMenuHorizontal .menuPort ul ul:before{background-color:{$accentColor};}
html:not(.touch) body.btMenuRight.btMenuHorizontal .menuPort>nav>ul>li.btMenuWideDropdown>ul>li>a,html:not(.touch) body.btMenuLeft.btMenuHorizontal .menuPort>nav>ul>li.btMenuWideDropdown>ul>li>a{border-bottom:1px solid {$accentColor};}
.btMenuHorizontal .topBar .topBarPort:after{background:{$accentColor};}
.btMenuHorizontal.btMenuBelowLogo .btBelowLogoArea{border-top:2px solid {$accentColor};}
body.btMenuVertical>.menuPort .btCloseVertical:before{color:{$accentColor};}
body.btMenuVertical>.menuPort nav li.current-menu-ancestor>a,body.btMenuVertical>.menuPort nav li.current-menu-item>a{color:{$accentColor}!important;}
@media (min-width:1400px){.btMenuVerticalOn .btVerticalMenuTrigger .btIco a:before{color:{$accentColor}!important;}
}a.btIconWidget:hover{color:{$accentColor}!important;}
.btSpecialHeaderIcon .btIco .btIcoHolder:before,.btSpecialHeaderIcon .btIconWidgetTitle,.btSpecialHeaderIcon .btIconWidgetText{color:{$accentColor}!important;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border:0 solid {$accentColor};}
.topBar .widget_search button,.topBarInMenu .widget_search button{background:{$accentColor};}
.topBar .widget_search button:before,.topBarInMenu .widget_search button:before{color:{$accentColor};}
.topBar .widget_search button:hover,.topBarInMenu .widget_search button:hover{background:{$accentColorDark};}
.btSearchInner.btFromTopBox{background:{$accentColorDark};}
.btSearchInner.btFromTopBox button:before{color:{$accentColor};}
.btDarkSkin .btSiteFooterWidgets,.btLightSkin .btDarkSkin .btSiteFooterWidgets{background:{$accentColorDark};}
.btDarkSkin .btSiteFooter,.btLightSkin .btDarkSkin .btSiteFooter{background:{$accentColor};}
.sticky .headline:before{color:{$accentColor};}
.headline a{color:{$accentColor};}
.btPortfolioSingleItemColumns dt{color:{$accentColor};}
.btMediaBox.btQuote,.btMediaBox.btLink{background-color:{$accentColor};}
.btArticleListItem.btBlogColumnView .btArticleListBodyAuthor a,.btPostSingleItemColumns .btArticleListBodyAuthor a{color:{$accentColor}!important;}
.commentTxt p.edit-link a:hover,.commentTxt p.reply a:hover{color:{$accentColor};}
body:not(.btNoDashInSidebar) .btBox>h4:after,body:not(.btNoDashInSidebar) .btCustomMenu>h4:after{border-bottom:3px solid {$accentColor};}
.btBox .ppTxt .headline a:hover,.btCustomMenu .ppTxt .headline a:hover{color:{$accentColor};}
.btBox.widget_calendar table caption{background:{$accentColor};font-family:\"{$headingFont}\";}
.btDarkSkin .btBox.widget_archive ul li:hover,.btLightSkin .btDarkSkin .btBox.widget_archive ul li:hover,.btDarkSkin .btBox.widget_categories ul li:hover,.btLightSkin .btDarkSkin .btBox.widget_categories ul li:hover{border-bottom:1px solid {$accentColor};}
.btBox.widget_rss li a.rsswidget{font-family:\"{$headingFont}\";}
.btBox.widget_rss li cite:before{color:{$accentColor};}
.btBox .btSearch button,.btBox .btSearch input[type=submit],form.woocommerce-product-search button,form.woocommerce-product-search input[type=submit]{background:{$accentColor};}
form.wpcf7-form .wpcf7-submit{background-color:{$accentColor};}
.fancy-select .trigger.open{color:{$accentColor};}
.fancy-select ul.options>li:hover{color:{$accentColor};}
.widget_shopping_cart .total{border-top:2px solid {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover:before{background-color:{$accentColor};}
.widget_price_filter .ui-slider .ui-slider-handle{background-color:{$accentColor};}
.widget_layered_nav ul li.chosen a:hover:before,.widget_layered_nav ul li a:hover:before,.widget_layered_nav_filters ul li.chosen a:hover:before,.widget_layered_nav_filters ul li a:hover:before{background-color:{$accentColor};}
.btBox .tagcloud a,.btTags ul a{background:{$accentColor};}
.header .btSubTitle .btArticleCategories a:not(:first-child):before,.header .btSuperTitle .btArticleCategories a:not(:first-child):before{background-color:{$accentColor};}
.post-password-form input[type=\"submit\"]{background:{$accentColor};font-family:\"{$headingFont}\";}
.btPagination{font-family:\"{$headingFont}\";}
.btPagination .paging a:after{background-color:{$accentColor};border:2px solid {$accentColor};}
.btPagination .paging a:hover:after{color:{$accentColor};}
.comment-respond .btnOutline button[type=\"submit\"]{font-family:\"{$headingFont}\";}
a#cancel-comment-reply-link:hover{color:{$accentColor};}
span.btHighlight{background-color:{$accentColor};}
a.btContinueReading{color:{$accentColor};}
.btShareArticle:before{background-color:{$accentColor};}
.asgItem.title a{color:{$accentColor};}
.btIco .btIcoHolder:before{color:{$accentColor};}
.btIco.btIcoFilledType.btIcoAccentColor .btIcoHolder:before,.btIco.btIcoOutlineType.btIcoAccentColor:hover .btIcoHolder:before{-webkit-box-shadow:0 0 0 1em {$accentColor} inset;box-shadow:0 0 0 1em {$accentColor} inset;}
.btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder:before,.btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder:before{-webkit-box-shadow:0 0 0 2px {$accentColor} inset;box-shadow:0 0 0 2px {$accentColor} inset;color:{$accentColor};}
.btIco.btIcoFilledType.btIcoAlternateColor .btIcoHolder:before,.btIco.btIcoOutlineType.btIcoAlternateColor:hover .btIcoHolder:before{-webkit-box-shadow:0 0 0 1em {$alternateColor} inset;box-shadow:0 0 0 1em {$alternateColor} inset;}
.btIco.btIcoFilledType.btIcoAlternateColor:hover .btIcoHolder:before,.btIco.btIcoOutlineType.btIcoAlternateColor .btIcoHolder:before{-webkit-box-shadow:0 0 0 2px {$alternateColor} inset;box-shadow:0 0 0 2px {$alternateColor} inset;color:{$accentColor};}
.btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,.btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,.btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,.btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color:{$accentColor};}
.btIcoAccentColor span{color:{$accentColor};}
.btIcoDefaultColor:hover span{color:{$accentColor};}
.btnFilledStyle.btnAccentColor,.btnOutlineStyle.btnAccentColor:hover{background-color:{$accentColor};border:2px solid {$accentColor};}
.btnOutlineStyle.btnAccentColor,.btnFilledStyle.btnAccentColor:hover{border:2px solid {$accentColor};color:{$accentColor};}
.btnOutlineStyle.btnAccentColor span,.btnFilledStyle.btnAccentColor:hover span,.btnOutlineStyle.btnAccentColor span:before,.btnFilledStyle.btnAccentColor:hover span:before,.btnOutlineStyle.btnAccentColor a,.btnFilledStyle.btnAccentColor:hover a,.btnOutlineStyle.btnAccentColor .btIco a:before,.btnFilledStyle.btnAccentColor:hover .btIco a:before,.btnOutlineStyle.btnAccentColor button,.btnFilledStyle.btnAccentColor:hover button{color:{$accentColor}!important;}
.btnBorderlessStyle.btnAccentColor span,.btnBorderlessStyle.btnNormalColor:hover span,.btnBorderlessStyle.btnAccentColor span:before,.btnBorderlessStyle.btnNormalColor:hover span:before,.btnBorderlessStyle.btnAccentColor a,.btnBorderlessStyle.btnNormalColor:hover a,.btnBorderlessStyle.btnAccentColor .btIco a:before,.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,.btnBorderlessStyle.btnAccentColor button,.btnBorderlessStyle.btnNormalColor:hover button{color:{$accentColor};}
.btnFilledStyle.btnAlternateColor,.btnOutlineStyle.btnAlternateColor:hover{background-color:{$alternateColor};border:2px solid {$alternateColor};}
.btnOutlineStyle.btnAlternateColor,.btnFilledStyle.btnAlternateColor:hover{border:2px solid {$alternateColor};color:{$alternateColor};}
.btnOutlineStyle.btnAlternateColor span,.btnFilledStyle.btnAlternateColor:hover span,.btnOutlineStyle.btnAlternateColor span:before,.btnFilledStyle.btnAlternateColor:hover span:before,.btnOutlineStyle.btnAlternateColor a,.btnFilledStyle.btnAlternateColor:hover a,.btnOutlineStyle.btnAlternateColor .btIco a:before,.btnFilledStyle.btnAlternateColor:hover .btIco a:before,.btnOutlineStyle.btnAlternateColor button,.btnFilledStyle.btnAlternateColor:hover button{color:{$alternateColor}!important;}
.btnBorderlessStyle.btnAlternateColor span,.btnBorderlessStyle.btnAlternateColor span:before,.btnBorderlessStyle.btnAlternateColor a,.btnBorderlessStyle.btnAlternateColor .btIco a:before,.btnBorderlessStyle.btnAlternateColor button{color:{$alternateColor};}
.btCounterHolder{font-family:\"{$headingFont}\";}
.btCounterHolder .btCountdownHolder .days_text,.btCounterHolder .btCountdownHolder .hours_text,.btCounterHolder .btCountdownHolder .minutes_text,.btCounterHolder .btCountdownHolder .seconds_text{color:{$accentColor};}
.btProgressContent .btProgressAnim{background-color:{$accentColor};}
.btProgressBarLineStyle .btProgressContent .btProgressAnim{color:{$accentColor};border-bottom:4px solid {$accentColor};}
.bpgPhoto .captionPane{background-color:{$accentColor}!important;}
.btPriceTable .btPriceTableHeader{background:{$accentColor};}
.btPriceTableSticker{font-family:\"{$headingFont}\";}
.header .btSuperTitle{font-family:\"{$headingSuperTitleFont}\";color:{$accentColor};}
.header .btSubTitle{font-family:\"{$headingSubTitleFont}\";}
.btDash.bottomDash .dash:after,.btDash.topDash .dash:before{border-bottom:3px solid {$accentColor};}
.header.large .dash:after,.header.large .dash:before{border-color:{$accentColor};}
.header.large .btSubTitle a:hover{color:{$accentColor};}
.header.huge .dash:after,.header.huge .dash:before{border-color:{$accentColor};}
.btGridContent .header .btSuperTitle a:hover{color:{$accentColor};}
.btCatFilter .btCatFilterItem:hover{color:{$accentColor};}
.btCatFilter .btCatFilterItem.active{color:{$accentColor};}
h4.nbs a .nbsImage .nbsImgHolder{border:3px solid {$accentColor};}
h4.nbs a .nbsItem .nbsDir{color:{$accentColor};font-family:\"{$headingSuperTitleFont}\";}
h4.nbs a:before,h4.nbs a:after{background-color:{$accentColor};-webkit-box-shadow:inset 0 0 0 2px {$accentColor};box-shadow:inset 0 0 0 2px {$accentColor};}
h4.nbs.nsPrev a:hover:before,h4.nbs.nsNext a:hover:after{color:{$accentColor};}
.btInfoBar .btInfoBarMeta p strong{color:{$accentColor};}
.recentTweets small:before{color:{$accentColor};}
.tabsHeader li{font-family:\"{$headingFont}\";}
.tabsHeader li:hover a,.tabsHeader li.on a{color:{$accentColor};}
.tabsVertical .tabAccordionTitle{font-family:\"{$headingFont}\";}
.tabsVertical .tabAccordionTitle.on{background:{$accentColor};}
.btAnimNav li.btAnimNavDot{color:{$accentColor};font-family:{$headingFont};}
.btAnimNav li.btAnimNavNext,.btAnimNav li.btAnimNavPrev{background-color:{$accentColor};}
.btAnimNav li.btAnimNavNext:hover,.btAnimNav li.btAnimNavPrev:hover{color:{$accentColor};}
.headline b.animate.animated{color:{$accentColor};}
p.demo_store{background-color:{$accentColor};}
.woocommerce .woocommerce-error,.woocommerce .woocommerce-info,.woocommerce .woocommerce-message,.woocommerce-page .woocommerce-error,.woocommerce-page .woocommerce-info,.woocommerce-page .woocommerce-message{border-top:2px solid {$accentColor};}
.woocommerce .woocommerce-info a: not(.button),.woocommerce .woocommerce-message a: not(.button),.woocommerce-page .woocommerce-info a: not(.button),.woocommerce-page .woocommerce-message a: not(.button){color:{$accentColor};}
.woocommerce .woocommerce-info,.woocommerce .woocommerce-message,.woocommerce-page .woocommerce-info,.woocommerce-page .woocommerce-message{border-top-color:{$accentColor};}
.woocommerce .woocommerce-message:before,.woocommerce .woocommerce-info:before,.woocommerce-page .woocommerce-message:before,.woocommerce-page .woocommerce-info:before{color:{$accentColor};}
.woocommerce a.button,.woocommerce input[type=\"submit\"],.woocommerce button[type=\"submit\"],.woocommerce input.button,.woocommerce input.alt:hover,.woocommerce a.button.alt:hover,.woocommerce .button.alt:hover,.woocommerce button.alt:hover,.woocommerce-page a.button,.woocommerce-page input[type=\"submit\"],.woocommerce-page button[type=\"submit\"],.woocommerce-page input.button,.woocommerce-page input.alt:hover,.woocommerce-page a.button.alt:hover,.woocommerce-page .button.alt:hover,.woocommerce-page button.alt:hover{border:2px solid {$accentColor};color:{$accentColor};}
.woocommerce a.button:hover,.woocommerce input[type=\"submit\"]:hover,.woocommerce .button:hover,.woocommerce button:hover,.woocommerce input.alt,.woocommerce a.button.alt,.woocommerce .button.alt,.woocommerce button.alt,.woocommerce-page a.button:hover,.woocommerce-page input[type=\"submit\"]:hover,.woocommerce-page .button:hover,.woocommerce-page button:hover,.woocommerce-page input.alt,.woocommerce-page a.button.alt,.woocommerce-page .button.alt,.woocommerce-page button.alt{background-color:{$accentColor};}
.woocommerce p.lost_password:before,.woocommerce-page p.lost_password:before{color:{$accentColor};}
.woocommerce form.login p.lost_password a:hover,.woocommerce-page form.login p.lost_password a:hover{color:{$accentColor};}
.woocommerce div.product .stock,.woocommerce-page div.product .stock{color:{$accentColor};}
.woocommerce div.product a.reset_variations:hover,.woocommerce-page div.product a.reset_variations:hover{color:{$accentColor};}
.woocommerce .products ul li.product .btPriceTableSticker,.woocommerce ul.products li.product .btPriceTableSticker,.woocommerce-page .products ul li.product .btPriceTableSticker,.woocommerce-page ul.products li.product .btPriceTableSticker{background:{$accentColor};}
.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover,.woocommerce nav.woocommerce-pagination ul li a.next,.woocommerce nav.woocommerce-pagination ul li a.prev,.woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce-page nav.woocommerce-pagination ul li a:focus,.woocommerce-page nav.woocommerce-pagination ul li a:hover,.woocommerce-page nav.woocommerce-pagination ul li a.next,.woocommerce-page nav.woocommerce-pagination ul li a.prev,.woocommerce-page nav.woocommerce-pagination ul li span.current{background:{$accentColor};}
.woocommerce .star-rating span:before,.woocommerce-page .star-rating span:before{color:{$accentColor};}
.woocommerce p.stars a[class^=\"star-\"].active:after,.woocommerce p.stars a[class^=\"star-\"]:hover:after,.woocommerce-page p.stars a[class^=\"star-\"].active:after,.woocommerce-page p.stars a[class^=\"star-\"]:hover:after{color:{$accentColor};}
.woocommerce-cart table.cart td.product-remove a.remove{color:{$accentColor};border:1px solid {$accentColor};}
.woocommerce-cart table.cart td.product-remove a.remove:hover{background-color:{$accentColor};}
.woocommerce-cart .cart_totals .discount td{color:{$accentColor};}
.woocommerce-account header.title .edit{color:{$accentColor};}
.woocommerce-account header.title .edit:before{color:{$accentColor};}
.btLightSkin.woocommerce-page .product .headline a:hover,.btDarkSkin .btLightSkin.woocommerce-page .product .headline a:hover,.btDarkSkin.woocommerce-page .product .headline a:hover,.btLightSkin .btDarkSkin.woocommerce-page .product .headline a:hover{color:{$accentColor};}
.btQuoteBooking .btContactNext{border:{$accentColor} 2px solid;color:{$accentColor};}
.btQuoteBooking .btContactNext:hover,.btQuoteBooking .btContactNext:active{background-color:{$accentColor}!important;}
.btQuoteBooking .btQuoteSwitch:hover{-webkit-box-shadow:0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background:{$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow:5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);box-shadow:5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);}
.btQuoteBooking .ui-slider .ui-slider-handle{background:{$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{background:{$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{border:1px solid {$accentColor};-webkit-box-shadow:0 0 0 1px {$accentColor} inset;box-shadow:0 0 0 1px {$accentColor} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{border:1px solid {$accentColor};-webkit-box-shadow:0 0 0 1px {$accentColor} inset;box-shadow:0 0 0 1px {$accentColor} inset;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:hover,.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:hover{-webkit-box-shadow:0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText{-webkit-box-shadow:0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 1px {$accentColor} inset,0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input:focus,.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:focus{-webkit-box-shadow:0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText{-webkit-box-shadow:0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 1px {$accentColor} inset,5px 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.btQuoteBooking .btSubmitMessage{color:{$accentColor};}
.btDatePicker .ui-datepicker-header{background-color:{$accentColor};}
.btQuoteBooking .btContactSubmit{background-color:{$accentColor};border:2px solid {$accentColor};}
.btQuoteBooking .btContactSubmit:hover{color:{$accentColor};}
.btPayPalButton:hover{-webkit-box-shadow:0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);box-shadow:0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
";