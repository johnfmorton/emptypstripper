<?php

/*
=====================================================

SuperGeekery Empty P Stripper
a plug-in for ExpressionEngine 2
by John Morton
v1.00

=====================================================

Change log

v. 1.0.1 (J08JUNE2013)

Updated regex to more accurately capture ONLY the full "&nbsp;" instead of any character in a set of "n" "b" "s" "p".

v. 1.0.0

Initial release

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
						'pi_name'			=> 'SuperGeekery Empty P Stripper',
						'pi_version'		=> '1.0.0',
						'pi_author'			=> 'John Morton',
						'pi_author_url'		=> 'http://supergeekery.com/',
						'pi_description'	=> 'WYGWAM\'s empty P tags are a form of digital hoarding. Get rid of them.',
						'pi_usage'			=> Emptypstripper::usage()
					);

class Emptypstripper {

var $return_data = "";

  function Emptypstripper($str = '')
  {
	// fetch the data between Emptypstripper tags
	$this->EE =& get_instance();
  }

	function stripMyPsPlease($str = '')
	{
		if ($str == '')
	    {
	      $str = $this->EE->TMPL->tagdata;
	    }

		$patterns = '{<p[^>]*>*>[\\n\\s]*(&nbsp;)*[\\n\\s]*<\\/p[^>]*>}';
		$replacements = '';

		$result = preg_replace($patterns, $replacements, $str);

		return $result;
	}

	/** ----------------------------------------
	/**  Plugin Usage
	/** ----------------------------------------*/
	function usage()
	{
	ob_start();
	?>
	When using WYGWAM, your output may include unwanted <p> tags that can affect the layout of the document.

	The Emptypstripper will eliminate <p> tag pairs that only have spaces, non-breaking spaces and carriage returns between the tags.

	It does not eliminate <br> tags, so you may still use those to force a visual break in your WYGWAM fields.


	Let's say you have a WYGWAM field called {wygwam_field_output} that outputs the following:


	<p>This is a paragraph of text.</p>
	<hr>
	<p> &nbsp; </p>


	Wrapping your output in an {exp:emptypstripper:stripMyPsPlease} like this

	{exp:emptypstripper:stripMyPsPlease}{wygwam_field_output}{/exp:emptypstripper:stripMyPsPlease}

	will generate the following output:


	<p>This is a paragraph of text.</p>


	<?php
	$buffer = ob_get_contents();

	ob_end_clean();

	return $buffer;
	}

} // END Emptypstripper class

/* End of file pi.tagstripper.php */
/* Location: ./system/expressionengine/third_party/emptypstripper/pi.emptypstripper.php */