<?php
class ElggAnnouncement extends ElggObject {
	protected function initialise_attributes() {
		parent::initialise_attributes();
		$this->attributes['subtype'] = 'announcement';
	}
}
