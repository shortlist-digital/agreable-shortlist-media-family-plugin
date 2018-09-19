<?php

add_action('acf/init', function() {

	$key = 'article_header';

	function acf_add_video_choice( $options ) {
		$post_type = get_post_type();
		if ($post_type == "page") {
			$options['choices']['hero-with-video'] = "Hero with video";
		}
		return $options;
	}

	add_filter('acf/load_field/key=' . $key . '_type', 'acf_add_video_choice');

	$fields = [
		[
			'key' => $key . '_video_details_tab',
			'label' => 'Video Details',
			'type' => 'tab',
			'conditional_logic' => [[[
				'field' => $key . '_type',
				'operator' => '==',
				'value' => 'hero-with-video',
			]]],
			'placement' => 'left'
		],
		[
			'key' => $key . '_video_url',
			'label' => 'Video URL',
			'name' => 'header_video_url',
			'type' => 'url',
			'instructions' => 'The absolute URL to the MP4 video file (http://site.com/video.mp4)',
			'required' => 1,
		],
		[
			'key' => $key . '_video_thumbnail',
			'label' => 'Video Thumbnail',
			'name' => 'header_video_thumbnail',
			'type' => 'image',
			'instructions' => 'This image will be shown on mobile users and before the video plays to everyone else',
			'required' => 1,
		]
	];

	foreach ($fields as $field) {
		$field['parent'] = $key . '_group';
		acf_add_local_field($field);
	}

}, 0);
