import javax.ejb.Stateful;

@Stateful
public class BankTransact implements BankTransactLocal {

    private int balance = 10000;

    @Override
    public int deposit(int amount) {
        if (amount > 0) {
            balance += amount;
        }
        return balance;
    }

    @Override
    public int withdraw(int amount) {
        if (amount > 0 && balance >= amount) {
            balance -= amount;
        }
        return balance;
    }
}
