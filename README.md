# ProcessWire Upgrade

Provides core and module upgrade notifications and optionally
installation from the admin. 

Can be used to upgrade your ProcessWire core or any module that
is available from http://modules.processwire.com.


## Core Upgrades

Checks if upgrades are available for your ProcessWire installation. 
If available, it will download the update. If your file system is
writable, it will install the update for you. If your file system is
not writable, then it will install upgrade files in a writable 
location (under /site/assets/cache/) and give you instructions on 
what files to move. 

Options to upgrade from the master or dev branch are available. 

This utility can be also used to upgrade any PW 2.3.4+ or newer 
site to ProcessWire 2.5 when it becomes available. 

This utility makes versioned backup copies of any files it 
overwrites during the upgrade. Should an upgrade fail for some
reason, you can manually restore from the backups should you
need to. 

If your ProcessWire version is new enough to have the 
WireDatabaseBackup class (PW 2.5.14+) then this module will
also give you the option of backing up your database. 


## Module Upgrades

Uses web services from modules.processwire.com to compare your
current installed versions of modules to the latest remote 
versions available. Provides upgrade links when it finds newer 
versions of modules you have installed. 


## Please Note

This is a new tool in beta so please test in non-production 
environments before using in production environments.


## Requirements

- ProcessWire 2.3.4 or newer (for core upgrade capability)
- ProcessWire 2.5.0 or newer (for module upgrade capability)
- ProcessWire 2.5.20 or newer (for automatic upgrade checks)


