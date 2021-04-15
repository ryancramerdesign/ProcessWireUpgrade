<?php namespace ProcessWire;

class ProcessWireUpgradeCheckConfig extends ModuleConfig {
	public function __construct() {
		$this->add(array(
			array(
				'name' => 'useLoginHook',
				'type' => 'radios', 
				'label' => $this->_('Check for upgrades on superuser login?'),
				'description' => $this->_('If "No" is selected, then upgrades will only be checked manually when you click to Setup > Upgrades.'), 
				'notes' => $this->_('Automatic upgrade check requires ProcessWire 3.0.123 or newer.'), 
				'options' => array(
					1 => $this->_('Yes'), 
					0 => $this->_('No')
				),
				'optionColumns' => 1, 
				'value' => 0
			)
		));
	}
}
