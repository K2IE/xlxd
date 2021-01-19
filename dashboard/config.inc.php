<?php

$PageOptions['ContactEmail']                         = 'k2ie at k2ie.net';	// Support E-Mail address

$PageOptions['RepeatersPage']['IPModus']             = 'ShowLast2ByteOfIP';	// See possible options above

$PageOptions['PeerPage']['IPModus']                  = 'ShowLast2ByteOfIP';	// See possible options above

$PageOptions['ModuleNames']['A']                     = 'REF020';
$PageOptions['ModuleNames']['B']                     = 'Special Events';
$PageOptions['ModuleNames']['C']                     = 'Module';
$PageOptions['ModuleNames']['D']                     = 'CNJHAM';
$PageOptions['ModuleNames']['E']                     = 'Experimentation';
$PageOptions['ModuleNames']['H']                     = 'K9 SAR';
$PageOptions['ModuleNames']['Z']                     = 'Module';

$PageOptions['IRCDDB']['Show']                       = true;        // Show liveircddb, set it to false if you are running your db in https 

$PageOptions['CustomTXT']                            = 'Sponsored by K2IE and the 020 Project';					// custom text in your header   

$Service['PIDFile']                                  = '/run/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = true;					// xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://xlx020.k2ie.net';		// dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';		// database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;					// push delay in seconds
$CallingHome['Country']                              = "USA";				// Country
$CallingHome['Comment']                              = "Amateur Digital for New Jersey and Beyond, Supports G3 Icom Terminal Mode";				// Comment. Max 100 character
$CallingHome['HashFile']                             = "/var/lib/nginx/xlxd/callinghome.php";			// Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/var/lib/nginx/xlxd/lastcallhome.php";			// lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";					// Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/usr/local/etc/xlxd/xlxd.interlink";			// Path to interlink file
