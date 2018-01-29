int number=0;

void setup(){
  Serial.begin(9600);
  delay(50);

  Serial.println("\n Enter number.");
}

void loop()
{;
  number =0;

  while(Serial.available() > 0){ //Serial flush() for receive buffer
  Serial.read(); delay(100);
  }
  while(Serial.available() ==0){}
  
  while(Serial.available() > 0)
  {
    byte incoming = Serial.read();
    if(incoming >='0' && incoming <='9'){
        number = (number *10) +(incoming - '0');
    
    delay(5);}
    else{
      Serial.println("Invalid Entry. Try again");
    }
    

    Serial.print("number =");
    Serial.println(number);
    Serial.println(number, BIN);
    }
}

