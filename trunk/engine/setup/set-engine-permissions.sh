#!/bin/bash

#
# VHCS engine permissions setter v1.0;
# improved by Erik Lehmann 12.2005
#

# read needed entries from vhcs2.conf
for a in `cat /etc/vhcs2/vhcs2.conf | grep -E '(ROOT_DIR|MTA_MAILBOX_)' | sed -e 's/ //g'`
do
export $a
done

#
# fixing engine permissions;
#


for i in `find $ROOT_DIR/engine/`; do

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

		chmod 0755 $ROOT_DIR/engine;
		chown root:root $ROOT_DIR/engine;

#
# fixing messager permissions;
#

i="$ROOT_DIR/engine/messager"

echo "0700 $MTA_MAILBOX_UID_NAME:$MTA_MAILBOX_GID_NAME [$i]";

		chmod -R 0700 $i;
		chown -R $MTA_MAILBOX_UID_NAME:$MTA_MAILBOX_GID_NAME $i;


#
# fixing messager folder permissions;
#

i="$ROOT_DIR/engine/messager"

echo "0755 root:root [$i]";

		chmod 0755 $i;
		chown root:root $i;
