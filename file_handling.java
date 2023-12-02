import java.io.FileReader;
import java.io.FileInputStream;
import java.util.Scanner;
public class file_handling{
      public static void main(String[] args) throws Exception {
        FileReader fr=new FileReader("text1.txt");
        FileWriter fw=new FileWriter("text1.txt");
        FileInputStream fin=new FileInputStream("text1.txt");
        int i;
        Scanner sc=new Scanner(System.in);
        System.out.println("Enter some text");
        String x=sc.nextLine();

        fin.write("Hello there my love");
        while((i=fr.read())!=-1){
            System.out.print((char)i);
        }
        sc.close();
      }  
}