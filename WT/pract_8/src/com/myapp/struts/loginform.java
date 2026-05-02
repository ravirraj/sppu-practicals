package com.myapp.struts;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.struts.action.Action;
import org.apache.struts.action.ActionForm;
import org.apache.struts.action.ActionForward;
import org.apache.struts.action.ActionMapping;

public class loginform extends Action {
    
    @Override
    public ActionForward execute(ActionMapping mapping, ActionForm form,
                                 HttpServletRequest request, HttpServletResponse response) throws Exception {
        
        loginbean lb = (loginbean) form;
        
        String username = lb.getUname();
        String password = lb.getUpass();

        // Business logic: Check valid credentials
        if ("abc".equals(username) && "123".equals(password)) {
            return mapping.findForward("success");
        } else {
            return mapping.findForward("failure");
        }
    }
}
