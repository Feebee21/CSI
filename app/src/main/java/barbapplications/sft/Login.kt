package barbapplications.sft

import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import android.content.Intent
import kotlinx.android.synthetic.main.activity_login.*

class Login : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)
        var status1=  "Logged In"
        var status2= "Invalid Username or Password"
        btnLogin.setOnClickListener{
            if( etuserName.text.toString().equals("Agent00") && etpassWord.text.toString().equals("password")){
                Toast.makeText( this, status1, Toast.LENGTH_SHORT).show()
                var intent= Intent(this, HomeScreenActivity :: class.java)
                startActivity(intent)
            }
        else Toast.makeText( this, status2, Toast.LENGTH_SHORT).show() }
        btnRegisterHere.setOnClickListener{
            var intent= Intent(this, RegistrationActivity :: class.java)
            startActivity(intent)
        }

    } }

