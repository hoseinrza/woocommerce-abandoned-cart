<?php
/**
 * Modern Email Templates Page for Abandoned Cart Lite
 *
 * @package Abandoned-Cart-Lite-for-WooCommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="wcal-admin-wrapper">
	<div class="wcal-container">
		<!-- Header -->
		<div class="wcal-header">
			<div>
				<h1><?php _e( 'Email Templates', 'woocommerce-abandoned-cart' ); ?></h1>
				<p style="color: var(--wcal-text-secondary); margin: 5px 0 0 0; font-size: 14px;">
					<?php _e( 'Create and manage your abandoned cart recovery email templates', 'woocommerce-abandoned-cart' ); ?>
				</p>
			</div>
			<div class="wcal-header-actions">
				<button class="wcal-btn wcal-btn-primary" id="wcal-add-template">
					<span>+</span> <?php _e( 'Add New Template', 'woocommerce-abandoned-cart' ); ?>
				</button>
			</div>
		</div>

		<!-- Info Alert -->
		<div class="wcal-alert wcal-alert-info">
			<div class="wcal-alert-icon">ℹ️</div>
			<div>
				<?php _e( 'Add email templates at different intervals to maximize the possibility of recovering your abandoned carts. Activate each template when ready to start sending.', 'woocommerce-abandoned-cart' ); ?>
			</div>
		</div>

		<!-- Templates Grid -->
		<div class="wcal-grid" id="wcal-templates-container">
			<!-- Template Card 1 -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<div>
						<h3 class="wcal-card-title">1st Reminder</h3>
						<p style="font-size: 12px; color: var(--wcal-text-secondary); margin: 5px 0 0 0;">
							<?php _e( 'Sent after 1 hour', 'woocommerce-abandoned-cart' ); ?>
						</p>
					</div>
					<span class="wcal-badge wcal-badge-success">Active</span>
				</div>

				<div style="padding-bottom: 15px; border-bottom: 1px solid var(--wcal-border-light);">
					<p><strong>Subject:</strong> Did you forget your items?</p>
					<p style="font-size: 12px; color: var(--wcal-text-secondary); margin-top: 8px;">
						1 hour after cart abandonment
					</p>
				</div>

				<div style="display: flex; gap: 8px; padding-top: 15px; flex-wrap: wrap;">
					<button class="wcal-btn wcal-btn-sm wcal-btn-primary">
						✏️ <?php _e( 'Edit', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						👁️ <?php _e( 'Preview', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						✉️ <?php _e( 'Test', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-danger">
						🗑️ <?php _e( 'Delete', 'woocommerce-abandoned-cart' ); ?>
					</button>
				</div>
			</div>

			<!-- Template Card 2 -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<div>
						<h3 class="wcal-card-title">2nd Reminder</h3>
						<p style="font-size: 12px; color: var(--wcal-text-secondary); margin: 5px 0 0 0;">
							<?php _e( 'Sent after 6 hours', 'woocommerce-abandoned-cart' ); ?>
						</p>
					</div>
					<span class="wcal-badge wcal-badge-success">Active</span>
				</div>

				<div style="padding-bottom: 15px; border-bottom: 1px solid var(--wcal-border-light);">
					<p><strong>Subject:</strong> Your cart is waiting - Special offer inside!</p>
					<p style="font-size: 12px; color: var(--wcal-text-secondary); margin-top: 8px;">
						6 hours after cart abandonment
					</p>
				</div>

				<div style="display: flex; gap: 8px; padding-top: 15px; flex-wrap: wrap;">
					<button class="wcal-btn wcal-btn-sm wcal-btn-primary">
						✏️ <?php _e( 'Edit', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						👁️ <?php _e( 'Preview', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						✉️ <?php _e( 'Test', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-danger">
						🗑️ <?php _e( 'Delete', 'woocommerce-abandoned-cart' ); ?>
					</button>
				</div>
			</div>

			<!-- Template Card 3 -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<div>
						<h3 class="wcal-card-title">3rd Reminder</h3>
						<p style="font-size: 12px; color: var(--wcal-text-secondary); margin: 5px 0 0 0;">
							<?php _e( 'Sent after 24 hours', 'woocommerce-abandoned-cart' ); ?>
						</p>
					</div>
					<span class="wcal-badge wcal-badge-success">Active</span>
				</div>

				<div style="padding-bottom: 15px; border-bottom: 1px solid var(--wcal-border-light);">
					<p><strong>Subject:</strong> Last chance! Complete your purchase</p>
					<p style="font-size: 12px; color: var(--wcal-text-secondary); margin-top: 8px;">
						24 hours after cart abandonment
					</p>
				</div>

				<div style="display: flex; gap: 8px; padding-top: 15px; flex-wrap: wrap;">
					<button class="wcal-btn wcal-btn-sm wcal-btn-primary">
						✏️ <?php _e( 'Edit', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						👁️ <?php _e( 'Preview', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-secondary">
						✉️ <?php _e( 'Test', 'woocommerce-abandoned-cart' ); ?>
					</button>
					<button class="wcal-btn wcal-btn-sm wcal-btn-danger">
						🗑️ <?php _e( 'Delete', 'woocommerce-abandoned-cart' ); ?>
					</button>
				</div>
			</div>
		</div>

		<!-- Template Editor Modal -->
		<div class="wcal-modal" id="wcal-template-modal">
			<div class="wcal-modal-content">
				<div class="wcal-modal-header">
					<h2 class="wcal-modal-title"><?php _e( 'Edit Email Template', 'woocommerce-abandoned-cart' ); ?></h2>
					<button class="wcal-modal-close">×</button>
				</div>
				<div class="wcal-modal-body">
					<form id="wcal-template-form" class="wcal-form">
						<div class="wcal-form-group">
							<label for="wcal-template-name"><?php _e( 'Template Name', 'woocommerce-abandoned-cart' ); ?></label>
							<input type="text" id="wcal-template-name" name="name" placeholder="<?php _e( 'e.g., First Reminder', 'woocommerce-abandoned-cart' ); ?>" required>
						</div>

						<div class="wcal-form-group">
							<label for="wcal-template-subject"><?php _e( 'Email Subject', 'woocommerce-abandoned-cart' ); ?></label>
							<input type="text" id="wcal-template-subject" name="subject" placeholder="<?php _e( 'Your subject here', 'woocommerce-abandoned-cart' ); ?>" required>
						</div>

						<div class="wcal-form-group">
							<label for="wcal-template-body"><?php _e( 'Email Body', 'woocommerce-abandoned-cart' ); ?></label>
							<textarea id="wcal-template-body" name="body" placeholder="<?php _e( 'Your email content here...', 'woocommerce-abandoned-cart' ); ?>" required></textarea>
							<p class="wcal-form-description">
								<?php _e( 'Use [[CUSTOMER_NAME]], [[CART_LINK]], [[CART_TOTAL]] for dynamic content', 'woocommerce-abandoned-cart' ); ?>
							</p>
						</div>

						<div class="wcal-form-group">
							<label for="wcal-template-delay"><?php _e( 'Send After (hours)', 'woocommerce-abandoned-cart' ); ?></label>
							<input type="number" id="wcal-template-delay" name="delay" value="1" min="0.5" step="0.5">
						</div>

						<div class="wcal-form-checkbox">
							<input type="checkbox" id="wcal-template-wc-style" name="wc_style">
							<label for="wcal-template-wc-style"><?php _e( 'Use WooCommerce email template style', 'woocommerce-abandoned-cart' ); ?></label>
						</div>

						<div class="wcal-form-checkbox">
							<input type="checkbox" id="wcal-template-active" name="active" checked>
							<label for="wcal-template-active"><?php _e( 'Active', 'woocommerce-abandoned-cart' ); ?></label>
						</div>
					</form>
				</div>
				<div class="wcal-modal-footer">
					<button class="wcal-btn wcal-btn-secondary" id="wcal-modal-cancel"><?php _e( 'Cancel', 'woocommerce-abandoned-cart' ); ?></button>
					<button class="wcal-btn wcal-btn-primary" id="wcal-modal-save"><?php _e( 'Save Template', 'woocommerce-abandoned-cart' ); ?></button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	const modal = document.getElementById('wcal-template-modal');
	const closeBtn = document.querySelector('.wcal-modal-close');
	const addBtn = document.getElementById('wcal-add-template');
	const cancelBtn = document.getElementById('wcal-modal-cancel');

	addBtn.addEventListener('click', () => {
		modal.classList.add('active');
		document.getElementById('wcal-template-form').reset();
	});

	closeBtn.addEventListener('click', () => modal.classList.remove('active'));
	cancelBtn.addEventListener('click', () => modal.classList.remove('active'));

	document.getElementById('wcal-modal-save').addEventListener('click', () => {
		// Save template logic here
		modal.classList.remove('active');
	});

	// Close modal when clicking outside
	modal.addEventListener('click', (e) => {
		if (e.target === modal) {
			modal.classList.remove('active');
		}
	});
</script>
