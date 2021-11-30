<?php
namespace Moneybird\Resource;

use Moneybird\Object\Ledger;

class LedgerAccounts extends ResourceBase {

    /**
     * @return LedgerAccount
     */
    protected function getResourceObject() {
        return new Ledger;
    }

}
