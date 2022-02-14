import java.util.*;

public class Main {
  public static void main(String[] args){
    String nama_tim;
    String asal;
    String tahun;
    String[] pemain = {"Sadam", "Yudi", "Ade", "Ahmad"};
    
    nama_tim = "Biru";
    asal = "Negara A";
    tahun = "2019";
   
    System.out.println("Asal Negara : " + nama_tim);   
    System.out.println("Asal Negara : " + asal);   
    System.out.println("Tahun Berdiri : " + tahun);
    System.out.println("Pemain : ");  
    for (String i : pemain){
        System.out.println(i);
    }
    } 
}
