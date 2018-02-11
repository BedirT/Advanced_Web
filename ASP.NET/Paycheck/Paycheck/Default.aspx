<%@ Page Language="C#" Inherits="Paycheck.Default" %>
<!DOCTYPE html>
<html>
<head runat="server">
	<title>Default</title>
</head>
<body>
	<form id="form1" runat="server">
        <p>How many hours did you work? <asp:TextBox id="hours_worked" runat="server" /></p>
        <p>How much was your hourly wage? <asp:TextBox id="hourly_wage" runat="server" /> </p>    
		<asp:Button id="button1" runat="server" Text="Calculate" OnClick="done_clicked" /> 
        <asp:Label id="label_2" runat="server" />
	</form>
</body>
</html>
