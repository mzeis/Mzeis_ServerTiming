# Mzeis_ServerTiming

Small Magento 1 example extension that shows how `Varien_Profiler`
information can be sent to the browser using the `Server-Timing` HTTP
header so profiling info can be displayed e.g. bei Google Chrome.

Thanks Christian Münch for the
[inspiration](https://twitter.com/cmuench/status/831773811427119104)!

# Installation

Install this extension using Composer and modman.

# Known issues

This won't work when
[Aoe_Profiler](https://github.com/aoepeople/Aoe_Profiler) is enabled.

Also, at the time of writing Chrome like to truncate the string
displayed in the `Server Timing` section.
