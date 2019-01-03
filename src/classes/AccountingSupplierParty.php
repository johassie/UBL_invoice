<?php
/**
 * Created by PhpStorm.
 * User: baselbers
 * Date: 26-10-2017
 * Time: 20:28
 */

namespace CleverIt\UBL\Invoice;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class AccountingSupplierParty implements XmlSerializable {
    private $additionalAccountID;
    private $party;

	/**
	 * @return mixed
	 */
	public function getAdditionalAccountID() {
		return $this->additionalAccountID;
	}

	/**
	 * @param mixed $id
	 * @return AccountingSupplierParty
	 */
	public function setAdditionalAccountID($id) {
		$this->additionalAccountID = $id;
		return $this;
	}

    /**
     * @return mixed
     */
    public function getAccountingSupplierParty() {
        return $this->party;
    }

    /**
     * @param mixed $id
     * @return AccountingSupplierParty
     */
    public function setAccountingSupplierParty($party) {
        $this->party = $party;
        return $this;
    }

	function xmlSerialize(Writer $writer) {
		$writer->write([
			Schema::CBC.'AdditionalAccountID' => $this->additionalAccountID,
            Schema::CAC.'Party' => $this->party
		]);
	}
}