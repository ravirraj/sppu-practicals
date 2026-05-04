package bankexamp;

import javax.ejb.Stateful;

@Stateful
public class BankTransact implements BankTransactLocal {

    // Initializing the default account balance to 10,000
    private int balance = 10000;

    @Override
    public int deposit(int amount) {
        balance += amount;
        return balance;
    }

    @Override
    public int withdraw(int amount) {
        // Prevent withdrawing more money than is available
        if (amount <= balance) {
            balance -= amount;
        }
        return balance;
    }
}