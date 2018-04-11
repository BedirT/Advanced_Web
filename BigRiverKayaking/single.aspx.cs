using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class single : System.Web.UI.Page
{
    protected void Page_LoadComplete(object sender, EventArgs e)
    {
        if (Page.IsPostBack && Page.Request.Params.Get("__EVENTTARGET") != "dateCalendar")
        {
            Page.Validate();
            if (Page.IsValid)
            {
                resForm.Visible = false;
                message.Visible = true;
                message.Text = "<p><strong>Your reservation has been submitted. A confirmation message has been sent to your e-mail address.</strong></p>";
            }
        }
    }
    protected void dateSelected(Object Source, EventArgs E)
    {
        date.Text = dateCalendar.SelectedDate.ToString("d");
    }
}
