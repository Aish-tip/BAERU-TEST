<?php

$custom_css = "

	/* Section
	-------------------- */
	
	.bt_bb_section.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}


	/* Column
	-------------------- */
	
	.bt_bb_column.bt_bb_color_scheme_{$scheme_id},
	.bt_bb_column_inner.bt_bb_color_scheme_{$scheme_id} {
		color: inherit !important;
		background-color: inherit !important;
	}
	.bt_bb_column.bt_bb_color_scheme_{$scheme_id} .bt_bb_column_content,
	.bt_bb_column_inner.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]} !important;
		background-color: {$color_scheme[2]} !important;
	}

	.bt_bb_column.bt_bb_inner_color_scheme_{$scheme_id} .bt_bb_column_content .bt_bb_column_content_inner,
	.bt_bb_column_inner.bt_bb_inner_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}

	.bt_bb_column.btWithIcon.bt_bb_icon_color_scheme_{$scheme_id} .bt_bb_column_content .bt_bb_column_icon,
	.bt_bb_column_inner.btWithIcon.bt_bb_icon_color_scheme_{$scheme_id} .bt_bb_column_inner_icon {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}


	/* Headline
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_superheadline {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_subheadline {
		color: {$color_scheme[1]};
	}


	/* Icons
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon .bt_bb_icon_holder span {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon:hover a {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
		background-color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[1]} inset;
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled a.bt_bb_icon_holder:before {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		color: {$color_scheme[2]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
		color: {$color_scheme[2]};
	}
	

	/* Buttons
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a:hover {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a:hover {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		color: {$color_scheme[2]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:after {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover:after {
		background-color: {$color_scheme[2]};
	}

	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean.btWithIcon a .bt_bb_icon {
		color: {$color_scheme[1]};
	}
	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean.btWithIcon a:hover .bt_bb_icon {
		color: {$color_scheme[2]};
	}
	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline.btWithIcon a .bt_bb_icon {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline.btWithIcon a .bt_bb_link {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline.btWithIcon a:hover .bt_bb_link {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}
	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled.btWithIcon a .bt_bb_icon {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled.btWithIcon a .bt_bb_link {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled.btWithIcon a:hover .bt_bb_link {
		color: {$color_scheme[2]};
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}


	/* Services
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 3em {$color_scheme[1]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: transparent;
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}

	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title {
		color: {$color_scheme[1]};
	}

	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_service .bt_bb_service_content .bt_bb_service_content_arrow {
		color: {$color_scheme[2]};
	}
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_service:hover .bt_bb_service_content .bt_bb_service_content_arrow {
		color: {$color_scheme[1]};
	}
	

	/* Tabs
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header {
		border-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li.on {
		border-color: {$color_scheme[1]};
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li.on,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li {
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
		border-color: {$color_scheme[1]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_tabs_header li {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_tabs_header li.on {
		color: {$color_scheme[1]};
		border-color: {$color_scheme[1]};
	}


	/* Accordion
	-------------------- */

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion_item .bt_bb_accordion_item_title:after {
		background-color: {$color_scheme[2]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item {
		border-color: {$color_scheme[2]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
		color: {$color_scheme[2]};
	}


	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
		color: {$color_scheme[2]};
	}


	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:after {
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
		color: {$color_scheme[2]};
	}


	/* Price List
	-------------------- */
	
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}

	/* Progress bar
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar.bt_bb_style_filled .bt_bb_progress_bar_content:after {
		box-shadow: 0 0 0 5px {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar.bt_bb_style_filled .bt_bb_progress_bar_bg {
		background-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar.bt_bb_style_filled .bt_bb_progress_bar_bg .bt_bb_progress_bar_inner {
		background-color: {$color_scheme[1]};
	}


	/* Card
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_text_box {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box .bt_bb_card_icon {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box .bt_bb_card_title,
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_text_box .bt_bb_card_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box .bt_bb_card_title:hover,
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_icon_box .bt_bb_card_title:hover a:hover,
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_text_box .bt_bb_card_title:hover,
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_text_box .bt_bb_card_title:hover a:hover {
		color: {$color_scheme[2]};
	}


	/* Slider
	-------------------- */

	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li {
		background: {$color_scheme[1]};
	}
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li.slick-active,
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li:hover {
		background: {$color_scheme[2]};
	}


	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_dots_shape_line.bt_bb_content_slider .slick-dots li button {
		background: {$color_scheme[1]};
	}
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_dots_shape_line.bt_bb_content_slider .slick-dots li.slick-active button,
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_dots_shape_line.bt_bb_content_slider .slick-dots li:hover button {
		background: {$color_scheme[2]};
	}


	/* Masonry Post Grid
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner  {
		background: {$color_scheme[2]};
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_box .bt_bb_grid_item_category {
		background: {$color_scheme[2]};
		color: {$color_scheme[1]};
	}


	/* Link
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link .bt_bb_link_content .bt_bb_link_text {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link:hover .bt_bb_link_content .bt_bb_link_text,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link .bt_bb_link_content .bt_bb_link_text:before {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link .bt_bb_link_content:after {
		background-color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link .bt_bb_link_content .bt_bb_link_text:after {
		color: {$color_scheme[2]};
	}



	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow .bt_bb_link_content .bt_bb_link_text {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow:hover .bt_bb_link_content .bt_bb_link_text {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow .bt_bb_link_content .bt_bb_link_text:before {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow:hover .bt_bb_link_content .bt_bb_link_text:before {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow .bt_bb_link_content:after {
		background-color: {$color_scheme[1]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_link.bt_bb_style_arrow .bt_bb_link_content .bt_bb_link_text:after {
		color: {$color_scheme[1]};
	}
	

";