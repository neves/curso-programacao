public class Fatorial
{
  public static void main(String args[])
  {
    int numero = Integer.parseInt(args[0]);
    numero = fatorial(numero);
    System.out.println(numero);
  }
  
  private static int fatorial(int n)
  {
      if (n > 1)
        return n * fatorial(n - 1);
      else
        return n;
  }
}