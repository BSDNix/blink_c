#include <signal.h>
#include <stdio.h>
#include <stdlib.h>
#include <wiringPi.h>

static void sterflampje();
static void interruptHandler(const int);

static void sterflampje()
{
    digitalWrite(7, LOW);
}
static void interruptHandler(const int signal)
{
  sterflampje();
  exit(0);
}
static void knipperLampje()
{
    digitalWrite(7. HIGH);
    delay(300);
    digitalWrite(7, LOW);
    delay(300);
    digitalWrite(7, HIGH);
    delay(300);
    digitalWrite(7, LOW);
}
main(void)
{
  signal(SIGINT, interruptHandler);
  if (-1 == wiringPiSetup())
  {
    printf('Setup ging stuk\n");
    return 1;
   }
pinMode(7, OUTPUT);

sterflampje();

while(1)
{
   knipperLampje();
   return 0;
}
}
