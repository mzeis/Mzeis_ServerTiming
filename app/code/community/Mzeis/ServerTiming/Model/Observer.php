<?php

class Mzeis_ServerTiming_Model_Observer
{
    /**
     * Minimum duration for a timer to be sent to the browser (in seconds).
     *
     * @const float
     */
    const THRESHOLD_VALUE = 0.001;

    /**
     * @param Varien_Event_Observer $observer
     * @return Mzeis_ServerTiming_Model_Observer
     */
    public function addServerTimingHeader(Varien_Event_Observer $observer)
    {
        $result = array();

        foreach (Varien_Profiler::getTimers() as $name => $values) {
            if ($values['sum'] >= self::THRESHOLD_VALUE) {
                $result[] = str_replace([' ', ':', '/'], '-', $name) . ';dur=' . number_format((float)$values['sum'], 4) . ';desc="' . $name . '"';
            }
        }

        if (!empty($result)) {
            /**
             * @var Mage_Core_Controller_Varien_Front $frontController
             */
            $frontController = $observer->getEvent()->getFront();
            $frontController->getResponse()->setHeader('Server-Timing', implode(', ', $result));
        }

        return $this;
    }
}
