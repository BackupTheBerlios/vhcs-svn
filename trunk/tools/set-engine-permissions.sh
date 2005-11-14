#!/bin/bash

#
# VHCS engine permissions setter v0.01;
#


#
# fixing engine permissions;
#


for i in `find /var/www/vhcs2/engine/`; do

	if [[ -f $i ]]; then
	
		echo -e "\t0700 root:root $i";
		
		chmod 0700 $i;
		chown root:root $i;	
		
	elif [[ -d $i ]]; then
	
		echo "0700 root:root [$i]";
		
		chmod 0700 $i;
		chown root:root $i;
	fi

done

#
# fixing engine folder permissions;
#

		chmod 0755 /var/www/vhcs2/engine;
		chown root:root /var/www/vhcs2/engine;

#
# fixing messager permissions;
#

i='/var/www/vhcs2/engine/messager/'

echo "0700 vmail:mail [$i]";

		chmod 0700 -R $i;
		chown -R vmail:mail $i;


#
# fixing messager folder permissions;
#

i='/var/www/vhcs2/engine/messager'

echo "0755 root:root [$i]";

		chmod 0755 $i;
		chown root:root $i;
