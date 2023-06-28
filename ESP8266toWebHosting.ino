#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid     = "";
const char* password = "";

const char* host = ".000webhostapp.com";

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(D1, INPUT);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  // Print local IP address and start web server
  Serial.println("");
  Serial.println("WiFi connected.");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  // put your main code here, to run repeatedly:

  int pir = digitalRead(D1);

  WiFiClient client;
  const int httpPort = 80;
  if ( !client.connect(host, httpPort) ) {
    Serial.println("Connection Failed");
    return;
  }

  String link;
  HTTPClient http;
  link = "http://" + String(host) + "/kirimdata.php?pir=" + String(pir);
  http.begin(client, link);
  http.GET();

  String respon = http.getString();
  Serial.println(respon);
  http.end();
  delay(1000);
}
