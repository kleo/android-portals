## android-portals

Credential phishing using Android Hotspot Captive Portals

### Requirements

* android

* termux

* root - required for redirecting requests with iptables

### Setup

Install packages

`pkg install php tsu`

Turn on hotspot

Set security to None

Rename hotspot as desired

Run redirect.sh as root

`cd android-portals`

`sudo ./redirect.sh`

### Running web server

`cd example`

`php -S 0.0.0.0:8080`

### Demo

https://user-images.githubusercontent.com/13497504/162899176-ff72aab1-5a1b-40f5-8740-134dc4af42a8.mp4

### Notes

Tested on Sony Xperia XZ1 Compact LineageOS 17.1 with Magisk

Hotspot fails to trigger "Tap here to sign in to network" without internet; Turning on Mobile data without load worked for me

Captive portal does not gracefully exit or authorizes user for internet connection since /generate_204 with http header 204 does not exist. Resources: [android-captive-portal](https://github.com/leoleozhu/android-captive-portal)

### TODO

Close captive portal after authentication
Clean up redirect.sh rules
Redo with proper web server

### Acknowledgments

Project forked from [fake-captive-portal-using-android-phone](https://github.com/zahichemaly/fake-captive-portal-using-android-phone)
