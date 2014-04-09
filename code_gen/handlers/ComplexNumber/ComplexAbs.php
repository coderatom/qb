<?php

class ComplexAbs extends Handler {

	use ArrayAddressMode, UnaryOperator, UnitResult, FloatingPointOnly, FixedOperandSize, Slow, Multithreaded, ComplexToReal;
	
	protected function getActionOnUnitData() {
		$type = $this->getOperandType(2);
		$f = ($type == 'F32') ? 'f' : '';
		return "res = cabs$f(op1);";
	}
}

?>
