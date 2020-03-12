<?php
/**
 * PayZen V2-Payment Module version 1.11.0 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class GetTokenDetailsResponse extends WsResponse
{
    /**
     * @var GetTokenDetailsResult $getTokenDetailsResult
     */
    private $getTokenDetailsResult = null;

    /**
     * @return GetTokenDetailsResult
     */
    public function getGetTokenDetailsResult()
    {
        return $this->getTokenDetailsResult;
    }

    /**
     * @param GetTokenDetailsResult $getTokenDetailsResult
     * @return GetTokenDetailsResponse
     */
    public function setGetTokenDetailsResult($getTokenDetailsResult)
    {
        $this->getTokenDetailsResult = $getTokenDetailsResult;
        return $this;
    }
}
