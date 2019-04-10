<?php 

/*
 * (c) YOUR NAME <your@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Astrology;

class Data {

	private $data;
    
	public function __construct($data) {
        $this->data = $data;
	}

    public function jsonToArray() {
        $jsonObj  = json_decode($this->data, true);
        if (is_null($jsonObj)) {
            return ['status' => 'error', 'message' => 'Requested string is not a valid json. '. json_last_error_msg()];
        }

        return $jsonObj;
    }
}