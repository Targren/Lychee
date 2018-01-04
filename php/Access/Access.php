<?php

namespace Lychee\Access;

use Lychee\Modules\Response;

abstract class Access {

	final protected static function fnNotFound($fn = "<missing>") {

		Response::error('Function "'.$fn.'" not found! Please check the spelling of the called function.');

	}

}

?>
