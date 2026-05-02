packagecom.myapp.struts; 
importjavax.servlet.http.HttpServletRequest; 
import javax.servlet.http.HttpServletResponse; 
import org.apache.struts.action.ActionForm; import 
org.apache.struts.action.ActionForward; import org.apache.struts.action.ActionMapping; 
public class loginform extends org.apache.struts.action.Action { 
/* forward name="success" path="" */ 
private static final String SUCCESS = "success"; 
private static final String FAILURE ="failure"; 
@Override 
publicActionForward execute(ActionMapping mapping, ActionForm form, HttpServl etRequest 
request, HttpServletResponse response) throws Exception { 
loginbeanlb = (loginbean)form; 
if(lb.getUname().equals("abc") &&lb.getUpass().equals("123")) return 
mapping.findForward(SUCCESS); 
else 
returnmapping.findForward(FAILURE); 
} 
} 
