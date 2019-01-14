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

class AccountingCustomerParty implements XmlSerializable {
    private $supplierAssignedAccountID;
    private $party;

	/**
	 * @return mixed
	 */
	public function getSupplierAssignedAccountID() {
		return $this->supplierAssignedAccountID;
	}

	/**
	 * @param mixed $id
	 * @return AccountingCustomerParty
	 */
	public function setSupplierAssignedAccountID($id) {
		$this->supplierAssignedAccountID = $id;
		return $this;
	}

    /**
     * @return mixed
     */
    public function getAccountingCustomerParty() {
        return $this->party;
    }

    /**
     * @param mixed $party
     * @return AccountingCustomerParty
     */
    public function setAccountingCustomerParty($party) {
        $this->party = $party;
        return $this;
    }

	function xmlSerialize(Writer $writer) {
		$writer->write([
			Schema::CBC.'SupplierAssignedAccountID' => $this->supplierAssignedAccountID,
            Schema::CAC.'Party' => $this->party
		]);
	}
}