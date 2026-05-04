package bankexamp;

import java.io.IOException;
import java.io.PrintWriter;
import javax.ejb.EJB;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

// Maps this servlet to the "/transact" URL
@WebServlet(name = "TransactServlet", urlPatterns = { "/transact" })
public class TransactServlet extends HttpServlet {

    // Dependency Injection: Tells the server to link the EJB Bean here
    @EJB
    private BankTransactLocal bankTransact;

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();

        // Capture data from the HTML form
        int amount = Integer.parseInt(request.getParameter("amount"));
        String action = request.getParameter("action");

        int newBalance = 0;
        String message = "";

        // Determine if we are depositing or withdrawing
        if ("deposit".equals(action)) {
            newBalance = bankTransact.deposit(amount);
            message = "Successfully deposited Rs. " + amount;
        } else if ("withdraw".equals(action)) {
            newBalance = bankTransact.withdraw(amount);
            message = "Successfully withdrew Rs. " + amount;
        }

        // Generate the Tailwind CSS response page
        out.println("<!DOCTYPE html>");
        out.println("<html lang=\"en\">");
        out.println(
                "<head><title>Transaction Result</title><script src=\"https://cdn.tailwindcss.com\"></script></head>");
        out.println(
                "<body class=\"bg-slate-950 text-slate-300 font-sans min-h-screen flex items-center justify-center p-4\">");
        out.println("<div class=\"bg-slate-900 border border-slate-800 p-8 shadow-2xl max-w-md w-full\">");
        out.println("<div class=\"mb-6 border-l-4 border-teal-400 pl-4\">");
        out.println("<h2 class=\"text-2xl font-bold text-white tracking-tight\">Transaction Complete</h2>");
        out.println("</div>");
        out.println("<p class=\"text-lg mb-2 text-slate-400\">" + message + "</p>");
        out.println("<p class=\"text-3xl font-mono text-teal-400 font-bold mb-8\">Balance: Rs. " + newBalance + "</p>");
        out.println(
                "<a href=\"index.html\" class=\"block text-center w-full bg-slate-800 hover:bg-slate-700 text-slate-300 font-mono py-3 font-bold tracking-widest uppercase transition-colors border border-slate-700 hover:border-slate-500\">Return to Dashboard</a>");
        out.println("</div></body></html>");
    }
}