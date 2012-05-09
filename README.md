
# CodeIgniter-State-Helper

CodeIgniter-State-Helper is a CodeIgniter helper for the handling US states and their abbreviations.

## Usage

	// Load the spark
	$this->load->spark('state-helper/1.0.0');

	/**
	 * State Dropdown
	 *
	 * Returns HTML for a dropdown filled with state informtion
	 *
	 * @access public
	 * @param string $name     Value of <select>'s name attribute
	 * @param string $selected Value of <option> to be selected
	 * @param string $id       Value of <select>'s id attribute (optional)
	 * @param string $class    Value of <select>'s class attribute (optional)
	 * @return string
	 */

	<? echo state_dropdown('state'); ?>


	/**
	 * Convert from abbreviation
	 *
	 * Convert a state abbreviation to the full state name
	 *
	 * @access public
	 * @param string $abbr Two-letter abbreviation
	 * @return string
	 */

	<? echo abbr_to_name('CA'); ?>


	/**
	 * Convert to abbreviation
	 *
	 * Convert a full state name to the state abbreviation
	 *
	 * @access public
	 * @param  string $name States full name
	 * @return string/boolean Returns FALSE when not found
	 */

	<? echo name_to_abbr('California'); ?>


	/**
	 * Check for valid state
	 *
	 * Check to see if a provided state exists
	 *
	 * @access public
	 * @param  string $str Two-letter abbreviation OR full state name
	 * @return boolean
	 */

	<? echo is_valid_state('California') ? "Correct" : "Bad"; ?>
	<? echo is_valid_state('CA') ? "Correct" : "Bad"; ?>


	/**
	 * State array
	 *
	 * Return an array of states with their abbreviation as the key
	 *
	 * @access public
	 * @return string
	 */

	<? echo state_array(); ?>
