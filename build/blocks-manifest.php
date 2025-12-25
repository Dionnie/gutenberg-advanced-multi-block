<?php
// This file is generated. Do not modify it manually.
return array(
	'banner' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/banner',
		'version' => '0.1.0',
		'title' => 'Banner',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'text' => true
			),
			'background' => array(
				'backgroundImage' => true,
				'backgroundSize' => true
			)
		),
		'attributes' => array(
			'title' => array(
				'type' => 'string'
			),
			'subtitle' => array(
				'type' => 'string'
			),
			'variant' => array(
				'type' => 'string',
				'default' => 'light'
			)
		)
	),
	'simple-cta' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/simple-cta',
		'version' => '0.1.0',
		'title' => 'Simple Cta',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'supports' => array(
			'html' => false,
			'background' => array(
				'backgroundImage' => true,
				'backgroundSize' => true
			),
			'color' => array(
				'text' => true,
				'link' => true,
				'background' => true
			)
		),
		'attributes' => array(
			'title' => array(
				'type' => 'string'
			),
			'subtitle' => array(
				'type' => 'string'
			),
			'variant' => array(
				'type' => 'string',
				'default' => 'light'
			)
		)
	),
	'slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/slider',
		'version' => '0.1.0',
		'title' => 'Slider',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	),
	'toggle' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/toggle',
		'version' => '0.1.0',
		'title' => 'Toggle',
		'category' => 'widgets',
		'icon' => 'media-interactive',
		'description' => 'An interactive block with the Interactivity API.',
		'example' => array(
			
		),
		'supports' => array(
			'interactivity' => true
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	)
);
