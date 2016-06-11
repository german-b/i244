#!/bin/bash
cd ~/i244
php artisan queue:work --daemon --tries=2 --sleep=5
