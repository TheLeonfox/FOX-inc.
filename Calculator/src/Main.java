import java.util.Scanner;

public class Main {
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int result;
		String doing;
		int FirstNumber;
		int SecondNumber;
		
		
		String a = "+";
		String b = "-";
		String c = "*";
		String d = ":";
		Scanner scn = new Scanner(System.in);
		System.out.println("������� ������ �����");
		FirstNumber = scn.nextInt();
		System.out.println("������� ������ �����");
		SecondNumber = scn.nextInt();
		System.out.println("������� ��������");
		doing = scn.next();
		if (doing.equals(a)){
			result = FirstNumber + SecondNumber;
			System.out.println(result);
		}
		if (doing.equals(b)){
			result = FirstNumber - SecondNumber;
			System.out.println(result);
		}
		if (doing.equals(c)){
			result = FirstNumber * SecondNumber;
			System.out.println(result);
		}
		if (doing.equals(d)){
			result = FirstNumber / SecondNumber;
			System.out.println(result);
		}
		
		
	}

}
