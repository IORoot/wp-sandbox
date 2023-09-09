<?php

/*
Plugin Name: Admin Message Disable
Plugin URI: http://ioroot.com/
Description: Disable all admin notifications and messages.
Version: 1.0.0
Author: IORoot
Author URI: http://ioroot.com/
*/

remove_all_actions('admin_notices');
