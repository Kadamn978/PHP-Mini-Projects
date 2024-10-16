
class Zoho{
    public static void main(String[] args){
        for(int i= 1 ;i<=6;i++){
                int k=i;
                int l=6;
            for(int j=7-i ;j>0;j--){
                System.out.print(k+" ");
                 k=k+l;
                 l--;

            }
            System.out.println();
        }
    }
}