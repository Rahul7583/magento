<?php
class Rp_Process_Model_Category extends Rp_Process_Model_Process_Abstract
{
	protected function _construct()
    {
        $this->_init('process/category');
    }

	public function getIdentifier($row)
	{
		return $row['name'];
	}

	public function prepareRow($row)
	{
		return [
			'name' => $row['name'],
			'path' => $row['path']
		];
	}

	public function validateRow($row)
	{
		return $row;
	}

	
}