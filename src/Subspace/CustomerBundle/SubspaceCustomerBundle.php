<?php

namespace Subspace\CustomerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SubspaceCustomerBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}

?>