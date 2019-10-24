<?php
/**
 * Custom Feeds for Instagram Item Template
 * Adds an image, link, and other data for each post in the feed
 *
 * @version 2.0 Custom Feeds for Instagram Free by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$classes = SB_Instagram_Display_Elements::get_item_classes( $settings, $offset );
$post_id = SB_Instagram_Parse::get_post_id( $post );
$timestamp = SB_Instagram_Parse::get_timestamp( $post );
$media_type = SB_Instagram_Parse::get_media_type( $post );
$permalink = SB_Instagram_Parse::get_permalink( $post );
$maybe_carousel_icon = $media_type === 'carousel' ? SB_Instagram_Display_Elements::get_icon( 'carousel', $icon_type ) : '';
$maybe_video_icon = $media_type === 'video' ? SB_Instagram_Display_Elements::get_icon( 'video', $icon_type ) : '';
$media_url = SB_Instagram_Display_Elements::get_optimum_media_url( $post, $settings );
$media_full_res = SB_Instagram_Parse::get_media_url( $post );
$sbi_photo_style_element = SB_Instagram_Display_Elements::get_sbi_photo_style_element( $post, $settings ); // has already been escaped
$media_all_sizes_json = SB_Instagram_Parse::get_media_src_set( $post );
$img_alt = SB_Instagram_Parse::get_caption( $post, __( 'Image for post', 'instagram-feed' ) . ' ' . $post_id );

?>
<div class="sbi_item sbi_type_<?php echo esc_attr( $media_type ); ?><?php echo esc_attr( $classes ); ?>" id="sbi_<?php echo esc_html( $post_id ); ?>" data-date="<?php echo esc_html( $timestamp ); ?>">
    <div class="sbi_photo_wrap">
        <a class="sbi_photo" href="<?php echo esc_url( $permalink ); ?>" target="_blank" rel="noopener" data-full-res="<?php echo esc_url( $media_full_res ); ?>" data-img-src-set="<?php echo esc_attr( wp_json_encode( $media_all_sizes_json ) ); ?>"<?php echo $sbi_photo_style_element; ?>>
            <span class="sbi-screenreader"><?php echo sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ); ?></span>
            <?php echo $maybe_carousel_icon; ?>
	        <?php echo $maybe_video_icon; ?>
            <img src="<?php echo esc_url( $media_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" width="200" height="200">
        </a>
    </div>
</div>