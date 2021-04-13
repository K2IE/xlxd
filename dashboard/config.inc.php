<?php

$PageOptions['ContactEmail']                         = 'k2ie at k2ie.net';	// Support E-Mail address

$PageOptions['PageRefreshActive']                    = true;                    // Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '10000';                 // Page refresh time in miliseconds
$PageOptions['PageRefreshAlt']                       = '60000';                 // Alternate page refresh time in miliseconds

$PageOptions['RepeatersPage']['IPModus']             = 'ShowLast2ByteOfIP';	// See possible options above
$PageOptions['RepeatersPage']['IPv6Modus']           = 'ShowPartialIP';		// See possible options above

$PageOptions['PeerPage']['IPModus']                  = 'ShowLast2ByteOfIP';	// See possible options above
$PageOptions['PeerPage']['IPv6Modus']                = 'ShowPartialIP';		// See possible options above

$PageOptions['ModuleNames']['A']                     = 'Module';
$PageOptions['ModuleNames']['B']                     = 'Module';
$PageOptions['ModuleNames']['C']                     = 'Module';
$PageOptions['ModuleNames']['D']                     = 'Module';
$PageOptions['ModuleNames']['E']                     = 'Module';

$PageOptions['Traffic']['Show']                      = false;        // Show livTraffic page 
$PageOptions['IRCDDB']['Show']                       = false;        // Show liveircddb, set it to false if you are running your db in https 
$PageOptions['SGS']['Show']                          = false;         // Show SGS page 

$PageOptions['CustomTXT']                            = 'Sponsored by K2IE and the 020 Project';					// custom text in your header   

# sgs status page options
$PageOptions['SGSServer']			     = '020_Project';
$PageOptions['SGSTitle']                             = '020 Project Smart Group Status';

$Service['PIDFile']                                  = '/run/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = true;					// xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'https://xlxip6.k2ie.net';		// dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';		// database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;					// push delay in seconds
$CallingHome['Country']                              = "USA";				// Country
$CallingHome['Comment']                              = "IPv6 Testing, Supports G3 Icom Terminal Mode";				// Comment. Max 100 character
$CallingHome['HashFile']                             = "/var/lib/nginx/xlxd/callinghome.php";			// Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/var/lib/nginx/xlxd/lastcallhome.php";			// lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";					// Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/usr/local/etc/xlxd/xlxd.interlink";			// Path to interlink file
