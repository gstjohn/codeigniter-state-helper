<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * State Dropdown
 *
 * Returns HTML for a dropdown filled with state information
 *
 * @access public
 * @param string $name     Value of <select>'s name attribute
 * @param string $selected Value of <option> to be selected
 * @param string $id       Value of <select>'s id attribute (optional)
 * @param string $class    Value of <select>'s class attribute (optional)
 * @return string
 */
if ( ! function_exists('state_dropdown')) {
	function state_dropdown($name='state', $selected=NULL, $id=NULL, $class=NULL) {
		$CI =& get_instance();

		$CI->load->helper('form');

		$state_list = state_array();

		$extra = '';
		if ( ! is_null($id)) {
			$extra .= 'id="' . $id . '" ';
		}
		if ( ! is_null($class)) {
			$extra .= 'class="' . $class . '" ';
		}
		$extra = substr($extra, 0, -1);

		return form_dropdown($name, $state_list, $selected, $extra);
	}
}

/**
 * Convert from abbreviation
 *
 * Convert a state abbreviation to the full state name
 *
 * @access public
 * @param string $abbr Two-letter abbreviation
 * @return string
 */
if ( ! function_exists('abbr_to_name')) {
	function abbr_to_name($abbr) {
		$state_list = state_array();
		$abbr = strtoupper($abbr);

		return isset($state_list[$abbr]) ? $state_list[$abbr] : FALSE;
	}
}

/**
 * Convert to abbreviation
 *
 * Convert a full state name to the state abbreviation
 *
 * @access public
 * @param  string $name States full name
 * @return string/boolean Returns FALSE when not found
 */
if ( ! function_exists('name_to_abbr')) {
	function name_to_abbr($name) {
		$state_list = state_array();
		$camel_name = ucwords(strtolower($name));

		return array_search($camel_name, $state_list);
	}
}

/**
 * Check for valid state
 *
 * Check to see if a provided state exists
 *
 * @access public
 * @param  string $str Two-letter abbreviation OR full state name
 * @return boolean
 */
if ( ! function_exists('is_valid_state')) {
	function is_valid_state($str) {
		$state_list = state_array();
		$camel_str = ucwords(strtolower($str));

		return array_key_exists($str, $state_list) || in_array($camel_str, $state_list);
	}
}

/**
 * State array
 *
 * Return an array of states with their abbreviation as the key
 *
 * @access public
 * @return string
 */
if ( ! function_exists('get_states')) {
	function state_array() {
		$state_list = array(
			'AL' => 'Alabama',
			'AK' => 'Alaska',
			'AZ' => 'Arizona',
			'AR' => 'Arkansas',
			'CA' => 'California',
			'CO' => 'Colorado',
			'CT' => 'Connecticut',
			'DE' => 'Delaware',
			'DC' => 'District Of Columbia',
			'FL' => 'Florida',
			'GA' => 'Georgia',
			'HI' => 'Hawaii',
			'ID' => 'Idaho',
			'IL' => 'Illinois',
			'IN' => 'Indiana',
			'IA' => 'Iowa',
			'KS' => 'Kansas',
			'KY' => 'Kentucky',
			'LA' => 'Louisiana',
			'ME' => 'Maine',
			'MD' => 'Maryland',
			'MA' => 'Massachusetts',
			'MI' => 'Michigan',
			'MN' => 'Minnesota',
			'MS' => 'Mississippi',
			'MO' => 'Missouri',
			'MT' => 'Montana',
			'NE' => 'Nebraska',
			'NV' => 'Nevada',
			'NH' => 'New Hampshire',
			'NJ' => 'New Jersey',
			'NM' => 'New Mexico',
			'NY' => 'New York',
			'NC' => 'North Carolina',
			'ND' => 'North Dakota',
			'OH' => 'Ohio',
			'OK' => 'Oklahoma',
			'OR' => 'Oregon',
			'PA' => 'Pennsylvania',
			'RI' => 'Rhode Island',
			'SC' => 'South Carolina',
			'SD' => 'South Dakota',
			'TN' => 'Tennessee',
			'TX' => 'Texas',
			'UT' => 'Utah',
			'VT' => 'Vermont',
			'VA' => 'Virginia',
			'WA' => 'Washington',
			'WV' => 'West Virginia',
			'WI' => 'Wisconsin',
			'WY' => 'Wyoming'
		);

		return $state_list;
	}
}

?>
