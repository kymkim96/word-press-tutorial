<?php
/**
 * page.php - 정적 페이지글 화면을 담당하는 파일입니다.
 *
 * @package theme-itssue
 */
get_header();
the_post();
$page_id = get_query_var('page_id');
?>

<div class="page-wrapper">
    <div class="page-inner">
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </div><!--.page-inner-->
    <div class="page-content">
        <?php if ( $page_id == 107 ) : ?>
            <?php get_template_part( 'tmpl-page' ); ?>
        <?php else : ?>
            <?php
            the_content();
            ?>
        <?php endif; ?>
    </div><!-- .page-content -->
    <div class="pagination">
        <?php wp_link_pages(); ?>
    </div><!-- .pagination -->
    <div style="clear: both;"> </div>
    <?php if ( comments_open() ) comments_template(); ?>
</div><!--.page-wrapper -->

<?php
get_footer();
