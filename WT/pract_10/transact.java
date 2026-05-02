import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class transact extends HttpServlet {
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try {
            PrintWriter out = response.getWriter();
            String selectdType = request.getParameter("transaction"); // [cite: 761]
            int amount = Integer.parseInt(request.getParameter("t1")); // [cite: 762]

            if (selectdType.equals("deposite")) {
                bankTransact.deposit(amount); // [cite: 764]
            }
            if (selectdType.equals("withdraw")) {
                int amt = bankTransact.withdraw(amount); // [cite: 767]
                out.println(amount + " successfully withdrawn. Your Balance is: Rs " + amt); // [cite: 768]
            }
        } catch (Exception e) {
            // Error handling logic
        }
    }

    // Lookup method to find the EJB in the container [cite: 772]
    private BankTransactLocal lookupBankTransactLocal() {
        try {
            Context c = new InitialContext();
            return (BankTransactLocal) c.lookup("java.global/Bank/Bank-ejb/BankTransact!bankexamp.BankTransactLocal");
        } catch (NamingException ne) {
            throw new RuntimeException(ne);
        }
    }
}