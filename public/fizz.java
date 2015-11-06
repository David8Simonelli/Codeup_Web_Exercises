public class fizz {
	
	public static void main(String[] args)
	{		
		for(int i = 0; i < 100; i++, System.out.println(i % 3 == 0 || i % 5 == 0 ? ((i % 3) == 0 ? "fizz" : "") + ((i % 5) == 0 ? "buzz" : "")  : i));
	}
}
