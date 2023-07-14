package com.example.btl.service;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.example.btl.service.MainActivity;
import com.example.btl.R;

import com.example.btl.data.MyDatabaseHelper;
public class ForgetPass extends AppCompatActivity{
    private EditText txtUserName, txtPassWord, txtPassWord2;
    private Button btnConFirm, btnRegister;
    private MyDatabaseHelper db;
    //anh xa den file XML
    public void init() {
        txtUserName = findViewById(R.id.edUsername);
        txtPassWord = findViewById(R.id.edPassword);
        txtPassWord2 = findViewById(R.id.edPassword2);
        btnConFirm = findViewById(R.id.btnConfirm);
        db = new MyDatabaseHelper(this);
    }
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_forgetpasswork);
        init();
        btnConFirm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String usename,password, password2;
                usename = txtUserName.getText().toString();
                password = txtPassWord.getText().toString();
                password2 = txtPassWord2.getText().toString();
                if (usename.equals("") || password.equals("") || password2.equals("")){
                    Toast.makeText(ForgetPass.this,"Vui long dien day du thong tin.", Toast.LENGTH_SHORT).show();
                }
                else {
                    if (password.equals(password2)){
                        boolean check = db.checkUsername(usename);
                        if(check){
                            Toast.makeText(ForgetPass.this,"Tai khoan khong ton tai", Toast.LENGTH_SHORT).show();
                        }
                        else{
                            db.QueryData("UPDATE User SET password = '"+password+"' WHERE username = '" + usename + "'");
                            Toast.makeText(ForgetPass.this,"Update thanh cong", Toast.LENGTH_SHORT).show();
                            startActivity(new Intent(ForgetPass.this, LoginActivity.class));
                        }
                    }
                    else{
                        Toast.makeText(ForgetPass.this,"Mat Khau khong khop", Toast.LENGTH_SHORT).show();

                    }
                }
            }

        });
    }
}
