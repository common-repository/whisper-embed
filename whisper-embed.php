<?php
/*
Plugin Name: Whisper Embed
Plugin URI: https://developer.whisper.sh/
Description: Adds oEmbed support for Whisper in posts. Just copy a Whisper's url from http://whisper.sh into your post and the Whisper embed will be created.
Version: 1.0.0
Author: Lucas Mullens
Author URI: http://lucasmullens.com
License: GPL2
*/

wp_oembed_add_provider('http://whisper.sh/whisper/*','http://prod-embed.whisper.sh/embed/oembed?wordpress=true',false);
wp_oembed_add_provider('http://whisper.sh/w/*','http://prod-embed.whisper.sh/embed/oembed?wordpress=true',false);
?>