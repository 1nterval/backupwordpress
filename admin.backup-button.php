<?php if ( hmbkp_is_in_progress() ) : ?>

		<a id="hmbkp_backup" class="add-new-h2 hmbkp_running" href="tools.php?page=<?php echo $_GET['page']; ?>&amp;action=hmbkp_cancel"><?php echo hmbkp_get_status(); ?></a>

<?php elseif ( hmbkp_possible() ) : ?>

		<a id="hmbkp_backup" class="add-new-h2" href="tools.php?page=<?php echo $_GET['page']; ?>&amp;action=hmbkp_backup_now"><?php _e( 'Back Up Now', 'hmbkp' ); ?></a>

<?php endif; ?>