<%@ Page Language="C#" AutoEventWireup="true" CodeFile="groups.aspx.cs" Inherits="groups" %>
<%@ Register TagPrefix="uc" TagName="StudentInfo" Src="~/StudentInfo.ascx" %> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Big River Kayaking</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body class="c4">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="c2">
        <tr>
            <td valign="top" class="cellbackmenu">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="menu">
                    <colgroup>
                        <col span="9" width="1%" />
                        <col span="1" width="88%" />
                    </colgroup>
                    <tr>
                        <td>
                            <img src="images/spacer.gif" width="200" height="8" alt="Visual formatting image" />
                        </td>
                        <td>
                            <div class="c1">
                                <img src="images/spacer.gif" width="86" height="1" alt="Visual formatting image" /></div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <img src="images/spacer.gif" width="86" height="8" alt="Visual formatting image" />
                        </td>
                        <td>
                        </td>
                        <td>
                            <img src="images/spacer.gif" width="86" height="8" alt="Visual formatting image" />
                        </td>
                        <td>
                        </td>
                        <td>
                            <img src="images/spacer.gif" width="86" height="8" alt="Visual formatting image" />
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <div class="txtmenu c1">
                                <a href="default.aspx">Home</a></div>
                        </td>
                        <td>
                            <img src="images/menuspacer.gif" width="1" height="50" alt="Visual formatting image" />
                        </td>
                        <td>
                            <div class="txtmenu c1">
                                <a href="single.aspx">Individual Reservations</a></div>
                        </td>
                        <td>
                            <img src="images/menuspacer.gif" width="1" height="50" alt="Visual formatting image" />
                        </td>
                        <td>
                            <div class="txtmenu c1">
                                <a href="groups.aspx">Group Reservations</a></div>
                        </td>
                        <td>
                            <img src="images/menuspacer.gif" width="1" height="50" alt="Visual formatting image" />
                        </td>
                        <td>
                            <div class="txtmenu c1">
                                <a href="instructors.aspx">Instructors</a></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr valign="top">
            <td width="1%" class="cellbackbannerbody">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <img src="images/spacer.gif" width="516" height="2" alt="Visual formatting image" />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <colgroup>
                                    <col span="1" width="10%" />
                                    <col span="1" width="90%" />
                                </colgroup>
                                <tr>
                                    <td height="50">
                                    </td>
                                    <td>
                                        <h1>
                                            Big River Kayaking</h1>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="99%" class="c3">
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr valign="top">
            <td width="350">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td height="25">
                        </td>
                        <td width="90%">
                        </td>
                    </tr>
                    <tr>
                        <td width="18%">
                        </td>
                        <td valign="top">
                            <h2>
                                Group Reservations</h2>
                                <form id="resForm" runat="server">
                                    <h3>Group Leader</h3>
                                    <p>

                                        Last name&nbsp;<br />
                                        <asp:TextBox ID="memberLastName" runat="server" Width="185px" /><br />
                                        <asp:TextBox ID="memberFirstName" runat="server" Width="185px" /><br />
                                        <asp:Button ID="add" runat="server" Text="Add" OnClick="add_Click" CausesValidation="false" UseSubmitBehavior="false" />
                                        <asp:Button ID="remove" runat="server" Text="Remove" OnClick="remove_Click" CausesValidation="false" UseSubmitBehavior="false" />
                                        <asp:ListBox ID="groupMembers" runat="server" Height="120px" Width="190px"></asp:ListBox>

                                    </p>
                            <p>
                                <asp:Label ID="message" runat="server" Visible="false"></asp:Label></p>
                            <p>
                            <uc:StudentInfo id="StudentInfo" runat="server" />
                            
                                Preferred date&nbsp;<asp:CompareValidator ID="compareDate" runat="server" ControlToValidate="date"
                                    Operator="DataTypeCheck" Display="Dynamic" Type="Date">**You did not enter a valid date **</asp:CompareValidator>
                                <br />
                                <asp:TextBox ID="date" runat="server" Width="265" />
                                <asp:Calendar ID="dateCalendar" runat="server" OnSelectionChanged="dateSelected"
                                    EnableViewState="False" BackColor="White" BorderColor="#3366CC" BorderWidth="1px"
                                    CellPadding="1" DayNameFormat="Shortest" Font-Names="Verdana" Font-Size="8pt"
                                    ForeColor="#003399" Height="120px" Width="185px">
                                    <SelectedDayStyle BackColor="#009999" Font-Bold="True" ForeColor="#CCFF99" />
                                    <SelectorStyle BackColor="#99CCCC" ForeColor="#336666" />
                                    <WeekendDayStyle BackColor="#CCCCFF" />
                                    <TodayDayStyle BackColor="#99CCCC" ForeColor="White" />
                                    <OtherMonthDayStyle ForeColor="#999999" />
                                    <NextPrevStyle Font-Size="8pt" ForeColor="#CCCCFF" />
                                    <DayHeaderStyle BackColor="#99CCCC" ForeColor="#336666" Height="1px" />
                                    <TitleStyle BackColor="#003399" BorderColor="#3366CC" BorderWidth="1px" Font-Bold="True"
                                        Font-Size="10pt" ForeColor="#CCCCFF" Height="25px" />
                                </asp:Calendar>
                            </p>
                            <p>
                                Age (18 or older)
                                <asp:TextBox ID="age" runat="server" Width="40" />&nbsp;
                                <asp:Button ID="makeReservation" runat="server" Text="Submit" />
                            <p>
                                <asp:CompareValidator ID="ageCompare" runat="server" ControlToValidate="age" Operator="GreaterThanEqual"
                                    Display="Dynamic" ValueToCompare="18">**You must be 18 or older**
                                </asp:CompareValidator><br />
                            </p>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <img src="images/groups.jpg" width="233" height="350" align="top" hspace="10" alt="Image of group of kayakers on a river" />
            </td>
        </tr>
        <tr valign="top">
            <td align="center" valign="top">
                <span class="btmmenu"><a href="default.aspx">Home</a> | <a href="single.aspx">Individual
                    Reservations</a> | <a href="instructors.aspx">Instructors</a><br />
                    &#169; 2009 Big River Kayaking</span>
            </td>
            <td>
            </td>
        </tr>
    </table>
</body>
</html>
