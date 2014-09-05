# ProcessWire Core Upgrade

**This is a beta version, so please do not use in production 
environments just yet**. 

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

## Requirements

ProcessWire 2.3.4 or newer

## To-do

Make database backups when WireDatabaseBackup class is available.


