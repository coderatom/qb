<?php

class QBCosHandler extends QBHandler {

	protected function getActionOnUnitData() {
		$type = $this->getOperandType(2);
		$cType = $this->getOperandCType(2);
		$f = ($type == 'F32') ? 'f' : '';
		return "res = cos$f(op1);";

	}
}

?>