
#include <Arduino.h>

const int IN1 =7;		int F =3;
const int IN2 = 6;	int R =2;
const int IN3 = 5;	int START =1;
const int IN4 = 4;	int STOP =0;
int buttonf = 0; int buttonr = 0;

void setup() {
  pinMode(IN1, OUTPUT);			pinMode(F, INPUT);
  pinMode(IN2, OUTPUT);			pinMode(R, INPUT);
  pinMode(IN3, OUTPUT);			pinMode(START, INPUT);
  pinMode(IN4, OUTPUT);			pinMode(STOP, INPUT);

}

void loop() {
	buttonf = digitalRead(F);
	buttonr = digitalRead(R);
	
	if ( buttonf == LOW)
	{
		digitalWrite(IN1, LOW); digitalWrite(IN2, LOW);
		digitalWrite(IN3, LOW); digitalWrite(IN4, LOW);
	}
	
	
else if(buttonf == HIGH) {
		
	 digitalWrite(IN1, HIGH); digitalWrite(IN2, LOW); 
	 digitalWrite(IN3, HIGH); digitalWrite(IN4, LOW);
}

else if  (buttonr == LOW)
{
	digitalWrite(IN1, LOW);
	digitalWrite(IN2, LOW);
	digitalWrite(IN3, LOW);
	digitalWrite(IN4, LOW);
}
 	
 else if (buttonr == HIGH) {
				digitalWrite(IN2, HIGH); digitalWrite(IN4, HIGH);
		digitalWrite(IN1, HIGH); digitalWrite(IN2, LOW);	}

	
}
