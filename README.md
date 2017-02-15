# Mzeis_ServerTiming

Small Magento 1 example extension that shows how `Varien_Profiler`
information can be sent to the browser using the `Server-Timing` HTTP
header so profiling info can be displayed e.g. bei Google Chrome.

**Note**: this is only an example, so don't use it in production! As
soon as `Varien_Profiler::getTimers()` returns values they will be sent
in the browser, no checking of IPs or similar going on.

Thanks Christian Münch for the
[inspiration](https://twitter.com/cmuench/status/831773811427119104)!

# Installation

Install this extension using Composer and modman. In your
`composer.json`, add an entry like this:

    "require": {
        "mzeis/mzeis_server-timing": "v1.0.0"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mzeis/Mzeis_ServerTiming"
        }
    ]
    

# Known issues

This won't work when
[Aoe_Profiler](https://github.com/aoepeople/Aoe_Profiler) is enabled.

Also, at the time of writing Chrome like to truncate the string
displayed in the `Server Timing` section.
