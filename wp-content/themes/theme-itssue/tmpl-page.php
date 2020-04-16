<?php
/**
 * tmpl-page.php - FAQ 페이지의 본문 내용을 담당하는 파일입니다.
 *
 * @package theme-itssue
 */
?>

<div>
    <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <input type="hidden" name="action" value="user_form">
        <?php wp_nonce_field( 'user_form' ); ?>
        <input class="input-title" type="text" name="title" placeholder="title"/>
        <br/>
        <textarea class="input-content" name="content" placeholder="질문을 입력해주세요."></textarea>
        <br/>
        <button type="submit">제출</button>
    </form>
</div>
