#!/bin/bash

# Change to the directory where cPanel stores the user data
cd /var/cpanel/users

# Loop through all the cPanel user files
for userfile in *; do
  if [ -f "$userfile" ]; then
    # Get the cPanel username from the user file
    username=$(basename "$userfile" .yml)

    # Set up the Cron Job to clear the trash folder for the user
    (crontab -l -u "$username" 2>/dev/null; echo "0 0 * * * find /home/$username/public_html/.trash -type f -mtime +30 -exec rm -f {} \;") | crontab -u "$username" -
  fi
done

