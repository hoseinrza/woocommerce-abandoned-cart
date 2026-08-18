<?php
/**
 * Modern Dashboard Template for Abandoned Cart Lite
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
				<h1><?php _e( 'Dashboard', 'woocommerce-abandoned-cart' ); ?></h1>
				<p style="color: var(--wcal-text-secondary); margin: 5px 0 0 0; font-size: 14px;">
					<?php _e( 'Monitor your abandoned cart recovery performance', 'woocommerce-abandoned-cart' ); ?>
				</p>
			</div>
			<div class="wcal-header-actions">
				<button class="wcal-btn wcal-btn-primary" id="wcal-refresh-stats">
					<span>↻</span> <?php _e( 'Refresh', 'woocommerce-abandoned-cart' ); ?>
				</button>
			</div>
		</div>

		<!-- Quick Stats Grid -->
		<div class="wcal-grid wcal-grid-3">
			<!-- Recovered Amount -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">💰</span>
						<?php _e( 'Recovered Amount', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-recovered-amount">$0.00</div>
					<div class="wcal-stat-label"><?php _e( 'Total Revenue', 'woocommerce-abandoned-cart' ); ?></div>
					<div class="wcal-stat-change up">↑ 12% vs last month</div>
				</div>
			</div>

			<!-- Recovered Orders -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">✓</span>
						<?php _e( 'Recovered Orders', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-recovered-orders">0</div>
					<div class="wcal-stat-label"><?php _e( 'Completed Orders', 'woocommerce-abandoned-cart' ); ?></div>
					<div class="wcal-stat-change up">↑ 8% vs last month</div>
				</div>
			</div>

			<!-- Recovery Rate -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">📊</span>
						<?php _e( 'Recovery Rate', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-recovery-rate">0%</div>
					<div class="wcal-stat-label"><?php _e( 'Of Abandoned Carts', 'woocommerce-abandoned-cart' ); ?></div>
					<div class="wcal-stat-change up">↑ 2% vs last month</div>
				</div>
			</div>
		</div>

		<!-- Secondary Stats -->
		<div class="wcal-grid wcal-grid-3">
			<!-- Abandoned Carts -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">🛒</span>
						<?php _e( 'Abandoned Carts', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-abandoned-count">0</div>
					<div class="wcal-stat-label"><?php _e( 'This Month', 'woocommerce-abandoned-cart' ); ?></div>
				</div>
			</div>

			<!-- Emails Sent -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">✉️</span>
						<?php _e( 'Emails Sent', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-emails-sent">0</div>
					<div class="wcal-stat-label"><?php _e( 'Reminders Delivered', 'woocommerce-abandoned-cart' ); ?></div>
				</div>
			</div>

			<!-- Guest Emails -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">👤</span>
						<?php _e( 'Guest Emails Captured', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div class="wcal-stat-box">
					<div class="wcal-stat-number" id="wcal-guest-emails">0</div>
					<div class="wcal-stat-label"><?php _e( 'Email Addresses', 'woocommerce-abandoned-cart' ); ?></div>
				</div>
			</div>
		</div>

		<!-- Charts and Tables Row -->
		<div class="wcal-grid" style="grid-template-columns: 2fr 1fr;">
			<!-- Recovery Trend Chart -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">📈</span>
						<?php _e( '30-Day Recovery Trend', 'woocommerce-abandoned-cart' ); ?>
					</h3>
					<span style="font-size: 12px; color: var(--wcal-text-secondary);">Last 30 days</span>
				</div>
				<div id="wcal-chart-container" style="height: 250px;">
					<p style="text-align: center; padding: 20px; color: var(--wcal-text-secondary);">
						<?php _e( 'Chart will appear here', 'woocommerce-abandoned-cart' ); ?>
					</p>
				</div>
			</div>

			<!-- Quick Actions -->
			<div class="wcal-card">
				<div class="wcal-card-header">
					<h3 class="wcal-card-title">
						<span class="wcal-card-icon">⚡</span>
						<?php _e( 'Quick Actions', 'woocommerce-abandoned-cart' ); ?>
					</h3>
				</div>
				<div style="display: flex; flex-direction: column; gap: 8px;">
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=woocommerce_abandoned_orders' ) ); ?>" class="wcal-btn wcal-btn-secondary" style="justify-content: flex-start;">
						<span>→</span> <?php _e( 'View Abandoned Carts', 'woocommerce-abandoned-cart' ); ?>
					</a>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=woocommerce_abandoned_cart_email_template' ) ); ?>" class="wcal-btn wcal-btn-secondary" style="justify-content: flex-start;">
						<span>→</span> <?php _e( 'Email Templates', 'woocommerce-abandoned-cart' ); ?>
					</a>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=woocommerce_abandoned_orders&section=wcal_recovered_orders' ) ); ?>" class="wcal-btn wcal-btn-secondary" style="justify-content: flex-start;">
						<span>→</span> <?php _e( 'Recovered Orders', 'woocommerce-abandoned-cart' ); ?>
					</a>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=woocommerce_abandoned_cart_setting' ) ); ?>" class="wcal-btn wcal-btn-secondary" style="justify-content: flex-start;">
						<span>→</span> <?php _e( 'Settings', 'woocommerce-abandoned-cart' ); ?>
					</a>
				</div>
			</div>
		</div>

		<!-- Recent Carts Table -->
		<div class="wcal-card">
			<div class="wcal-card-header">
				<h3 class="wcal-card-title">
					<span class="wcal-card-icon">📋</span>
					<?php _e( 'Recent Abandoned Carts', 'woocommerce-abandoned-cart' ); ?>
				</h3>
				<a href="<?php echo esc_url( admin_url( 'admin.php?page=woocommerce_abandoned_orders' ) ); ?>" class="wcal-btn wcal-btn-sm wcal-btn-primary">
					<?php _e( 'View All', 'woocommerce-abandoned-cart' ); ?>
				</a>
			</div>
			<div class="wcal-table-wrapper">
				<table class="wcal-table">
					<thead>
						<tr>
							<th><?php _e( 'Cart ID', 'woocommerce-abandoned-cart' ); ?></th>
							<th><?php _e( 'Customer', 'woocommerce-abandoned-cart' ); ?></th>
							<th><?php _e( 'Amount', 'woocommerce-abandoned-cart' ); ?></th>
							<th><?php _e( 'Abandoned Date', 'woocommerce-abandoned-cart' ); ?></th>
							<th><?php _e( 'Status', 'woocommerce-abandoned-cart' ); ?></th>
							<th><?php _e( 'Action', 'woocommerce-abandoned-cart' ); ?></th>
						</tr>
					</thead>
					<tbody id="wcal-recent-carts">
						<tr>
							<td colspan="6" style="text-align: center; padding: 40px;">
								<p style="color: var(--wcal-text-secondary);">
									<?php _e( 'Loading recent carts...', 'woocommerce-abandoned-cart' ); ?>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<style>
	#wcal-refresh-stats {
		display: flex;
		align-items: center;
		gap: 6px;
	}
</style>
