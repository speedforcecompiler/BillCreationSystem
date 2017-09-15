import java.util.*;
import java.io.*;

class MainFrame{
	private String username = "";
	private String password = "";

	String getUser(){
		return this.username;
	}
	void setUser(String user){
		this.username = user;
	}
	String getPassword(){
		return this.password;
	}
	void setPassword(String pass){
		this.password = pass;
	}

	public static void main(String[] args) throws IOException{

		InputStreamReader isr = new InputStreamReader(System.in);
		BufferedReader br = new BufferedReader(isr);

		String user = "";
		String pass = "";

		System.out.println("Enter Username ");
		user = br.readLine();
		System.out.println("Enter password ");
		pass = br.readLine();

		MainFrame mf = new MainFrame();
		mf.setUser(user);
		mf.setPassword(pass);

		// testing inputs
		// System.out.println("The username is "+mf.getUser()+" and the password is "+mf.getPassword());
	}
}