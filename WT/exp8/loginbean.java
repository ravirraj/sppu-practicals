packagecom.myapp.struts; 
importjavax.servlet.http.HttpServletRequest; 
importorg.apache.struts.action.ActionErrors; import org.apache.struts.action.ActionMapping; 
import org.apache.struts.action.ActionMessage; 
/** 
* 
* @author hp 
*/ 
 
public class loginbean extends 
org.apache.struts.action.ActionForm { private String uname; 
private String upass; 
public String getUname() { return uname; 
} 
public void setUname(String uname) { this.uname = uname; 
} 
public String getUpass() { return upass; 
} 
public void setUpass(String upass) { this.upass = upass; 
} 
publicloginbean() { super(); 
// TODO Auto-generated constructor stub 
 
} 
publicActionErrors validate(ActionMapping mapping, HttpServletRequest request) 
{ ActionErrors errors = new 
ActionErrors(); return errors; 
} 
} 
