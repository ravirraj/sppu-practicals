package bankexamp; import 
javax.ejb.Local;
 
/** 
* 
* @author Admin 
*/ @Local 
public interface BankTransactLocal { void 
deposit(int amount); 
int withdraw(int amount); 
 
} 
