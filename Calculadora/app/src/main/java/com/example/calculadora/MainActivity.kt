package com.example.calculadora

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.TextView

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
    }

    fun presionarDigito(view: View){
        val tv_num2: TextView = findViewById(R.id.tv_num2)
        var num2: String = tv_num2.text.toString()
        when(view.id){
            R.id.btn0 ->tv_num2.setText(num2 + "0")
            R.id.btn1 ->tv_num2.setText(num2 + "1")
            R.id.btn2 ->tv_num2.setText(num2 + "2")
            R.id.btn3 ->tv_num2.setText(num2 + "3")
            R.id.btn4 ->tv_num2.setText(num2 + "4")
            R.id.btn5 ->tv_num2.setText(num2 + "5")
            R.id.btn6 ->tv_num2.setText(num2 + "6")
            R.id.btn7 ->tv_num2.setText(num2 + "7")
            R.id.btn8 ->tv_num2.setText(num2 + "8")
            R.id.btn9 ->tv_num2.setText(num2 + "9")
            R.id.btnPunto ->tv_num2.setText(num2 + ".")



        }

    }
}