<?php 

/**
 * (c) YOUR NAME <your@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 **/

namespace Prokerala\Astrology;
use Prokerala\Astrology\Http;
use Prokerala\Astrology\Validation;

const BASE_URI = 'http://api.prokerla.loc:8000/v1/astrology/';

class Astro {

	private $access_token;
    private $request;
    
	public function __construct($access_token) {
		$this->access_token = $access_token;
		$this->request = new Http();
		$this->request->setAccessToken($this->access_token);
		$this->request->setBaseUri(BASE_URI);
	}

	public function calculateHoroscopeMatching($bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa = 1, $system = 'kerala') {
        $this->request->get('horoscope-matching', compact('bride_dob', 'bridegroom_dob', 'bride_coordinates', 'bridegroom_coordinates', 'ayanamsa', 'system'));
        return $this->request->getResponse()->jsonToArray();
	}

	public function calculateKundaliMatching($bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa = 1) {
        $this->request->get('kundli-matching', compact('bride_dob', 'bridegroom_dob', 'bride_coordinates', 'bridegroom_coordinates', 'ayanamsa'));
        return $this->request->getResponse()->jsonToArray();
	}

	public function calculatePanchang($datetime, $coordinates, $ayanamsa = 1) {
        $this->request->get('panchang', compact('datetime', 'coordinates', 'ayanamsa'));
        return $this->request->getResponse()->jsonToArray();
	}

	public function calculateManglik($dob, $coordinates, $ayanamsa = 1) {
        $this->request->get('manglik', compact('dob', 'coordinates', 'ayanamsa'));
        return $this->request->getResponse()->jsonToArray();
	}

	public function calculateBirthChart($dob, $coordinates, $ayanamsa = 1) {
        $this->request->get('birth-chart', compact('dob', 'coordinates', 'ayanamsa'));
        return $this->request->getResponse()->jsonToArray();
	}
}