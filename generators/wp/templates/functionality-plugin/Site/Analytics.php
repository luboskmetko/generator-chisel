<?php
/**
 * Add Analytics Code
 *
 * @package Site
 */
namespace Site;

class Analytics {
	/**
	 * Run actions
	 */
	public function run() {
		add_action('wp_head', array( $this, 'add_google_analytics'), 10 );
	}

	/**
	 * Add Google Analytics code
	 *
	 * @access public
	 * @return void
	 */
	public function add_google_analytics() {  ?>
		<script>
		</script>
	<?php
	}
}

<?php
/**
 * Add Analytics Code
 *
 * @package MySite
 */
namespace Site;

class Analytics {
	/**
	 * Run actions
	 */
	public function run() {
		add_action('wp_head', array( $this, 'add_google_analytics'), 10 );
	}

	/**
	 * Add Google Analytics code
	 *
	 * @access public
	 * @return void
	 */
	public function add_google_analytics() {  ?>
		<script>
		</script>
	<?php
	}
}
