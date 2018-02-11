using System;
using System.Web;
using System.Web.UI;

namespace Paycheck
{

    public partial class Default : System.Web.UI.Page
    {
        public void done_clicked(object sender, EventArgs args)
        {
            int res_wage, res_work, res;

            if (int.TryParse(hourly_wage.Text, out res_wage)){
                if(int.TryParse(hours_worked.Text, out res_work)){
                    if(res_work > 40){
                        res_work += ((res_work - 40) / 2);
                    }
                    res = res_wage * res_work;    
                    label_2.Text = "Total: " + res;
                }else{
                    hours_worked.Text = "Please insert correct value for weight.";
                }
            } else{
                hourly_wage.Text = "Please insert correct value for weight.";
            }
        }
    }
}
