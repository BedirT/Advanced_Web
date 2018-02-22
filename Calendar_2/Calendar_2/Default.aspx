<%@ Page Language="C#" Inherits="Calendar_2.Default" %>
<!DOCTYPE html>
<html>
<head runat="server">
	<title>Default</title>
</head>
<body>
	<form id="form1" runat="server">
		<asp:TextBox id="date" runat="server"></asp:TextBox>
        <asp:Calendar id="dateCalendar" runat="server" Width="120px" Height="180px" 
            OnSelectionChanged="dateSelected"></asp:Calendar>  
	</form>
 
</body>
</html>
