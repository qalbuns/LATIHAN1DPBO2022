class HelloWorld {
    public static void main(String[] args) {
    String nama_tim = "Biru";
    System.out.println("Nama Tim : " + nama_tim);
    
    String asal = "Negara B";
    System.out.println("Asal Negara : " + asal);
    
    String tahun = "2019";
    System.out.println("Tahun Berdiri : " + tahun);
    
    System.out.println("Pemain : "); 
    String[] pemain = {"Sadam", "Yudi", "Ade", "Ahmad"};
    for (String i : pemain){
      System.out.println(i);
    }
    }    
}