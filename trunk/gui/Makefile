# VHCS(tm) - Virtual Hosting Control System
# Copyright (c) 2001-2004 by moleSoftware GmbH
# http://www.molesoftware.com
#
#
# License:
#    This program is free software; you can redistribute it and/or
#    modify it under the terms of the MPL Mozilla Public License
#    as published by the Free Software Foundation; either version 1.1    
#    of the License, or (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
#    MPL Mozilla Public License for more details.
#    
#    You may have received a copy of the MPL Mozilla Public License
#    along with this program.
#    
#    An on-line copy of the MPL Mozilla Public License can be found
#    http://www.mozilla.org/MPL/MPL-1.1.html
#
#
# The VHCS Home Page is at:
#
#    http://www.vhcs.net


SYSTEM_GUI_ROOT=$(SYSTEM_ROOT)/gui

export

install:

	$(SYSTEM_MAKE_DIRS) $(SYSTEM_GUI_ROOT)

#	$(CODE_PHP) ./index.php $(SYSTEM_GUI_ROOT)/index.php
#	$(CODE_PHP) ./chk_login.php $(SYSTEM_GUI_ROOT)/chk_login.php
#	$(CODE_PHP) ./pi.php $(SYSTEM_GUI_ROOT)/pic.php

#	cd ./admin && $(MAKE) install
#	cd ./reseller && $(MAKE) install
#	cd ./client && $(MAKE) install
#	cd ./include && $(MAKE) install

	cp ./index.php $(SYSTEM_GUI_ROOT)/index.php
	cp ./chk_login.php $(SYSTEM_GUI_ROOT)/chk_login.php
	cp ./lostpw.php $(SYSTEM_GUI_ROOT)/lostpw.php
#	cp ./pi.php $(SYSTEM_GUI_ROOT)/pi.php

	cp -dR ./admin $(SYSTEM_GUI_ROOT)
	cp -dR ./reseller $(SYSTEM_GUI_ROOT)
	cp -dR ./client $(SYSTEM_GUI_ROOT)
	cp -dR ./include $(SYSTEM_GUI_ROOT)
	rm -rf $(SYSTEM_GUI_ROOT)/{admin,reseller,client,include}/Makefile

	cp -dR ./domain_default_page $(SYSTEM_GUI_ROOT)
	cp -dR ./errordocs $(SYSTEM_GUI_ROOT)
	cp -dR ./images $(SYSTEM_GUI_ROOT)
	cp -dR ./themes $(SYSTEM_GUI_ROOT)
	cp -dR ./tools $(SYSTEM_GUI_ROOT)
	cp -dR ./orderpanel $(SYSTEM_GUI_ROOT)
	

uninstall:

	rm -rf $(SYSTEM_GUI_ROOT)

