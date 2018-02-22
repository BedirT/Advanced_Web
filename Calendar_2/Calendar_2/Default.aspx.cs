using System;
using System.Web;
using System.Web.UI;

namespace Calendar_2
{

    public partial class Default : System.Web.UI.Page
    {
        public void CalendarSelectionChanged(object sender, EventArgs args)
        {
            //OnSelectionDate = "dateSelected";
            //EnableViewState = "False";
            if (Page.IsPostBack && Page.Request.Params.Get(
                "_EVENTTARGET") != "dateCalendar"){

            }
        }
        protected void dateSelected(object Source, EventArgs E){
            date.Text = dateCalendar.SelectedDate.ToString("d");
        }
    }
}
