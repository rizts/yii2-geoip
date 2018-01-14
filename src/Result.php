<?php


namespace lysenkobv\GeoIP;

/**
 * Class Result
 * @package lysenkobv\GeoIP
 *
 * @property string|null city
 * @property string|null country
 * @property Location location
 */
class Result extends ResultBase {
    protected function getCity($data) {
        $value = null;

        if (isset($data['city'])) {
            $value = json_decode(json_encode($data['city']));
        }

        return $value;
    }

    protected function getContinent($data) {
        $value = null;

        if (isset($data['continent'])) {
            $value = json_decode(json_encode($data['continent']));
        }

        return $value;
    }

    protected function getCountry($data) {
        $value = null;

        if (isset($data['country'])) {
            $value = json_decode(json_encode($data['country']));
        }

        return $value;
    }

    protected function getLocation($data) {
        $value = null;

        if (isset($data['location'])) {
            $value = json_decode(json_encode($data['location']));
        }

        return $value;
    }

    protected function getSubdivisions($data) {
        $value = null;

        if (isset($data['subdivisions'])) {
            $value = json_decode(json_encode($data['subdivisions']));
        }

        return $value;
    }

    public function isDetected() {
        return ($this->location->lat !== null && $this->location->lng !== null);
    }
}
