<?php
$timeline_styles = bold_timeline_lite_styles( Bold_Timeline::$timeline_style );

$line_position                  =  isset($timeline_styles["line_position"]) && $line_position == 'inherit_from_style' ? $timeline_styles["line_position"] : $line_position;
$line_style                     =  isset($timeline_styles["line_style"]) && $line_style == 'inherit_from_style' ? $timeline_styles["line_style"] : $line_style;
$line_thickness                 =  isset($timeline_styles["line_thickness"]) && $line_thickness == 'inherit_from_style' ? $timeline_styles["line_thickness"] : $line_thickness;

$item_style                     = isset($timeline_styles["item_style"]) && $item_style == 'inherit_from_style' ? $timeline_styles["item_style"] : $item_style;
$item_shape                     = isset($timeline_styles["item_shape"]) && $item_shape == 'inherit_from_style' ? $timeline_styles["item_shape"] : $item_shape;
$item_frame_thickness           = isset($timeline_styles["item_frame_thickness"]) && $item_frame_thickness == 'inherit_from_style' ? $timeline_styles["item_frame_thickness"] : $item_frame_thickness;
$item_connection_type           = isset($timeline_styles["item_connection_type"]) && $item_connection_type == 'inherit_from_style' ? $timeline_styles["item_connection_type"] : $item_connection_type;
$item_content_display           = isset($timeline_styles["item_content_display"]) && $item_content_display == 'inherit_from_style' ? $timeline_styles["item_content_display"] : $item_content_display;

$item_marker_type               = isset($timeline_styles["item_marker_type"]) && $item_marker_type == 'inherit_from_style' ? $timeline_styles["item_marker_type"] : $item_marker_type;
$item_title_size                = isset($timeline_styles["item_title_size"]) && $item_title_size == 'inherit_from_style' ? $timeline_styles["item_title_size"] : $item_title_size;
$item_supertitle_style          = isset($timeline_styles["item_supertitle_style"]) && $item_supertitle_style == 'inherit_from_style' ? $timeline_styles["item_supertitle_style"] : $item_supertitle_style;
$item_alignment                 = isset($timeline_styles["item_alignment"]) && $item_alignment == 'inherit_from_style' ? $timeline_styles["item_alignment"] : $item_alignment;
$item_font_subset               = isset($timeline_styles["item_font_subset"]) && $item_font_subset == '' ? $timeline_styles["item_font_subset"] : $item_font_subset;
$item_media_position			= isset($timeline_styles["item_media_position"]) && $item_media_position == 'inherit_from_style' ? $timeline_styles["item_media_position"] : $item_media_position;
$item_images_columns			= isset($timeline_styles["item_images_columns"]) && $item_images_columns == 'inherit_from_style' ? $timeline_styles["item_images_columns"] : $item_images_columns;
$item_animation					= isset($timeline_styles["item_animation"]) && $item_animation == 'inherit_from_style' ? $timeline_styles["item_animation"] : $item_animation;

$item_icon_position		= isset($timeline_styles["item_icon_position"]) && $item_icon_position == 'inherit_from_style' ? $timeline_styles["item_icon_position"] : $item_icon_position;
$item_icon_shape		= isset($timeline_styles["item_icon_shape"]) && $item_icon_shape == 'inherit_from_style' ? $timeline_styles["item_icon_shape"] : $item_icon_shape;
$item_icon_style		= isset($timeline_styles["item_icon_style"]) && $item_icon_style == 'inherit_from_style' ? $timeline_styles["item_icon_style"] : $item_icon_style;

$group_frame_thickness	= isset($timeline_styles["group_frame_thickness"]) && $group_frame_thickness == 'inherit_from_style' ? $timeline_styles["group_frame_thickness"] : $group_frame_thickness;
$group_style			= isset($timeline_styles["group_style"]) && $group_style == 'inherit_from_style' ? $timeline_styles["group_style"] : $group_style;
$group_shape			= isset($timeline_styles["group_shape"]) && $group_shape == 'inherit_from_style' ? $timeline_styles["group_shape"] : $group_shape;
$group_title_size		= isset($timeline_styles["group_title_size"]) && $group_title_size == 'inherit_from_style' ? $timeline_styles["group_title_size"] : $group_title_size;
$group_font_subset		= isset($timeline_styles["group_font_subset"]) && $group_font_subset == '' ? $timeline_styles["group_font_subset"] : $group_font_subset;
$group_content_display	= isset($timeline_styles["group_content_display"]) && $group_content_display == 'inherit_from_style' ? $timeline_styles["group_content_display"] : $group_content_display;

$button_style			= isset($timeline_styles["button_style"]) && $button_style == 'inherit_from_style' ? $timeline_styles["button_style"] : $button_style;
$button_shape			= isset($timeline_styles["button_shape"]) && $button_shape == 'inherit_from_style' ? $timeline_styles["button_shape"] : $button_shape;
$button_size			= isset($timeline_styles["button_size"]) && $button_size == 'inherit_from_style' ? $timeline_styles["button_size"] : $button_size;
$button_color			= isset($timeline_styles["button_color"]) && $button_color == '' ? $timeline_styles["button_color"] : $button_color;

$slider_animation			= isset($timeline_styles["slider_animation"]) && $slider_animation == 'inherit_from_style' ? $timeline_styles["slider_animation"] : $slider_animation;
$slider_gap					= isset($timeline_styles["slider_gap"]) && $slider_gap == 'inherit_from_style' ? $timeline_styles["slider_gap"] : $slider_gap;
$slider_dots_style			= isset($timeline_styles["slider_dots_style"]) && $slider_dots_style == 'inherit_from_style' ? $timeline_styles["slider_dots_style"] : $slider_dots_style;
$slider_arrows_style		= isset($timeline_styles["slider_arrows_style"]) && $slider_arrows_style == 'inherit_from_style' ? $timeline_styles["slider_arrows_style"] : $slider_arrows_style;
$slider_arrows_shape		= isset($timeline_styles["slider_arrows_shape"]) && $slider_arrows_shape == 'inherit_from_style' ? $timeline_styles["slider_arrows_shape"] : $slider_arrows_shape;
$slider_arrows_size			= isset($timeline_styles["slider_arrows_size"]) && $slider_arrows_size == 'inherit_from_style' ? $timeline_styles["slider_arrows_size"] : $slider_arrows_size;
$slider_navigation_color	= isset($timeline_styles["slider_navigation_color"]) && $slider_navigation_color == '' ? $timeline_styles["slider_navigation_color"] : $slider_navigation_color;
$slider_slides_to_show		= isset($timeline_styles["slider_slides_to_show"]) && $slider_slides_to_show == '' ? $timeline_styles["slider_slides_to_show"] : $slider_slides_to_show;
$slider_auto_play			= isset($timeline_styles["slider_auto_play"]) && $slider_auto_play == '' ? $timeline_styles["slider_auto_play"] : $slider_auto_play;
