<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $form_html
 */
?>
<div class="fw-flash-messages">
    <?php if (defined('FW')) { FW_Flash_Messages::_print_frontend(); } ?>
</div>
<?php
echo '<div class="form-wrapper contact-form ht-form-block">'.$form_html.'</div>';

?>
