package com.example.login;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {

  @Override
  protected void onCreate(Bundle savedInstanceState) {


    TextView Bienvenido = (TextView) findViewById(R.id.textView);
    Button Volver = (Button) findViewById(R.id.button2);


    super.onCreate(savedInstanceState);
    setContentView(R.layout.activity_main);
  }

  public void Hola(View v) {
    Intent atras = new Intent(this, MainActivity2.class);
    startActivity(atras);
  }
}