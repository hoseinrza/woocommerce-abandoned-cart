<?php
/**
 * Modern Settings Template for Abandoned Cart Lite
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
				<h1><?php _e( 'Settings', 'woocommerce-abandoned-cart' ); ?></h1>
				<p style="color: var(--wcal-text-secondary); margin: 5px 0 0 0; font-size: 14px;">
					<?php _e( 'Configure your abandoned cart recovery settings', 'woocommerce-abandoned-cart' ); ?>
				</p>
			</div>
		</div>

		<div style="display: grid; grid-template-columns: 250px 1fr; gap: 20px;">
			<!-- Sidebar Menu -->
			<div class="wcal-sidebar">
				<a href="#" data-tab="general" class="wcal-sidebar-item active">
					<span>⚙️</span> <?php _e( 'General', 'woocommerce-abandoned-cart' ); ?>
				</a>
				<a href="#" data-tab="email-settings" class="wcal-sidebar-item">
					<span>✉️</span> <?php _e( 'Email Settings', 'woocommerce-abandoned-cart' ); ?>
				</a>
				<a href="#" data-tab="gdpr" class="wcal-sidebar-item">
					<span>🔒</span> <?php _e( 'GDPR & Privacy', 'woocommerce-abandoned-cart' ); ?>
				</a>
				<a href="#" data-tab="coupons" class="wcal-sidebar-item">
					<span>🎟️</span> <?php _e( 'Coupons', 'woocommerce-abandoned-cart' ); ?>
				</a>
				<a href="#" data-tab="exclusions" class="wcal-sidebar-item">
					<span>🚫</span> <?php _e( 'Exclusion Rules', 'woocommerce-abandoned-cart' ); ?>
				</a>
			</div>

			<!-- Main Content -->
			<div>
				<!-- General Settings Tab -->
				<div data-tab-content="general" class="wcal-tab-content active">
					<form class="wcal-form">
						<div class="wcal-card">
							<div class="wcal-card-header">
								<h3 class="wcal-card-title"><?php _e( 'Cart Abandonment Settings', 'woocommerce-abandoned-cart' ); ?></h3>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-enable">
									<input type="checkbox" id="wcal-enable" name="wcal_enable" checked>
									<?php _e( 'Enable abandoned cart emails', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Enable or disable the abandoned cart recovery system', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-cutoff-time"><?php _e( 'Cart abandoned cut-off time (minutes)', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="number" id="wcal-cutoff-time" name="wcal_cutoff_time" value="10" min="1">
								<p class="wcal-form-description">
									<?php _e( 'Consider cart abandoned after X minutes of item being added to cart & order not placed.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-auto-delete"><?php _e( 'Automatically delete abandoned orders after (days)', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="number" id="wcal-auto-delete" name="wcal_auto_delete" value="30" min="1">
								<p class="wcal-form-description">
									<?php _e( 'Automatically delete abandoned cart orders after X days.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-notify-admin">
									<input type="checkbox" id="wcal-notify-admin" name="wcal_notify_admin" checked>
									<?php _e( 'Email admin on order recovery', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Sends email to Admin if an Abandoned Cart Order is recovered.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-notify-admin-abandonment">
									<input type="checkbox" id="wcal-notify-admin-abandonment" name="wcal_notify_admin_abandonment">
									<?php _e( 'Email admin on cart abandonment', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Enable this option to notify the store administrator when a cart is abandoned', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-track-from-cart">
									<input type="checkbox" id="wcal-track-from-cart" name="wcal_track_from_cart">
									<?php _e( 'Start tracking from Cart Page', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Enable tracking of abandoned products & carts even if customer does not visit the checkout page.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>
						</div>

						<div class="wcal-card">
							<div class="wcal-card-header">
								<h3 class="wcal-card-title"><?php _e( 'Coupon Settings', 'woocommerce-abandoned-cart' ); ?></h3>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-auto-delete-coupons">
									<input type="checkbox" id="wcal-auto-delete-coupons" name="wcal_auto_delete_coupons">
									<?php _e( 'Delete Coupons Automatically', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Enable this setting if you want to completely remove the expired and used coupon code automatically every 15 days.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>
						</div>

						<div style="display: flex; gap: 10px;">
							<button type="submit" class="wcal-btn wcal-btn-primary">
								<?php _e( 'Save Changes', 'woocommerce-abandoned-cart' ); ?>
							</button>
							<button type="reset" class="wcal-btn wcal-btn-secondary">
								<?php _e( 'Reset', 'woocommerce-abandoned-cart' ); ?>
							</button>
						</div>
					</form>
				</div>

				<!-- Email Settings Tab -->
				<div data-tab-content="email-settings" class="wcal-tab-content">
					<form class="wcal-form">
						<div class="wcal-card">
							<div class="wcal-card-header">
								<h3 class="wcal-card-title"><?php _e( 'Email Configuration', 'woocommerce-abandoned-cart' ); ?></h3>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-from-name"><?php _e( '"From" Name', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="text" id="wcal-from-name" name="wcal_from_name" value="<?php bloginfo( 'name' ); ?>">
								<p class="wcal-form-description">
									<?php _e( 'The sender name for abandoned cart reminder emails', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-from-email"><?php _e( '"From" Address', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="email" id="wcal-from-email" name="wcal_from_email" value="<?php bloginfo( 'admin_email' ); ?>">
								<p class="wcal-form-description">
									<?php _e( 'The sender email address for abandoned cart reminder emails', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-reply-to"><?php _e( 'Reply To Address', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="email" id="wcal-reply-to" name="wcal_reply_to" value="<?php bloginfo( 'admin_email' ); ?>">
								<p class="wcal-form-description">
									<?php _e( 'Where customer replies should be sent', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-utm-params"><?php _e( 'UTM Parameters', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="text" id="wcal-utm-params" name="wcal_utm_params" placeholder="utm_source=abandonment&utm_medium=email&utm_campaign=recovery">
								<p class="wcal-form-description">
									<?php _e( 'Track email link clicks with Google Analytics', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-auto-login">
									<input type="checkbox" id="wcal-auto-login" name="wcal_auto_login">
									<?php _e( 'Auto-login registered users', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description wcal-alert wcal-alert-warning">
									⚠️ <?php _e( 'Warning: This may be a security vulnerability. Use with caution.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>
						</div>

						<div style="display: flex; gap: 10px;">
							<button type="submit" class="wcal-btn wcal-btn-primary">
								<?php _e( 'Save Changes', 'woocommerce-abandoned-cart' ); ?>
							</button>
						</div>
					</form>
				</div>

				<!-- GDPR Settings Tab -->
				<div data-tab-content="gdpr" class="wcal-tab-content">
					<form class="wcal-form">
						<div class="wcal-card">
							<div class="wcal-card-header">
								<h3 class="wcal-card-title"><?php _e( 'GDPR & Privacy Settings', 'woocommerce-abandoned-cart' ); ?></h3>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-gdpr-enable">
									<input type="checkbox" id="wcal-gdpr-enable" name="wcal_gdpr_enable" checked>
									<?php _e( 'Enable GDPR Notice', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Display a notice informing customers that their email and cart data are saved.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-gdpr-guest-message"><?php _e( 'Guest Users Message', 'woocommerce-abandoned-cart' ); ?></label>
								<textarea id="wcal-gdpr-guest-message" name="wcal_gdpr_guest_message" placeholder="Your email address will help us support your shopping experience..."></textarea>
								<p class="wcal-form-description">
									<?php _e( 'Message displayed to guest users on the checkout page', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-gdpr-registered-message"><?php _e( 'Registered Users Message', 'woocommerce-abandoned-cart' ); ?></label>
								<textarea id="wcal-gdpr-registered-message" name="wcal_gdpr_registered_message" placeholder="Please check our Privacy Policy..."></textarea>
								<p class="wcal-form-description">
									<?php _e( 'Message displayed to registered users on shop and product pages', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-gdpr-opt-out">
									<input type="checkbox" id="wcal-gdpr-opt-out" name="wcal_gdpr_opt_out" checked>
									<?php _e( 'Allow users to opt out of tracking', 'woocommerce-abandoned-cart' ); ?>
								</label>
								<p class="wcal-form-description">
									<?php _e( 'Permit customers to opt-out from cart tracking in compliance with GDPR', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>
						</div>

						<div style="display: flex; gap: 10px;">
							<button type="submit" class="wcal-btn wcal-btn-primary">
								<?php _e( 'Save Changes', 'woocommerce-abandoned-cart' ); ?>
							</button>
						</div>
					</form>
				</div>

				<!-- Exclusion Rules Tab -->
				<div data-tab-content="exclusions" class="wcal-tab-content">
					<form class="wcal-form">
						<div class="wcal-card">
							<div class="wcal-card-header">
								<h3 class="wcal-card-title"><?php _e( 'Exclusion Rules', 'woocommerce-abandoned-cart' ); ?></h3>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-exclude-ip"><?php _e( 'Exclude IP Addresses', 'woocommerce-abandoned-cart' ); ?></label>
								<textarea id="wcal-exclude-ip" name="wcal_exclude_ip" placeholder="192.168.* , 10.0.0.1&#10;(Separate with commas)"></textarea>
								<p class="wcal-form-description">
									<?php _e( 'Carts from these IPs will not be tracked. Supports wildcards.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-exclude-email"><?php _e( 'Exclude Email Addresses', 'woocommerce-abandoned-cart' ); ?></label>
								<textarea id="wcal-exclude-email" name="wcal_exclude_email" placeholder="admin@example.com&#10;test@example.com"></textarea>
								<p class="wcal-form-description">
									<?php _e( 'Carts from these email addresses will not be tracked.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-exclude-domains"><?php _e( 'Exclude Email Domains', 'woocommerce-abandoned-cart' ); ?></label>
								<textarea id="wcal-exclude-domains" name="wcal_exclude_domains" placeholder="test.com&#10;internal.com"></textarea>
								<p class="wcal-form-description">
									<?php _e( 'Carts from these email domains will not be tracked.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>

							<div class="wcal-form-group">
								<label for="wcal-exclude-countries"><?php _e( 'Exclude Countries', 'woocommerce-abandoned-cart' ); ?></label>
								<input type="text" id="wcal-exclude-countries" name="wcal_exclude_countries" placeholder="US, CA, GB">
								<p class="wcal-form-description">
									<?php _e( 'Carts from these countries will not be tracked.', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</div>
						</div>

						<div style="display: flex; gap: 10px;">
							<button type="submit" class="wcal-btn wcal-btn-primary">
								<?php _e( 'Save Changes', 'woocommerce-abandoned-cart' ); ?>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	document.querySelectorAll('.wcal-sidebar-item').forEach(item => {
		item.addEventListener('click', function(e) {
			e.preventDefault();
			const tab = this.getAttribute('data-tab');

			// Update active sidebar item
			document.querySelectorAll('.wcal-sidebar-item').forEach(el => el.classList.remove('active'));
			this.classList.add('active');

			// Update active tab content
			document.querySelectorAll('[data-tab-content]').forEach(el => el.classList.remove('active'));
			document.querySelector('[data-tab-content="' + tab + '"]').classList.add('active');
		});
	});
</script>
