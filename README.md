# blink_c
It's the same thing as "Boyfriend-alert", but written in C.
# How do I compile this?!!??!ONE?!!
You need to have WiringPi installed, it comes pre-installed on the new raspbian images.
Once you have wiringPi installed you can compile the C program with gcc:

cc -o lights lights.c -Wall -Wextra -lwiringPi

This should create an executeable that you can run and makes the blinkeylights go blink.
