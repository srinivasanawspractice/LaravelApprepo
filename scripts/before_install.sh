#!/bin/bash
# Check if the uploadfileapp directory exists
if [ ! -d "/var/www/uploadfileapp" ]; then
    # If the directory does not exist, create it
    echo "Creating /var/www/uploadfileapp directory"
    sudo mkdir -p /var/www/uploadfileapp
else
    echo "/var/www/uploadfileapp already exists"
fi

# Proceed with the rest of the tasks
echo "Running BeforeInstall tasks"
sudo chown -R ec2-user:ec2-user /var/www/uploadfileapp


